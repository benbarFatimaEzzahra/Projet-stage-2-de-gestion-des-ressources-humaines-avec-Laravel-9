<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absence extends Model
{
    use HasFactory;
    protected $table = 'absences';
    protected $primaryKey = 'id';
    protected $fillable = [ 'personnel_id','dscription', 'date_debut_abs', 'date_fin_abs'];
    public function personnels()
    {
        return $this->belongsTo(personnel::class);
    }
}
