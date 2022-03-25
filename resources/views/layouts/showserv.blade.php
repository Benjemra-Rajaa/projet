<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<div class="bg-light p-4 rounded">
    <h1>Show Docteur</h1>
    <form method="post" action="{{ route('showserv',$service->id) }}">
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Read
            </div>

            <div class="card-body">
                <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Docteur">
                    <thead>
                        <tr>
                            
                         
                            <th>
                                Name
                            </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                               
                             
                                <td>
                                    {{ $service->name }}
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