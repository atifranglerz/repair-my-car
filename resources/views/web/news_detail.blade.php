@extends('web.layout.app')
@section('content')
<section class="about_connect looking_for lates_news_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="main_content_wraper">
                    <h1 class="sec_main_heading text-center">latest news</h1>
                    <p class="sec_main_para text-center">See what new for you in our portal</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="new_detail_img_wraper">
            <img src="{{asset($news->image)}}" class="card-img-top" alt="Car image">
        </div>
    </div>
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_content_wraper mt-5">
                    <h1 class="sec_main_heading new_detal_heaading mb-lg-5 mb-3 ">{{$news->title}} </h1>
                    <p class="sec_main_para news_detail_paragraph">{!! $news->description !!}</p>
                    <br>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="news_article_date"><span>Updated On: </span>jan 1,2020</p>
            </div>
        </div>
    </div>
</section>
<section class="news_detail_banner">

</section>
@endsection
