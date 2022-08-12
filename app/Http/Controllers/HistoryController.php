<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\History;
use Illuminate\Support\Facades\Redirect;

class HistoryController extends Controller
{
    
    public function historyList(Request $request){

        if($request -> method() == 'POST'){


        }else{

            return view('admin.history', ['title' => "Records", 'userdata' => History::get()]);

        }

    }

    public function historyadd(Request $request){
        if($request -> method() == 'POST'){
            $file = $request->file('image');
            $imageName = $file->getClientOriginalName();
            request()->image->move(public_path().'/uploads/', $imageName); 

            $document = new History([
                'user_id' => $request -> input('user_id'),
                'records' => $request -> input('records'),
                'document' => $imageName,
                'date' => date('Y-m-d', strtotime($request -> input('date'))),
            ]);

            if($document -> save()){
                return redirect::to('/author/history') -> with('successmsg', "Data insert successfully");
            }else{
                return redirect::back() -> with('errmsg', "Insert error. Please try again.");
            }

        }else{
            return view('admin.addhistory', ['title' => "Records", 'userdata' => User::get()]);
                    
        }
    }

    public function historyupdate(Request $request){
        if($request -> method() == 'POST'){


            $document = History::find($request -> get('update_id'));

           

            if($request->file('image') != ''){

                $file = $request->file('image');
                $imageName = $file->getClientOriginalName();
                request()->image->move(public_path().'/uploads/', $imageName); 

                $document -> fill([
                    'user_id' => $request -> input('user_id'),
                    'records' => $request -> input('records'),
                    'document' => $imageName,
                    'date' => date('Y-m-d', strtotime($request -> input('date'))),
                ]);

            }else{
                $document -> fill([
                    'user_id' => $request -> input('user_id'),
                    'records' => $request -> input('records'),
                    'date' => date('Y-m-d', strtotime($request -> input('date'))),
                ]);
            }          

           
            if($document -> save()){
                return redirect::to('/author/history') -> with('successmsg', "Data update successfully");
            }else{
                return redirect::back() -> with('errmsg', "Update error. Please try again.");
            }

        }else{
            return view('admin.updatehistory', ['title' => "Records", 'userdata' => User::get(), 'data'=> History::where('id', $request -> get('update_id'))->first()]);
        }
    }

    public function historydelete(Request $request){
        if($request -> method() == 'POST'){


        }else{

            if($request -> get('id') != ''){
                $user = History::where('id', $request -> get('id'))-> delete();
                return redirect::back() -> with('successmsg', "Data deleted successfully.");
            }
        }
    }


}
