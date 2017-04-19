<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\CursController;
class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * The order instance.
     *
     * @var Order
     */
    protected $order;
    protected $curs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cart)
    {
        //
        $this->order=$cart;
        $this->curs=CursController::index();
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('example@example.com')->view('emails.orders.shipped',['cart_total_price'=>$this->order->totalPrice,'cart'=>$this->order, 'curs'=>$this->curs]);

    }
}
