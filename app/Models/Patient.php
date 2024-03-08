<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Descriptor\Descriptor;

class Patient extends Model
{
    use HasFactory;
    protected $table = "patients";
    protected $fillable = ['name', 'phone', 'address', 'description'];
    protected $hidden = ['created_at', 'updated_at'];

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'user_id');
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }

    public function description()
    {
        return $this->hasMany(Description::class, 'user_id');
    }
}
