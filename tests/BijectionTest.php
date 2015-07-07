<?php


class BijectionTest extends PHPUnit_Framework_TestCase
{
    public function testEncode1()
    {
        $bijection = new AlexKR\Biject\Bijection();

        $result = $bijection->encode(7);

        static::assertEquals('h', $result, 'Incorrect encode');
    }

    public function testEncode2()
    {
        $bijection = new AlexKR\Biject\Bijection();

        $result = $bijection->encode(62);

        static::assertEquals('ba', $result, 'Incorrect encode');
    }

    public function testEncode3()
    {
        $bijection = new AlexKR\Biject\Bijection('0123456789');

        $result = $bijection->encode(39);

        static::assertEquals(39, $result, 'Incorrect encode');
    }

    public function testEncode4()
    {
        $bijection = new AlexKR\Biject\Bijection('abcdefghij');

        $result = $bijection->encode(706);

        static::assertEquals('hag', $result, 'Incorrect encode');
    }

    public function testEncode5()
    {
        $bijection = new AlexKR\Biject\Bijection();

        $result = $bijection->encode(438);

        static::assertEquals('he', $result, 'Incorrect encode');
    }

    public function testDecode1()
    {
        $bijection = new AlexKR\Biject\Bijection('abcdefghij');

        $result = $bijection->decode('hag');

        static::assertEquals(706, $result, 'Incorrect decode');
    }

    public function testDecode2()
    {
        $bijection = new AlexKR\Biject\Bijection();

        $result = $bijection->decode('bb');

        static::assertEquals(63, $result, 'Incorrect decode');
    }

    public function testDecode3()
    {
        $bijection = new AlexKR\Biject\Bijection('0123456789');

        $result = $bijection->decode(39);

        static::assertEquals(39, $result, 'Incorrect decode');
    }

    public function testDecode4()
    {
        $bijection = new AlexKR\Biject\Bijection();

        $result = $bijection->decode('he');

        static::assertEquals(438, $result, 'Incorrect decode');
    }
}
