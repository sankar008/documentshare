<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\History;
class User extends Model
{
    use HasFactory;    
    protected $fillable = ["name", "mobile_no", "uid_no", "address"];

    public function history(){
        return $this->hasMany(History::class);
    }
}
