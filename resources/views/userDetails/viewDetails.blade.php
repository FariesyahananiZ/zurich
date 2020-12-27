@extends('base')
@section('main')
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  <table>
  <tr>
    <th>Name</th>

  </tr>
  <tr>
    <td>Name</td>
    <td>{{$data->name}}</td>
  </tr>
  <tr>
  <td>Email</td>
    <td>{{$data->email}}</td>

  </tr>
  <tr>
  <td>Birthdate</td>
  <td>{{$data->birthdate}}</td>

  </tr>
  <tr>
  <td>Age</td>

    <td>{{$data->age}}</td>

  </tr>
  <tr>
  <td>Occupation</td>

    <td>{{$data->occupation}}</td>

  </tr>
  <tr>
  <td>Address</td>

    <td>{{$data->address}}</td>

  </tr>
  <tr>
  <td>Postcode</td>

    <td>{{$data->postcode}}</td>

  </tr>
  <tr>
  <td>City</td>

    <td>{{$data->city}}</td>

  </tr>
  <tr>
  <td>State</td>

    <td>{{$data->state}}</td>

  </tr>
  </table>
<p>DATA SAVED<p>
<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
      <a href="{{ route('userDetail.edit',$data->id) }}">
        <button type="button" name="Details" >{{ __("Edit") }}  </button>
      </a>
    </div>
 </div>
                        

                        @endsection