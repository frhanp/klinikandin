<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Penyakit extends Model
{
    protected $fillable = ['kode_penyakit', 'nama_penyakit', 'deskripsi', 'pencegahan', 'pengobatan'];

    // public function rules()
    // {
    //     return $this->hasMany(Rule::class);
    // }

      /**
     * Relasi many-to-many dengan model Gejala.
     * Pivot table kita adalah 'rules'.
     */
    public function gejalas(): BelongsToMany
    {
        return $this->belongsToMany(Gejala::class, 'rules', 'penyakit_id', 'gejala_id');
    }
}
