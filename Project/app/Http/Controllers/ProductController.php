<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Product::all();
        return view("backend.ProductsPage",compact("user"));
    }

    public function indexList()
    {
        $user = Product::all();
        return view("backend.CategoryPageProductListing",compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.ProductsPageAddProduct');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create(Request::all());
        return redirect("ProductsPage");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $user=Product::find($id);
        return view("show",compact("user"));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Product::find($id);
        return view("backend.ProductsPageEditProduct",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user = Product::find($id);
        $user->update(Request::all());
        $user->save();
        return redirect('ProductsPage')->with('message','updated');
    }
    public function updateList(Request $request, $id)
    {
        
        $user = Product::find($id);
        $user->update(Request::all());
        $user->save();
        return redirect('CategoryPageProductListing')->with('message','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = Product::find($id);
        $user->delete();
      
        return redirect('ProductsPage')->with('message','deleted');
    }
    public function destroyList($id)
    {
        
        $user = Product::find($id);
        $user->delete();
      
        return redirect('CategoryPageProductListing')->with('message','deleted');
    }

    // public function editReassign($id)
    // {
    //     $user=Product::find($id);
    //     return view("backend.CategoryPageProductListing",compact("user"));
    // }

    // public function reassignList(Request $request,$id)
    // {
    //     $user = Product::find($id);
    //     dd($user);
    //     $user->update(Request::all());
    //     dd($user);
    //     $user->save();
    //     return redirect('CategoryPageProductListing')->with('message','updated');
        
    // }
}
