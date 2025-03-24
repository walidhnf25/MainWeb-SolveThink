<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'course';
    protected $fillable = [
        'nama_materi', 'kategori_kursus', 'kategori_berlangganan', 'link_materi',
    ];
}
