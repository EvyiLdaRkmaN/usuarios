<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marry extends Model
{
    use HasFactory;
    protected $table = 'marry';
    public function name()
    {
        return $this->hasOne('App\Usuario', 'foreign_key');
    }
}
