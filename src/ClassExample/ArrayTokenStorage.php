<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 10/11/15
 * Time: 16:08
 */

namespace ClassExample;


use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

class ArrayTokenStorage implements TokenStorageInterface
{
    protected $tokens;

    public function getToken($tokenId)
    {
        return $this->tokens[$tokenId];
    }

    public function setToken($tokenId, $token)
    {
        $this->tokens[$tokenId] = $token;

        return $this;
    }

    public function removeToken($tokenId)
    {
        unset($this->tokens[$tokenId]);

        return $this;
    }

    public function hasToken($tokenId)
    {
        return isset($this->tokens[$tokenId]);
    }

    public function all()
    {
        return $this->tokens;
    }
}