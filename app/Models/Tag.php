<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    use HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['title'];
    protected $guarded = ['id'];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
