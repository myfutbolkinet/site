<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 21:15
 */

namespace App\Domain\Good;

use Illuminate\Http\Request;
interface GoodServiceInterface
{

    public function create($clientId, GoodDto $dto);
    public function editAction(Request $request, $userId, GoodDto $dto, $goodId);
}