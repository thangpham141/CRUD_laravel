<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        //
        $i = 1;
        $customers = Customer::all();
        return view('customer.index',['customers'=>$customers,"STT"=>$i]);
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
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $success = $customer->save();
        if($success){
            return "Thêm khách hàng thành công";
        }
        else{
            return "Thêm khách hàng không thành công";
        }
        // return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return response()->json(['data'=>$customer,'status'=>'success']);
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
        $customer = DB::table('customers')->where('id', $id)->get();
        return view('user.detail',['user'=>$customer[0]]); 
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
        $flight = Customer::find($id);
        $flight->name = $request->name;
        $flight->date_of_birth = $request->date_of_birth;
        $flight->email = $request->email;
        
        $success =  $flight->save();
        // $flight->update($request->all());
        if($success){
            return "Cập nhật thành công";
        }
        else{
            return "Cập nhật không thành công";
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
        $customer = Customer::find($id);
        $success = $customer->delete();
        if($success){
            return "Xoá thành công!";
        }
        else{
            return "Xoá không thành công!";
        }
    }
}
