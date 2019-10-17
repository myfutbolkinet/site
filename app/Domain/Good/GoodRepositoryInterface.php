<?php
/**
 * Created by PhpStorm.
 * User: imediasun
 * Date: 15.06.2019
 * Time: 19:25
 */

namespace App\Domain\Good;
use Illuminate\Http\Request;

interface GoodRepositoryInterface
{
    public function create(\App\Good $good);
    public function editAction(Request $request, $userId,\App\Good $good,$goodId);
}