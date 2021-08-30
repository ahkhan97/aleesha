<?php
namespace App\Http\Controllers\Dashboard;
use Helper;
use View;
use Auth;
use Illuminate\Support\Str;
use App\Http\Requests\yTableinquiryRequest;
use Illuminate\Http\Request;

use App\Http\Requests\yTablecareerRequest;
use App\Model\imagetable;
use App\Model\inquiry;
use App\Model\m_flag;
use App\Model\User;
use App\Model\wish_list;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('guest');
        $favicon=Helper::OneColData('imagetable','img_path',"table_name='favicon' and ref_id=0 and is_active_img='1'");
        $logo = imagetable::where('table_name','logo')->first();
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);
        View()->share('config',$this->getConfig());
    }
    public function dashboard()
    { 
       
        $user = User::where('id',Auth::id())->with('img_tab')->first(); 
        //dd($user);
        return view('dashboard.index')->with('title','Dashboard')->with(compact('user'))
        ->with('dashMenu',true);
       
    }

    public function editprofile()
    {
        $user = User::where('id',Auth::id())->with('img_tab')->first(); 
        //dd($user);
        return view('dashboard.edit-profile')->with('title','Edit Profile')->with(compact('user'))
        ->with('editProfileMenu',true);
    }

    public function wishlist(Request $request)
    {
       // dd($request->all());
        $wish_list = wish_list::create([
            'user_id' => Auth::id(),
            'person_id' => $request['profile_id'],
            
        ]);

    }

    public function remove_wishlist(Request $request)
    {
        $wish_list = wish_list::where(['user_id'=>Auth::id(),'person_id'=>$request['profile_id']])->delete();
        

    }


    public function saveprofile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lname' => 'required',
            'phone' => 'required'
        ]);  
        $user = User::where('id',Auth::id())->with('img_tab')->first(); 
        $user->name= $request->name;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->save(); 

        if(request()->hasFile('avatar')){
           $avatar = request()->file('avatar')->store('Uploads/avatar/'.Auth::user()->id.rand().rand(10,100), 'public');
           $image = imagetable::updateOrCreate (
               [
                'ref_id' => $user->id,
                'table_name' => 'users',
               ],
            [
            'table_name' => 'users',
            'img_path' => $avatar,
            'ref_id' => $user->id,
            'type' => 1,
            'is_active_img'=>1,
        ]);
         }
        return redirect()->route('dashboard.editProfile')->with('message','Profile Updated!');
    }

    public function passwordchange()
    {
        $user = User::where('id',Auth::id())->with('img_tab')->first(); 
        return view('dashboard.password-change')->with('title','Dashboard')->with(compact('user'))->with('passChangeMenu',true);
    }
    public function userwishlist()
    {
        $user_wishlist = Wish_list::where('user_id',Auth::id())->with(['wish','img_tab'])->get();
        // dd($user_wishlist);
        return view('dashboard.wishlist.index')->with('title','Wishlist')->with(compact('user_wishlist'))->with('wishlistmenu',true);
    
    }

    public function updatepassword(Request $request)
    {
       $validator = $request->validate([
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = User::where('id', Auth::id())->first();
        //dd($user); 
        $user->password = bcrypt($request['password']);
        $user->save();
        return redirect()->route('dashboard.passwordChange')->with('message','Password Updated!');
    }



    

}