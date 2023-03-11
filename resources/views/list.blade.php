@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h1>Clients</h1>
                <table id="clients" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Birth</th>
                            <th class="text-center" scope="col">SSN</th>
                            <th class="text-center" scope="col">Payor</th>
                            <th class="text-center" scope="col">Country</th>
                            <th class="text-center" scope="col">Address</th>
                            <th class="text-center" scope="col">Telephone</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Race</th>
                            <th class="text-center" scope="col">Ethnicity</th>
                            <th class="text-center" scope="col">Gender At Birth</th>
                            <th class="text-center" scope="col">Marital Status</th>
                            <th class="text-center" scope="col">Household</th>
                            <th class="text-center" scope="col">Language</th>
                            <th class="text-center" scope="col">Employment Status</th>
                            <th class="text-center" scope="col">Names</th>
                            <th class="text-center" scope="col">Phone</th>
                            <th class="text-center" scope="col">Email</th>
                            <th class="text-center" scope="col">Relationship</th>
                            <th class="text-center" scope="col">Address</th>
                            <th class="text-center" scope="col">Primary Care Provider</th>
                            <th class="text-center" scope="col">Client PIN</th>
                            @can('form-edit')
                            <th class="text-center" scope="col">Edit</th>
                            @endcan
                            @can('form-delete')
                            <th class="text-center" scope="col">Delete</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td class="text-center"><?= $client->name ?></td>
                                <td class="text-center"><?= $client->birth ?></td>
                                <td class="text-center"><?= $client->ssn ?></td>
                                <td class="text-center"><?= $client->payor ?></td>
                                <td class="text-center"><?= $client->country ?></td>
                                <td class="text-center"><?= $client->address ?></td>
                                <td class="text-center"><?= $client->telephone ?></td>
                                <td class="text-center"><?= $client->email ?></td>
                                <td class="text-center"><?= $client->race ?></td>
                                <td class="text-center"><?= $client->ethnicity ?></td>
                                <td class="text-center"><?= $client->genderAtBirth ?></td>
                                <td class="text-center"><?= $client->maritalStatus ?></td>
                                <td class="text-center"><?= $client->household ?></td>
                                <td class="text-center"><?= $client->language ?></td>
                                <td class="text-center"><?= $client->employmentStatus ?></td>
                                <td class="text-center"><?= $client->names ?></td>
                                <td class="text-center"><?= $client->phone ?></td>
                                <td class="text-center"><?= $client->email2 ?></td>
                                <td class="text-center"><?= $client->relationship ?></td>
                                <td class="text-center"><?= $client->address2 ?></td>
                                <td class="text-center"><?= $client->primaryCareProvider ?></td>
                                <td class="text-center"><?= $client->clientPIN ?></td>
                                @can('form-edit')
                                <td>
                                    <a class="btn btn-warning m-1" href="{{ url('/form/'.$client->id.'/edit')}}">Edit</a>
                                </td>
                                @endcan
                                @can('form-delete')
                                <td>
                                    <form action="{{ url('/form/'.$client->id) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-danger m-1" type="submit" onclick="return confirm('Are you sure?')" value="Delete">
                                    </form>
                                </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
