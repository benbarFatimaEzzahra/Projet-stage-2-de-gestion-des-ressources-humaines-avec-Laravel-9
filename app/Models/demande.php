<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    use HasFactory;
    protected $table="demande";
    protected $primaryKey = 'cong_id , personnel_id';
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
