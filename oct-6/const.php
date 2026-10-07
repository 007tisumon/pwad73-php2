<?php
class Goodbye
{
    const MESSAGE = "Thank you for visiting W3Schools.com!";
    // cosnt MYFUNC = function(){
    //     return new Goodbye(self::MESSAGE);
    // }

    public function bye()
    {
        echo self::MESSAGE; // Access constant
    }
}

$goodbye = new Goodbye();
$goodbye->bye();