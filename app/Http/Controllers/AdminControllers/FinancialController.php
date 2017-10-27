<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function updateFinancialDB(Request $request){
        $exists = Financial::where('clientID',$request->clientID)->first();
        if ($exists){
            $exists->cost = $request->cost;
            $exists->paid = $request->paid;
            $exists->pricing = $request->pricing;
            $exists->currency = $request->currency;
            $exists->update();
        }
        else {
            $financials = new Financial();
            $financials->cost = $request->cost;
            $financials->paid = $request->paid;
            $financials->pricing = $request->pricing;
            $financials->clientID = $request->clientID;
            $financials->currency = $request->currency;

            $financials->save();
        }
        return back();
    }
    public function financialReport(Request $request){
        $clients = $request->clients;
        $title = 'Financials Report';
        // For displaying filters description on header
        $queryBuilder = Financial::with(['client'=>function($query)use($clients){
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
            'Client' => function($result) {
                return $result->client->username;
            },
//            'Launching Date' => function($result) {
//                return date('j F, Y', strtotime($result->client->registered));
//            },
            'Paid' => function($result){
                return $result->paid .' '. $result->currency;
            },
            'Total' => function($result) {
                return$result->cost .' '. $result->currency;
            },
            'Remaining' => function($result){
                return $result->cost-$result->paid.' '. $result->currency;
            },
            'Payment Method' =>function($result){
                return $result->pricing;
            },
        ];
        return \ExcelReport::of($title, [], $queryBuilder, $columns)->download('Financials Report');
    }
}
