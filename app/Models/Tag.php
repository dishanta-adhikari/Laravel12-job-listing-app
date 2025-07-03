<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Tag extends Model
{
    use HasFactory;

    // A tag has many jobs
    public function jobs(): BelongsToMany
    {
        return $this->BelongsToMany(Job::class);
    }
}
