@extends('layouts.item')

@section('item')
    <div class="row">
        <!-- Start product detail -->
        <div class="col-md-4 col-sm-3">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($product->photos as $photo)

                        <li data-thumb="{{$photo->file}}">
                            <img src="{{$photo->file}}" class="img-responsive" alt="" />
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
        <!-- End product detail -->

        <!-- Start product description -->
        <div class="col-sm-5">
            <!-- Start title -->
            <div class="shop-title">
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <h4>{{$product->product_title}}</h4>
                <div class="price"><del>$100</del> <span>${{$product->product_price}}</span></div>
                <span class="product-label">Sale</span>
            </div>
            <!-- End title -->

            <!-- Start tabber -->
            <div class="tab-default">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#desc" role="tab" data-toggle="tab"><i class="fa fa-file-text"></i> Description</a></li>
                    <li role="presentation"><a href="#detail" role="tab" data-toggle="tab"><i class="fa fa-briefcase"></i> Detail</a></li>
                    <li role="presentation"><a href="#review" role="tab" data-toggle="tab"><i class="fa fa-comments"></i> Reviews</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="desc">
                        <h6>Description</h6>
                        <p>
                            {{$product->product_description}}
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="detail">
                        <h6>Item detail</h6>
                        <table class="parameter-product">
                            <tr class="active">
                                <td><strong>{{$product->category->title}}</strong></td>
                                <td>T-Shirt</td>
                            </tr>
                            <tr>
                                <td><strong>Brand</strong></td>
                                <td>Ecada collections</td>
                            </tr>
                            <tr class="active">
                                <td><strong>Material</strong></td>
                                <td>Cotton</td>
                            </tr>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="review">
                        <!-- START - Leave Comments -->
                        <h5>Leave comments</h5>
                        <form class="row">
                            <div class="col-md-6 margin-bottom-30">
                                <input class="form-control" type="text" name="name" placeholder="Enter your full name" />
                            </div>
                            <div class="col-md-6 margin-bottom-30">
                                <input class="form-control" type="text" name="email" placeholder="Enter your e-mail" />
                            </div>
                            <div class="col-md-12 margin-bottom-30">
                                <textarea class="form-control" rows="9" name="message" placeholder="Your comment here"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Your Rating :</label>
                                <div id="start" class="rate" data-rating="1"></div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Leave comment" class="btn-e btn-rounded btn-e-primary" name="Submit" />
                            </div>
                        </form>
                        `
                        <!-- END - Leave Comments -->

                        <!-- START - Comments -->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/testimonials/img.png" alt="" />
                                </a>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="#">John Doe</a></h6>
                                <p>
                                    Sensibus salutandi qualisque vix cu, eu per saperet fastidii. Unum postea alienum vis ei ea vim paulo.
                                </p>
                                <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="img/testimonials/img.png" alt="" />
                                </a>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="#">Jane Roe</a></h6>
                                <p>
                                    Ea meis menandri mei, ex nec malis legendos, quot inani ancillae cu sed. Suas scaevola ius ex aeque.
                                </p>
                                <p class="reply"><a href="#"><i class="icon-link"></i> Reply</a></p>
                            </div>
                        </div>
                        <!-- END - Comments -->
                    </div>
                </div>
            </div>
            <!-- End tabber -->

            <!-- Start buy action -->
            <div class="row margin-top-30">
                <div class="form-group col-sm-6">
                    <select class="form-control">
                        <option>Select color</option>
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Green</option>
                        <option>Yellow</option>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <select class="form-control">
                        <option>Select size</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                </div>

                {{--<div class="form-group col-sm-12">--}}
                    {{--<h6>Quantity :</h6>--}}
                    {{--<!-- Input Order -->--}}
                    {{--<div class="input-group input-group-lg">--}}
                                    {{--<span class="input-group-btn">--}}
                                        {{--<button type="button" class="btn-e btn-e-primary btn-e-number" disabled="disabled" data-type="minus" data-field="quant[1]">--}}
                                            {{--<i class="fa fa-minus"></i>--}}
                                        {{--</button>--}}
                                    {{--</span>--}}
                        {{--<input type="text" name="quant[1]" class="form-control input-number" data-min="1" data-max="10" value="1">--}}
                        {{--<span class="input-group-btn">--}}
                                        {{--<button type="button" class="btn-e btn-e-primary btn-e-number" data-type="plus" data-field="quant[1]">--}}
                                            {{--<i class="fa fa-plus"></i>--}}
                                        {{--</button>--}}
                                    {{--</span>--}}
                    {{--</div>--}}
                    {{--<!-- End Input Order -->--}}
                {{--</div>--}}

                <div class="form-group col-sm-6">
                    {{--<a href="{{route('addProduct',$product->id)}}" class="btn-e btn-e-primary"><i class="icon-cart"></i> Buy now</a>--}}

                    {!! Form::open(['method'=>'POST','action'=>['CartController@addProduct',$product->id],'files'=>'true']) !!}



                    <div class="form-group">

                        {!! Form::submit('ADD',['class'=>'btn-e btn-e-primary'])!!}

                    </div>

                    {!! Form::close() !!}
                </div>

            </div>
            <!-- End buy action -->
        </div>
        <!-- End product description -->

        <!-- Start related product -->
        <div class="col-md-3 col-sm-4">
            <h5>Related products</h5>
            <div class="flexslider1">
                <ul class="slides">
                    <li>
                        <!-- Start product 1 -->
                        <div class="product-wrapper" data-colour='red' data-size='small' data-genre='man'>
                            <div class="img-wrapper">
                                <span class="product-label">Sale</span>
                                <div class="img-caption ecadaZoomIn">
                                    <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="shop_product.html">Product Title</a></h5>
                                    <a href="#" class="img-categorie">Jacket</a>
                                </div>
                                <img src="img/shop/img.png" class="img-responsive" alt="" />
                            </div>
                            <div class="product-title">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5><a href="shop_product.html">Product Purple</a></h5>
                            </div>
                            <div class="product-footer">
                                <div class="price"><del>$100</del> <span>$60</span></div>
                                <div class="buy">
                                    <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                                </div>
                            </div>
                        </div>
                        <!-- End product 1 -->
                    </li>
                    <li>
                        <!-- Start product 3 -->
                        <div class="product-wrapper" data-colour='blue' data-size='large' data-genre='women'>
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomIn">
                                    <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="shop_product.html">Product Title</a></h5>
                                    <a href="#" class="img-categorie">Dress</a>
                                </div>
                                <img src="img/shop/img.png" class="img-responsive" alt="" />
                            </div>
                            <div class="product-title">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5><a href="shop_product.html">Product Green</a></h5>
                            </div>
                            <div class="product-footer">
                                <div class="price"><span>$99</span></div>
                                <div class="buy">
                                    <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                                </div>
                            </div>
                        </div>
                        <!-- End product 3 -->
                    </li>
                    <li>
                        <!-- Start product 4 -->
                        <div class="product-wrapper" data-colour='green' data-size='medium' data-genre='women'>
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomIn">
                                    <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="shop_product.html">Product Title</a></h5>
                                    <a href="#" class="img-categorie">Dress</a>
                                </div>
                                <img src="img/shop/img.png" class="img-responsive" alt="" />
                            </div>
                            <div class="product-title">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5><a href="shop_product.html">Product Black</a></h5>
                            </div>
                            <div class="product-footer">
                                <div class="price"><span>$99</span></div>
                                <div class="buy">
                                    <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                                </div>
                            </div>
                        </div>
                        <!-- End product 4 -->
                    </li>
                    <li>
                        <!-- Start product 5 -->
                        <div class="product-wrapper" data-colour='red' data-size='medium' data-genre='man'>
                            <div class="img-wrapper">
                                <div class="img-caption ecadaZoomIn">
                                    <a href="img/shop/img.png" data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                                    <h5><a href="shop_product.html">Product Title</a></h5>
                                    <a href="#" class="img-categorie">T-Shirt</a>
                                </div>
                                <img src="img/shop/img.png" class="img-responsive" alt="" />
                            </div>
                            <div class="product-title">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5><a href="shop_product.html">Product Red</a></h5>
                            </div>
                            <div class="product-footer">
                                <div class="price"><span>$99</span></div>
                                <div class="buy">
                                    <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                                </div>
                            </div>
                        </div>
                        <!-- End product 5 -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- End related product -->
    </div>

@endsection