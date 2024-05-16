<?php

namespace App\Http\Controllers;
  
use App\Models\Brand;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;


class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $brand = brand::latest()->paginate(5);
        
        return view('brand.index',compact('brand'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('brands.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required',
            'create' => 'required',
            'update'=> 'required',
        ]);
        
        brand::create($request->all());
         
        return redirect()->route('brands.index')
                        ->with('success','brand created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(brand $brand): View
    {
        return view('brands.show',compact('brands'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(brand $brand): View
    {
        return view('brands.edit',compact('brands'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, brand $brand): RedirectResponse
    {
        $request->validate([
            'id' => 'required',
            'create' => 'required',
            'update' => 'required',
        ]);
        
        $brand->update($request->all());
        
        return redirect()->route('brands.index')
                        ->with('success','brand updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(brand $brand): RedirectResponse
    {
        $brand->delete();
         
        return redirect()->route('brands.index')
                        ->with('success','brand deleted successfully');
    }
}

