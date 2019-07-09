<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    yzapi.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-06-27 15:18
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */


return [


    /*
     * 路由配置
     */
    'route' => [
        // 路由前缀
        'prefix' => 'yzapi',
        // 控制器命名空间前缀
        'namespace' => 'YzApi',
    ],


    // 有赞云自用型无容器
    'cloud' => [
        'client_id' => env('YZ_CLIENT_ID'),
        'client_secret' => env('YZ_CLIENT_SECRET'),
        'authorize_type' => env('YZ_AUTHORIZE_TYPE'),
        'grant_id' => env('YZ_GRANT_ID'),
        'kdt_id' => env('YZ_KDT_ID'),
    ],

    // 接口root地址
    'base_url' => [
        'token' => 'https://open.youzanyun.com/auth/token'
    ],

    // 接口地址
    'methods' => [
        'users' => [

            // https://doc.youzanyun.com/doc#/content/API/1-308/detail/api/0/250
            // 根据微信粉丝用户的 weixin_openid 或 fans_id 获取用户信息
            'weixin_follower_get' => [
                'method' => 'youzan.users.weixin.follower.get',
                'api_version' => '3.0.0'
            ],

            // https://doc.youzanyun.com/doc#/content/API/1-308/detail/api/0/130
            // 根据关注时间段批量查询微信粉丝用户信息
            'weixin_followers_info_pull' => [
                'method' => 'youzan.users.weixin.followers.info.pull',
                'api_version' => '3.0.0'
            ]
        ],

        'salesman' => [

            // https://doc.youzanyun.com/doc#/content/API/1-352/detail/api/0/35
            // 设置用户成为分销员
            'account_add' => [
                'method' => 'youzan.salesman.account.add',
                'api_version' => '3.0.1'
            ],

            // https://doc.youzanyun.com/doc#/content/API/1-352/detail/api/0/42
            // 更新分销员信息
            'account_update' => [
                'method' => 'youzan.salesman.account.update',
                'api_version' => '3.0.0'
            ],

            // https://doc.youzanyun.com/doc#/content/API/1-352/detail/api/0/345
            // 清退分销员
            'account_fire' => [
                'method' => 'youzan.salesman.account.fire',
                'api_version' => '3.0.0'
            ],

        ]


    ]

];
