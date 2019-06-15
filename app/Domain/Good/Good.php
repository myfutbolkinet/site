<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 19:23
 */

namespace App\Domain\Good;


class Good
{

    protected $user;


    public function __construct(\App\User $user)
    {
        $this->user=$user;
    }

    public function getId(){
        return 12;
    }

    public function getUser(){
        return $this->user;
    }



}