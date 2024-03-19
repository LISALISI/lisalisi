<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiaries_cerc extends Model
{
    use HasFactory;

    protected $table='beneficiaries_cercs';
    public function countbeneficiaries_cerc()
{
    return $this->count();
}





}
