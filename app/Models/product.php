<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'unite',
        'price',
        'quantity',
    ];
    public function categories(){
        return$this->belongsTo(category::class);
    }
}
