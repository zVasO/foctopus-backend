<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SoundCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon_svg'];

    public function sounds(): HasMany
    {
        return $this->hasMany(Sound::class);
    }
}
