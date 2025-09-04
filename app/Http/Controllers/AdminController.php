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

    public function addBrand(){
        return view('admin.add_brand');
    }
    public function submitBrand(REQUEST $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            // 'brand_image'=>'required',
        ]);
        // dd('validated');
        $brand = new Brands();
        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->image='';
        // dd($brand);
        $return = $brand->save();
        // dd($return);
        if($return){
        return redirect()->back()->with('success', 'successfully added brand');
        }
        else{
            return redirect()->back()->with('error', 'failed to add brand, try again');
        }
    }

    //=========Products Functions=========
    public function addProducts(){
        return view('admin.products.add_product');
    }

    public function Products(){
        return view('admin.products.product');
    }

    //======Categories============
    public function addCategory(){
        return view('admin.category.add_category');
    }

    public function category(){
        return view('admin.category.category');
    }
    //=========Orders=============
    public function order(){
        return view('admin.order.order');
    }
    public function orderTracking(){
        return view('admin.order.order_tracking');
    }
    public function orderDetails(){
        return view('admin.order.order_details');
    }

    //Slider
    public function slider(){
        return view('admin.slider.slider');
    }

    public function addSlider(){
        return view('admin.slider.add_slider');
    }
}
