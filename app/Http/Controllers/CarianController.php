<?php

namespace App\Http\Controllers;

use DB;
use Sentinel\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarianController extends Controller
{
	public function getKeputusan(Request $request)
	{
		$query = $request->input('query');

		if (!$query) {
			return redirect()->route('utama');
		}

		$pengguna = User::where('first_name', 'LIKE', "%{$query}%")->orWhere('username', 'LIKE', "%{$query}%")->get();

		return view('carian.keputusan', compact('pengguna'));
	}
}
