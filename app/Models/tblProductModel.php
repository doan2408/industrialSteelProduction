<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\tblProductVariantsModel;

class tblProductModel extends Model
{
    protected $table = 'tbl_product';
	public function variants()
	{
		return $this->hasMany(tblProductVariantsModel::class,'product_id')->where('status',1);
	}
}
