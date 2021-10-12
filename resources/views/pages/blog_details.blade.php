@extends('layout.defaultFW')

@section('title')
    {{$post->seo_title}}
@endsection

@section('all-stories')
    <section class="all-banner-section">
        <div class="overley"></div>
        <div class="container">
            <div class="banner-header">
                <h1 class="title">{{$post->title}}</h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li class="active">{{$post->title}}</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="product-details-section">
        <div class="container">
            <div class="our-sec">
                <div class="services">
                    <div class="blog-details-wrap">
                        <div class="bdeatilsImg-Wrap text-center">
                            <img src="{{ Voyager::image( $post->image ) }}" alt="{{$post->title}}" class="img-responsive">
                        </div>
                        <div class="blogDetails-wrap">
                            <!--<p><span>{{date('d-m-Y',strtotime($post->published_date))}}</span></p>-->
                            <!--<h2 class="title">{{$post->title}}</h2>-->
                            <div id="js_e" class="_5pbx userContent _3576" style="line-height: 1.38; margin-top: 6px; font-family: Helvetica, Arial, sans-serif; color: #1d2129;" data-testid="post_message" data-ft="{&quot;tn&quot;:&quot;K&quot;}">
                                {!!$post->body!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newslatter-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f news-social-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter news-social-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram news-social-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g news-social-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('scripts')

@stop
