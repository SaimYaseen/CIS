<?php

namespace App\Http\Controllers;
use App\Models\contract;
use App\Models\labourDetails;
use Illuminate\Http\Request;

class LabourDetailsController extends Controller
{     
    // get labour details function in contract controller
    function showAddWorkerForm($id){
        $data['alldata']=contract::find($id);
        return view('dataUsers.userDashboard.add_worker_form',$data);
    }
    function editWorker($id){
        $data['alldata']=labourDetails::find($id);
        return view('dataUsers.userDashboard.edit_form',$data);
    }
    function addWorker(Request $request){
        $data = new labourDetails();
        $data->name = $request->name;
        $data->fName = $request->fName;
        $data->phone = $request->phone;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->experties = $request->experties;
        $data->workingDays = $request->workingDays;
        $data->labourPaid = $request->labourPaid;
        $data->remaingLabour = $request->remaingLabour;
        $data->contract_id = $request->contract_id;
        $data->save();
        return redirect()->route('getLabourDetails');
    }
    function updateWorker(Request $request)
    {
        $id =$request->id;
        $data=labourDetails::find($id);
        $data->name = $request->name;
        $data->fName = $request->fName;
        $data->phone = $request->phone;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->experties = $request->experties;
        $data->workingDays = $request->workingDays;
        $data->labourPaid = $request->labourPaid;
        $data->remaingLabour = $request->remaingLabour;
        $data->save();
        return redirect()->route('getLabourDetails');
    
    }
    function deleteworker($id)
    {
        $data =labourDetails::find($id);
        $data->delete();
        return redirect()->route('getLabourDetails');
    } 
    // Following functions for adimpanel labour CRUD

    function getAllWorkers(){
        $workers = labourDetails::get()->all();
        return view('workers.index', compact('workers'));
    }
    function editWorkerAdmin($id){
        $data['alldata']=labourDetails::find($id);
        return view('contracts.edit_labour_form',$data);
    }
    function addWorkerAdmin(Request $request){
        $data = new labourDetails();
        $data->name = $request->name;
        $data->fName = $request->fName;
        $data->phone = $request->phone;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->experties = $request->experties;
        $data->workingDays = $request->workingDays;
        $data->labourPaid = $request->labourPaid;
        $data->remaingLabour = $request->remaingLabour;
        $data->save();
        return redirect('getContracts');
    }
    function updateWorkerAdmin(Request $request)
    {
        $id =$request->id;
        $data=labourDetails::find($id);
        $data->name = $request->name;
        $data->fName = $request->fName;
        $data->phone = $request->phone;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->experties = $request->experties;
        $data->workingDays = $request->workingDays;
        $data->labourPaid = $request->labourPaid;
        $data->remaingLabour = $request->remaingLabour;
        $data->save();
        return redirect()->route('getContractsDetail', $data->contract_id);
    
    }
    function deleteworkerAdmin($id)
    {
        $data =labourDetails::find($id);
        $data->delete();
        return redirect()->route('getContractsDetail', $data->contract_id);
    } 
}
