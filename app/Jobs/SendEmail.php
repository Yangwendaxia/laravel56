<?php

namespace App\Jobs;

use App\User;
use Faker\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use function password_hash;
use const PASSWORD_BCRYPT;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $faker = Factory::create();
//        User::create([
//            'name' => $faker->name,
//            'pasword' => password_hash('123456',PASSWORD_BCRYPT),
//            'email' => $faker->safeEmail,
//        ]);
        User::create(
            [
                'name' => 'yhm',
                'email' => $faker->email,
                'password' => '123456'
            ]
        );
    }
}
