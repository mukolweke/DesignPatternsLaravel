<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 11:24
 */

namespace App\classes;

use App\Interfaces\PayStrategy;

class PayCash implements PayStrategy
{
    public function pay($amount = 0)
    {
        echo "Paying ". $amount. " using Cash";
    }
}