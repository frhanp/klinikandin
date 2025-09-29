<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gejala extends Model
{
    protected $fillable = ['kode_gejala', 'nama_gejala', 'kategori'];

    // public function rules()
    // {
    //     return $this->hasMany(Rule::class);
    // }

    /**
     * Relasi many-to-many dengan model Penyakit.
     */
    public function penyakits(): BelongsToMany
    {
        return $this->belongsToMany(Penyakit::class, 'rules', 'gejala_id', 'penyakit_id');
    }


}
