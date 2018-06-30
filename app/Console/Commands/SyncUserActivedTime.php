<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Log;

class SyncUserActivedTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:user-actived-time';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '同步用户活跃时间';

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
     *
     * @return mixed
     */
    public function handle()
    {
        // 注意这里获取的 Redis key 为 actived_time_for_update
        // 获取完以后立马删除，这样就只更新需要更新的用户数据
        Log::info('In commands,, update database');
        $data = Cache::pull('actived_time_for_update');
        if (!$data) {
            $this->error('Error: No Data!');
            Log::info('Error: No Data!');
            return false;
        }

        foreach ($data as $user_id => $last_actived_at) {
            User::query()->where('id', $user_id)
                ->update(['last_actived_at' => $last_actived_at]);
        }
        Log::info('In commands,, update database');
        $this->info('Done!');
    }
}
