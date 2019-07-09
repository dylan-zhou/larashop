<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    Yly.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-06-26 20:39
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Models\Sr;

use App\Models\BaseSr;
use App\Traits\BaseModelTrait;


/**
 * App\Models\Sr\TWxSrInfo
 *
 * @property int $id 表id
 * @property string|null $wechat_id 微信公众号原始ID
 * @property string|null $real_name 用户姓名
 * @property bool|null $sex 0 保密 1 男 2 女
 * @property string|null $weixin 微信号
 * @property string|null $mobile 手机号码
 * @property string|null $openid 第三方唯一标示
 * @property string|null $unionid
 * @property string|null $use_status 禁用状态(0:启用,1:禁用,2,锁定)
 * @property string|null $nickname
 * @property string|null $token 用于app 授权类似于session_id
 * @property string|null $province 省
 * @property int|null $city_id 城市id
 * @property string|null $city 注册所填,市
 * @property string|null $city_wechat 市
 * @property string|null $area 区
 * @property string|null $describtion 描述
 * @property string|null $subscribe_status 微信关注状态 0:未关注;1:已关注;2:取消关注
 * @property string|null $subscribe_time 用户关注时间
 * @property string|null $subscribe_scene 返回用户关注的渠道来源，ADD_SCENE_SEARCH 公众号搜索，ADD_SCENE_ACCOUNT_MIGRATION 公众号迁移，ADD_SCENE_PROFILE_CARD 名片分享，ADD_SCENE_QR_CODE 扫描二维码，ADD_SCENEPROFILE LINK 图文页内名称点击，ADD_SCENE_PROFILE_ITEM 图文页右上角菜单，ADD_SCENE_PAID 支付后关注，ADD_SCENE_OTHERS 其他
 * @property string|null $qr_scene 二维码扫码场景（开发者自定义）
 * @property string|null $qr_scene_str 二维码扫码场景描述（开发者自定义）
 * @property string|null $unsubscribe_time 用户取消关注时间
 * @property string|null $remark 公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
 * @property int|null $groupid 用户所在的分组ID（兼容旧的用户分组接口）
 * @property string|null $tagid_list 用户被打上的标签ID列表
 * @property string|null $head_img_url 微信返回图片地址
 * @property string|null $country 国家
 * @property string|null $status 0:正常;1:禁用
 * @property string|null $self_qr_image 邀请消费者的url的二维码
 * @property int|null $rel_sr_id 相关联的SR的ID
 * @property string|null $is_delete 是否删除：0.未删除1.删除
 * @property string|null $description 描述
 * @property bool|null $identity 身份：0=SR；1=KOM
 * @property string|null $register_status 注册状态(0:未注册;1:已注册审核中;2:审核通过;3:审核拒绝;4:禁用 5:停止使用)
 * @property string|null $inviter_code 邀请人的邀请码(注册时填写，若有的话)
 * @property string|null $own_invite_code 自己的邀请码(SR审核通过后拥有)
 * @property string|null $create_time 创建时间
 * @property string|null $reg_time 注册时间
 * @property string|null $verify_time 认证时间
 * @property string|null $verify_by
 * @property string $update_time
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sr\TWxSrInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sr\TWxSrInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sr\TWxSrInfo query()
 * @mixin \Eloquent
 */
class TWxSrInfo extends BaseSr
{
    use BaseModelTrait;


    protected $table = 't_wx_sr_info';
}

