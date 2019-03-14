<?php
/**
 * Created by PhpStorm.
 * User: phongnh
 * Date: 3/7/19
 * Time: 3:09 PM
 */
namespace App\Support;
class FizzBuzz{


    public function changeMe(){
        return true;
    }

    public function getData(){
        $number = [];

        for ($i = 1; $i <= 100; $i++){
            $number[$i] = $i;
            if ($i % 3 == 0){

                $number[$i] = 'Fizz';
            }
            if ($i % 5 == 0){

                $number[$i] = 'Buzz';
            }
            if ($i % 15 == 0){

                $number[$i] = 'FizzBuzz';
            }

        }

        return $number;
    }

}
