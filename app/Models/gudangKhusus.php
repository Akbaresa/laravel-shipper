<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudangKhusus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function sewa(){
        return $this->belongsTo(Sewa::class);
    }
    public function rak(){
        return $this->hasMany(Rak::class);
    }
    public function tipeGudang(){
        return $this->belongsTo(TipeGudang::class);
    }
}
