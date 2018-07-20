<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 20/07/2018
 * Time: 10:37
 */

namespace App\classes;


use App\Interfaces\PayStrategy;

abstract class PayCashDecorator implements PayStrategy
{
    protected $PayCash;

    public function __construct(PayCash $payCash) {
        $this->PayCash = $payCash;
    }

    abstract public function pay($amount);
}
