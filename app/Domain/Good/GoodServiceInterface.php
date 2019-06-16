<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 21:15
 */

namespace App\Domain\Good;


interface GoodServiceInterface
{

    public function create($clientId, GoodDto $dto);
}