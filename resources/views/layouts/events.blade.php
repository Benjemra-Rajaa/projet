@extends('layouts.app')    
@section('Css')
    <style>

    </style>
@endsection
@section('content')
              <main class="main">
                    <div style="padding-top: 20px" class="container-fluid">
                         <div style="margin-bottom: 20px;" class="row">  
            </div>
            <div class="card">
                <div class="card-header">
                   List event
                </div>
    
                <div class="card-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Event">
                        <thead>
                            <tr>
                                <th>
                                   title
                                </th>
                                
                                <th>
                                    start
                                </th>
                                <th>
                                   end
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                    </thead>
                    <tbody>
                        <tbody>
                            @foreach ($events as $d)
                                <tr>
                                    <td>
                                        {{ $d->title }}
                                    </td>
                                    <td>
                                        {{ $d->start }}
                                    </td>
                                    <td>
                                        {{ $d->end}}
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
         