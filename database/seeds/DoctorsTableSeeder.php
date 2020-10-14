<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use Carbon\Carbon;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            'name'=> 'نهلة هلال',
            'major_id'=> 1,
            'price_per_half'=> "160",
            'price_per_hour'=> "260",
            'image'=>'https://scontent.shezlong.com/therapist_profile_pictures/d1daaa7a8b3d517830b5fbcc0a2e6e75.png',
            'speclist'=> 'طبيب الامراض النفسية',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

        Doctor::create([
            'name'=> 'سحر داود',
            'major_id'=> 1,
            'price_per_half'=> "400",
            'price_per_hour'=> "600",
            'image'=>'https://scontent.shezlong.com/therapist_profile_pictures/8625cc4aeb7ce383c0457439a1532e32.png',
            'speclist'=> 'استشاري نفسي اطفال تخصص احتياجات خاصه',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

       	Doctor::create([
            'name'=> 'عبير طوسون',
            'major_id'=> 2,
            'price_per_half'=> "150",
            'price_per_hour'=> "300",
            'image'=>'https://scontent.shezlong.com/therapist_profile_pictures/mydwbfuinvqxnomugdbflhwddhzcnbga.jpg',
            'speclist'=> 'أستاذ علم النفس المساعد_ استشاري علم النفس الإكلينيكي، معالج نفسي',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

       	Doctor::create([
            'name'=> 'ابراهيم مجدي',
            'major_id'=> 2,
            'price_per_half'=> "200",
            'price_per_hour'=> "300",
            'image'=>'https://scontent.shezlong.com/therapist_profile_pictures/e8973c14e6fb027dfd64cb1cc62e6e05.png',
            'speclist'=> 'اخصائي الطب النفسي و المخ و الاعصاب',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

       	Doctor::create([
            'name'=> 'رامى عادل',
            'major_id'=> 3,
            'price_per_half'=> "200",
            'price_per_hour'=> "300",
            'image'=>'https://scontent.shezlong.com/therapist_profile_pictures/74d9e4c5e7f9b20cd4be0bdf7da5d725.png',
           	'speclist'=> 'أخصائي اجتماعي -معالج سلوكيات إدمانية- مشورة أسرية',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);

       	Doctor::create([
            'name'=> 'فاطمة رمزى',
            'major_id'=> 3,
            'price_per_half'=> "170",
            'price_per_hour'=> "250",
            'image'=>'https://scontent.shezlong.com/therapist_profile_pictures/e3c254b1daf6f27ebbb26ce3ac8ecf27.png',
            'speclist'=> 'معالج نفسي وأرشاد أسري',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now()
            ]);


            
            
            
    }
}
