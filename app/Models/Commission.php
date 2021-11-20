<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Commission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sales_rep_id',
        'sales_id',
        'commission',
        'bonus',
        'slug',
        'payslip_date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'user_id','updated_at',
        'sales_rep_id'
    ];

    public function sales_representative () {
        return $this->belongsTo(SalesRepresentative::class);
    }
}
