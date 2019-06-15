<?php

namespace App;


use App\Domain\Good\UserRepositoryInterface;
class EloquentUserRepository implements UserRepositoryInterface
{

    public $userId;

    public function findById($userId){
    return \App\User::where('id',$userId)->first();
    }




}
