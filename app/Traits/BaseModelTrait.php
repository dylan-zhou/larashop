<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    BaseModelTrait.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-07-04 16:17
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait BaseModelTrait
{

    /**
     * Confirm the proper type of the model, or find the instance of the model based
     * on the id or a column, which defaults to 'name'.
     *
     * @param $id
     * @return Model|null
     */
    public static function resolve($id, $column = "name")
    {
        $modelObj = null;

        if ($id instanceof self) {
            $modelObj = $id;
        }  elseif (is_numeric($id)) {
            $modelObj = self::find($id);
        }  else {
            $modelObj = self::where($column , '=', $id)->first();
        }
        return $modelObj;
    }
}
