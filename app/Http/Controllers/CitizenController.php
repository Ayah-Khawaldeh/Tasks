<?php

namespace App\Http\Controllers;

use App\citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citizen');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citizen = Citizen::all();
        return view('citizen',[
            'citizens' => $citizen
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
        $citizen = new Citizen();

        $citizen->fullname=$request->get('fullname');
        $citizen->citizen_gender=$request->get('citizen_gender');
        $citizen->citizen_city=$request->get('citizen_city');
        $citizen->citizen_Nid=$request->get('citizen_Nid');
        $citizen->Number=$request->get('Number');
        $citizen->citizen_address=$request->get('citizen_address');
    //    if($request->file('admin_image')){
    //     $file = $request->file('admin_image');// as $image){
    //         $image = $file->store(
    //             'admins/images',
    //             'public'
    //         );
    //         $admin->admin_image = $image;
    //     }
    $citizen->save();
       return redirect()->route('citizen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show(citizen $citizen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citizen  = Citizen::findOrfail($id);
        return view('edite_citizen ',[
            'citizen'=>$citizen
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $citizen = Citizen::findOrfail($id);
        $citizen->fullname=$request->get('fullname');
        $citizen->citizen_gender=$request->get('citizen_gender');
        $citizen->citizen_city=$request->get('citizen_city');
        $citizen->citizen_Nid=$request->get('citizen_Nid');
        $citizen->Number=$request->get('Number');
        $citizen->citizen_address=$request->get('citizen_address');
    //    if($request->file('admin_image')){
    //     $file = $request->file('admin_image');// as $image){
    //         $image = $file->store(
    //             'admins/images',
    //             'public'
    //         );
    //         $admin->admin_image = $image;
    //     }
       $citizen->save();
       return redirect()->route('citizen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function delete($id)    {
        Citizen::findOrfail($id)->delete();
        return redirect()->route('citizen');
    }

}