<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\question;

class quiz extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'title',
        'number',
        'catagory',
        'time',
        'status',
    ];

    public function questions(){

       return $this->hasMany(question::class);
    }
}
