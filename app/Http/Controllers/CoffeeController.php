<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Mail\OrderPlaced;

class CoffeeController extends Controller
{
    public function showOrderForm()
    {
        return view('order');
    }

    public function showOrderPlaced(Order $order)
    {
        return view('emails.order_placed', compact('order'));
    }

    public function processOrder(Request $request)
    {
        // Валидация данных из формы
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'coffee_types' => 'required|array',
            'quantity' => 'required|numeric',
            'address' => 'required|string',
            'coffee_price' => 'required|numeric',
        ]);

        // Рассчитываем общую стоимость заказа
        $totalPrice = $validatedData['quantity'] * $validatedData['coffee_price'];

        // Создание заказа в базе данных
        $order = Order::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'coffee_types' => implode(', ', $validatedData['coffee_types']),
            'quantity' => $validatedData['quantity'],
            'address' => $validatedData['address'],
            'total_price' => $totalPrice,
        ]);

        // Определение адреса и имени отправителя на основе данных пользователя
        $senderEmail = $validatedData['email'];
        $senderName = $validatedData['name'];

        // Отправка уведомления на почту
        Mail::to('digrayman8@gmail.com')
            ->send(new OrderPlaced($order, $senderEmail, $senderName));

        // Редирект на страницу order_placed после успешной отправки заказа
        return view('emails.order_placed')->with('order', $order)->with('success', 'Ваш заказ принят!');
        return redirect()->route('order_placed', ['order' => $order]);
    }
}
