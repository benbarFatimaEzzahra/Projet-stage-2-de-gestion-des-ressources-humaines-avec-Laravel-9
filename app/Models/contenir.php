<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contenir extends Model
{
    use HasFactory;
    
    protected $table="contenirs";
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
