<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use stdClass;

class SessionController extends Controller
{
    public function addSessions()
    {
        $clients = Client::where('coachID', auth()->user()->id)->get();
        return view('Admin.Templates.add_sessions', ['clients' => $clients]);
    }

    public function addSessionsDB(Request $request)
    {
        $startDate = $request->date . ' ' . $request->startTime;
        $endDate = $request->date . ' ' . $request->endTime;
        $session = new Session();
        $session->startDate = date("Y-m-d H:i:s", strtotime($startDate));
        $session->endDate = date("Y-m-d H:i:s", strtotime($endDate));;
        $session->coachID = auth()->user()->id;
        $session->clientID = $request->clientID;
        $session->save();
        return redirect()->route('sessions');
    }

    public function sessions()
    {
        $sessions = Session::where('coachID', auth()->user()->id)->with(['client'])->orderBy('startDate')->get();
        $arr = [];
        foreach ($sessions as $session) {
            $temp['year'] = $session->startDate->format('Y');
            $temp['month'] = $session->startDate->format('m');
            $temp['day'] = $session->startDate->format('d');
            $temp['title'] = $session->client->firstName . ' ' . $session->client->lastName;
            $temp['startHour'] = $session->startDate->format('H');
            $temp['startMin'] = $session->startDate->format('i');
            $temp['finishHour'] = $session->endDate->format('H');
            $temp['finishMin'] = $session->endDate->format('i');
            $temp['url'] = route('updateSession', ['sessionID' => $session->id]);
            $arr[] = $temp;
        }
        return view('Admin.Templates.sessions', ['sessions' => $arr]);
    }

    public function updateSession($sessionID)
    {
        $clients = Client::where('coachID', auth()->user()->id)->get();
        $object = new stdClass();
        $session = Session::find($sessionID);
        $object->date = $session->startDate->format('Y-m-d');
        $object->startTime = date('h:i A', strtotime($session->startDate));
        $object->endTime = date('h:i A', strtotime($session->endDate));
        $object->clientID = $session->clientID;
        $object->sessionID = $sessionID;
        $object->description = $session->description;
        return view('Admin.Templates.update_sessions', ['object' => $object, 'clients' => $clients]);
    }

    public function updateSessionDB(Request $request)
    {
        $session = Session::find($request->sessionID);
        $startDate = $request->date . ' ' . $request->startTime;
        $endDate = $request->date . ' ' . $request->endTime;
        $session->startDate = date("Y-m-d H:i:s", strtotime($startDate));
        $session->endDate = date("Y-m-d H:i:s", strtotime($endDate));;
        $session->coachID = auth()->user()->id;
        $session->clientID = $request->clientID;
        $session->description = $request->description;
        $session->update();
        return back();
    }

    public function deleteSessionDB($sessionID)
    {
        Session::where('id', $sessionID)->delete();
        return redirect()->route('sessions');
    }

    public function sessionReport(Request $request){
        $from = $request->from ;
        $to = $request->to ;
        $clients = $request->clients ;
        $title = 'Sessions Report';
        $queryBuilder = Session::where(function($query) use($from,$to){
            if ($from && $to){
                $query->whereBetween('registered',[new Carbon($from. ' 00:00:00'),new Carbon($to. ' 00:00:00')]);
            }

        })->with(['client'=>function($query) use($clients){
            if ($clients) {
                foreach ($clients as $key => $client) {
                    if ($key == 0)
                        $query->where('id', $client);
                    else
                        $query->orWhere('id', $client);
                }
            }
        }]);
        $columns = [
            'Username'=>function($result){
              return $result->client->username;
            },
            'Date' => function($result) {
                return date('j F, Y', strtotime($result->startDate));
            },
            'From' => function($result){
                return date('g:i a', strtotime($result->startDate));
            },
            'To' => function($result){
                return date('g:i a', strtotime($result->endDate));
            }
        ];

        return \ExcelReport::of($title, [], $queryBuilder, $columns)->download('Sessions Report');

    }
}
