<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Loan
 *
 * @property $id
 * @property $quantity
 * @property $delivered_to
 * @property $status
 * @property $loan_date
 * @property $return_date
 * @property $observations
 * @property $product_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Loan extends Model
{
    
    static $rules = [
		'quantity' => 'required',
		'delivered_to' => 'required',
		'status' => 'required',
		'loan_date' => 'required',
		'product_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['quantity','delivered_to','status','loan_date','return_date','observations','product_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
    

}
