<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marry extends Model
{
    use HasFactory;
    protected $table = 'marry';
    protected $primaryKey = 'id_userM';
    protected $guarded = [];
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(Usuario::class, 'id', 'id_userM');
    }
    public function user2()
    {
        return $this->hasOne(Usuario::class, 'id', 'id_userF');
    }
}
