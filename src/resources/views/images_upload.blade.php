@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Upload your pan card and aadhar card images (Aadhar card from front and back)</h3>
            </div>
            <div class="panel-body">
                <br />
                <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3" align="right"><h4>Select Images</h4></div>
                        <div class="col-md-6">
                            <input type="file" name="file[]" id="file" accept="image/*" multiple />
                        </div>
                        <div class="col-md-3">
                            <input type="submit" name="upload" value="Upload" class="btn btn-success" />
                        </div>
                    </div>
                </form>
                <br />
                <div class="progress">
                    <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                        0%
                    </div>
                </div>
                <br />
                <div id="success" class="row">
                </div>
                <br />
            </div>
        </div>
    </div>
@endsection

<script>
    $(document).ready(function(){
        $('form').ajaxForm({
            beforeSend:function(){
                $('#success').empty();
                $('.progress-bar').text('0%');
                $('.progress-bar').css('width', '0%');
            },
            uploadProgress:function(event, position, total, percentComplete){
                $('.progress-bar').text(percentComplete + '0%');
                $('.progress-bar').css('width', percentComplete + '0%');
            },
            success:function(data)
            {
                if(data.success)
                {
                    $('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br /><br />');
                    $('#success').append(data.image);
                    $('.progress-bar').text('Uploaded');
                    $('.progress-bar').css('width', '100%');
                }
            }
        });
    });
</script>
