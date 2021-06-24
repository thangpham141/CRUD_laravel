<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $i = 1;
        $users = User::all();
        return view('user.list',['users'=>$users,"STT"=>$i]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::find($id);
        return response()->json(['data'=>$student,'status'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = DB::table('users')->where('id', $id)->get();
        return view('user.detail',['user'=>$user[0]]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $flight = User::find($id);
        $flight->name = $request->input('name_update');
        $flight->date_of_birth = $request->input('date_of_birth_update');
        $flight->email = $request->input('email_update');
        
        $success =  $flight->save();
        if($success){
            echo "Cập nhật thành công";
        }
        else{
            echo "Cập nhật không thành công";
        }
        

        // $affected = DB::table('users')
        //       ->where('id', $id)
        //       ->update(['name' => $request->name, 
        //                 'date_of_birth'=>$request->date_of_birth, 
        //                 'email'=>$request->email]);
        // return redirect()->route('user.index');

        // $student=User::find($id)->update($request->all());
        // if($student){
        //     print_r($student) ;
        // }
        // else{
        //     return "Cập nhật không thành công";
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
