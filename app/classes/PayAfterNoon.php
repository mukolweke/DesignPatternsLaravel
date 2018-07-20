<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 20/07/2018
 * Time: 10:40
 */

namespace App\classes;

class PayAfterNoon extends PayCashDecorator
{

    public function pay($amount)
    {
        echo "Good Afternoon: ";
        $this->PayCash->pay($amount);
    }
}