<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiaries_tmi extends Model
{
    use HasFactory;
    protected $table='beneficiaries_tmis';
    public function countbeneficiaries_tmi()
{
    return $this->count();
}

}
