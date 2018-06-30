<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Carbon\Carbon;
use function dispatch;
use function response;

class QueueTest extends Controller
{
    public function index(){
        $job = (new SendEmail())->delay(Carbon::now()->addMinutes(1));

        dispatch($job);

        return response()->json([
            'message' => '队列添加成功'
        ]);
    }
}
