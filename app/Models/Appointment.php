<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = "wallets";
    protected $fillable = ['user_id', 'time','date'];
    protected $hidden = ['created_at', 'updated_at', 'id'];

    public function user()
    {
        return $this->belongsTo(Patient::class);
    }
}
