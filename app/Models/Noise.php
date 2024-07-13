<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'audio_file_path', 'icon_svg_file_path'];
}
