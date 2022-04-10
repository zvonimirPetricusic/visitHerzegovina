<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\userVisitHerzegovina;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Storage; 
use Session;
use Illuminate\Support\Facades\Hash;
use Validator,Redirect,Response;

class UserController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        $resultsEmail = DB::select('select email from user_visit_herzegovinas where email = :email', ['email' => $credentials['email']]);
        $resultsPassword = DB::select('select password from user_visit_herzegovinas where password = :password', ['password' => sha1($credentials['password'])]);

        if ($resultsEmail==true && $resultsPassword==true ) {
            return view('user.home');
        }else{
            echo "<script> alert('Wrong Creditentials! Please check your e-mail and password!'); </script>";
            return view('home');
        }
        
    }



    public function postRegister(Request $request)
    {  
        $credentials = $request->only('email', 'password');
        $resultsEmail = DB::select('select email from user_visit_herzegovinas where email = :email', ['email' => $credentials['email']]);
        if($resultsEmail){
            echo "<script> alert('The specified email address already exists! Try a new one or log in.'); </script>";
            return view('home');
        }

        if(($request->has('nameSurname') && !empty($request->input('nameSurname'))) && 
            ($request->has('password') && !empty($request->input('password'))) &&
            ($request->has('email') && !empty($request->input('email'))) &&
            ($request->has('confirmPassword') && !empty($request->input('confirmPassword')))) {
            
            $data = $request->all();
            $check = $this->create($data);
            echo "<script> alert('You have successfully registered. An account activation link has been sent to your email address. Please confirm it so you can sign up!'); </script>";
            
            
            
            return view('home');

        } else {
            echo "<script> alert('You have not registered! Check that all data has been entered correctly!'); </script>";
            return view('home');
        }   
    }

    public function dashboard()
    {
 
      if(Auth::check()){
        return view('user.success');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }


    public function create(array $data)
    {


      $user = userVisitHerzegovina::create([
        'nameSurname' => $data['nameSurname'],
        'email' => $data['email'],
        'password' => sha1($data['password'])
      ]);     
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
