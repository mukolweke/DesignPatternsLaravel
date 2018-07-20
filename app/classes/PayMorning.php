<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 20/07/2018
 * Time: 10:40
 */

namespace App\classes;

class PayMorning extends PayCashDecorator
{
    public function pay($amount)
    {
        echo "Good Morning: ";
        $this->PayCash->pay($amount);
    }
}