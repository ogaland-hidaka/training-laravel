<?php

namespace App\Repositories;

use App\Interfaces\TRentalRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TRental;

/**
 * 【レンタル情報管理】リポジトリクラス
 */
class TRentalRepository implements TRentalRepositoryInterface
{
    /** level04 Step01 START */

    /**
     * １冊の本のレンタル情報を登録
     *
     * @param [int] $bookId 本ID
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create($bookId, Request $param): void
    {
        try {
            $t_rental = new TRental();
            $t_rental->fill($param->toArray());
            $t_rental->book_id = $bookId;
            $t_rental->created_at = now();
            $t_rental->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }

    /**
     * １冊のレンタル情報を取得
     *
     * @param [int] $bookId 本ID
     * @param [int] $rentalId レンタルID
     * @return [array] $result １冊のレンタル情報
     */
    public function show($bookId, $rentalId)
    {
        return TRental::find(intval($rentalId));
    }

    /** level04 Step01 END */
}
