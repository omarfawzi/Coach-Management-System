<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\User;
use Illuminate\Http\Request;


class CoachController extends Controller
{
    private $coachPhotos;

    public function __construct()
    {
        $this->coachPhotos = public_path('assets/images/users/coaches/');
    }

    public function index()
    {
        $clients = Client::where('coachID', auth()->user()->id)->where('deleted',0)->get();
        return view('Admin.Templates.clients', ['clients' => $clients]);
    }

    public function coachProfile(){
        return view('Admin.Templates.coach_profile');
    }

    public function changePassword(Request $request){
        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->new_password);
        $user->update();
        return back();
    }

    public function changePicture(Request $request){
        $user = User::find(auth()->user()->id);
        $picture = $request->file('picture');
        if ($picture) {
            if (file_exists($this->coachPhotos.$user->picture)){
                unlink($this->coachPhotos.$user->picture);
            }
            $imageNo = null;
            if (!User::all()->last())
                $imageNo = 1;
            else
                $imageNo = (User::all()->last()->id) + 1;
            $imageName = $imageNo . $picture->getClientOriginalName();
            $picture->move($this->coachPhotos, $imageName);
            $user->picture = $imageName;
        }
        $user->update();
        return back();
    }

    public function updateData(Request $request){
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->about = $request->about;
        $user->update();

        return back();
    }

    public function report(){
        $clients = Client::where('coachID',auth()->user()->id)->get();
        return view('Admin.Templates.report',['clients'=>$clients]);
    }


}
