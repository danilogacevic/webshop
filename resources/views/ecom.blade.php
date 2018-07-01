@extends('layouts.ecom')

@section('gallery')


            <!-- START - Gallery 01 -->

                @foreach($categories as $category)

                                        <div data-filter="
                            @switch($category->slug)
                                        @case('kozni-aksesoari')
                                                web
                                                @break

                                        @case('mobilni-aksesoari')
                                                graphic
                                                @break
                                        @case('poklon-setovi')
                                                app
                                                @break

                                        @default
                                                logo
                            @endswitch " class="grid-item col-md-4 col-sm-6 col-xs-12">
                                            <div class="category-product">
                                                <img src="{{$category->photo->file}}" class="img-responsive" alt="" />
                                                <div class="option-product">
                                                    <h4 class="title">
                                                        {{$category->title}}
                                                    </h4>
                                                    <p>Get discount until 30%</p>
                                                </div>
                                                <a href="{{route('ecom',$category->slug)}}"></a>
                                            </div>
                                        </div>
                                        <!-- END - Gallery 01 -->

                @endforeach


@endsection

@section('products')

    @foreach($products as $product)

            <!-- Start product 1 -->
            <div class="item product-wrapper">
                <div class="img-wrapper">
                    <span class="product-label">Sale</span>
                    <div class="img-caption ecadaZoomIn">
                        <a href="
                        @php
echo ltrim($product->photos()->first()->file,'/');
                        @endphp
                                " data-pretty="prettyPhoto" class="zoomer"><i class="fa fa-search"></i></a>
                        <h5><a href="shop_product.html">{{$product->product_title}}</a></h5>
                        <a href="#" class="img-categorie">{{$product->category->title}}</a>
                    </div>
                    <img src="{{$product->photos()->first()->file}}" class="img-responsive" alt="" />
                </div>
                <div class="product-title">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5><a href="{{route('item',$product->slug)}}">{{$product->product_title}}</a></h5>
                </div>
                <div class="product-footer">
                    <div class="price"><del>$100</del> <span>${{$product->product_price}}</span></div>
                    <div class="buy">
                        <button type="submit"><i class="fa fa-shopping-cart"></i> Buy</button>
                    </div>
                </div>
            </div>
            <!-- End product 1 -->

    @endforeach

@endsection