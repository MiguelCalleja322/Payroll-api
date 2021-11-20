<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sales extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sales_rep_id',
        'client_id',
        'opening_balance',
        'elite_insure_commission'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'user_id','updated_at'
    ];

    public function sales_rep () {
        return $this->belongsTo(SalesRepresentative::class);
    }
}
