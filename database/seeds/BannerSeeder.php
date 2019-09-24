<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banner::class, 3)->create();
    }
}
