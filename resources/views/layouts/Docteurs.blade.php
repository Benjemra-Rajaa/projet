@extends('layouts.app')
@section('Css')
    <style>
    </style>
@endsection
@section('content')
    <div class="container">

        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">


        <div style="padding-top: 20px" class="container-fluid">
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    {{-- <a class="btn btn-success" href="http://127.0.0.1:8000/admin/docteurs/newDocteur">
                Add Docteur 
            </a> --}}
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                        Launch Default Modal
                    </button>
                </div>
            </div>

            {{-- Modal --}}
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Default Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form method="POST" action="{{ route('addNewDoc') }}">
                      @csrf

                    <div class="modal-body">
                     
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nom</label>
                          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="veuillez saisir votre nom">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">specialite</label>
                          <input type="text" name="specialite" class="form-control" id="exampleInputEmail1" placeholder="Enter .....">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">adresse</label>
                          <input type="text" name="adresse" class="form-control" id="exampleInputEmail1" placeholder="Enter ......">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Telephone</label>
                          <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" placeholder="Enter .........">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter ........">
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                  </form>

                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

            <div class="card">
                <div class="card-header">
                    Docteur List
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
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docteurs as $d)
                                <tr>
                                   
                                    {{-- <td>
                                        {{ $d->id }}

                                    </td> --}}
                                    <td>
                                        {{ $d->name }}
                                    </td>
                                    <td>
                                        {{ $d->specialite }}
                                    </td>
                                    <td>
                                        {{ $d->adresse }}
                                    </td>
                                    <td>
                                        {{ $d->telephone }}
                                    </td>
                                    <td>
                                        {{ $d->email }}
                                    </td>
                                    <td>
                                      <a href="{{ "deleteDoc/" . $d->id }}" class="btn btn-default">Supp</a> 
                                      <a href="{{ route('updatedoc', $d->id) }}" class="btn btn-default">update</a> 
                                      <a href="{{ route('showdoc', $d->id) }}" class="btn btn-default">show</a> 
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    @endsection
    @section('Js')
        <script>

        </script>
    @endsection
