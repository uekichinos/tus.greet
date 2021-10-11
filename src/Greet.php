<?php

namespace TheUsual\Greet;

class Greet
{
    public static function hello($name = null)
    {
        $time = date('H');

        $greets = config('greet.hour');
        if (is_array($greets)) {
            foreach ($greets as $key => $value) {
                if (! isset($value['start'])) {
                    if ($time < $value['end']) {
                        echo $value['text'];
                    }
                } elseif (! isset($value['end'])) {
                    if ($time >= $value['start']) {
                        echo $value['text'];
                    }
                } else {
                    if ($time >= $value['start'] && $time < $value['end']) {
                        echo $value['text'];
                    }
                }
            }
        }

        // if ($time < '12') {
        //     echo 'Good morning';
        // } elseif ($time >= '12' && $time < '17') {
        //     echo 'Good afternoon';
        // } elseif ($time >= '17' && $time < '19') {
        //     echo 'Good evening';
        // } elseif ($time >= '19') {
        //     echo 'Good night';
        // }

        if ($name != null) {
            echo ' '.$name.'.';
        }

        $show = config('greet.show_datetime');
        if ($show === true) {
            $format = config('greet.format_datetime');
            echo ' Today is '.date($format);
        }
    }
}
