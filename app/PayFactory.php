<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 12:03
 */

namespace App;


use App\classes\PayCash;
use App\classes\PayCreditCard;

class PayFactory
{

    public static function build($amount) {
        switch ($amount){

            case ($amount<=500):

                return new PayCash();
                break;

            case ($amount>500):

                return new PayCreditCard();
                break;

            default:

                return "Invalid Method " . $amount;

        }
    }
}