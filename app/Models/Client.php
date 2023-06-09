<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";

    protected $table = "clients";
    protected $primaryKey = "id";

    public function rentals()
    {
        return $this->hasMany(Rental::class, "client_id")->orderBy('rental_date', 'desc');
    }
}
