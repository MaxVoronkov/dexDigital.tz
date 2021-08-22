<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionsModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'android_app';
    protected $fillable = [
        'name', 'link', 'active'
    ];

    public $timestamps = false;
}
