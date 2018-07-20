<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 20/07/2018
 * Time: 10:46
 */

namespace App\classes;

use App\Interfaces\PayStrategy;

class PayCreditAdapter implements PayStrategy
{
    private $payCredit;

    public function __construct(PayCreditCard $payCreditCard)
    {
        $this->payCredit = $payCreditCard;
    }

    public function pay($amount)
    {
        $this->payCredit->sendPayment($amount);
    }
}