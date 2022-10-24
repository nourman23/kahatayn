@extends('master')

@section('content')

<section s>
    <div class="container-fluid py-0 px-0">

      <div
      class="container-fluid page-header mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          الملف الشخصي
        </h1>
  </div>
  </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center ">
              <img src="data:image/jpeg;base64,{{  $user->image}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">

              <h5 class="my-3">{{ $user->name }}</h5>
              <p class="text-muted mb-1">متطوع</p>
              <br>
              <a href="{{url('edit/'.$user['id'])}}" class="btn btn-info">Edit</a>
              {{-- <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure?')" >Delete</a> --}}

            </div>



          </div>

        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body"style ="   min-height: 250px;"  >
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">الاسم : </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">البريد الالكتروني : </p>

                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->email }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">رقم الهاتف : </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ $user->phone }}</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    {{-- events section --}}
        <div class="container h-100">
          <h1> -الفعاليات التي قمت بالمشاركة بها</h1>
          @if(session()->has('message'))
    <div class="alert alert-danger m-3">
        {{ session()->get('message') }}
    </div>
@endif
          <div class="row d-flex flex-wrap justify-content-center align-items-center ">

            @foreach ($events as $event)

              <div class="card m-3" style="border-radius: 15px;
              width:35rem;">
                <div class="card-body p-4">

                  <h3 class="mb-3">{{ $event->name }}</h3>
                  <p class="small mb-0"><i class="fas fa-star fa-lg text-warning"></i> <span class="mx-2">|</span>
                    عام <span class="mx-2">|</span> الفعالية في  <strong>{{ $event->location }}</strong> بتاريخ : {{ explode(' ',$event->date)[0] }}
                  </p>
                  <hr class="my-4">
                  <div class="widget-49-meeting-action">
                    <a href="eventDescription/{{ $event->id }}" class="btn btn-sm btn-flash-border-primary">قراءة المزيد</a>
                    <a href="/deleteev/{{$event->id}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">delete</a>

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>


  </section>

@endsection
