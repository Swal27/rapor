<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = "mapels";
    protected $primaryKey = "kdmapel";
    protected $fillable = ['kdmapel','nama','kkm','kelompok'];
    public $incrementing = false;
    use HasFactory;

    public function nilai()
    {
        return $this->hasMany(Siswa::class);
    }
}
