<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswas";
    protected $primaryKey = "nis_siswa";
    public $incrementing = false;
    protected $fillable = ['nis_siswa','nama','alamat'];
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function nilai()
    {
        return $this->hasMany(Rapor::class);
    }
}
