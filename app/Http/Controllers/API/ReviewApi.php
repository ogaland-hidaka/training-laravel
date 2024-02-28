<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Review\ReviewCreateService as CreateService;
use App\Services\Review\ReviewShowService as ShowService;

/** level04 Step01 START */
class ReviewApi extends Controller
{
    /**
     * API-005:１冊のレビュー情報を参照できるAPI
     *
     * @param [CreateService] $service createサービスクラス
     * @param [int] $bookId 本ID
     * @param [Request] $request リクエスト
     * @return void
     */
    public function create(CreateService $service, int $bookId, Request $request)
    {
        return $service->execCreate($bookId, $request);
    }

    /**
     * API-007:１冊のレビュー情報を参照できるAPI
     *
     * @param [ShowService] $service showサービスクラス
     * @param [int] $rentalId レンタルID
     * @return void
     */
    public function show(ShowService $service, int $bookId, int $reviewId)
    {
        return $service->execShow($bookId, $reviewId);
    }
}
/** level04 Step01 END */
