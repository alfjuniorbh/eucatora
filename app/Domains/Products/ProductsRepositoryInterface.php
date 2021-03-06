<?php
/**
 * Created by PhpStorm.
 * User: alfjuniorbh
 * Date: 16/10/16
 * Time: 19:59
 */
namespace App\Domains\Products;

interface ProductsRepositoryInterface
{
    public function index();
    public function datatable();
    public function all();
    public function autocomplete();
    public function comboProducts();
    public function filterById($id);
    public function create($status);
    public function store($request);
    public function edit($compact=[]);
    public function update($request);
    public function destroy();
    public function duplicate();
}