<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cong;
class typeconge extends Model
{
    use HasFactory;
    protected $table="typeconges";
    protected $primaryKey = 'id';
    protected $fillable = [ 'libelle_type'];
    public function congs(){
        return $this->hasMany(cong::class);
    }
}
