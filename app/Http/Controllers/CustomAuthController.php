<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('layouts.loginPage');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(url('/'))->withSuccess('Signed in'); //intended(): This method is used to redirect the user to the URL they were attempting to access before being redirected to the login page. It's commonly used in scenarios where a user needs to log in before accessing certain pages. If the user was not redirected from another page, intended() will redirect them to the URL specified as its argument.
        }

        return redirect("login")->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function registration()
    {
        return view('layouts.signupPage');
    }

    public function customRegistration(Request $request)
    {
        // print_r($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // 'user_type' => 'required|in:user,contractor', // Validates if userType is either 'user' or 'contractor'
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'user_type'=> $data['user_type']
        ]);
    }


    public function dashboard()
{
    $user = Auth::user();

    // Use switch statement for clarity and potential future expansion
    switch ($user->user_type) { // Replace 'type' with your actual user type field
        case 'dataEntryUser':
            return redirect()->route('getLabourDetails');
            break;
        // case 'contractor':
        //     return view('contractors.contractorDashboard.index');
        //     break;
        case 'admin':
            return view('dashboard.index');
            break;
        case 'user':
            return view('layouts.dashboard');
            break;
        default:
            // Handle unexpected user types gracefully (optional)
            return redirect('login')->with('error', 'Invalid user type. Please contact support.');
    }
}

    // public function dashboard()
    // {
    //     if (Auth::check()) {
    //         return view('dashboard.index');
    //     }

    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    // for adim panel contractor CRUD
    function getContractors(){
        $contractors = User::contractors()->get();
        return view('contractors.index', compact('contractors'));
        }
    function showContractorsForm(){
        return view('contractors.form');
    }
    function editContractor($id){
        $data['alldata']=User::find($id);
        return view('contractors.edit_form',$data);
    }
    function addContractor(Request $request){
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->user_type = $request->user_type;
        $data->save();
        return redirect()->route('getContractors');
    }
    public function updateContractor(Request $request)
    {
        $id =$request->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->user_type = $request->user_type;
        $data->save();
        return redirect()->route('getContractors');

    }
    public function deleteContractor($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect()->route('getContractors');
    }
// for adim panel user CRUD
function getUsers(){
    $users = User::users()->get(); // is method se bhi condiotion lag jati ha ky user type usera ho 
    return view('users.index', compact('users'));
    }
    function showUserForm(){
        return view('users.form');
    }
    function editUser($id){
        $data['alldata']=User::find($id);
        return view('users.edit_form',$data);
    }
    function addUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->user_type = $request->user_type;
        $data->save();
        return redirect()->route('getUsers');
    }
    public function updateUser(Request $request)
    {$request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);
        $id =$request->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->user_type = $request->user_type;
        $data->save();
        return redirect()->route('getUsers');

    }
    public function deleteUser($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect()->route('getUsers');
    }
    // for adim panel Data entery users CRUD
    function getDataUsers(){
    $dataUsers = User::where('user_type','dataEntryUser')->get();
    return view('dataUsers.index', compact('dataUsers'));
    }
    function showDataUserForm(){
        return view('dataUsers.form');
    }
    function editDataUser($id){
        $data['alldata']=User::find($id);
        return view('dataUsers.edit_form',$data);
    }
    function addDataUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->user_type = $request->user_type;
        $data->save();
        return redirect()->route('getDataUsers');
    }
    public function updateDataUser(Request $request)
    {$request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);
        $id =$request->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->user_type = $request->user_type;
        $data->save();
        return redirect()->route('getDataUsers');

    }
    public function deleteDataUser($id)
    {
        $data =User::find($id);
        $data->delete();
        return redirect()->route('getDataUsers');
    }
}
