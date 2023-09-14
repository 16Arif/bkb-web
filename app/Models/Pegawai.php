<?php
//mengelola data pegawai stageof balikpapan

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function pegawaicategory()
    {
        return $this->belongsTo(PegawaiCategory::class);
    }
}
