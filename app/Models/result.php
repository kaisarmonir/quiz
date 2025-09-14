<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\quiz;

class result extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'name',
        'mark',
        'total',
        'quiz',

    ];
    public function quiz(){
        return $this->belongsTo(quiz::class);
    }
}
