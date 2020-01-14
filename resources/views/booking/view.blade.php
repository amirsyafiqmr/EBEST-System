@extends('layout')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <div class="border-head">
                <center><h1><b>MADETILL EVENT MANAGEMENT BOOKING CATALOGUE</b></h1></center>
            </div><BR><BR>
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
                                        <p class="card-text" id="label_{{$product->equip_id}}" name="currQuantity">Quantity in Stock: {{$product->equipCurrentQuantity}} unit</p>

                                                <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                                    @csrf
                                                    <input name="id" type="hidden" value="{{$product->equip_id}}">
                                                    <label for="lastName">Desired Quantity*: </label>
                                                    <input hidden value="{{$product->equipQuantity}}" id="stock_{{$product->equip_id}}" />
                                                    <input class="quantityProduct" id="quantity_{{$product->equip_id}}" name="quantity" type="text" /> unit
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

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Madetill Event Management Sdn. Bhd.</strong>. All Rights Reserved
            </p>
            <div class="credits">
                mem@madetillevent.com.my</div>
            <a href="" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(".quantityProduct").keyup(function(){
            let quantity = $(this).val();
            var myId = $(this).attr('id');
            console.log(myId);
            var id = myId.split('_');
            console.log(id[1]);
            var stock = $('#stock_'+ id[1]).val();
            console.log(stock);
            quantity = stock - quantity;
            console.log(quantity);
            $('#label_'+ id[1]).text('Quantity in Stock: '+quantity + ' Unit');

            var data = {quantity : quantity};

            $.post('/cart-add/booking', {quantity1 : quantity}, 'json');

        })
    </script>
    <!--footer end-->
@endsection

