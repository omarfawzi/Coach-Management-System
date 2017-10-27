<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Financial;
use App\Models\Strengthpoint;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $clientPhotos;
    private $strengthPoints;

    public function __construct()
    {
        $this->clientPhotos = public_path('assets/images/users/clients/');
        $this->strengthPoints['Executing']['points'] = ['Achiever','Arranger','Belief','Consistency','Deliberative','Discipline','Focus','Responsibility','Restorative'];
        $this->strengthPoints['Influencing']['points'] = ['Activator','Command','Communication','Competition','Maximizer','Self-Assurance','Significance','Woo'];
        $this->strengthPoints['Relationship Building']['points'] = ['Adaptability','Connectedness','Developer','Empathy','Harmony','Includer','Individualization','Positivity','Relator'];
        $this->strengthPoints['Strategic Thinking']['points'] = ['Analytical','Context','Futuristic','Ideation','Input','Intellection','Learner','Strategic'];
        foreach ($this->strengthPoints['Executing']['points'] as $point){
            $this->strengthPoints[$point]['color'] = 'darkviolet';
        }
        foreach ($this->strengthPoints['Influencing']['points'] as $point){
            $this->strengthPoints[$point]['color'] = 'orange';
        }
        foreach ($this->strengthPoints['Relationship Building']['points'] as $point){
            $this->strengthPoints[$point]['color'] = '#3F58FF';
        }
        foreach ($this->strengthPoints['Strategic Thinking']['points'] as $point){
            $this->strengthPoints[$point]['color'] = 'darkred';
        }
    }
    public function addClients()
    {
        return view('Admin.Templates.add_clients');
    }

    public function addClientsDB(Request $request)
    {
        if ($request->email) {
            $request->validate([
                'email' => 'string|email|max:255|unique:clients',
                'username' => 'required|string|max:255|unique:clients'
            ]);
        } else {
            $request->validate([
                'username' => 'required|string|max:255|unique:clients'
            ]);
        }
        $client = new Client();
        $client->gender = $request->gender;
        $client->username = $request->username;
        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        $client->password = $request->password;
        $client->email = $request->email;
        $client->coachID = auth()->user()->id;
        $client->jobTitle = $request->jobTitle;
        $client->phone = $request->phoneNumber;
        $client->service = $request->service;
        $picture = $request->file('picture');
        if ($picture) {
            $imageNo = null;
            if (!Client::all()->last())
                $imageNo = 1;
            else
                $imageNo = (Client::all()->last()->id) + 1;
            $imageName = $imageNo . $picture->getClientOriginalName();
            $picture->move($this->clientPhotos, $imageName);
            $client->picture = $imageName;
        }
        $client->save();
        $strengths = $request->strengths;
        if ($strengths) {
            foreach ($strengths as $strength) {
                $obj = new Strengthpoint();
                $obj->name = $strength;
                $obj->clientID = $client->id;
                $obj->save();
            }
        }
        return redirect()->route('adminHomePage');
    }

    public function clientProfile($username)
    {
        $client = Client::where('username', $username)->with(['sessions', 'financials','strengthpoints'])->first();
        $financials = new Financial();
        if (count($client->financials) == 0) {
            $financials->cost = 0 ;
            $financials->paid = 0 ;
        }
        else {
            $financials = $client->financials[0];
        }
        return view('Admin.Templates.single_client', ['client' => $client,'financials'=>$financials,'colors'=>$this->strengthPoints]);
    }

    public function removeClient(Request $request){
        $client = Client::where('id',$request->clientID)->with(['sessions','financials','strengthpoints'])->first();
        $picture = $client->picture;
        if (file_exists($this->clientPhotos.$picture)){
            unlink($this->clientPhotos.$picture);
        }
        $client->sessions()->delete();
        $client->financials()->delete();
        $client->strengthpoints()->delete();
        $client->delete();
        return back();
    }

    public function updateStrengthPoints(Request $request){
        Strengthpoint::where('clientID',$request->clientID)->delete();
        $strengths = $request->strengths;
        if ($strengths) {
            foreach ($strengths as $strength) {
                $obj = new Strengthpoint();
                $obj->name = $strength;
                $obj->clientID = $request->clientID;
                $obj->save();
            }
        }
        return back();
    }

    public function updateProfile(Request $request)
    {
        $client = Client::find($request->clientID);
        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        $client->password = $request->password;
        $client->email = $request->email;
        $client->jobTitle = $request->jobTitle;
        $client->phone = $request->phone;
        $client->gender = $request->gender;
        $picture = $request->file('picture');
        if ($picture) {
            if (file_exists($this->clientPhotos.$client->picture)){
                unlink($this->clientPhotos.$client->picture);
            }
            $imageNo = null;
            if (!Client::all()->last())
                $imageNo = 1;
            else
                $imageNo = (Client::all()->last()->id) + 1;
            $imageName = $imageNo . $picture->getClientOriginalName();
            $picture->move($this->clientPhotos, $imageName);
            $client->picture = $imageName;
        }
        $client->update();
        return back();
    }

    public function clientsReport(Request $request){
        $from = $request->from ;
        $to = $request->to ;
        $clients = $request->clients ;
        $title = 'Clients Report';
        $gender = $request->gender;
        $service = $request->service;
        $queryBuilder = Client::where(function($query) use($clients,$gender,$from,$to,$service){
            if ($clients) {
                foreach ($clients as $key => $client) {
                    if ($key == 0)
                        $query->where('id', $client);
                    else
                        $query->orWhere('id', $client);
                }
            }
            if ($gender){
                $query->where('gender',$gender);
            }
            if ($from && $to){
                $query->whereBetween('registered',[new Carbon($from. ' 00:00:00'),new Carbon($to. ' 00:00:00')]);
            }
            if ($service){
                $query->where('service',$service);
            }
        });
        $columns = [
            'First Name'=>function($result){
                return $result->firstName;
            },
            'Last Name'=>function($result){
                return $result->lastName;
            },
            'Username' => function($result) {
                return $result->username;
            },
            'Gender'=>function($result){
              return $result->gender;
            },
            'Phone'=>function($result){
                return $result->phone;
            },
            'Email'=>function($result){
                return $result->email;
            },
            'Launching Date' => function($result) {
                return date('j F, Y', strtotime($result->registered));
            },
            'Job Title'=>function($result){
                return $result->jobTitle;
            },
            'Service' => function($result){
                return $result->service;
            }
        ];

        return \ExcelReport::of($title, [], $queryBuilder, $columns)->download('Clients Report');

    }
}
