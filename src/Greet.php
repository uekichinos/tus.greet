<?php

namespace TheUsual\Greet;

class Greet
{
    public static function hello($name = null)
    {
        $time = date('H');

        if ($time < '12') {
            echo 'Good morning';
        } elseif ($time >= '12' && $time < '17') {
            echo 'Good afternoon';
        } elseif ($time >= '17' && $time < '19') {
            echo 'Good evening';
        } elseif ($time >= '19') {
            echo 'Good night';
        }

        if ($name != null) {
            echo ', '.$name;
        }
    }
}
