<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $table = "descriptions";
    protected $fillable = ['created_at','user_id', 'details'];
    protected $hidden = [ 'updated_at', 'id'];

    public function user()
    {
        return $this->belongsTo(Patient::class);
    }
}
