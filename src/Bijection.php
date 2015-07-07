<?php


namespace AlexKR\Biject;


class Bijection
{
    protected $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    /**
     * Bijection constructor.
     * @param string $alphabet
     */
    public function __construct($alphabet = null)
    {
        if (!empty($alphabet)) {
            $this->alphabet = $alphabet;
        }

        $this->alphabet = str_split($this->alphabet);
    }

    /**
     * Encode int to string
     *
     * @param int $number
     * @return string
     */
    public function encode($number)
    {
        $result = '';
        $base = count($this->alphabet);
        do {
            $result .= $this->alphabet[($number % $base)];
            $number = floor($number / $base);
        } while ($number > 0);
        return strrev($result);
    }

    /**
     * Decode int to string
     *
     * @param string $code
     * @return int
     */
    public function decode($code)
    {
        $number = 0;
        $base = count($this->alphabet);
        $input = str_split($code);
        foreach ($input as $char) {
            $pos = array_search($char, $this->alphabet, true);
            $number = $number * $base + $pos;
        }
        return $number;
    }
}