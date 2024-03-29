<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama_role',
    
        'updated_by',
        'created_by',
    ];

    public function User()
    {

        return $this->hasMany(User::class);
    }

}
