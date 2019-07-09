<?php
/**
 * Copyright (c) 2019, 翎医信息科技(上海)有限公司
 * Filename：SrService.php
 * Author：Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * Datetime：2019-06-25 19:36
 */

namespace App\Services;


use App\Models\Sr\TWxSrInfo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class SrService
{

    /**
     * 方法描述
     *
     * @author   Dylan
     * @datetime 2019-06-25 19:40
     *
     * @param  array  $where
     * @return array
     */
    public function getSrInfo(array $where)
    {
        $sr =  TWxSrInfo::query()
            ->where($where)
            ->first();

        is_null($sr) || $sr = $sr->toArray();

        return $sr;
    }


}
