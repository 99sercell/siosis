<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'angkatan';

    protected $guarded = ['id','created_at','updated_at','deleted_at'];
}