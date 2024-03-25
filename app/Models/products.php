<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class products extends Model
{
    protected $table = "products";
    //  reailion ship  with sections Table
    public function section(): BelongsTo
    {
        return $this->belongsTo(sections::class);
    }
    protected $fillable = [
        "product_name",
        "description",
        "section_id",
        "section_name"
    ];
    use HasFactory;
}
