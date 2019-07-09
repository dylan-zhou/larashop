<?php
/**
 * Copyright (c) 2019, 翎医信息科技(上海)有限公司
 * Filename：TestController.php
 * Author：Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * Datetime：2019-06-25 19:26
 */

namespace App\Http\Controllers;


use App\Http\Requests\TestRequest;
use App\Services\SrService;

class TestController extends Controller
{
    protected $srService;

    public function __construct(SrService $srService)
    {
        $this->srService = $srService;
    }


    public function index(TestRequest $request)
    {
        $data  = $request->validated();
        $request->input('sku_id');
        $request->input('amount');
//        $accessToken = 'cf91be64a24ea8c2ef049cb162437716';
//        $client = new \Youzan\Open\Client($accessToken);
//        $method = 'youzan.users.weixin.followers.info.pull';
//        $apiVersion = '3.0.0';
//        //设置参数
//        $params = [
//            'after_fans_id' => '8365405873',
//        ];
//
//        //8364312176
//
//
//        $response = $client->POST($method, $apiVersion, $params);
//        return ($response);

//        $srInfo = $this->srService->getSrInfo(['id' => 25]);
//
//
//        $srInfo = YzUser::query()
//            ->first()->toArray();


        return [];
    }

    public function get()
    {

    }
}
