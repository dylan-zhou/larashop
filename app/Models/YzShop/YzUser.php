<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    YzUser.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-06-29 16:44
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Models\YzShop;


use App\Models\BaseYzShop;
use App\Traits\BaseModelTrait;

/**
 * App\Models\YzShop\YzUser
 *
 * @property int $id
 * @property string|null $yz_user_id 有赞微信粉丝用户Id
 * @property string $weixin_open_id 微信openid
 * @property string|null $unionid 微信unionid
 * @property bool $is_follow 是否关注
 * @property int $follow_time 关注时间
 * @property string $nick 微信昵称
 * @property string|null $avatar 微信头像url
 * @property bool $sex 性别 0未知 1男 2女
 * @property string|null $country 所在国家
 * @property string|null $city 所在城市
 * @property int $traded_num 成交订单笔数
 * 成交订单笔数
 * @property int $points 有赞用户积分
 * @property int $trade_money 交易金额
 * @property \Illuminate\Support\Carbon $created_at 记录创建时间
 * @property \Illuminate\Support\Carbon $updated_at 记录更新时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\YzShop\YzUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\YzShop\YzUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\YzShop\YzUser query()
 * @mixin \Eloquent
 */
class YzUser extends BaseYzShop
{
    use BaseModelTrait;


    protected $table = 'yz_user';

    protected $fillable = [
        'yz_user_id',
        'weixin_open_id',
//        'unionid',
        'is_follow',
        'follow_time',
        'nick',
        'avatar',
        'sex',
        'country',
        'city',
        'traded_num',
        'traded_money',
        'points',
    ];
}
