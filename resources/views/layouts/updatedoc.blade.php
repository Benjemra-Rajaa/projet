<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">edit doc</h1>

        <form method="post" action="{{ route('updatedocpost') }}">
            @csrf
            <div class="form-group">
                <input type="number" name="id" value="{{$doc->id}}" hidden/>
                <label for="stock_name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $doc->name }}" />
            </div>
 
            <div class="form-group">
                <label for="specialite">specialite</label>
                <input type="text" class="form-control" name="specialite" value="{{ $doc->specialite }}" /> 
            </div>
 
            <div class="form-group">
                <label for="value">Adresse</label>
                <input type="text" class="form-control" name="adresse" value="{{ $doc->adresse }}" />
            </div>
            <div class="form-group">
                <label for="value">telephone</label>
                <input type="text" class="form-control" name="telephone" value="{{ $doc->telephone }}" />
            </div>
            <div class="form-group">
                <label for="value">email</label>
                <input type="text" class="form-control" name="email" value="{{ $doc->email }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            
        </form>
    </div>
</div>
{{-- @endsection
    @section('Js')
        <script>

        </script>
    @endsection --}}
