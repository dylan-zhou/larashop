<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    SrController.phproller.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-06-27 15:06
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Http\Controllers\YzApi;


use App\Http\Controllers\Controller;
use App\Services\SrService;
use App\Services\YzService;
use Illuminate\Http\Request;
use Youzan\Open\Client;

class SrController extends Controller
{
    protected $yzService;

    protected $srService;

    public function __construct(YzService $yzService, SrService $srService)
    {
        $this->yzService = $yzService;
        $this->srService = $srService;
    }

    public function user(Request $request)
    {
        $accessToken = $this->yzService->getAccessToken();

        $client = new Client($accessToken);
        $method = config('yzapi.methods.users.weixin_follower_get.method');
        $apiVersion = config('yzapi.methods.users.weixin_follower_get.api_version');

        //设置参数
        $params = [
            'kdt_id' => config('yzapi.cloud.kdt_id'),
            'weixin_openid' => 'oEVho0-6mbMT4S_Ir3iOvDlnEoFY'
        ];

        $response = $client->POST($method, $apiVersion, $params);

        return $response;
    }


    public function fans(Request $request)
    {
        $accessToken = $this->yzService->getAccessToken();

        $client = new Client($accessToken);
        $method = config('yzapi.methods.users.weixin_followers_info_pull.method');
        $apiVersion = config('yzapi.methods.users.weixin_followers_info_pull.api_version');

        //设置参数
        $params = [
            'after_fans_id' => 8345568760,
            'page_size' => 50
        ];

        $response = $client->POST($method, $apiVersion, $params);

        return $response;
    }

    public function update(Request $request)
    {
        $accessToken = $this->yzService->getAccessToken();

        $client = new Client($accessToken);
        $method = config('yzapi.methods.salesman.account_update.method');
        $apiVersion = config('yzapi.methods.salesman.account_update.api_version');

        //设置参数
        $params = [
            'level' => 1,
            'mobile' => "18521320315",
            'from_mobile' => '',
            'fans_type' => 1,
            'fans_id' => 0,
        ];

        $response = $client->POST($method, $apiVersion, $params);

        return ($response);
    }

    public function on(Request $request)
    {
        $accessToken = $this->yzService->getAccessToken();

        $client = new Client($accessToken);
        $method = config('yzapi.methods.salesman.account_add.method');
        $apiVersion = config('yzapi.methods.salesman.account_add.api_version');

        //设置参数
        $params = [
            'level' => 1,
            'mobile' => "0",
            'from_mobile' => '',
            'fans_type' => 1,
            'fans_id' => 1193815070,
        ];

        $response = $client->POST($method, $apiVersion, $params);

        return ($response);

//        $srInfo = $this->srService->getSrInfo(['id' => 25]);

//        return $srInfo;
    }

    public function off(Request $request)
    {
        $accessToken = $this->yzService->getAccessToken();

        $client = new Client($accessToken);
        $method = config('yzapi.methods.salesman.account_fire.method');
        $apiVersion = config('yzapi.methods.salesman.account_fire.api_version');

        //设置参数
        $params = [
//            'target_mobile' => '0',
            'mobile' => "18521320315",
            'fans_type' => 1,
//            'fans_id' => 8345568761,
        ];

        $response = $client->POST($method, $apiVersion, $params);

        return ($response);
    }

}
