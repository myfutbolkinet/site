<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 20:49
 */

namespace App\Domain\Good;
use Illuminate\Http\Request;

class GoodService implements GoodServiceInterface
{

    public $userRepository;
    public $goodRepository;

    public function __construct(
        \App\Domain\User\UserRepositoryInterface $userRepository,
        GoodRepositoryInterface $goodRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->goodRepository = $goodRepository;
    }

    public function create($userId, GoodDto $dto)
    {
        $user = $this->userRepository->findById($userId);


        $dto->user=$user;

        $good = new \App\Good([
            $dto
        ]);

        dump('g=>',$good);

        $good_id = $this->goodRepository->create($good);
        return $good_id;
    }
    public function editAction(Request $request, $userId, GoodDto $dto, $goodId)
    {
        $user = $this->userRepository->findById($userId);
        $dto->user=$user;
        $good = new \App\Good([
            $dto
        ]);

        dump('g=>',$good);

        $good_id = $this->goodRepository->editAction($request,$userId,$good,$goodId);
        return $good_id;
    }
}