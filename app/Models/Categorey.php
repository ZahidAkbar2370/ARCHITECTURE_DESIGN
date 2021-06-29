<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorey extends Model
{
    use HasFactory;

    protected $table = "categoreies";

    protected $fillable = [

        'categorey_name',
        'thumbnail',
        'publication_status',

    ];

    // public function getCategorey()
    // {
    //     return $this->hasOne(related: 'App\Models\Product', foreignKey: 'categorey_id', localKey: 'id');
    // }
}
