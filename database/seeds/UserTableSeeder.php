<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Friendship;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
//        DB::table('friendships')->delete();
        $json = File::get('database/data/data.json');
        $data = json_decode($json);

        foreach ($data as $obj) {

            User::create(array(
                'id' => $obj->id,
                'firstName' => $obj->firstName,
                'surname' => $obj->surname,
                'gender' => $obj->gender,
                'age' => $obj->age

            ));

        }
    }
}
