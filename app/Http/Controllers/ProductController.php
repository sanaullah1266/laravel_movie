<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function movieform()
    {
        return view("Admin.Movieform");
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
DB::table("products")->insert([

    "Movie_Title" => $request->Movie_Title,
    "Movie_Image" => $request->Movie_Image,
    "Movie_Category" => $request->Movie_Category,
    "Movie_Description" => $request->Movie_Description,
]);
return redirect(route("movieform"))->with("fine","data has been inserted");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $product = DB::table("products")->get();
        return view("Admin.Updateform",['product' =>$product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function checkout(){
  return view("checkout");
    }
}

//checkout route are here
