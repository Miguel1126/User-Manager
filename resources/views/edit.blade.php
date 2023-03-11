@extends('layouts.app')


@section('content')
    <div id="container" class="container-fluid mt-3">
        <div class="m-3">
            <label class="text-danger">Home <span class="text-black">>> Manage Client</span></label>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 class="fw-bold text-center">FACESHEET</h3>
                <form action="{{ url('/form/'.$client->id) }}" method="POST">
                    @csrf
                    {{ method_field('PATCH') }}
                    <h5 class="mt-3 fw-bold">CLIENT INFORMATION</h5>
                    <div class="row g-3 flex-wrap">
                        <div class="col-6 col-md-4">
                            <label>Client Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $client->name }}" name="name" id="name">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Date Of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" value="{{ $client->birth }}" name="birth" id="birth">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>SSN</label>
                            <input type="text" class="form-control" value="{{ $client->ssn }}" name="ssn" id="ssn">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Payor Name <span class="text-danger">*</span></label>
                            <select class="form-select" name="payor"  id="payor">
                                <option value="" selected>Please select</option>
                                <option value="Kevin Ochoa">Kevin Ochoa</option>
                                <option value="Fredy Alvarez">Fredy Alvarez</option>
                                <option value="Miguel Ardon">Miguel Ardon</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Country <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $client->country }}" name="country" id="country">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $client->address }}" name="address" id="address">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Telephone</label>
                            <input type="text" class="form-control" value="{{ $client->telephone }}" name="telephone" id="telephone">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Email</label>
                            <input type="text" class="form-control" value="{{ $client->email }}" name="email" id="email">
                        </div>
                    </div>
                    <h5 class="mt-3 fw-bold">DEMOGRAPHIC</h5>
                    <div class="row g-3 flex-wrap">
                        <div class="col-6 col-md-4">
                            <label>Race <span class="text-danger">*</span></label>
                            <select class="form-select" name="race" id="race">
                                <option value="" selected>Please select</option>
                                <option value="Race_1">Race 1</option>
                                <option value="Race_2">Race 2</option>
                                <option value="Race_3">Race 3</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Ethnicity <span class="text-danger">*</span></label>
                            <select class="form-select" name="ethnicity" id="ethnicity">
                                <option value="" selected>Please select</option>
                                <option value="option_1">Option 1</option>
                                <option value="option_2">Option 2</option>
                                <option value="option_3">Option 3</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Gender At Birth <span class="text-danger">*</span></label>
                            <select class="form-select" name="genderAtBirth" id="genderAtBirth">
                                <option value="" selected>Please select</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Martial Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="maritalStatus" id="maritalStatus">
                                <option value="" selected>Please select</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>

                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Household <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $client->household }}" name="household" id="household">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Preferred Language <span class="text-danger">*</span></label>
                            <select class="form-select" name="language" id="language">
                                <option value="" selected>Please select</option>
                                <option value="english">English</option>
                                <option value="spanish">Spanish</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Employment Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="employmentStatus" id="employmentStatus">
                                <option value="" selected>Please select</option>
                                <option value="employed">Employed</option>
                                <option value=" unemployed">Unemployed</option>
                            </select>
                        </div>
                    </div>
                    <h5 class="mt-3 fw-bold">EMERGENCY CONTACT</h5>
                    <div class="row g-3 flex-wrap">
                        <div class="col-6 col-md-4">
                            <label>Names</label>
                            <input type="text" class="form-control" value="{{ $client->names }}" name="names" id="names">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Phone</label>
                            <input type="text" class="form-control" value="{{ $client->phone }}" name="phone" id="phone">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Email</label>
                            <input type="text" class="form-control" value="{{ $client->email2 }}" name="email2" id="email2">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Relationship</label>
                            <input type="text" class="form-control" value="{{ $client->relationship }}" name="relationship" id="relationship">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Address</label>
                            <input type="text" class="form-control" value="{{ $client->address2 }}" name="address2" id="address2">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Primary Care Provider</label>
                            <input type="text" class="form-control" value="{{ $client->primaryCareProvider }}" name="primaryCareProvider"
                                id="primaryCareProvider">
                        </div>
                        <div class="col-6 col-md-4">
                            <label>Client PIN <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{ $client->clientPIN }}" name="clientPIN" id="clientPIN">
                        </div>
                    </div>
                    <div id="btns">
                        <button class="btn btn-secondary m-1 text-white">Close</button>
                        <input type="submit" class="btn btn-danger m-1 text-white" value="+ Save">
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <p style="float:right">Version 1.0</p>
            <p class="text-center">MANAGEMENT INFORMATION SYSYEM © 2022. All rights reserved.</p>
        </footer>
    </div>
@endsection
