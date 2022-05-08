@section('title')
{{ $karir->lowongan }}
@endsection

@extends('layouts.homepage.template')

@section('content')

<div class="container"style="padding-top: 100px">
        <div class="row">
            <div class="col-12 col-lg-9">
            <div class="card">
            <!-- <img src="{{asset('storage/' . $karir->image)}}" class="card-img-top" alt="..."> -->
                <div class="card-body">
                <h2 class="card-title">{{$karir->posisi}}</h2>
                <p class="card-text">{!!$karir->detail!!}</p>
                <button type="submit" class="btn-red btn-danger border-0 d-inline" data-bs-target="#tambah"data-bs-toggle="modal">KirimCV</button>
            </div>
        </div>
</div>
 

            <div class="col-12 col-lg-3" align="center">
            @foreach ($karirs as $karir)
                    <div class="card">
                        <article class="article article-style-b" style="box-shadow: none">
                            <div class="article-header">
                                <div class="article-image" data-background="{{asset('storage/'. $karir->image)}}" style="background-image: url(&quot;{{asset('storage/'. $karir->image)}}&quot;);">
                                </div>
                            </div>
                            <div class="article-details text-dark">
                                <div class="article-title">
                                    <h2><a href=" {{route('detail', $karir) }} " class="text-dark" style="text-decoration: none;">{{ $karir->lowongan }}</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    @include('homepage.karir._form_pelamar')
    @include('sweetalert::alert')
@endsection

