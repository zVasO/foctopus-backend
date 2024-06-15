<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sound extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'audio_file_path'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(SoundCategory::class);
    }
}
