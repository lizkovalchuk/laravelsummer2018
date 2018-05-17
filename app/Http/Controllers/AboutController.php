<?php
namespace App\Http\Controllers;
use App\Task;


class AboutController extends Controller
{
    public function index(){

        $tasks = Task::all();

 //       $tasks = Task::find($id);
  //      return $tasks;

//        $data = ['name' => 'marie', 'email'=>'marie@humber.ca'];
//        $country = 'Canada';
//        return view('info.about')->with('result', $data)
//                                       ->with('result', $country);

      //  return view('info.about', compact('data', 'country'));

        return view('info.about', ['tasks' => $tasks]);
    }
}