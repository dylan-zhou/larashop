<?php
/**
 * Copyright (c) 2019, 翎医信息科技(上海)有限公司
 * Filename：ExampleCommand.php
 * Author：Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * Datetime：2019-05-28 19:34
 */

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    /*
    * The name and signature of the console command.
    *
    * @var string
    */
    protected $signature = 'example:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'example test a command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'Hello world';
        echo PHP_EOL;
    }
}
