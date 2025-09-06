<?php

namespace App\Models;

use App\Models\buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori extends Model
{
    protected $guarded = [];

    public function bukus(): HasMany
    {
        return $this->hasMany(buku::class);
    }
}
