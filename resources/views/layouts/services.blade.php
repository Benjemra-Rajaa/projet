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
                <form method="POST" action="{{ route('addNewServ') }}">
                      @csrf
                    <div class="modal-body">
                     
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nom</label>
                          <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="veuillez saisir votre nom">
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
                    Service List
                </div>

                <div class="card-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Service">
                        <thead>
                            <tr>
                                
        
                                <th>
                                    Name
                                </th>
                               
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $d)
                                <tr>
                                   
                               
                                    <td>
                                        {{ $d->name }}
                                    </td>
                                   
                                    <td>
                                        @auth('admin')
                                      <a href="{{ "deleteServ/" . $d->id }}" class="btn btn-default">Supp</a> 
                                      <a href="{{ route('updateserv', $d->id) }}" class="btn btn-default">update</a> 
                                      @endauth
                                      <a href="{{ route('showserv', $d->id) }}" class="btn btn-default">show</a> 
                                     
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
