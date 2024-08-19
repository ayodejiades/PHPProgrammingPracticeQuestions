<?php
class NameDisplay{
    public static $number;
    public function __construct($number){
        self::$number = $number;
    }

    public static function DisplayName($number){
        if($number % 3 == 0 ){
            return "Your Name";
        }
        return "Backend";
    }
}

echo NameDisplay::DisplayName(67);