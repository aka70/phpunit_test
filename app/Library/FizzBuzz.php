<?php

namespace App\Library;

class FizzBuzz
{
    /**
     * 入力値をFizzBuzz文字列化する
     *
     * @param  int    $num
     * @return string FizzBuzz文字列
     *
     * このメソッドは $num が3の倍数なら"Fizz"、5の倍数なら"Buzz"、7の倍数なら"Nass"、
     * これらの数の公倍数ならば、少ない数から該当した順に連結して返す。
     * どの数の倍数でもなければ、 $num を10進数として文字列化した値を返す。
     *
     *     toFizzBuzzNass(1);  // => "1"
     *     toFizzBuzzNass(3);  // => "Fizz"
     *     toFizzBuzzNass(15); // => "FizzBazz"
     *     toFizzBuzzNass(21); // => "FizzNass"
     *     toFizzBuzzNass(35); // => "BazzNass"
     */
    public function toFizzBuzzNass(int $num): string
    {
        static $fizzbuzz_table = [
            'Fizz' => 3,
            'Buzz' => 5,
            'Nass' => 7,
        ];

        $str = '';
        foreach ($fizzbuzz_table as $s => $n) {
            if ($num % $n === 0) {
                $str .= $s;
            }
        }

        return ($str === '') ? "{$num}" : $str;
    }
}
