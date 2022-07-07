<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    protected $table = "rapors";
    protected $primaryKey = ["nis_rapor", "kdmapelr"];
    protected $fillable = ['nis_rapor','kdmapelr','nilai', 'predikat', 'ket'];
    public $incrementing = false;
    use HasFactory;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'kdmapelr','kdmapel');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis_rapor','nis_siswa');
    }
}
