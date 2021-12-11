@extends('school.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: 'Lucida Console'">CRUD Operation for student Management</h2>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Grade</th>
            <th>class</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $management)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $management->name }}</td>
            <td>{{ $management->grade }}</td>
            <td>{{ $management->class }}</td>
            <td>
                <form action="{{ route('school.destroy',$management->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('school.show',$management->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('school.edit',$management->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('school.create') }}"> New Student</a>
            </div>
            
        </div>
    </div>
    
    {!! $products->links() !!}
      
@endsection