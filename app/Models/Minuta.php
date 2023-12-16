<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'entrada_verified_at',
        'salida_verified_at',
        'user_id',
    ]; // Falta un punto y coma al final de esta línea

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
