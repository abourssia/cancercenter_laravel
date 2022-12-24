<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelEditdate;
use App\Models\Infirmiers;
use App\Models\Medecins;
use App\Models\Pharmaciens;
use App\Models\Laborantines;
use App\Models\Malades;
use App\Models\StaffContract;
use App\Models\StaffAdmin;
use App\Models\StaffTech;
use App\Models\Services;
use App\Models\Speciality;
use App\Models\TypesCancer;
use App\Models\Rendezvous;



class AdminController extends Controller
{
    public function index()
    {
        $cmedecin = Medecins::count();
        $cinfirmiers = Infirmiers::count();
        $cpharmaciens = Pharmaciens::count();
        $claborantines = Laborantines::count();
        $cmalades = Malades::count();
        $cservices = Services::count();

        $cchambre = Malades::distinct()->count('chambre');
        return view('admin.dashboard.index', compact('cmedecin','cservices','cinfirmiers','cchambre','cpharmaciens','claborantines','cmalades'));
    }

    public function Services()
    {
        $medecin = Medecins::all();
        $service = Services::all();
        $infirmiers = Infirmiers::all();

        return view('admin.dashboard.services',compact('medecin','service','infirmiers',));
    }
    public function Medecins()
    {
        $medecin = Medecins::all();
        $service = Services::all();
        $speciality = Speciality::all();
        return view('admin.dashboard.medecins',compact('medecin','service','speciality'));
    }
    public function addService(Request $request) 
    {
        if (Services::where('name', '=', $request['name'] )->count() == 0) {

            $add = new Services();
            $add -> name = $request['name'];
            $add->save();
            return redirect('admin/services') -> with('txt3','Le service a été ajouté avec succès !');
        } else {
            
        return redirect('admin/services') -> with('txt1','Service existe!');

    }
    }
    public function addMedecins(Request $request) 
    {
        if (Medecins::where('med_id', '=', $request['med_id'] )->count() == 0) {

        $add = new Medecins();
        $add -> fname = $request['fname'];
        $add -> lname = $request['lname'];
        $add -> med_id = $request['med_id'];
        $add -> specialization = $request['specilaity'];
        $add -> sexe = $request['sexe'];
        $add -> service = $request['service'];
        $add -> address = $request['address'];
        $add -> phone = $request['phone'];
        $add->save();
        return redirect('admin/medecins') -> with('txt3','Medecin ajoutée(e) avec succès !');
    } else {
            
        return redirect('admin/medecins') -> with('txt1','Medecin existe!');

    }
    }
    public function Infirmeirs()
    {
        $infirmier = Infirmiers::all();
        $service = Services::all();
        $speciality = Speciality::all();


        return view('admin.dashboard.infirmiers',compact('infirmier','service','speciality'));
    }
    public function addInfirmeirs(Request $request) 
    {
        if (Infirmiers::where('inf_id', '=', $request['inf_id'] )->count() == 0) {
        $add = new Infirmiers();
        $add -> name = $request['name'];
        $add -> lname = $request['lname'];
        $add -> inf_id = $request['inf_id'];
        $add -> specilaity = $request['specilaity'];
        $add -> gender = $request['gender'];
        $add -> service = $request['service'];
        $add -> phone = $request['phone'];
        $add->save();
        return redirect('admin/infirmiers') -> with('txt3','Infirmier(e) ajoutée(e) avec succès !');
    } else {
            
        return redirect('admin/infirmiers') -> with('txt1','Infirmier(e) existe!');

    }
    }


    public function Laborantines()
    {
        $laborantine = Laborantines::all();
        return view('admin.dashboard.laborantines',compact('laborantine'));
    }
    public function addLabo(Request $request) 
    {
        if (Laborantines::where('lab_id', '=', $request['lab_id'] )->count() == 0) {

        $add = new Laborantines();
        $add -> name = $request['name'];
        $add -> lab_id = $request['lab_id'];

        $add -> lname = $request['lname'];
        $add -> gender = $request['gender'];
        $add -> phone = $request['phone'];
        $add->save();
        return redirect('admin/laborantines') -> with('txt3','Laborantine ajoutée(e) avec succès !');
    } else {
            
        return redirect('admin/laborantines') -> with('txt1','Laborantine existe!');

    }
    }

    public function Pharmaciens()
    {
        $pharmacien = Pharmaciens::all();
        return view('admin.dashboard.pharmaciens',compact('pharmacien'));
    }
    public function addPharmaciens(Request $request) 
    {
        if (Pharmaciens::where('pharm_id', '=', $request['pharm_id'] )->count() == 0) {
        $add = new Pharmaciens();
        $add -> name = $request['name'];
        $add -> pharm_id = $request['pharm_id'];
        $add -> lname = $request['lname'];
        $add -> gender = $request['gender'];
        $add -> phone = $request['phone'];
        $add->save();
        return redirect('admin/pharmaciens') -> with('txt3','pharmacien(ne) ajoutée(e) avec succès !');
    } else {
            
        return redirect('admin/pharmaciens') -> with('txt1','PHARMACIEN existe!');

    }
    }
    public function Rendezvous(Request $request)
    {

        $appointments = Rendezvous::all();
       
        return view('admin.dashboard.rendezvous', compact('appointments'));
    }

    public function getRDV(Request $request)
    {
        $l = Rendezvous::all();

        return response()->json($l);
    }

    public function getRDV2(Request $request)
    {
        $query = $request->get('query');
        error_log($query);
        $filterResult = Rendezvous::where("title",$query)->get();        
        return response()->json($filterResult[0]);
    }



    public function addRDV(Request $request) 

            {  
                $add = new Rendezvous();
                $add -> title = $request['name_p'].' '.$request['fname_p'];
                $add -> id_p = $request['id_p'];
                $add -> age_p = $request['age_p'];
                $add -> bloodtype_p = $request['bloodtype_p'];
                $add -> date = $request['date'];
                $add -> sexe = $request['sexe'];
                $add -> remarque_event = $request['remarque_event'];
                $add->save();
                return redirect('admin/rendezvous') -> with('txt3','RDV ajouté avec succès !');

             }
    public function Malades()
    {
        $med = Medecins::all();
        $malade = Malades::all();
        $type = TypesCancer::all();
        
        return view('admin.dashboard.malades',compact('malade','med','type'));
    }
    
    
    public function addMalades(Request $request) 
    {



        if (Malades::where('pat_id', '=', $request['pat_id'] )->count() == 0) {
        $add = new Malades();
        $add -> name = $request['name'];
        $add -> lname = $request['lname'];
        $add -> gender = $request['gender'];
        $add -> age = $request['age'];
        $add -> phone = $request['phone'];
        $add -> address = $request['address'];
        $add -> chambre = $request['chambre'];
        $add -> bloodgroup = $request['bloodgroup'];
        $add -> pat_id = $request['pat_id'];
        $add -> maladie = $request['maladie'];
        $add -> id_medecin = $request['id_medecin'];
        $add->save();
        return redirect('admin/patients') -> with('txt3','PATIENT(e) ajoutée(e) avec succès !');
        } else {
            
            return redirect('admin/patients') -> with('txt1','PATIENT existe!');

        }
    }
    public function StaffAdmin()
    {
        $staffadmin = StaffAdmin::all();

        return view('admin.dashboard.staffadmin', compact('staffadmin'));
    }
    public function addStaffAdmin(Request $request)
    {
        if (StaffAdmin::where('admin_id', '=', $request['admin_id'] )->count() == 0) {

        $add = new StaffAdmin();
        $add -> name = $request['name'];
        $add -> admin_id = $request['admin_id'];
        $add -> lname = $request['lname'];
        $add -> gender = $request['gender'];
        $add -> phone = $request['phone'];
        $add -> poste = $request['poste'];
        $poste = $request['poste'];

        $add->save();
        return redirect('admin/staffadmin') -> with('txt3',$poste.' ajoutée(e) avec succès !');
    } else {
            
        return redirect('admin/staffadmin') -> with('txt1','Administrateur existe!');

    }
    }


    public function StaffTech()
    {       
         $stafftech = StaffTech::all();      
        return view('admin.dashboard.stafftech', compact('stafftech'));
    }
    public function addStaffTech(Request $request)
    {
        if (StaffTech::where('tech_id', '=', $request['tech_id'] )->count() == 0) {

        $add = new StaffTech();
        $add -> name = $request['name'];
        $add -> tech_id = $request['tech_id'];
        $add -> lname = $request['lname'];
        $add -> gender = $request['gender'];
        $add -> phone = $request['phone'];
        $add -> poste = $request['poste'];
        $poste = $request['poste'];
        $add->save();
        return redirect('admin/stafftech') -> with('txt3', $poste.
        " ajoutée(e) avec succès !");
    } else {
            
        return redirect('admin/stafftech') -> with('txt1','Administrateur existe!');

    }
    }
    public function StaffContract()
    {
        $contractuel = StaffContract::all();

        return view('admin.dashboard.staffcontract', compact('contractuel'));
    }
    public function addStaffContract(Request $request)
    {
        if (StaffContract::where('contract_id', '=', $request['contract_id'] )->count() == 0) {

            $add = new StaffContract();
            $add -> name = $request['name'];
            $add -> contract_id = $request['contract_id'];
            $add -> lname = $request['lname'];
            $add -> gender = $request['gender'];
            $add -> phone = $request['phone'];
            $add -> poste = $request['poste'];
            $poste = $request['poste'];
            $add->save();
            return redirect('admin/staffcontract') -> with('txt3', $poste.
            " ajoutée(e) avec succès !");
        } else {
                
            return redirect('admin/staffcontract') -> with('txt1','Administrateur existe!');
    
        }
    }


    public function   deletestaffadmin(Request $request) {
        $staffadmin = StaffAdmin::where('id', $request -> id)->delete();
        return redirect('admin/staffadmin') -> with('txt','Administrateur supprimé !');
    }

    public function   deletestaffcontract(Request $request) {
        $contractuel = StaffContract::where('id', $request -> id)->delete();
        return redirect('admin/staffcontract') -> with('txt','Contractuel supprimé !');
    }

    
    public function   deletemedecins(Request $request) {
        $medecins = Medecins::where('id', $request -> id)->delete();
        return redirect('admin/medecins') -> with('txt','Medecin supprimé !');
    }


    
    public function   deletepharmaciens(Request $request) {
        $pharmacien = Pharmaciens::where('id', $request -> id)->delete();
        return redirect('admin/pharmaciens') -> with('txt','Pharmacien supprimé !');
    }


    
    public function   deleteinfirmiers(Request $request) {
        $infirmiers = Infirmiers::where('id', $request -> id)->delete();
        return redirect('admin/infirmiers') -> with('txt','Infirmier supprimé !');
    }


    
    public function   deletepatients(Request $request) {
        $patients = Malades::where('id', $request -> id)->delete();
        return redirect('admin/patients') -> with('txt','Patient supprimé !');
    }

    
    public function   deletestafftech(Request $request) {
        $stafftech = StaffTech::where('id', $request -> id)->delete();
        return redirect('admin/stafftech') -> with('txt','Technicien supprimé !');
    }


    
        
    public function   deletelaborantines(Request $request) {
        $laborantines = Laborantines::where('id', $request -> id)->delete();
        return redirect('admin/laborantines') -> with('txt','Laborantine supprimé !');
    }
    public function   deleteservice(Request $request) {
        $services = Services::where('name', $request -> name)->delete();
        return redirect('admin/services') -> with('txt','Service supprimé !');
    }
}
