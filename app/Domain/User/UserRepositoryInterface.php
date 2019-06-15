<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 19:25
 */

namespace App\Domain\User;


interface UserRepositoryInterface
{


    public function findById($userId);
}