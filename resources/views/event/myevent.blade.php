@extends('layouts.app')

@section('content')

<div class="row ">
    <div class="col-md-1 ">

    </div>

      <div class="col-md-3 ">
      <div class="bg-6" >
        <center>

        <h1 style="color:white;"> MY EVENT</h1>

        </center>
      </div>

    </div>
          <div class="col-md-7 box4">


          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="q">
              <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  <br />

  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10">
      <div class="row">


    <div class="col-md-4" >
      <div class="card bg-5" style="width:32rem;">

        <a href="#"><img class="card-img-top" src="{{URL::asset('/img/addevent.png')}}"  alt="Card image cap" data-toggle="modal" data-target="#basicModal"></a>


          <center><h4 class="card-title">Add event</h4></center>


      </div>


    </div>





    @foreach ($events as $event)

    <div class="col-md-4">
      <div class="card bg-5" style="width:32rem;">
        <a href="{{ asset('eventsdetail/{id}') }}"><img class="card-img-top " src="{{ asset('images/'.$event->image) }}" width="320" height="180"></a>


          <center><h4 class="card-title">{{ $event->name }}</h4></center>


      </div>

    </div>

    @endforeach
  </div>
  </div>

  <br />

  <div class="col-md-1">

  </div>
  </div>



      <br />

      <div class="row" >
        <div class="col-md-1">

        </div>
        <div class="col-md-10 bg-6">
          <center><h3 style="color:white;">Customer Analysis</h3></center>
        </div>
        <div class="col-md-1">

        </div>


      </div>
      <br />
      <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-3" >
          <div class="card bg-5" style="width:32rem;">
            <img class="card-img-top" src="{{URL::asset('/img/event4.png')}}" alt="Card image cap">

              <center><h4 class="card-title">MaMa Market</h4></center>


          </div>
        </div>
      </div>
      <br />
      <br />

      <div class="modal fade" id="basicModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h2>Create Event</h2>
            </div>
            <div class="modal-body">
              <div class="container">

                {!! Form::open(array('url' => 'events','files' => true)) !!}
                <?= Form::text('name', null, ['class' => 'form-control field-divided', 'placeholder' => 'name']); ?>
                <?= Form::text('price', null, ['class' => 'form-control field-divided', 'placeholder' => 'price']); ?>
                <?= Form::file('image', null, ['class' => 'form-control field-divided'])?>
                <?= Form::submit('บันทึก ', ['class' => 'btn btn-primary']);?> </div>
                {!! Form::close() !!}

            </div>
            </div>
            <div class="modal-footer">
                Please fill your information.
            </div>
        </div>
    </div>
</div>

@endsection
