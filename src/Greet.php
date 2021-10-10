<?php

namespace TheUsual\Greet;

class Greet
{

    public static function hello($name = null)
    {
        $time = date("H");

        if ($time < "12") {
            echo "Good morning";
        } else if ($time >= "12" && $time < "17") {
            echo "Good afternoon";
        } else if ($time >= "17" && $time < "19") {
            echo "Good evening";
        } else if ($time >= "19") {
            echo "Good night";
        }

        if ($name != null) {
            echo ", " . $name;
        }
    }
}
