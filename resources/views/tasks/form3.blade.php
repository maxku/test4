{!! Form::open(["id"=>"form3", "class"=>"form-horizontal", "url"=>"/send", "method"=>"post"]) !!}
<div class="form-group">
    {!! Form::label("uid","uid",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("uid",null,["class"=>"form-control"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label("height","height",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("height",null,["class"=>"form-control"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label("weight","weight",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("weight",null,["class"=>"form-control "]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label("detection_date","detection_date",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("detection_date",null,["class"=>"form-control"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label("gps","gps",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("gps",null,["class"=>"form-control"]) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        {!! Form::button("<i class='glyphicon glyphicon-floppy-disk'></i> Save",["type" => "submit","class"=>"btn
    btn-primary"])!!}
        <a href="/task3" class="btn btn-info">To List</a>
    </div>
</div>
{!! Form::close() !!}
