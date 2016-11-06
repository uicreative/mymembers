<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \Laravel\Cashier\Http\Controllers\WebhookController as BaseController;
class StripeController extends BaseController
{
    public function handleInvoiceCreated( array $payload )
    {
        $cost_per_minute = 10;  //in cents
        $minutes = 100;         //normally we would pull this dynamically
        $amount = $cost_per_minute * $minutes;
        \Stripe\InvoiceItem::create([
            "customer" => $payload['data']['object']['customer'],
            "invoice" => $payload['data']['object']['id'],
            "amount" => $amount,
            "currency" => "usd",
            "description" => "{$minutes} minute(s) used"
        ]);
        return response('Webhook Handled', 200);
    }
}