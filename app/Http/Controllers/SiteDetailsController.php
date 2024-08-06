<?php

namespace App\Http\Controllers;

use App\Models\siteDetails;
use App\Models\labourDetails;
use Illuminate\Http\Request;

class SiteDetailsController extends Controller
{
    
    function editWorker($id){
        $data['alldata']=labourDetails::find($id);
        return view('dataUsers.userDashboard.edit_form',$data);
    }
    
    public function updateWorker(Request $request)
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
        return redirect()->route('getSiteDetailsWithLabour');
    
    }
    public function deleteworker($id)
    {
        $data =labourDetails::find($id);
        $data->delete();
        return redirect()->route('getSiteDetailsWithLabour');
    } 
}
