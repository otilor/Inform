<?php

use Illuminate\Database\Seeder;
use App\Message;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Message::create([
            'user_id' => 2,
            'message' => Str::random(15).'Kindly ignore this',
            'message_status' => 1,
        ]);
    }
}
