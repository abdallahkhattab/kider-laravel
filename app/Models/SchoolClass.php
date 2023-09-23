<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;
    protected $fillable =[
        'title','description','class_image','class_title','class_teacher_name'
        ,'class_teacher_description','class_price','class_time','class_capacity'
    ];
}
