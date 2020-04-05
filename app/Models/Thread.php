<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;

    public function path()
    {
        return route('threads.show', ['thread' => $this]);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
