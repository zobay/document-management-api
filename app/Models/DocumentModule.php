<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentModule extends Model
{
    use HasFactory;

    public function document()
    {
        return $this->hasMany(Document::class);
    }
}
