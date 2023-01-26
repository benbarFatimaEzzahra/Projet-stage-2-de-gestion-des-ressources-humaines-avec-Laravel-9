<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demander extends Model
{
    use HasFactory;
    protected $table="demanders";
    protected $primaryKey = 'id';
    protected $fillable = [ 'cong_id','personnel_id','date_demande','commentaires_dem'];
    public function personnels()
    {
        return $this->belongsTo(personnel::class);
    }
    public function congs()
    {
        return $this->belongsTo(cong::class);
    }
}