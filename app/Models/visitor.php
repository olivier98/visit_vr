<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'zip_code',
        'city',
        'interest',
        'user_id'
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
}
