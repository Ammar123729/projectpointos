<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name'
    ];
}
