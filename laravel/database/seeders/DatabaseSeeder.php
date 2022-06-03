<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Seat;
use App\Models\Timeslot;
use App\Models\Reservation;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'nim' => 'G6401201120',
            'password' => bcrypt('12345678'),
        ]);
        Seat::create([
            'category_id' => '1',
            'name' => 'A1',
        ]);
        Seat::create([
            'category_id' => '1',
            'name' => 'A2',
        ]);
        Seat::create([
            'category_id' => '2',
            'name' => 'A3',
        ]);
        Seat::create([
            'category_id' => '2',
            'name' => 'A4',
        ]);
        Category::create([
            'name' => 'Computer',
            'slug' => 'com',
        ]);
        Category::create([
            'name' => 'Math',
            'slug' => 'mtk',
        ]);
        Timeslot::create([
            'seat_id' => '1',
            'name' => '07.00-09.00',
        ]);
        Timeslot::create([
            'seat_id' => '1',
            'name' => '09.00-11.00',
        ]);
        Timeslot::create([
            'seat_id' => '2',
            'name' => '11.00-13.00',
        ]);
        Timeslot::create([
            'seat_id' => '2',
            'name' => '13.00-15.00',
        ]);
        Reservation::create([
            'user_id' => '1',
            'category_id' => '1',
            'seat_id' => '1',
            'timeslot_id' => '1'
        ]);
        Reservation::create([
            'user_id' => '1',
            'category_id' => '2',
            'seat_id' => '2',
            'timeslot_id' => '3'
        ]);
    }
}
