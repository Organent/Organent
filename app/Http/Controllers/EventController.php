<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Events;
use App\Http\Requests\StoreEventRequest;
use Illuminate\Support\Facades\Auth;

//$id = Auth::id();

class EventController extends Controller
{

  public function index(){

  $id = Auth::id();
  $events = DB::select('SELECT * FROM events WHERE userId = ?',[$id]);
  return view('event.myevent' , compact('events'));
  }
  public function create(){
    return view('event.create');
  }


  public function store(StoreEventRequest $request)
    {
      $event = new Events();
      $event->name = $request->name;
      $event->price = $request->price;

      if ($request->hasFile('image')) {
        $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path() . '/images/', $filename);

            $event->image = $filename;
        } else {
            $event->image = 'nopic.jpg';
        }
        $event->save();
        return redirect()->action('EventController@index');
        //
    }

    public function detail($id){

      $events = Events::all();
      return view('event.detail', compact('events'));
    }


    //
}
