<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    YzService.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-06-27 19:10
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Services;


use Youzan\Open\Token;

class YzService
{

    public function __construct()
    {
    }

    public function getAccessToken()
    {
        $clientId = config('yzapi.cloud.client_id');
        $clientSecret = config('yzapi.cloud.client_secret');
        $type = config('yzapi.cloud.authorize_type');
        $keys['kdt_id'] = config('yzapi.cloud.kdt_id');

        $cacheKey = 'yz_access_token_' . $clientId;

        if (!empty($accessToken = cache($cacheKey))) {
            return $accessToken;
        }

        $response = (new Token($clientId, $clientSecret))->getToken($type, $keys);

        if (!isset($response['access_token']) || empty($response['access_token'])) {
            return null;
        }

         $accessToken = $response['access_token'];
        cache([$cacheKey => $accessToken], now()->addDays(6));

        return $accessToken;
    }

}
