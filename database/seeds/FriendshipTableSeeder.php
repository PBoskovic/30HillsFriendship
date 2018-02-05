<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Friendship;

class FriendshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->delete();
        DB::table('friendships')->delete();
        $json = File::get('database/data/data.json');
        $data = json_decode($json);

        foreach ($data as $obj) {
            $userID = DB::table('users')->pluck('id');
            foreach ($obj->friends as $friend) {
                Friendship::create(array(
                    'friend_one' => $obj->id,
                    'friend_two' => $friend,

                ));
            }
        }
    }
}
