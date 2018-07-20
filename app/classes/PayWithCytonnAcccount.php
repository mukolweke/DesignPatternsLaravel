<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 11:24
 */

namespace App\classes;

use App\Interfaces\PayStrategy;

class PayWithCytonnAcccount
{
    public function doPayment($amount = 0)
    {
        echo "Paying ". $amount. " using Cytonn Account";
    }
}