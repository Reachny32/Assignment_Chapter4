<?php

namespace App\Http\Controllers\Assignment1;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id = 100)
    {
        return "Product ID: $id";
    }
}
