<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cong;
class jour extends Model
{
    use HasFactory;
    
    protected $table="jours";
    protected $primaryKey = 'id';
    protected $fillable = [ 'titre','date'];
    public function cong(){
        return $this->belongsToMany(cong::class, 'contenir', 'jour_ferie_id', 'cong_id');
    }
}
