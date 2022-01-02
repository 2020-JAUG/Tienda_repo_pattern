<?php

namespace App\Repositories;

use App\Exceptions\Product\ProductNotFoundException;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

final class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    protected string $model = Product::class;
    /**
     * El with es para cuando existan relaciones entre tablas ER
     *
     * @var array
     */
    protected array $with = [];

    protected string $notFoundException = ProductNotFoundException::class;


    /**
     * Get Product by name attribute
     *
     * @param string $name
     *
     * @method GET
     * @access public
     *
     * @return App\Http\Models\Product
     * @throws ProductNotFoundException
     */
    public function show_by_name(string $name): Product
    {
        $product = null;
        try {
            $product = Product::with('productos')->where('name', $name)->firstOrFail();
        } catch (Exception $ex) {
            throw new $this->notFoundException($this->notFoundMessage);
        }
        return $product;
    }

    // public function show_by_stock(int $stock):
    // {

    // }
}
