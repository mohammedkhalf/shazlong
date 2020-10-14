<?php

use Illuminate\Database\Seeder;
use App\Major;
use Carbon\Carbon;
class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Major::create([
            'name'=> 'مشاكل الاطفال ',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);
            
            Major::create([
            'name'=> 'مشاكل المراهقة',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

            Major::create([
            'name'=> 'الادمان ',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

    }
}
