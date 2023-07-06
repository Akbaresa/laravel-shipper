<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeGudang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function gk(){
        return $this->hasMany(gudangKhusus::class);
    }
}
