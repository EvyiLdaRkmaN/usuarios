<?php

namespace App\Models;

use app\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marry extends Model
{
    use HasFactory;
    protected $table = 'marry';
    
    public function user()
    {
        return $this->hasOne(Usuario::class, 'foreign_key', 'id');
    }
}
