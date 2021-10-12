@extends('layout.default')
@section('meta')
    <title>
        Blog - Dhaka Fareast LTD
    </title>
    <meta name="description" content="Read Our blog to know more OEM manufacturing of Workwear, Sportswear, Activewear and Other Clothing.">
    <meta name="keywords" content="Bangladesh Clothing Manufacturer, Underwear Manufacturing, Sportswear Manufacturing, Hooded Sweatshirt Manufacturer, workwear manufacturers, thermal winter nightwear supplier, Sports T-shirts Supplier, Garment Factorie in Bangladesh, garment sourcing, Apparel sourcing, clothing sourcing, Bangladesh T-shirts, Made in Bangladesh,  Activewear Manufacturer, Workwear Manufacturer, knitwear, womenswear, organic clothing, sourcing, organic cotton, apparel & fashion, women's apparel">
@stop
@section('all-stories')
    <section class="all-banner-section">
        <div class="overley"></div>
        <div class="container">
            <div class="banner-header">
                <h1 class="title">Blog</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="product-details">
        <div class="container blog-section">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="blg-single-wrap">
                          <div class="bImg-Wrap">
                            <a href="{{ route('blog_details',$post->slug) }}">
                              <img src="{{ Voyager::image( $post->image ) }}" alt="{{$post->title}}" title="Duis ultricies aliquet mauris" class="img-responsive">
                            </a>
                          </div>
                          <div class="blog-details">
                            <h4 class="title"><a href="{{ route('blog_details',$post->slug) }}">{{$post->title}}</a></h4>
                            <!--<span class="time"><i class="far fa-calendar-alt blog_icon"></i>{{date('d-m-y',strtotime($post->published_date))}}</span>-->

                          </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@section('scripts')

@stop
