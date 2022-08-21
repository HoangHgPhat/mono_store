<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Producer;
use App\Models\admin;
use Hash;
use Session;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        return view('admin.home');
    }

    public function cusList()
    {
        $data = Customer::get(); 
        return view('admin.listcus', compact('data'));
    }

    public function addCus()
    {
        $customer = Customer::get();

        return view('admin.addCus',compact('customer'));
    }

    public function save(Request $request)
    {
        $product = new Product();
        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->productImage1 = $request->image1;
        $product->producerID = $request->producer;
        $product->save();

        return redirect()->back()->with('success', 'Product Added Successfully');
    }


    public function addPro()
    {
        return view('type.addPro');
    }

    public function registerProcess(Request $request)
    {
        $customer = new Customer();
        $customer->customerID = $request->username;
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

    public function savePro(Request $request)
    {
        $producer = new Producer();
        $producer->producerID = $request->id;
        $producer->producerName = $request->name;
        $producer->producerCountry = $request->country;
        $res = $producer->save();
        if($res) {
            return back()->with('success', 'Type of product Added Successfully');
        } else {
            return back()->with('fail', 'Something Wrong!');
        }
    }

    public function saveCus(Request $request)
    {
        $customer = new Customer();
        $customer->customerID = $request->username;
        $customer->customerPass = Hash::make($request->password);
        $customer->customerFullname = $request->fullname;
        $customer->customerEmail = $request->email;
        $res = $customer->saveCus();

        return redirect()->back()->with('success', 'Customer Added Successfully');
    }

    public function deleteCus($id)
    {
        Customer::where('CustomerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Customer Deleted Successfully');
    }
    public function deletePro($id)
    {
        Producer::where('ProducerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Type of Product Deleted Successfully');
    }

    public function editPro($id) 
    {
        $data = Producer::where('ProducerID', '=', $id)->first(); // first: gọi ra bản ghi đầu tiên, có nghĩa là chúng ta sẽ lấy ra productID đầu tiên mà admin muốn edit
        // return view('edit', compact('data'));
        $producers = Producer::get();
        return view('type.editPro', compact('data','producers'));
    }

    public function updatePro(Request $request)
    {
        $id = $request->id;
        Producer::where('ProducerID', '=', $id)->update([
            'ProducerName'=>$request->name,
            'ProducerCountry'=>$request->country,
            'ProducerID'=>$request->id
        ]);
        return redirect()->back()->with('success', 'Customer Updated Successfully');
    }

    public function editCus($id) 
    {
        $data = Customer::where('CustomerID', '=', $id)->first(); // first: gọi ra bản ghi đầu tiên, có nghĩa là chúng ta sẽ lấy ra productID đầu tiên mà admin muốn edit
        // return view('edit', compact('data'));
        $customers = Customer::get();
        return view('editCus', compact('data','customers'));
    }

    public function updateCus(Request $request)
    {
        $id = $request->id;
        Customer::where('CustomerID', '=', $id)->update([
            'CustomerPass'=>$request->pass,
            'CustomerFullname'=>$request->name,
            'CustomerEmail'=>$request->email,
            'CustomerID'=>$request->id
        ]);
        return redirect()->back()->with('success', 'Customer Updated Successfully');
    }
    public function producersAdmin()
    {   
        $data = Producer::get();
        return view('type.listpro', compact('data'));
    }

    public function login()
    {
        return view('admin.loginAdmin');
    }
    public function loginProcess(Request $request)
    {
        $admins = admin::where('adminID', '=', $request->username)->first();
        if($admins) {
            if(Hash::check($request->password, $admins->adminPass)) {
                $request->session()->put('loginID', $admins->adminID);
                return redirect('admin');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered!');
        }        
    }

    public function listad()
    {
        $data = admin::get(); 
        return view('admin.listad', compact('data'));
    }
    public function delete($id)
    {
        admin::where('adminID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
    public function add()
    {
        $admins = admin::get();

        return view('admin.addAd',compact('admins'));
    }

    public function adminregisterProcess(Request $request)
    {
        $admins = new admin();
        $admins->adminID = $request->username;
        $admins->adminPass = Hash::make($request->password);
        $admins->adminFullname = $request->fullname;
        $res = $admins->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh no!!! Something wrong!!!');
        }
    }
    public function edit($id) 
    {
        $data = admin::where('adminID', '=', $id)->first(); // first: gọi ra bản ghi đầu tiên, có nghĩa là chúng ta sẽ lấy ra productID đầu tiên mà admin muốn edit
        // return view('edit', compact('data'));
        $admins = admin::get();
        return view('admin.editAd', compact('data','admins'));
    }

    
}
