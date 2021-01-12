<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hangout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $admins = Admin::all();
      return view('hangout',[
          'hangouts' => $admins
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
        $admin = new Admin();

        $admin->admin_fullname=$request->get('admin_fullname');
        $admin->admin_email=$request->get('admin_email');
        $admin->admin_Number=$request->get('admin_Number');
        $admin->admin_password=$request->get('admin_password');
        $admin->insurance=$request->get('insurance');
       if($request->file('admin_image')){
        $file = $request->file('admin_image');// as $image){
            $image = $file->store(
                'admins/images',
                'public'
            );
            $admin->admin_image = $image;
        }
       $admin->save();
       return redirect()->route('hangout');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrfail($id);
        return view('edit_hangout',[
            'hangout'=>$admin
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $admin = Admin::findOrfail($id);
        $admin->admin_fullname=$request->get('admin_fullname');
        $admin->admin_email=$request->get('admin_email');
        $admin->admin_Number=$request->get('admin_Number');
        $admin->admin_password=$request->get('admin_password');
        $admin->insurance=$request->get('insurance');

       if($request->file('admin_image')){
        $file = $request->file('admin_image');// as $image){
            $image = $file->store(
                'admins/images',
                'public'
            );
            $admin->admin_image = $image;
        }
       $admin->save();
       return redirect()->route('hangout');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function delete($id)    {
        Admin::findOrfail($id)->delete();
        return redirect()->route('hangout');
    }

}
