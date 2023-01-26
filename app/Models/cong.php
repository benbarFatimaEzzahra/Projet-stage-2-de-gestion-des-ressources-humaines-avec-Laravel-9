<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cong extends Model
{
    use HasFactory;
    protected $table="congs";
    protected $primaryKey = 'id';
    protected $fillable = [ 'typeconge_id','date_debut','date_fin'];
    public function typeconges(){
        return $this->belongsTo(typeconge::class);
    }
    public function jour(){
        return $this->belongsToMany(jour::class, 'contenir', 'cong_id', 'jour_id');
    }
    public function personnel(){
        return $this->belongsToMany(personnel::class, 'demander', 'cong_id', 'personnel_id');
    }
}
