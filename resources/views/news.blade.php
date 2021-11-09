@extends('layouts.app')

@section('title-block')New deliveries news
@endsection
@section('title-description')New deliveries news
@endsection

@section('content')
<!-- Blog Section -->
<section id="blog">
    <div class="container-liqud">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <div class="section-title pb-0">
                    <h3 class="mt-0">News</h3>
                    <p style="font-size: large">Below you can examine news about deliveries, to changes in the legislation, payment forms, etc.</p>
                </div>
                <hr style="border-color: gray; border-width: 0.5px" />

                @foreach($obj_news as $item)
                <div class="blog-post-thumb p-3 mt-0">
                    <div class="blog-post-image">
                        <a href="{{route('contact')}}">
                            <img src="{{$item->image}}" class="img-responsive" alt="{{$item->title}}">
                        </a>
                    </div>
                    <div class="blog-post-title">
                        <h3><a href="{{route('contact')}}">{{$item->title}}</a></h3>
                    </div>
                    <div class="blog-post-format">
                        <span><a href="#"><img src="{{$item->author_img}}" class="img-responsive img-circle"> {{$item->author}}</a></span>
                        <span><i class="fa fa-date"></i> {{$item->date}}</span>
                    </div>
                    <div class="blog-post-des">
                        <p>{{$item->body}}</p>
                        {{-- <a href="/" class="btn btn-default">to home</a> --}}
                    </div>
                </div>
                @endforeach

                <div class="text-center">
                    {{ $obj_news->links() }}
                </div>



            </div>



        </div>
    </div>
</section>
@endsection
