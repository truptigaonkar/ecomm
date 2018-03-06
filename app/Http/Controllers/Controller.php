<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Category;
use View;

class Controller extends BaseController
{
	public function __construct()
	{
		View::share('catnav', Category::all());	
	}

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
