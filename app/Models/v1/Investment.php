<?php

namespace App\Models\v1;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates= ['created_at', 'maturity_date'];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function investment_histories()
    {
        return $this->hasMany(InvestmentHistory::class);
    }
}
