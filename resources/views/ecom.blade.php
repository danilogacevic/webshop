@extends('layouts.ecom')

@section('gallery')

    <!-- START - Images Gallery -->
    <div id="gallery" class="masonry gallery">
        <div class="row">
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
                                                <img src="" class="img-responsive" alt="" />
                                                <div class="option-product">
                                                    <h4 class="title">
                                                        Pants <small>/ Fashion</small>
                                                    </h4>
                                                    <p>Get discount until 30%</p>
                                                </div>
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                        <!-- END - Gallery 01 -->

                @endforeach


    @endsection