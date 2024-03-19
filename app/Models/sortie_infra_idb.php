<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie_infra_idb extends Model
{
    use HasFactory;
    protected $table='sortie_infra_idbs';
    public function countsortie_infra_idb()
{
    return $this->count();
}

}
