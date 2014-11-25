<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 19/11/14
 * Time: 17:48
 */

namespace tests\Web1\StringGenerator;
use Web1\StringGenerator\Validedonnee;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGetRandomStringLengthEasy()
    {
        $length = mt_rand(1, 10000);
        $password = Validedonnee::Generator::getRandomString($length);

        $this->assertEquals($length, mb_strlen($password));
    }

    public function testGetRandomStringLengthMedium()
    {
        $length = mt_rand(1, 10000);
        $password = Validedonnee::getRandomString($length);

        $this->assertEquals($length, mb_strlen($password));
    }

    public function testGetRandomStringLengthHard()
    {
        $length = mt_rand(1, 10000);
        $password = Validedonnee::getRandomString($length);

        $this->assertEquals($length, mb_strlen($password));
    }

    public function testGetRandomStringNotEmpty()
    {
        $password = Validedonnee::getRandomString(0);

        $this->assertNotEmpty($password);
    }
}