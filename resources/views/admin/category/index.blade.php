@extends('admin.admin')

@section('main')

<h1>Category</h1>
<a href="{{ route('category.create') }}" class="btn btn-success">Add</a>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cats)
        <tr>
            <td>{{ $cats->id }}</td>
            <td>{{ $cats->name }}</td>
            <td>{{ $cats->status == 0 ? 'Hide' : 'Display' }}</td>
            <td>
                <form action="{{ route('category.destroy',$cats->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <a href="{{ route('category.edit',$cats->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop()