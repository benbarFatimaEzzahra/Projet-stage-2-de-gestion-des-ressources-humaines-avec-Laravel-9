<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conge extends Model
{
    use HasFactory;
    protected $table="conges";
   
    public function typeconges(){
        return $this->belongsTo(typeconge::class);
    }
    
    public function jour_ferie(){
        return $this->belongsToMany(jour_ferie::class, 'contenir', 'conge_id', 'jour_ferie_id');
    }
    public function personnel(){
        return $this->belongsToMany(jour_ferie::class, 'contenir', 'conge_id', 'jour_ferie_id');
    }
}
