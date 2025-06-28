<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiagnosaHistory extends Model
{
    protected $fillable = ['user_id', 'penyakit_id', 'gejala_terpilih', 'hasil_skor'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function penyakit()
    // {
    //     return $this->belongsTo(Penyakit::class);
    // }

     /**
     * Get the user that owns the diagnosa history.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the penyakit associated with the diagnosa history.
     */
    public function penyakit(): BelongsTo
    {
        return $this->belongsTo(Penyakit::class);
    }
    
    
}
