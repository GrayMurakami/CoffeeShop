<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
  use Queueable, SerializesModels;

  public $order;
  public $senderEmail;
  public $senderName;

  public function __construct(Order $order, $senderEmail, $senderName)
  {
    $this->order = $order;
    $this->senderEmail = $senderEmail;
    $this->senderName = $senderName;
  }

  public function build()
  {
    return $this->from($this->senderEmail, $this->senderName)
      ->subject('新しい珈琲注文をされました。')
      ->view('emails.order_placed');
  }
}
