@include('layouts.head')
<form action="{{url('updateavatar')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-lg-12">
            <img style="display:block; margin:0 auto; padding: 20px; width:200px; height:200px"
                 class="img-responsive"
                 src="{{asset($avatar)}}">
        </div>
        <input type="file" name="image" @change="getImage">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-primary btn-lg full-width">Save setting</button>
        </div>
    </div>
</form>
@include('layouts.footer')