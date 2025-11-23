<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SlideShow extends Model
{
    use HasFactory;

    protected $table = 'slideshow';
    protected $primaryKey = 'STT';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'STT',
        'trangthai'
    ];
}
