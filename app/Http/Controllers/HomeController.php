<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    HomeController.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-07-12 14:41
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{

    public function index()
    {
        return ['web home'];
    }
}
