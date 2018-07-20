<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 07:50
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class InterFacade extends Facade
{

    protected static function getFacadeAccessor() { return 'InternTutor'; }


}