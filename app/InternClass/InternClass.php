<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 07:56
 */

namespace App\InternClass;


use App\Unit;

class InternClass
{


    public function fetchTutors(){

        // get data from table
        return Unit::all();

    }

}