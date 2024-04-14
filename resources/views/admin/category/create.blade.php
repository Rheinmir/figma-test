@extends('admin.admin')

@section('main')

<h1>Add Category</h1>
<form action="{{ route('category.store')}}" method="POST" role="form">
    @csrf
    <div class="col-md-4">

        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" class="form-control" name="name" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Status</label>
            
            <div class="radio">
                <label>
                    <input type="radio" name="status" id="input" value="1" checked="checked">
                    Display
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" id="input" value="0">
                    Hide
                </label>
            </div>
            
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>


@stop()