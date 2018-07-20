<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 11:07
 */

namespace App;


// used to implemnet strategy pattern
use App\classes\PayCash;
use App\classes\PayCreditCard;

class Mondoride
{

    public $amount = 0;

    public function __construct($amount = 0) {

        $this->amount = $amount;

    }

    public function getAmount() {

        return $this->amount;

    }

    public function setAmount($amount = 0) {

        $this->amount = $amount;

    }

    public function payAmount()
    {

        if ($this->amount >= 500) {

            $payment = PayFactory::build($this->amount);

        } else {

            $payment = PayFactory::build($this->amount);

        }

        $payment->pay($this->amount);

    }


}