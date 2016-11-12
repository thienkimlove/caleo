@extends('frontend')

@section('content')
    <section class="section fix">
        <div class="layout-home">
            <div class="col-left">
                <!-- BoxContact -->
                <div class="box-dis">
                    <h3 class="global-title">
                        <a href="{{url('product')}}"><span>Xem sản phẩm</span></a>
                    </h3>
                    <div class="area-contact cf">
                        {!! Form::open(array('url' => 'save_question')) !!}
                            <span>Họ và tên:</span><input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên"/>
                            <span>Email:</span><input type="email" name="ask_email" class="txt txt-email" placeholder="Email"/>
                            <span>Số điện thoại:</span><input type="text" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                            <span>Địa chỉ:</span><input type="text" name="ask_address" class="txt txt-add" placeholder="Địa chỉ"/>
                            <span>Nội dung:</span><textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
                            <div class="btn-form">
                                <input type="submit" value="Gửi" class="btn-submit"/>
                                <input type="reset" value="Làm lại" class="btn-submit"/>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="slide-dis">
                        <div class="owl-carousel" id="slide-dis">
                            @foreach ($deliveryProducts as $product)
                            <div class="item">
                                <a class="thumb" href="{{url('product', $product->slug)}}" title="">
                                    <img src="{{url('img/cache/93x93', $product->image)}}"/>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="box-member cf">
                    @foreach ($totalDeliveries as $area => $cities)
                        <div class="title01">{{$area}}</div>
                        <div class="data">
                            @foreach ($cities->chunk(6) as $partCities)
                                <article class="item">
                                    @foreach ($partCities as $city)
                                        <a href="{{url('phan-phoi/'. $city->id)}}" title="">{{config('delivery')['city'][$city->city]}}</a>
                                    @endforeach
                                </article>
                            @endforeach
                        </div>
                    @endforeach
                </div><!--//box-member-->
                <!-- //listButton -->
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán Tuệ Linh</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1900 6482 - 0912 571 190</a></li>
                </ul>
                <!-- EndBoxContact -->
            </div><!--//col-left-->
            @include('frontend.right')
            <div class="clear"></div>
        </div><!--//layout-home-->
        <div class="clear"></div>
    </section><!--//section-->
@endsection