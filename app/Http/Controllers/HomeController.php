<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\models\Apartment;
use App\models\UserInformation;
use App\models\VisitingRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index (Request $request)
        {
        $visit=VisitingRequest::where('user_id',$request->user()->id)->first();
        $userinformation=UserInformation::where('user_id',$request->user()->id)->first();
        $users=User::all()->count();
        $apartments=Apartment::all()->count();
        $roles=Role::all()->count();
        $permissions=Permission::all()->count();
        // return $users;
        return view('home',compact('users','apartments','roles','permissions','userinformation'));
        return view('partials.navbar',compact('visit'));

    }
}
