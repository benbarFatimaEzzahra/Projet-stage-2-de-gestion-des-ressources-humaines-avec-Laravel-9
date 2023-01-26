<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jour_ferie extends Model
{
    use HasFactory;
    protected $table="jour_feries";
    public function cong(){
        return $this->belongsToMany(cong::class, 'contenir', 'jour_ferie_id', 'cong_id');
    }
}
