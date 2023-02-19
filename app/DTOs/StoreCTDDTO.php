<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;

class StoreCTDDTO extends Data
{

    public function __construct(
        public string $minimum_amount,
        public string $maximum_amount,
        public int $minimum_days,
        public int $maximum_days,
    ) {
    }

    public static function rules(): array
    {
        return [
            "minimum_amount" => ['required'],
            "maximum_amount" => ['required'],
            "minimum_days"   => ['required'],
            "maximum_days"   => ['required'],
        ];
    }
}