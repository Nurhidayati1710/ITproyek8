<?php namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelCostumer;

class Costumer extends BaseController
{
		
	public function datacostumer()
	{
		
        $data = new ModelCostumer(); // memamanggil model
		return view('admin/costumer', ["datacostumer" => $data->findAll()]);
	}

	
    

}