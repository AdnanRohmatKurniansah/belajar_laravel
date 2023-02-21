<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.carousels.index', [
            'carousels' => Carousel::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.carousels.create', [
            'carousels' => Carousel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:35',
            'desc'  => 'required|max:255:',
            'image' => 'image|file|max:2024'
        ]);  
     
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('carousel-images');
        } // jika tdk ada maka gunakan image lama


        Carousel::create($validatedData);
        
        return redirect('/dashboard/carousels')->with('success', 'New carousel has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('dashboard.carousels.edit', [
            'carousel' => $carousel,
            'carousels' => Carousel::all()
        ]);

        if($carousel->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $rules = [
            'title' => 'required|max:35',
            'desc'  => 'required|max:255:',
            'image' => 'image|file|max:2024'
        ]; 

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('carousel-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('carousel-images');
        } 
        


        Carousel::where('id', $carousel->id)
             ->update($validatedData);
        
        return redirect('/dashboard/carousels')->with('success', 'Carousel has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        if ($carousel->image) {
            Storage::delete($carousel->image);
        }
        
        Carousel::destroy($carousel->id);
        return redirect('/dashboard/carousels')->with('success', 'Carousel has been deleted!');
    }
    
}