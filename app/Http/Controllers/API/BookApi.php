<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Book\BookCreateService as CreateService;
use App\Services\Book\BookIndexService as IndexService;
use App\Services\Book\BookShowService as ShowService;

/** level04 Step01 START */
class BookApi extends Controller
{
    /**
     * API-001:購入した本の情報を登録できるAPI
     *
     * @param [CreateService] $service createサービスクラス
     * @param [int] $postId 記事ID
     * @param [Request] $request リクエスト
     * @return void
     */
    public function create(CreateService $service, Request $request)
    {
        return $service->execCreate($request);
    }

    /**
     * API-002:購入した全ての本の情報を参照できるAPI
     *
     * @param [IndexService] $service indexサービスクラス
     * @return [array] 購入した全ての本の情報
     */
    public function index(IndexService $service)
    {
        return $service->execIndex();
    }

    /**
     * API-003:１冊の本の情報参照できるAPI
     *
     * @param [ShowService] $service showサービスクラス
     * @param [int] $bookId 本ID
     * @return [array] １冊の本情報
     */
    public function show(ShowService $service, int $bookId) {
        print_r("book_show");
        return $service->execShow($bookId);
    }

}
/** level04 Step01 END */
