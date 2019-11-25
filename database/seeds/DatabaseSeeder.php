<?php
use App\User;
use App\Hotel;
use App\Room;
use App\Rate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CitySeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Hotel::truncate();
        Room::truncate();
        Rate::truncate();
        $users=20;
        $hotels=30;
        $rooms=300;
        $rates=300;
        factory(User::class,$users)->create();
        factory(Hotel::class,$hotels)->create();
        factory(Rate::class,$rates)->create();
        factory(Room::class,$rooms)->create();
    }
}
