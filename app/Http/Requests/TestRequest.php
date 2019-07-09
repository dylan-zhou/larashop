<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    TestRequest.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-07-09 14:02
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TestRequest extends Request
{
    public function rules()
    {
        return [
            'sku_id' => [
                'required',
            ],
            'amount' => ['required', 'integer', 'min:1'],
        ];
    }

    public function attributes()
    {
        return [
            'amount' => '商品数量',
        ];
    }

    public function messages()
    {
        return [
            'sku_id.required' => '请选择商品',
            'amount.required' => '请选择商品数量',
            'amount.integer' => '商品数量必须是整数',
            'amount.min' => '商品数量必须大于1',
        ];
    }


}
