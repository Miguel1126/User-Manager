<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     function __construct()
    {
         $this->middleware('permission:form-list|form-create|form-edit|form-delete', ['only' => ['index','show']]);
         $this->middleware('permission:form-create', ['only' => ['create','store']]);
         $this->middleware('permission:form-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:form-delete', ['only' => ['destroy']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = 0;
        $client = request()->except('_token');
        $client = new Client();
        $client->name = $request->name;
        $client->birth = $request->birth;
        $client->ssn = $request->ssn;
        $client->payor = $request->payor;
        $client->country = $request->country;
        $client->address = $request->address;
        $client->telephone = $request->telephone;
        $client->email = $request->email;
        $client->names = $request->names;
        $client->phone = $request->phone;
        $client->email2 = $request->email2;
        $client->relationship = $request->relationship;
        $client->address2 = $request->address2;
        $client->primaryCareProvider = $request->primaryCareProvider;
        $client->clientPIN = $request->clientPIN;
        $client->race = $request->race;
        $client->ethnicity = $request->ethnicity;
        $client->genderAtBirth = $request->genderAtBirth;
        $client->maritalStatus = $request->maritalStatus;
        $client->household = $request->household;
        $client->language = $request->language;
        $client->employmentStatus = $request->employmentStatus;
        try{
            if ($client->save() <= 0) {
                $errors++;
            }
            if ($client->save() <= 0) {
                $errors++;
            }
            if ($client->save() <= 0) {
                $errors++;
            }
            if ($errors == 0) {
                return view('form');
                return response()->json(['status' => 'OK', 'data' => $client], 201);
              
            } else {
                return response()->json(['status' => 'FAIL', 'data' => $client], 400);
            }

        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::select(
            'clients.id',
            'clients.name',
            'clients.birth',
            'clients.ssn',
            'clients.payor',
            'clients.country',
            'clients.address',
            'clients.telephone',
            'clients.email',
            'clients.race',
            'clients.ethnicity',
            'clients.genderAtBirth',
            'clients.maritalStatus',
            'clients.household',
            'clients.language',
            'clients.employmentStatus',
            'clients.names',
            'clients.phone',
            'clients.email2',
            'clients.relationship',
            'clients.address2',
            'clients.primaryCareProvider',
            'clients.clientPIN',

        )
        ->orderBy('id', 'desc')
        ->get();
        return view('list', ['clients' =>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('edit', compact('client'));
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
        $client = request()->except(['_token', '_method']);
        $client = Client::FindOrFail($id);
        $client->name = $request->name;
        $client->birth = $request->birth;
        $client->ssn = $request->ssn;
        $client->payor = $request->payor;
        $client->country = $request->country;
        $client->address = $request->address;
        $client->telephone = $request->telephone;
        $client->email = $request->email;
        $client->names = $request->names;
        $client->phone = $request->phone;
        $client->email2 = $request->email2;
        $client->relationship = $request->relationship;
        $client->address2 = $request->address2;
        $client->primaryCareProvider = $request->primaryCareProvider;
        $client->clientPIN = $request->clientPIN;
        $client->race = $request->race;
        $client->ethnicity = $request->ethnicity;
        $client->genderAtBirth = $request->genderAtBirth;
        $client->maritalStatus = $request->maritalStatus;
        $client->household = $request->household;
        $client->language = $request->language;
        $client->employmentStatus = $request->employmentStatus;
        try{
            if ($client->save() >= 1) {
                return redirect('/form/show');
                return view('form', compact('client'));
                return response()->json(['status' => 'OK', 'data' => $client], 201);
            }
        }catch(\Exception $e){
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::destroy($id);
        
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
