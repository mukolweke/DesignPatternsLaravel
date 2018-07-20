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
use App\classes\PayWithCytonnAcccount;
use App\classes\PayWithCytonnAcccountAdapter;

class PayFactory
{

    public static function build($amount)
    {
        switch ($amount) {

            case ($amount <= 300):

                if (date("h") < 12)
                {
                    $cash = new PayCash();
                    return new PayMorning($cash);
                } elseif (date("h") > 12 && date("h") < 18)
                {
                    $cash = new PayCash();
                    return new PayAfterNoon($cash);
                } elseif (date("h") > 18)
                {
                    $cash = new PayCash();
                    return new PayEvening($cash);
                }

                break;

            case ($amount > 300 && $amount < 1000):

                return new PayCreditAdapter(new PayCreditCard());
                break;

            case ($amount > 1000):

                return new PayWithCytonnAcccountAdapter(new PayWithCytonnAcccount());
                break;

            default:

                return "Invalid Method " . $amount;

        }
    }
}