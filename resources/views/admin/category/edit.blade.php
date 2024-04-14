@extends('admin.admin')

@section('main')

<h1>Edit Category</h1>
<form action="{{ route('category.update',$category->id) }}" method="POST" role="form">
    @csrf @method('PUT')
    <div class="col-md-4">

        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" class="form-control" value="{{ $category->name }}" name="name" placeholder="Input field">
        </div>

        <div class="form-group">
            <label for="">Status</label>
            
            <div class="radio">
                <label>
                    <input type="radio" name="status" id="input" value="1" {{ $category->status == 1 ? 'checked' : '' }}>
                    Display
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" id="input" value="0" {{ $category->status == 0 ? 'checked' : '' }}>
                    Hide
                </label>
            </div>
            
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>


@stop()