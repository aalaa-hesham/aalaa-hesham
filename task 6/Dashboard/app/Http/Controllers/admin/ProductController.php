<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->leftJoin('brands', 'brands.id', '=', 'products.brand_id')
            ->leftJoin('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->select('products.*', 'brands.name_en AS brand_name_en', 'brands.name_ar AS brand_name_ar', 'subcategories.name_en AS subcategory_name_en', 'subcategories.name_ar AS subcategory_name_ar')
            ->get();
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();

        return view('admin.products.create', compact('brands', 'subcategories'));
    }
    public function edit($id)
    {
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        $product = DB::table('products')->where('id', $id)->first();
        return view('admin.products.edit', compact('brands', 'subcategories', 'product'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name_en' =>['required','string','min:1','max:255'],
            'name_ar' =>['required','string','min:1','max:255'],
            'code' =>['required','integar','digit:5','unique:products'],
            'price' =>['required','numaric','min:1','max:99999999.99'],
            'quantity' =>['nullable','integar','min:1','max:255'],
            'status' =>['nullable','integar','in:0,1'],
            'details_en' =>['required','string'],
            'details_ar' =>['required','string'],
            'subcategory_id' =>['required','integar','exists:subcategories,id'],
            'brand_id' =>['required','integar','exists:brands,id'],
            'image' =>['required','mins:jpg,jpeg','max:1000'],


        ]);
        $file_name = $request->file('image')->hashName();
        //   $request->file('image')->extension()
        $request->file('image')->move(public_path('dist\img\products'),$file_name);

        $data = $request->except('_token','image');
        $data['image'] = $file_name;

        DB::table('products')->insert($data);
        return redirect()->route('dashboard.products.index')->with('msg ','Data Created Successfully');
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name_en' =>['required','string','min:1','max:255'],
            'name_ar' =>['required','string','min:1','max:255'],
            'code' =>['required','integar','digit:5',"unique:products,code,id,{$id},id"],
            'price' =>['required','numaric','min:1','max:99999999.99'],
            'quantity' =>['required','integar','min:1','max:255'],
            'status' =>['required','integar','in:0,1'],
            'details_en' =>['required','string'],
            'details_ar' =>['required','string'],
            'subcategory_id' =>['required','integar','exists:subcategories,id'],
            'brand_id' =>['required','integar','exists:brands,id'],
            'image' =>['nullable','mins:jpg,jpeg','max:1000'],


        ]);
        $data = $request->except('_token','image');
        if($request->hasFile('image')){
            $file_name = $request->file('image')->hashName();
            $request->file('image')->move(public_path('dist\img\products'),$file_name);
            $oldPhoto = DB::table('products')->select('image')->where('id',$id)->pluck('image')->first();
            if(file_exists(public_path('dist\img\products\\'.$oldPhoto))){
                unlink(public_path('dist\img\products\\'.$oldPhoto));
            }
            $data ['image'] = $file_name;
        }
        DB::table('products')->where('id',$id)->update($data);
        return redirect()->route('dashboard.products.index')->with('msg','Data Updated Successfully');
    }
    public function delete($id)
    {
        $oldPhoto = DB::table('products')->select('image')->where('id',$id)->pluck('image')->first();
        if(file_exists(public_path('dist\img\products\\'.$oldPhoto))){
            unlink(public_path('dist\img\products\\'.$oldPhoto));
        }
        DB::table('products')->where('id',$id)->delete();
        return redirect()->back()->with('msg','Product Deleted Successfully');
    }

}
