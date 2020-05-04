<?php

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
        // $this->call(UserSeeder::class);
        factory(App\Admin::class, 1)->create();
        factory(App\Category::class, 1)->create();
        factory(App\Brand::class, 1)->create();
        factory(App\Tag::class, 1)->create();
        factory(App\Product::class, 1)->create();
        factory(App\Image::class, 1)->create();
        factory(App\User::class, 1)->create();
        factory(App\Billing::class, 1)->create();
        factory(App\Order::class, 1)->create();
    }
}
