<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 20/07/2018
 * Time: 10:40
 */

namespace App\classes;

class PayEvening extends PayCashDecorator
{
    public function pay($amount)
    {
        echo "Good Evening: ";
        $this->PayCash->pay($amount);
    }
}