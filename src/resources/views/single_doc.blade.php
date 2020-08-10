@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Phone no</th>
                <th scope="col">Pan card</th>
                <th scope="col">Aadhar card</th>
            </tr>
            </thead>
            <tbody>
            @foreach($document as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->state }}</td>
                    <td>{{ $item->phone_no }}</td>
                    <td>{{ $item->pan_card_no }}</td>
                    <td>{{ $item->aadhar_card_no }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
