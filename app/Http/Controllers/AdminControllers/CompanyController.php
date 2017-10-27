<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Group;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $companyPhotos;

    public function __construct()
    {
        $this->companyPhotos = public_path('assets/images/companies/');
    }

    public function addCompany(){
        return view('Admin.Templates.add_company');
    }

    public function addCompanyDB(Request $request){
        $company = new Company();
        $company->name = $request->name;
        $company->manufacture = $request->manufacture;
        $picture = $request->file('picture');
        if ($picture){
            $imageNo = null;
            if (!Company::all()->last())
                $imageNo = 1;
            else
                $imageNo = (Company::all()->last()->id) + 1;
            $imageName = $imageNo . $picture->getClientOriginalName();
            $picture->move($this->companyPhotos, $imageName);
            $company->picture = $imageName;
        }
        $company->save();
        return redirect()->route('companies');
    }

    public function companies(){
        $companies = Company::all();
        return view('Admin.Templates.companies',['companies'=>$companies]);
    }

    public function editCompany(Request $request){
        $groups = Group::all();
        $company = Company::find($request->companyID);
        return view('Admin.Templates.edit_company',['company'=>$company,'groups'=>$groups]);
    }

    public function editCompanyDB(Request $request){
        $company = Company::find($request->companyID);
        $company->name = $request->name;
        $company->manufacture = $request->manufacture;
        $picture = $request->file('picture');
        if ($picture){
            if (file_exists($this->companyPhotos.$company->picture))
                unlink($this->companyPhotos.$company->picture);
            $imageNo = null;
            if (!Company::all()->last())
                $imageNo = 1;
            else
                $imageNo = (Company::all()->last()->id) + 1;
            $imageName = $imageNo . $picture->getClientOriginalName();
            $picture->move($this->companyPhotos, $imageName);
            $company->picture = $imageName;
        }
        $company->update();
        $groups = $request->group;
        Group::where('companyID',$company->id)->delete();
        if ($groups){
            foreach ($groups as $group){
                if (!$group)
                    continue;
                $newGroup = new Group();
                $newGroup->name = $group;
                $newGroup->companyID = $company->id ;
                $newGroup->save();
            }
        }
        return redirect()->route('companies');
    }
}
