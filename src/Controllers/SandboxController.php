<?php

namespace Flatorb\LaraLMS\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SandboxController extends Controller
{
	public function sandbox(Request $request)
	{
		dd($request);
	}
}
