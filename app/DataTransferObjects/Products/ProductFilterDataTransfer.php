<?php

namespace App\DataTransferObjects\Products;

use App\Traits\FromRequest;

class ProductFilterDataTransfer
{
    use FromRequest;

    public function __construct(
        public ?int    $id = null,
        public ?string $idNotEqual = null,
        public ?string $name = null,
        public ?int    $category_id = null,
        public ?string $is_featured = null,
        public ?string $status = null,
        public string  $orderBy = 'id',
        public string  $direction = 'desc',
        public bool    $isPaginate = true,
    )
    {
    }
}
