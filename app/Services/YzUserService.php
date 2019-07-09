<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    YzUserService.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-06-29 16:15
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Services;


use App\Models\YzShop\YzUser;
use Illuminate\Database\Capsule\Manager as DB;

class YzUserService
{

    public function addOrUpdate($yzUser)
    {
//        $yzUser = new YzUser();

        $yzUserId = $yzUser['user_id'];
        $yzUser['yz_user_id'] = $yzUser['user_id'];
        unset($yzUser['user_id']);

//        $yzUser->yz_user_id = $yzUser['user_id'];
//        $yzUser->weixin_openid = $yzUser['weixin_openid'];
//        $yzUser->unionid = $yzUser['unionid'];
//        $yzUser->is_follow = $yzUser['is_follow'] ? 1 : 0;
        $yzUser['is_follow'] = $yzUser['is_follow'] ? 1 : 0;
        $yzUser['follow_time'] = $yzUser['is_follow'] ? intval($yzUser['follow_time']/1000) : 0;

//        $yzUser->nick = $yzUser['nick'];
//        $yzUser->avatar = $yzUser['avatar'];
//        $yzUser->country = $yzUser['country'];
//        $yzUser->city = $yzUser['city'];

        if ($yzUser['sex'] === 'm') {
            $sex = 1;
        } elseif ($yzUser['sex'] === 'f') {
            $sex = 2;
        } else {
            $sex = 0;
        }
        $yzUser['sex'] = $sex;

//        $yzUser->sex = $sex;
        $yzUser['traded_num'] = $yzUser['traded_num'] ?: 0;
        $yzUser['trade_money'] = $yzUser['trade_money'] ?: 0;
        $yzUser['points'] = $yzUser['points'] ?: 0;

//        $yzUser->traded_num = $yzUser['traded_num'];
//        $yzUser->points = $yzUser['points'];

        YzUser::query()->updateOrCreate(
            ['yz_user_id' => $yzUserId]
            , $yzUser);
    }
}
