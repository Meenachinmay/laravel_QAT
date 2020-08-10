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
            @forelse($document as $item)
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
            @empty
                <h1>Data is deleted</h1>
            @endforelse
            </tbody>
        </table>
        <form action="{{ route('delete', ['id' => $id]) }}" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">Remove Your data</button>
        </form>
    </div>
@endsection
