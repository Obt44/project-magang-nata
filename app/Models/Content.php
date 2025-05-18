<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    
    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<string, mixed>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'type',
        'status',
        'featured_image',
        'meta_description',
        'published_at'
    ];
    
    /**
     * Atribut yang harus dikonversi.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];
    
    /**
     * Mendapatkan konten berdasarkan tipe.
     *
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getByType($type)
    {
        return self::where('type', $type)
                   ->where('status', 'published')
                   ->orderBy('published_at', 'desc')
                   ->get();
    }
}