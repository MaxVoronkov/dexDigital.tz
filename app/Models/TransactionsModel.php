<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsModel extends Model
{
    use HasFactory;


    protected $table = 'transactions';
    protected $fillable = [
        'id', 'status'
    ];

    public $timestamps = false;

    /**
     * Change transactions status.
     *
     * @param  string  $id
     * @param  string  $data
     */

    public static function updateStatus($id, $data)
    {

        self::updateOrCreate(['id' => $id], ['status' => $data]);
    }
}
