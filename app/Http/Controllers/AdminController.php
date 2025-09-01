<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome(){
        return view('admin.dashboard');
    }

    public function viewBrands(){
        $brands = Brands::orderBy('id', 'DESC')->paginate(10);
        return view('admin.brands', compact('brands'));
    }
}
