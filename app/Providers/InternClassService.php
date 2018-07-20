<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 07:00
 */

namespace App\Providers;


use App\Unit;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class InternClassService extends ServiceProvider
{

    public function register()
    {
        App::bind('InternTutor', function()

        {

            return new \App\InternClass\InternClass;

        });
    }

}