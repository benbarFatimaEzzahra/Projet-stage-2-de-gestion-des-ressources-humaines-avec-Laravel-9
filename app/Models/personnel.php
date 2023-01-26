<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\service;
use App\Models\personnel;
class personnel extends Model
{
    use HasFactory;
    protected $table="personnels";
    protected $primaryKey = 'id';
    protected $fillable = ['service_id', 'nom', 'prenom','cin', 'date_ambauche' ,'fonction' ,'salaire_de_base' ,'sexe' ,'date_naissance', 'lieu_naissance' ,'situation_familial', 'nbr_enfant','photo' ,'fichier','adresse', 'tel'  ];
    
    public function services()
    {
        return $this->belongsTo(service::class);
    }
    
    public function prmes(){
        return $this->hasMany(prme::class);
    }
    public function absences(){
        return $this->hasMany(absence::class);
    }
    public function cong(){
        return $this->belongsToMany(cong::class, 'demander', 'personnel_id', 'cong_id');
    }
}
