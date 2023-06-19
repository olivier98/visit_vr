<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stands extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_stand',
        'number_cell',
        'stand_number',
        'price',
        'images1',
        'images2',
        'images3',
        'additionnal_request',
        'exhibitor_id'

    ];

    public function user(){
        return $this->belongTo(Exhibitors::class);
    }
}
