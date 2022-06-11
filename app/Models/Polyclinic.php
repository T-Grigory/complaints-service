<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Polyclinic extends Model
{
    use HasFactory;

    public function complaints(): HasMany
    {
        return $this->hasMany(Complaint::class);
    }
}
