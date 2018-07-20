<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 12:03
 */

namespace App;


use App\classes\PayAfterNoon;
use App\classes\PayCash;
use App\classes\PayCreditAdapter;
use App\classes\PayCreditCard;
use App\classes\PayEvening;
use App\classes\PayMorning;

class PayFactory
{

    public static function build($amount)
    {
        switch ($amount) {

            case ($amount <= 500):

                if (date("H") < 12)
                {
                    $cash = new PayCash();
                    return new PayMorning($cash);
                } elseif (date("H") > 11 && date("H") < 18)
                {
                    $cash = new PayCash();
                    return new PayAfterNoon($cash);
                } elseif (date("H") > 17)
                {
                    $cash = new PayCash();
                    return new PayEvening($cash);
                }

                break;

            case ($amount > 500):

                return new PayCreditAdapter(new PayCreditCard());
                break;

            default:

                return "Invalid Method " . $amount;

        }
    }
}