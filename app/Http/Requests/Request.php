<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    Request.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-07-09 15:31
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class Request extends FormRequest
{
    /**
     * Handle a failed validation attempt.
     *
     * @param  Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $msg = $validator->errors()->first();

        $result = [
            'code' => 1,
            'msg' => $msg
        ];

        throw new HttpResponseException(
            response()->json($result, 422)
        );
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
