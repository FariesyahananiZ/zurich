@extends('layouts.app')
 
@section('content')

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Post Code</th>
            <th>City</th>
            <th>State</th>
            <th>Gender</th>
            <th>Birthdate</th>
            <th>Age</th>
            <th>Occupation</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phoneNum }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->postcode }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->state }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->birthdate }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->occupation }}</td>
        
            <td>
                <form action="{{ route('userDetail.delete',$user->id) }}" method="POST">
   
       
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection
