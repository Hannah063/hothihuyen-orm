<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $primaryKey = 'id';

    // public $incrementing = false;

    // protected $keyType = 'string';

    public $timestamps = false;

    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'update_at';

    protected $attributes = [
        'status' => 0
    ];
}
