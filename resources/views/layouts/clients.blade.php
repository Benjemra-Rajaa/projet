@extends('layouts.app')    
@section('Css')
    <style>
            
    </style>
@endsection
@section('content')
              <main class="main">
        
                    <div style="padding-top: 20px" class="container-fluid">
                                                            <div style="margin-bottom: 10px;" class="row">  
            </div>
            <div class="card">
                <div class="card-header">
                   List User
                </div>
    
                <div class="card-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-User">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                
                                <th>
                                    Email
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                    </thead>
                    <tbody>
                        <tbody>
                            @foreach ($clients as $d)
                                <tr>
                                    <td>
                                        {{ $d->name }}
                                    </td>
                                    <td>
                                        {{ $d->email }}
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
         