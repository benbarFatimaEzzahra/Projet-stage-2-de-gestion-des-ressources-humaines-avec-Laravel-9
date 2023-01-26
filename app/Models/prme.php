<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personnel;
class prme extends Model
{
    use HasFactory;
    
    protected $table = 'prmes';
    protected $primaryKey = 'id';
    protected $fillable = [ 'personnel_id','montant_prime', 'commentaires'];
    public function personnels()
    {
        return $this->belongsTo(personnel::class);
    }
}
