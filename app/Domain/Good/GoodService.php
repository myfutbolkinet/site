<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 20:49
 */

namespace App\Domain\Good;


class GoodService implements GoodServiceInterface
{

    public $userRepository;
    public $goodRepository;

    public function __construct(
        \App\Domain\User\UserRepositoryInterface $userRepository,
        GoodRepositoryInterface $goodRepository
    )
    {
        $this->userRepository=$userRepository;
        $this->goodRepository=$goodRepository;
    }

    public function create($userId){
        $user=$this->userRepository->findById($userId);
        $good= new \App\Good(['user'=>$user]);
        $this->goodRepository->create($good);
        return $good->getLastId();
    }
}