<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'address', 'contact'];

    public function amc()
    {
        return $this->belongsTo(Amc::class, 'amc_id');
    }
}
