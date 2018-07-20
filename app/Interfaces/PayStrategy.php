<?php
/**
 * Created by PhpStorm.
 * User: molukaka
 * Date: 17/07/2018
 * Time: 11:22
 */

namespace App\Interfaces;


interface PayStrategy
{
    public function pay($amount);
    public function getStrategy();
}