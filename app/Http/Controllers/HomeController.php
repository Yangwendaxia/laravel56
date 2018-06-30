<?php

namespace App\Http\Controllers;

use App\Jobs\SendReminderEmail;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $users = User::where('id', '>', 24)->get();

        foreach ($users as $user) {
            $this->dispatch(new SendReminderEmail($user));
        }

        return 'send jobs done';
    }
}
