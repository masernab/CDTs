<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdt extends Model
{
    use HasFactory;

    protected $fillable
        = [
            "minimum_amount",
            "maximum_amount",
            "minimum_days",
            "maximum_days",
        ];

    protected function minimumAmount(): Attribute
    {
        return Attribute::make(
            get: fn (string $amount) => number_format($amount, 2),
            set: fn (string $amount) => (float)str_replace(",", "", $amount)
        );
    }

    protected function maximumAmount(): Attribute
    {
        return Attribute::make(
            get: fn (string $amount) => number_format($amount, 2),
            set: fn (string $amount) => (float)str_replace(",", "", $amount)
        );
    }
}
