<?php

namespace App\Console\Commands;

use App\Services\YzService;
use App\Services\YzUserService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Youzan\Open\Client;

class YzUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yz:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '有赞用户数据获取';


    private $yzService;
    private $yzUserService;

    /**
     * Create a new command instance.
     *
     * @param  YzService      $yzService
     * @param  YzUserService  $yzUserService
     */
    public function __construct(YzService $yzService, YzUserService $yzUserService)
    {
        parent::__construct();

        $this->yzService = $yzService;
        $this->yzUserService = $yzUserService;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $accessToken = $this->yzService->getAccessToken();

        $client = new Client($accessToken);
        $method = config('yzapi.methods.users.weixin_followers_info_pull.method');
        $apiVersion = config('yzapi.methods.users.weixin_followers_info_pull.api_version');

        $afterFansId = 8345452936;

        while (true) {
            sleep(1); // 防止脚本太频繁，限定下时间

            $this->info('last_fans_id='.$afterFansId);

            //设置参数
            $params = [
                'after_fans_id' => $afterFansId,
                'page_size'     => 13,
            ];

            $response = $client->POST($method, $apiVersion, $params);

            if ($response['code'] != 200) {
                // TODO 记录日志
                $this->error($response['message']);
                break;
            }

            // 循环获取最后一条数据 中断
            if (!$response['data']['has_next']) {
                break;
            }

            // 数据为空时 中断
            $users = $response['data']['users'];
            if (empty($users) || count($users) < 0) {
                break;
            }

            foreach ($users as $user) {
                $this->yzUserService->addOrUpdate($user);
            }

            $afterFansId = $response['data']['last_fans_id'];


            DB::connection(config('database.mode_yzshop'))->reconnect();


            exit(STATUS_OK);
        }
    }


}
