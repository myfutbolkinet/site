<?php

namespace App\Domain\User;


use App\Domain\User\UserRepositoryInterface;
class EloquentUserRepository implements UserRepositoryInterface
{

    public $userId;

    public function findById($userId){
    return \App\User::where('id',$userId)->first();
    }




}
