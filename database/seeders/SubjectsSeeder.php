<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create(['name' => '国語']);
        Subject::create(['name' => '数学Ⅰ']);
        Subject::create(['name' => 'コミュニケーション英語Ⅰ']);
        Subject::create(['name' => '科学と人間生活']);
        Subject::create(['name' => '社会と情報']);
        Subject::create(['name' => '課程基礎']);
        Subject::create(['name' => '保健']);
        Subject::create(['name' => '体育']);

    }
}
