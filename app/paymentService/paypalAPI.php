<?php

namespace App\paymentService;


class paypalAPI
{

    private $transaction_id;

    public function __construct($transaction_id)
    {
        $this->transaction_id = $transaction_id;
    }

        public function pay() : array
        {
            return [
                'amount' => 123,
                'transaction' => $this->transaction_id
            ];
        }
}