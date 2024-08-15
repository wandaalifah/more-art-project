<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'videoUrl',
        'client',
        'agency',
        'ph',
        'categoryId',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the category that owns the project.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    /**
     * Get the crews for the project.
     */
    public function crews()
    {
        return $this->belongsToMany(Crew::class, 'projectId');
    }
}
