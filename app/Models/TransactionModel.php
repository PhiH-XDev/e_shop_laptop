<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
    use HasFactory;
    protected $table = 'transaction';

    protected $fillable = [
        'name',
        'quantity',
        'total_price',
        'transaction_date',
        'transaction_code',
        'phone',
        'email',
        'address',
        'status',
    ];
}
