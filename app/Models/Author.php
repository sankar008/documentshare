<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Course;
class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email_id', 'password', 'mobile_no'];

    
}