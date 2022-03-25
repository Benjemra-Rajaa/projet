{{-- @extends('layouts.app') --}}
{{-- @section('Css')
    <style>
    </style>
@endsection --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<div class="bg-light p-4 rounded">
    <h1>Show Docteur</h1>
    <form method="post" action="{{ route('showdoc',$docteur->id) }}">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Read
            </div>

            <div class="card-body">
                <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Docteur">
                    <thead>
                        <tr>
                            
                            {{-- <th>
                                ID
                            </th> --}}
                            <th>
                                Name
                            </th>
                            <th>
                                Specialite
                            </th>
                            <th>
                                Adresse
                            </th>
                            <th>
                                telephone
                            </th>
                            <th>
                                email
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                               
                                {{-- <td>
                                    {{ $d->id }}

                                </td> --}}
                                <td>
                                    {{ $docteur->name }}
                                </td>
                                <td>
                                    {{ $docteur->specialite }}
                                </td>
                                <td>
                                    {{ $docteur->adresse }}
                                </td>
                                <td>
                                    {{ $docteur->telephone }}
                                </td>
                                <td>
                                    {{ $docteur->email }}
                                </td>
                                
                            </tr>

                    </tbody>
                </table>


            </div>
        </div>

    </div>
       
    </form>
    <a href="{{ URL::previous() }}" class="btn btn-default" style="background-color:red">Back</a>
</div>


