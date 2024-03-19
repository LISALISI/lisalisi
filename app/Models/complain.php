<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    use HasFactory;
    protected $table='mgp_step';
    public function countemgp_step()
{
    return $this->count();
}

}
