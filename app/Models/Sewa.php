<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function reservasi(){
        return $this->belongsTo(Reservasi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function gudang_khusus(){
        return $this->belongsTo(gudang_khusus::class);
    }
}
