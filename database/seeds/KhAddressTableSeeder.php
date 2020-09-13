<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Laracasts\TestDummy\Factory as TestDummy;

class KhAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=KhAddressTableSeeder
     * @return void
     */
    public function run()
    {
        DB::unprepared(Storage::disk('generator')->get('address.sql')); 
        DB::unprepared(Storage::disk('generator')->get('address_2.sql')); 
        DB::unprepared(Storage::disk('generator')->get('address_3.sql')); 
    }
}
