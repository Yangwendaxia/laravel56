<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//class Bar{
//
//}
//
//class Foo{
//    public $bar;
//
//    /**
//     * Foo constructor.
//     * @param $bar
//     */
//    public function __construct(Bar $bar)
//    {
//        $this->bar = $bar;
//    }
//}
//
//App::bind('Foo',function(){
//    dd('xxxx');
//    return new Foo(new Bar());
//});

use App\Http\Controllers\HomeController;
use App\Http\CustomResponse\MyResponse;
use App\Jobs\SendReminderEmail;
use EasyWeChat\Factory;


//Route::get('/', function () {
//    Log::info('In web.php');
//
//
//
//    return view('welcome');
//    //    return app('files')->get(__DIR__.'/web.php');
//    //    $config = [
//    //        'app_id' => 'wx3f8e377d05e42c82',
//    //        'secret' => '8f0e4ac7fc9de1265945d2256677b704',
//    //        'log' => [
//    //            'file' => storage_path().'/logs/easywechat.log',
//    //            'level' => 'debug'
//    //        ],
//    //        'response_type' => 'App\Http\CustomResponse\MyResponse'
//    //    ];
//
//    //    $app = Factory::officialAccount($config);//公众号
//    //    $app = Factory::work($config);//企业号
//    //    $app = Factory::openPlatform($config);//开放平台
//    //    $app = Factory::miniProgram($config);//小程序
//    //    $app = Factory::payment($config);//微信支付
//
//    //    $result = $app->qrcode->temporary('foo', 6 * 24 * 3600);
//    //$response = $app->user->list();
//
//    //    $url = $app->qrcode->url('gQGv8jwAAAAAAAAAAS5odHRwOi8vd2VpeGluLnFxLmNvbS9xLzAyTzYzTzAwNkZjSzQxMDAwME0wM18AAgQJjcVaAwQAAAAA');
//    //    $forEver = $app->qrcode->forever(56);
//    //    $content = file_get_contents($url);
//    //    file_put_contents(storage_path().'/logs/qrcode.jpg',$content);
//    //    $response = $app->user->list();
//    //    var_dump($response['data']);
//    //    dd(session('wechat.oauth_user.default'));
//    //    dd(app('wechat.official_account.default')->user->list());
//});

Route::get('/','HomeController@store');
//Route::get('/queue','QueueTest@index');

//Route::group(['middleware' => 'web'],function (){
//
//
//    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//
//});


//Auth::routes();

