<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $users = [
            ['gender_id' => 0, 'name' => 'John Smith', 'email' => 'john.smith@example.com', 'location' => 'New York', 'phone' => 123456789],
            ['gender_id' => 1, 'name' => 'Emily Johnson', 'email' => 'emily.johnson@example.com', 'location' => 'Los Angeles', 'phone' => 987654321],
            ['gender_id' => 0, 'name' => 'Michael Brown', 'email' => 'michael.brown@example.com', 'location' => 'Chicago', 'phone' => 555666777],
            ['gender_id' => 1, 'name' => 'Sophia Davis', 'email' => 'sophia.davis@example.com', 'location' => 'Miami', 'phone' => 111222333],
            ['gender_id' => 0, 'name' => 'William Miller', 'email' => 'william.miller@example.com', 'location' => 'Austin', 'phone' => 444555666],
            ['gender_id' => 1, 'name' => 'Olivia Wilson', 'email' => 'olivia.wilson@example.com', 'location' => 'San Diego', 'phone' => 777888999],
            ['gender_id' => 0, 'name' => 'James Taylor', 'email' => 'james.taylor@example.com', 'location' => 'Dallas', 'phone' => 222333444],
            ['gender_id' => 1, 'name' => 'Ava Martinez', 'email' => 'ava.martinez@example.com', 'location' => 'Seattle', 'phone' => 888999000],
            ['gender_id' => 0, 'name' => 'Liam Anderson', 'email' => 'liam.anderson@example.com', 'location' => 'Denver', 'phone' => 999000111],
            ['gender_id' => 1, 'name' => 'Mia Thomas', 'email' => 'mia.thomas@example.com', 'location' => 'Phoenix', 'phone' => 333444555],
            ['gender_id' => 0, 'name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'location' => 'Houston', 'phone' => 444111222],
            ['gender_id' => 1, 'name' => 'Isabella Martinez', 'email' => 'isabella.martinez@example.com', 'location' => 'Portland', 'phone' => 999888777],
            ['gender_id' => 0, 'name' => 'Ethan Lee', 'email' => 'ethan.lee@example.com', 'location' => 'San Jose', 'phone' => 123987456],
            ['gender_id' => 1, 'name' => 'Charlotte White', 'email' => 'charlotte.white@example.com', 'location' => 'Tampa', 'phone' => 555444333],
            ['gender_id' => 0, 'name' => 'Mason Harris', 'email' => 'mason.harris@example.com', 'location' => 'Orlando', 'phone' => 654789321],
            ['gender_id' => 1, 'name' => 'Amelia Clark', 'email' => 'amelia.clark@example.com', 'location' => 'Atlanta', 'phone' => 777123999],
            ['gender_id' => 0, 'name' => 'Elijah Lewis', 'email' => 'elijah.lewis@example.com', 'location' => 'Las Vegas', 'phone' => 111999333],
            ['gender_id' => 1, 'name' => 'Harper Walker', 'email' => 'harper.walker@example.com', 'location' => 'Boston', 'phone' => 222888999],
            ['gender_id' => 0, 'name' => 'Alexander Hall', 'email' => 'alex.hall@example.com', 'location' => 'Philadelphia', 'phone' => 333777111],
            ['gender_id' => 1, 'name' => 'Evelyn Allen', 'email' => 'evelyn.allen@example.com', 'location' => 'Nashville', 'phone' => 555888444],
            ['gender_id' => 0, 'name' => 'Benjamin Young', 'email' => 'benjamin.young@example.com', 'location' => 'Charlotte', 'phone' => 123321456],
            ['gender_id' => 1, 'name' => 'Abigail King', 'email' => 'abigail.king@example.com', 'location' => 'Raleigh', 'phone' => 654321987],
            ['gender_id' => 0, 'name' => 'Henry Wright', 'email' => 'henry.wright@example.com', 'location' => 'Detroit', 'phone' => 456789123],
            ['gender_id' => 1, 'name' => 'Ella Scott', 'email' => 'ella.scott@example.com', 'location' => 'San Francisco', 'phone' => 147258369],
            ['gender_id' => 0, 'name' => 'Lucas Green', 'email' => 'lucas.green@example.com', 'location' => 'Cleveland', 'phone' => 852963741],
        ];

        foreach ($users as &$user) {
            $user['created_at'] = $now;
            $user['updated_at'] = $now;
        }

        DB::table('users')->insert($users);
    }
}
