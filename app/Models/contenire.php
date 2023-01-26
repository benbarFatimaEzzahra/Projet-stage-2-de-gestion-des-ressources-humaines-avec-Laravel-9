<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contenire extends Model
{
    use HasFactory;
    
    protected $table="contenires";
    protected $primaryKey = 'id';
    protected $fillable = [ 'cong_id','jour_id'];
    public function jours()
    {
        return $this->belongsTo(jour::class);
    }
    public function congs()
    {
        return $this->belongsTo(cong::class);
    }
}
