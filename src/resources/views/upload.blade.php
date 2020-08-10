@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Upload KYC document</h1>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('upload_doc') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">Name:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Phone no:</label>
                            <input type="text" class="form-control" name="phone_no"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Address:</label>
                            <input type="text" class="form-control" name="address"/>
                        </div>
                        <div class="form-group">
                            <label for="state">Select State:</label>
                            <select name="state" class="form-control"style="width:250px">
                                <option value="">--State--</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Pubjab">Pubjab</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state">Select City:</label>
                            <select name="city" class="form-control"style="width:250px">
                                <option value="">--City--</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Chandigarh">Chandigarh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job_title">Pan card No:</label>
                            <input type="text" class="form-control" name="pan_card_no"/>
                        </div>
                        <div class="form-group">
                            <label for="job_title">Aadhar Card No</label>
                            <input type="text" class="form-control" name="aadhar_card_no"/>
                        </div>
                        <button type="submit" class="btn btn-primary ">Upload</button>
                    </form>
                    <form method="post" action="{{ route('upload_pan_image') }}" enctype="multipart/form-data">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
