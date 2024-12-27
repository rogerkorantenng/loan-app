<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('payment_gateways')->insert([
            [
                'name' => 'PayPal',
                'slug' => 'PayPal',
                'image' => 'paypal.png',
                'status' => 0,
                'is_crypto' => 0,
                'parameters' => '{"client_id":"","client_secret":"","environment":"sandbox"}',
                'currency' => null,
                'supported_currencies' => '{"AUD":"AUD","BRL":"BRL","CAD":"CAD","CZK":"CZK","DKK":"DKK","EUR":"EUR","HKD":"HKD","HUF":"HUF","INR":"INR","ILS":"ILS","JPY":"JPY","MYR":"MYR","MXN":"MXN","TWD":"TWD","NZD":"NZD","NOK":"NOK","PHP":"PHP","PLN":"PLN","GBP":"GBP","RUB":"RUB","SGD":"SGD","SEK":"SEK","CHF":"CHF","THB":"THB","USD":"USD"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'Stripe',
                'slug' => 'Stripe',
                'image' => 'stripe.png',
                'status' => 0,
                'is_crypto' => 0,
                'parameters' => '{"secret_key":"","publishable_key":""}',
                'currency' => null,
                'supported_currencies' => '{"USD":"USD","AUD":"AUD","BRL":"BRL","CAD":"CAD","CHF":"CHF","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","INR":"INR","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PLN":"PLN","SEK":"SEK","SGD":"SGD"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'Razorpay',
                'slug' => 'Razorpay',
                'image' => 'razorpay.png',
                'status' => 0,
                'is_crypto' => 0,
                'parameters' => '{"razorpay_key_id":"","razorpay_key_secret":""}',
                'currency' => null,
                'supported_currencies' => '{"INR":"INR"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'Paystack',
                'slug' => 'Paystack',
                'image' => 'paystack.png',
                'status' => 0,
                'is_crypto' => 0,
                'parameters' => '{"paystack_public_key":"","paystack_secret_key":""}',
                'currency' => null,
                'supported_currencies' => '{"GHS":"GHS","NGN":"NGN","ZAR":"ZAR"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'BlockChain',
                'slug' => 'BlockChain',
                'image' => 'blockchain.png',
                'status' => 0,
                'is_crypto' => 1,
                'parameters' => '{"blockchain_api_key":"","blockchain_xpub":""}',
                'currency' => null,
                'supported_currencies' => '{"BTC":"BTC"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'Flutterwave',
                'slug' => 'Flutterwave',
                'image' => 'flutterwave.png',
                'status' => 0,
                'is_crypto' => 0,
                'parameters' => '{"public_key":"","secret_key":"","encryption_key":"","environment":"sandbox"}',
                'currency' => null,
                'supported_currencies' => '{"BIF":"BIF","CAD":"CAD","CDF":"CDF","CVE":"CVE","EUR":"EUR","GBP":"GBP","GHS":"GHS","GMD":"GMD","GNF":"GNF","KES":"KES","LRD":"LRD","MWK":"MWK","MZN":"MZN","NGN":"NGN","RWF":"RWF","SLL":"SLL","STD":"STD","TZS":"TZS","UGX":"UGX","USD":"USD","XAF":"XAF","XOF":"XOF","ZMK":"ZMK","ZMW":"ZMW","ZWD":"ZWD"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'VoguePay',
                'slug' => 'VoguePay',
                'image' => 'VoguePay.png',
                'status' => 1,
                'is_crypto' => 0,
                'parameters' => '{"merchant_id":""}',
                'currency' => null,
                'supported_currencies' => '{"USD":"USD","GBP":"GBP","EUR":"EUR","GHS":"GHS","NGN":"NGN","ZAR":"ZAR"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'Mollie',
                'slug' => 'Mollie',
                'image' => 'Mollie.png',
                'status' => 1,
                'is_crypto' => 0,
                'parameters' => '{"api_key":""}',
                'currency' => null,
                'supported_currencies' => '{"AED":"AED","AUD":"AUD","BGN":"BGN","BRL":"BRL","CAD":"CAD","CHF":"CHF","CZK":"CZK","DKK":"DKK","EUR":"EUR","GBP":"GBP","HKD":"HKD","HRK":"HRK","HUF":"HUF","ILS":"ILS","ISK":"ISK","JPY":"JPY","MXN":"MXN","MYR":"MYR","NOK":"NOK","NZD":"NZD","PHP":"PHP","PLN":"PLN","RON":"RON","RUB":"RUB","SEK":"SEK","SGD":"SGD","THB":"THB","TWD":"TWD","USD":"USD","ZAR":"ZAR"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
            [
                'name' => 'CoinPayments',
                'slug' => 'CoinPayments',
                'image' => 'CoinPayments.png',
                'status' => 1,
                'is_crypto' => 1,
                'parameters' => '{"merchant_id":"","ipn_secret":""}',
                'currency' => null,
                'supported_currencies' => '{"BTC":"BTC","LTC":"LTC","ETH":"ETH","XRP":"XRP"}',
                'extra' => null,
                'exchange_rate' => null,
                'fixed_charge' => 0.00,
                'charge_in_percentage' => 0.00,
                'minimum_amount' => 0.00,
                'maximum_amount' => 0.00,

            ],
        ]);
    }
}
