<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudang_khusus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function sewa(){
        return $this->belongsTo(Sewa::class);
    }
}
