<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Rental\RentalCreateService as CreateService;
use App\Services\Rental\RentalShowService as ShowService;

/** level04 Step01 START */
class RentalApi extends Controller
{
    /**
     * API-004:１冊の本のレンタル情報を登録できるAPI
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
     * API-006:１冊のレンタル情報を参照できるAPI
     *
     * @param [ShowService] $service showサービスクラス
     * @param [int] $rentalId レンタルID
     * @return void
     */
    public function show(ShowService $service, int $bookId, int $rentalId)
    {
        return $service->execShow($bookId, $rentalId);
    }
}
/** level04 Step01 END */
