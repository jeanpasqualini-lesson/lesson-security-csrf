<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 09/11/15
 * Time: 17:28
 */

namespace Test;

use ClassExample\ArrayTokenStorage;
use \Interfaces\TestInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManager;

class MainTest implements TestInterface
{
    public function runTest()
    {
        $tokenStorage = new ArrayTokenStorage();

        $crsfTokenManager = new CsrfTokenManager(null, $tokenStorage);

        $token = $crsfTokenManager->getToken("montest");

        if($crsfTokenManager->isTokenValid($token))
        {
            echo "[VALIDATION] OK".PHP_EOL;
        }
        else
        {
            echo "[VALIDATION] KO".PHP_EOL;
        }

        echo "Tokens stockés : ".print_r($tokenStorage->all(), true).PHP_EOL;
    }
}