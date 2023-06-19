<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exhibitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'compagny_name',
        'web_site',
        'user_id'
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
