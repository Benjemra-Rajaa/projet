<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">edit service</h1>

        <form method="post" action="{{ route('updateservpost') }}">
            @csrf
            <div class="form-group">
                <input type="number" name="id" value="{{$serv->id}}" hidden/>
                <label for="stock_name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $serv->name }}" />
            </div>
 
          
            <button type="submit" class="btn btn-primary">update</button>
            
        </form>
    </div>
</div>