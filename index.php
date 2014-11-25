<?php
/**
 * Created by PhpStorm.
 * User: Kyo
 * Date: 18/11/14
 * Time: 09:42
 */

require __DIR__.'/vendor/autoload.php';

$passwordGenerator = new \Web1\StringGenerator\Validedonnee();

echo \Web1\StringGenerator\Validedonnee::getRandomString(50, \Web1\StringGenerator\validedonnee::PASSWORD_HARD);

PDO::FETCH_OBJ;