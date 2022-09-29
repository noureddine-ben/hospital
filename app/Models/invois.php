<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class invois extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'date',
        'amountpied',
        'remainingamount',
        'lastpaiment',
    ];
    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
