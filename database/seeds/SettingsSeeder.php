<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('settings')->insert([
          'key' => 'home_page_settings',
          'value' => 'THE PLACE WHERE THE TOP CHALLENGERS MEET THE BEST TALLENTS',
          'user_id' => '1',
          'description' => 'home_page_settings',
       ]);
    }
}
