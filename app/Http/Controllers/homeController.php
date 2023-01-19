<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\Team;
use App\Models\Client;
use App\Models\adm;


class homeController extends Controller
{
  //Home
   public function home()
  {
    $teamlist=Team::all();
    $reviewlist=Client::all();
    return view('front.booking',['teamlist'=> $teamlist],['reviewlist'=> $reviewlist]);
  }
  //login
  public function login()
  {
    return view('clist.login');
  }
  //Admin
  public function admin()
  {
    return view('layouts.index');
  }
  //Admin Check
  public function admincheck(Request $request)
 {
   $data['password'] = $request->password;
   if(($request->password)==12345)
   {
     return redirect()->route('admin');
   }else{
    return redirect()->route('home');
   }
 }
  //Customer List
  function clist ()
  {
    $booking=booking::all();
    return view('clist.index',['test'=>$booking]); 
  }
  //New Booking
  public function booking(Request $request)
  {
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['sdate'] = $request->sdate;
    $data['edate'] = $request->edate;
    $data['service'] = $request->service;
    booking::create($data);
    return redirect()->to('/');
  }
  
  public function customerDelete($id)
  {
    $Id=booking::where(['id'=>$id])->first();
    if( $Id)
    {
        $Id->delete();
        return redirect()->route('clist');
    }
  }

 
  // Team Create & View & Delete

  public function team()
  {
    $team=team::all();
    return view('team.team',['test'=> $team]);
  }

  public function tCreate()
  {
    return view('team.CreateTeam');
  }

//Create Team
  public function teamCreate(Request $request){
  if(!file_exists(public_path('images')))
  {
      mkdir(public_path('images'),0777,true);
  }
  $image=$request->image;                          
  $name=$image->getClientOriginalName();
  $imagename=time()."_".$name;
  $destination=public_path('images');
  $image->move($destination,$imagename);
  
  $data['image']='images/'.$imagename;
  $data['name']=$request->name;
  $data['designation']=$request->designation;
  $data['address']=$request->address;
  $data['number']=$request->number;
  
  Team::create($data);
  return redirect()->route('team');
  }

  //Team Delete 

  public function teamDelete($id)
  {
    $teamId=team::where(['id'=>$id])->first();
    if( $teamId)
    {
        $teamId->delete();
        return redirect()->route('team');
    }
  }



  // Testimonial Create , Delete

  public function testimonial()
  {
  $client=Client::all();
  return view('testimonial.review',['test'=> $client]);
  }

  public function rCreate()
  {
    return view('testimonial.newReview');
  }

public function reviewCreate(Request $request)
  {
  if(!file_exists(public_path('images'))){
      mkdir(public_path('images'),0777,true);
  }
  $image=$request->image;                          
  $name=$image->getClientOriginalName();
  $imagename=time()."_".$name;
  $destination=public_path('images');
  $image->move($destination,$imagename);
  
  $data['image']='images/'.$imagename;
  $data['name']=$request->name;
  $data['designation']=$request->designation;
  $data['message']=$request->message;
  
  Client::create($data);
  return redirect()->route('testimonial');
  }

  public function reviewDelete($id)
  {
    $Id=Client::where(['id'=>$id])->first();
      if( $Id){
            $Id->delete();
            return redirect()->route('testimonial');
        }
    }

 
  

}
