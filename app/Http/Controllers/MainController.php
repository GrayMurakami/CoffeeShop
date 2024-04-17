<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function variety()
    {
        return view('variety');
    }

    public function place()
    {
        return view('place');
    }

    public function review()
    {
        // Проверяем, залогинен ли пользователь
        if (Auth::check()) {
            // Если пользователь залогинен, получаем все отзывы
            $reviewOutput = Contact::all();
        } else {
            // Если пользователь не залогинен, передаем пустой массив
            $reviewOutput = [];
        }

        // Передаем отзывы в представление
        return view('review', ['reviewOutput' => $reviewOutput]);
    }

    # public function review()
    #{
    #   $reviewOutput = new Contact();
    #    return view('review', ['reviewOutput' => $reviewOutput->all()]);
    # }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:50',
            'subject' => 'required|min:4|max:50',
            'message' => 'required|min:15|max:500'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect('review');
    }
}
