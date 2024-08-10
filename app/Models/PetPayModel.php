<?php

namespace App\Models;

use CodeIgniter\Model;

class PetPayModel extends Model
{
    protected $table = 'petpay';
    // protected $useTimestamps = true;
    protected $allowedFields = [ 'saldo', 'id_user', 'no_rek'];

}