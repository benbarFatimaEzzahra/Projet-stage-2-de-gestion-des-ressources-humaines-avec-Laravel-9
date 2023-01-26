<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personnel;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = ['nom_s', 'nbr_employes'];
    public function personnels(){
        return $this->hasMany(personnel::class);
    }
}
