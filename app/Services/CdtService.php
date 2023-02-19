<?php

namespace App\Services;

use App\DTOs\StoreCTDDTO;
use App\Models\Cdt;

class CdtService
{

    public function __construct(
        //
    ) {
        //
    }

    public function store(StoreCTDDTO $storeCTDDTO): void
    {
        Cdt::create($storeCTDDTO->all());
    }
}