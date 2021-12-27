<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner.index');
    }
    public function create()
    {
        $banners = Banner::all();
        return view('admin.banner.create',compact('banners'));
    }
    public function store(Request $request)
    {
        $banners = new Banner();
        $banners-> title = $request->title;
        $banners-> description = $request->description;
        $banners-> status = $request->status;
        $banners-> condition = $request->condition;
        $image = $request->photo;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->photo->move('banners_photo' , $imagename);
        $banners->photo = $imagename;
        $banners->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
    }
    public function update(Request $request,$id)
    {
        $banners = Banner::find($id);
        $banners-> title = $request->title;
        $banners-> description = $request->description;
        $banners-> status = $request->status;
        $banners-> condition = $request->condition;
        $image = $request->photo;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->photo->move('banners_photo' , $imagename);
        $banners->photo = $imagename;
        $banners->update();
        return redirect()->back();
    }
    public function delete($id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect()->back();
    }
}
