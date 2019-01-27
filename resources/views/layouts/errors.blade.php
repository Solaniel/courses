@if (count ($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{('Created Successfully')}}
    </div>
@endif

@if (session('delete'))
    <div class="alert alert-success">
        {{('Deleted Successfully')}}
    </div>
@endif

@if (session('update'))
    <div class="alert alert-success">
        {{('Updated Successfully')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        session {{('error')}}
    </div>
@endif