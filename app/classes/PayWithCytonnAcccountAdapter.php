<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 20/07/2018
 * Time: 10:46
 */

namespace App\classes;

use App\Interfaces\PayStrategy;

class PayWithCytonnAcccountAdapter implements PayStrategy
{
    private $payWithCytonnAcccount;

    public function __construct(PayWithCytonnAcccount $payWithCytonnAcccount)
    {
        $this->payWithCytonnAcccount = $payWithCytonnAcccount;
    }

    public function pay($amount)
    {
        $this->payWithCytonnAcccount->doPayment($amount);
    }
}