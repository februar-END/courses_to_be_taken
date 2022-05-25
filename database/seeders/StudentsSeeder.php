<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(['name' => '遠藤展広','gender' => '男']);
        Student::create(['name' => '清水優子','gender' => '女']);
        Student::create(['name' => '遠藤凪紗','gender' => '女']);
        Student::create(['name' => '遠藤史萌','gender' => '女']);
        Student::create(['name' => '今野年男','gender' => '男']);
    }
}
