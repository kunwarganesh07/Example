<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Teacher extends Model
{
    protected $fillable = ['name', 'address', 'role', 'contact'];


    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role', 'name');
    }
}
