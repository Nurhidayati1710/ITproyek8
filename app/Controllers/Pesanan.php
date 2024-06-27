<?php namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelPesanan;

class Pesanan extends BaseController
{
		
	public function datapesanan()
	{
		
        
		return view('admin/pesanan');
	}

	
    

}