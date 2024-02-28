<?php

namespace App\Repositories;

use App\Interfaces\TBookRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TBook;

/**
 * 【本情報管理】リポジトリクラス
 */
class TBookRepository implements TBookRepositoryInterface
{
    /** level04 Step01 START */

    /**
     * 購入した本の情報を登録
     *
     * @param [Request] $param パラメータ
     * @return void
     */
    public function create(Request $param): void
    {
        try {
            $t_book = new TBook();
            $t_book->fill($param->toArray());
            $t_book->created_at = now();
            $t_book->save();
        } catch (\Throwable $ex) {
            DB::rollBack();
            throw $ex;
        }
    }

    /**
     * 購入した全ての本の情報取得
     * 
     * @return [array] 購入した全ての本の情報
     */
    public function index()
    {
        $books = TBook::all()->toArray();
        return $books;
    }

    /**
     * １冊の本の情報を取得
     *
     * @param [int] $bookId 本ID
     * @return [array] １冊の本の情報
     */
    public function show($bookId)
    {
        return TBook::find(intval($bookId))->toArray();
    }

    /** level04 Step01 END */
}
