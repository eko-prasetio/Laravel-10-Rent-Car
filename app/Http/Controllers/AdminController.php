<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.admin_dashboard');
    }

    public function BrandDashboard(){
        $brand = Brand::latest()->get();
        return view('admin.brand',compact('brand'));
    }
    public function AddBrand(){
        return view('admin.add_brand');
    }
    public function StoreBrand(Request $request) {
       Brand::insert([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);
       return redirect()->route('admin.brand');
    }

    public function EditBrand($id){
        $brand = Brand::findOrFail($id);
        return view('admin.edit_brand',compact('brand'));
    }
    public function UpdateBrand(Request $request) {
            $id = $request->id;      

            Brand::findOrFail($id)->update([
                    'name' => $request->name,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
            ]);
            return redirect()->route('admin.brand');
    }
    public function DeleteBrand($id){
        Brand::findOrFail($id)->delete();
        return redirect()->back();

    }

    public function AddType(){
        $type = Type::latest()->get();
        return view('admin.type',compact('type'));
    }

    public function AddTypeData(){
        return view('admin.add_type');
    }

    public function StoreType (Request $request) {
        Type::insert([
             'name' => $request->name,
             'slug' => Str::slug($request->name),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('admin.type');
     }

}
