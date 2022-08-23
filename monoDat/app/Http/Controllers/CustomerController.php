<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('0905b.register');
    }
    public function registerProcess(Request $request)
    {
        $customer = new Customer();
        $customer->CustomerID = $request->username;
        $customer->customerPass = Hash::make($request->password);
        $customer->customerFullname = $request->fullname;
        $customer->customerEmail = $request->email;
        $res = $customer->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh no!!! Something wrong!!!');
        }
    }
    

    public function login()
    {
        return view('0905b.login2');
    }
    public function loginProcess(Request $request)
    {
        $customer = Customer::where('CustomerID', '=', $request->username)->first();
        if($customer) {
            if(Hash::check($request->password, $customer->CustomerPass)) {
                $request->session()->put('loginIDcus', $customer->CustomerID);
                $request->session()->put('cusname', $customer->CustomerFullname);

                return redirect('products');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered!');
        }        
    }
    public function logout()
    {
        if(Session::has('loginIDcus')) {
            Session::pull('loginIDcus');
            return redirect('public');
        }
    }

    public function getSpecs()
    {
        return view('0905b.specs');
    }
    // --------------------------------------------------------//
    public function indexcus()
    {
        $data = Product::get();
        return view('list-cus', compact('data'));
    }

}
