@extends('layout.default')
@section('meta')
    <title>
        {{$product->seo_title}}
    </title>
    <meta name="description" content="{{$product->meta_description}}">
    <meta name="keywords" content="{{$product->meta_keyword}}">
@stop
@section('all-stories')

    <section class="product-details-section">
        <div class="container">
            <div class="back-btn">
                <a href="/product" class="btn product-btn">Back to product</a>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="product-img">
                        <img src="{{ Voyager::image( $product->product_img ) }}" class="img-responsive" alt="{{$product->product_title}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                    <div class="products-info">
                        <h1 class="title">{{$product->product_title}}</h1>
                        <p><span><strong>Type</strong>: &nbsp; {{$product->product_type}}</span></p>
                        <p><span><strong>Fabrication</strong>: &nbsp;{{$product->product_fabrication}}</span></p>
                        <p><span><strong>Description</strong>: &nbsp;{!! $product->product_details !!}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('scripts')

@stop


