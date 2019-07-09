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
 * App\Models\Sr\SrWythTemp
 *
 * @property int $id 主键ID
 * @property string|null $srcode SR工号
 * @property string|null $srname SR姓名
 * @property string|null $mobile SR脱敏手机号
 * @property string|null $idcode 身份证
 * @property string|null $star 星级
 * @property string|null $zone 大区
 * @property string|null $region 区域
 * @property string|null $city 考核城市
 * @property string|null $physicalcity 所在城市
 * @property string|null $retailercode 门店编码
 * @property string|null $retailername 门店名称
 * @property string|null $indate 在职SR入职时间
 * @property string|null $outdate 在职SR预离职时间
 * @property string $batchdate 导入批次，使用当前日期做批次号，比如20181020
 * @property bool $is_valid 是否有效，用于校验数据，1：有效，0：无效
 * @property string|null $err_reason 记录无效的原因
 * @property string|null $group_category 群类别
 * @property string $createtime 记录创建时间
 * @property string $updatetime 记录更新时间
 * @property bool $is_delete 是否删除：0-否，1-是
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sr\SrWythTemp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sr\SrWythTemp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Sr\SrWythTemp query()
 * @mixin \Eloquent
 */
class SrWythTemp extends BaseSr
{
    use BaseModelTrait;


    protected $table = 'sr_wyth_temp';

}
