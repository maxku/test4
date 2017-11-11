{!! Form::open(["id"=>"form", "class"=>"form-horizontal", "url"=>"/task1", "method"=>"get"]) !!}
<div class="form-group">
    {!! Form::label("id","ID",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("id",null,["placeholder" => "Leave empty for default", "class"=>"form-control"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label("level","LEVEL",["class"=>"control-label col-md-3"]) !!}
    <div class="col-md-6">
        {!! Form::text("level",null,["placeholder" => "Leave empty for default", "class"=>"form-control"]) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-push-3">
        {!! Form::button("Get Arrays",["type" => "submit","class"=>"btn btn-primary"])!!}
    </div>
</div>
{!! Form::close() !!}
