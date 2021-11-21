<?php

namespace App\Console;

class Log {
    static public function info($text){

        $myfile = file_get_contents("cron_log.txt");

        file_put_contents("cron_log.txt", $myfile . date("Y-m-d H:i:s")."\t". $text ."\n");
    }
}
