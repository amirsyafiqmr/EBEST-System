@extends('layout')

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
*********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="border-head">
                <center><h1><b>BOOKING TRACKING</b></h1></center>
            </div>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Enter tracking number here! for track your booking</h4>
                    <form action="{{ route('searchTrack')}}" method="POST" role="search">
                        {{ csrf_field() }}

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                   placeholder="Search users" width="1"> <span class="input-group-btn">
                               <button type="submit" class="btn btn-default">
                                 <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </div>
                    </form>

                    <div class="container">
                        @if(isset($details))
                            <p> The Search results for your book ID <b> {{ $query }} </b> are :</p>
                            <h2>Your Tracking Here...</h2>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Time and Date</th>
                                    <th>Location</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $user)
                                    <tr>
                                        <td>{{$user->dateTimeTrack}}</td>
                                        <td>{{$user->trackLocation}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>















{{--                    <form method="post" action="/search" role="search" class="form-horizontal style-form" enctype="multipart/form-data">--}}

{{--                        @csrf--}}
{{--                        @method('PATCH')--}}


{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-2 col-sm-2 control-label">Venue</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" name="venue" class="form-control @error('venue') is-invalid @enderror" value="{{ $bookings->venue }}">--}}
{{--                                @error('venue')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-2 col-sm-2 control-label">Event Date</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input id="input" width="312" name="eventDate" value="{{ $bookings->eventDate }}" />--}}
{{--                                <script>--}}
{{--                                    $('#input').datetimepicker({ footer: true, modal: true });--}}
{{--                                </script>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="col-sm-2 col-sm-2 control-label">Organizer Phone Number</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text"  name="organizerPno" class="form-control @error('organizerPno') is-invalid @enderror" value="{{ $bookings->organizerPno}}">--}}
{{--                                @error('organizerPno')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <button class="btn btn-round btn-success" type="submit">Confirm</button>--}}

{{--                    </form>--}}
                </div>
            </div>



            <!-- /row -->

        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->


@endsection






