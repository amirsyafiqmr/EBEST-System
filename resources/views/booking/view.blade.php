@extends('layout')

@section('content')

    <section id="main-content">
        <section class="wrapper">

            <h3><i class="fa fa-angle-right"></i> List Of Equipment</h3>
            <div class="row top-15">
                @include('messages')
                <div class="row">
                    <div class="col-lg-12 ">
                        @foreach($products as $product)
                            <div class="custom-box col-lg-3">
                            <div class="servicetitle">
                                   <img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="img-thumbnail" width="150" />
{{--                                    <img class="card-img-top" src="{{asset($product->getImage())}}" alt="Card image cap">--}}
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="" title="View Product">{{$product->equipName}}</a></h4>
                                        <p class="card-text">Category: {{$product->equipType}}</p>
                                        <p class="card-text">Quantity in Stock: {{$product->equipQuantity}} unit</p>

                                                <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                                    @csrf
                                                    <input name="id" type="hidden" value="{{$product->equip_id}}">
                                                    <label for="lastName">Desired Quantity*: </label>
                                                    <input name="quantity" type="text" /> unit
                                                    <a class="btn btn-danger btn-block">Unit Price: RM {{$product->equipPrice}}</a>
                                                    <button class="btn btn-success btn-block" type="submit">Add to list</button>
                                                </form>
                                    </div>

                            </div>
                            </div>
                        @endforeach
                    </div>
                </div>
             </div>
        </section>
    </section>
@endsection

