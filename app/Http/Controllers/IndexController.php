<?php
namespace App\Http\Controllers;
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

class IndexController extends Controller
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
    public function index()
    { 
        // $m_flag = m_flag::find(1965);
        // dd($m_flag->m_flag_main,$m_flag->m_flag_thumb);
        // $banners = Helper::fireQuery("select banner_management.*
        //     ,img_1.img_path as img_1_img
        //     ,img_2.img_path as img_2_img from banner_management 
        //     left join imagetable as img_1 on img_1.ref_id = banner_management.id and img_1.type=1 and img_1.table_name='banner_management'
        //     left join imagetable as img_2 on img_2.ref_id = banner_management.id and img_2.type=1 and img_2.table_name='banner_management_thumb'
        //     where banner_management.is_active=1 and banner_management.is_deleted=0");
        // $deals = Helper::getImageWithData('products','id','',"is_active=1 and is_deleted=0 and product_type='deals'",0,'order by id asc');
        return view('welcome')->with('title',"Home")
        ->with('homeMenu',true);
        //->with(compact('banners','deals'))
    }
public function about()
{
return view('about')->with('title',"Services");
}
   
public function services()
{
   return view('services')->with('title',"Services");
}
   
public function testimonials()
{
   return view('testimonials')->with('title',"Testimonials");
}
   
    public function contactus()
    {
        return view('contact')->with('title','Contact us');
    }
    public function contactusSubmit(yTableinquiryRequest $request){
        
        $validator = $request->validated();
        $inquiry = new inquiry;
        $inquiry->inquiries_name = $request->inquiries_name;
        $inquiry->inquiries_age = $request->inquiries_age;
        $inquiry->inquiries_address = $request->inquiries_address;
        $inquiry->inquiries_email = $request->inquiries_email;
        $inquiry->inquiries_phone = $request->inquiries_phone;
        $inquiry->extra_content = $request->extra_content;
        $inquiry->save();
        $this->echoSuccess("Inquiry Saved");
    }
    public function signupform()
    {
    return view('sign-up')->with('title','Sign Up');
    }

    public function signup(Request $request)
    {
    //    dd($request);
        $validator = $request->validate([
            'name' => 'required|max:255',
            'lname' => 'required|max:255',
            'gender' => 'required|max:255',
            'phone' => 'required|max:255',
            'age' => 'required|max:255',
            'password' => 'required|max:255',
            'confrim-password' => 'required_with:password|same:password',
            'email' => 'required|unique:users|max:255',
            
        ]);

        $user = User::create([
            'name' => $request['fname'],
            'lname' => $request['lname'],
            'age' => $request['age'],
            'phone' => $request['phone'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        Auth::login($user);

     
        return back()->with('notify_success','Registration Successful!');
        
}

public function signinform()
    {
    return view('sign-in')->with('title','Sign In');
    }
public function signin(Request $request)
    {

        $validator = $request->validate([
            'useremail' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);
        if (Auth::attempt(['email' => $request->useremail, 'password' => $request->password])) {
            $user = Auth::user();
           return redirect()->route('home')->with('notify_success','Loggin Successful!');
        }
        else
        {
            return back()->with('notify_error','Invalid Credentials')->with('openLogin',true);
        }
    
    }

    public function signout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home')->with('notify_success','Logged Out!');
    }

}