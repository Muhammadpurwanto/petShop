<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'name', 'description', 'quantity', 'price', 'image','id_categories'];
}