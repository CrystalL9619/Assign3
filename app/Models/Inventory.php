<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'inventoryName',
        'inventoryID',
    ];
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }
}
