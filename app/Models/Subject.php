<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    static $subjectName = [
        "国語","数学","コミュニケーション英語Ⅰ","科学と人間生活","社会と情報","家庭基礎","保健","体育"
    ];

    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }
}
