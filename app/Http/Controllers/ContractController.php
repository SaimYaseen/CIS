<?php

namespace App\Http\Controllers;

use App\Models\contract;
use App\Models\labourDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function request(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'siteName' => 'required',
            'service' => 'required',
            'siteLocation' => 'required',
            'contract' => 'required | max:1000',
        ]);
        $data=new contract();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->siteName=$request->siteName;
        $data->service=$request->service;
        $data->siteLocation=$request->siteLocation;
        $data->contract=$request->contract;
        $data->save();
        return redirect()->to('/#contractForm')->with('success_message', 'Your request has been sent successfully. Our team will contact you soon. Thank you!');
    }

   // for adim panel contract CRUD
   
   function getContracts(){
    $contracts = contract::get()->all();
    return view('contracts.index', compact('contracts'));
    }
   function getContractsDetail($id){
    $contracts = contract::get()->where('id', $id)->all();
    $data = labourDetails::with('contractWithLabour1')->where('contract_id', $id)->get();
    return view('contracts.siteDetails', compact('contracts','data'));
    }
function showContractForm(){
    return view('contracts.form');
}
function editContract($id){
    $data['alldata']=contract::find($id);
    return view('contracts.edit_form',$data);
}
function addContract(Request $request){
   
    $data = new contract();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->service = $request->service;
    $data->contract = $request->contract;
    $data->siteName = $request->siteName;
    $data->siteLocation = $request->siteLocation;
    $data->matrialDetails = $request->matrialDetails;
    $data->dataEntryUser = $request->dataEntryUser;
    $data->save();
    return redirect()->route('getContracts');
}
public function updateContract(Request $request)
{
    
    $id =$request->id;
    $data=contract::find($id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->service = $request->service;
    $data->contract = $request->contract;
    $data->siteName = $request->siteName;
    $data->siteLocation = $request->siteLocation;
    $data->matrialDetails = $request->matrialDetails;
    $data->dataEntryUser = $request->dataEntryUser;
    $data->save();
    return redirect()->route('getContractsDetail', $id);

}
public function deleteContract($id)
{
    $data =contract::find($id);
    $data->delete();
    return redirect()->route('getContracts');
}
//  relation function for show data on data entry user
 function getLabourDetails() {
    $data = contract::with('contractWithLabour')->get();  //with('contractWithLabour')->
    return view('dataUsers.userDashboard.index', compact('data'));
}
// matrial up date function 
function updataMatrialForm($id){
    $data['alldata']=contract::find($id);
    return view('dataUsers.userDashboard.matrial_update_form',$data);
}
function updataMatrialDetails(Request $request ){
    $id =$request->id;
    $data=contract::find($id);
    $data->matrialDetails = $request->matrialDetails;
    $data->save();
    return redirect()->route('getLabourDetails');
}
}
