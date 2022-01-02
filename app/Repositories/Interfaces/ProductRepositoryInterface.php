<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get Product by Name
     *
     * @param string $name
     *
     * @method GET
     * @access public
     *
     * @return App\Models\Product
     * @throws ProductNotFoundException
     */
    public function show_by_name(string $name):Product;
}
