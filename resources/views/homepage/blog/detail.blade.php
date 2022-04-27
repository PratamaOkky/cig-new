@section('judul', 'Artikel')

@extends('layouts.homepage.template')

@section('content')

<div class="section pt-3">
    <div class="container-fluid px-5">
        <div class="section-header">
            <h1>Artikel</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('/')}}" style="text-decoration: none">Homepage</a></div>
                <div class="breadcrumb-item"><a href=" {{route('blog')}} " style="text-decoration: none">Artikel</a></div>
                <div class="breadcrumb-item">{{\Illuminate\Support\str::limit($art->judul, 7)}}</div>
            </div>
        </div>

        <div class="section-body text-dark">

            <div class="row">
                <div class="col-12 col-md-9 col-lg-9">
                    <div class="card p-4" style="width: 100%">
                        <h2>{{$art->judul}}</h2>
                        <div class="text-dark text-muted py-2 my-2">
                            <span><i class="fas fa-calendar"></i> {{$art->created_at->isoformat('D MMMM Y')}} </span>
                            <span class="separator"> | </span>
                            {{-- <span><i class="fas fa-user"></i> {{$art->user->name}} </span> --}}
                            <span class="separator"> | </span>
                        </div>
                        <img src="{{asset('storage/' . $art->image)}}" class="img" alt="artikel-image">
                        <article class="article" style="box-shadow: none">
                            <div class="article-detail pt-4 text-dark">
                                <p>{!!$art->deskripsi!!}</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3">
                    <h3 class="text-center text-dark bg-white py-2">Artikel Lain</h3>

                    @foreach ($artikels as $artikel)
                    <div class="card">
                        <article class="article article-style-b" style="box-shadow: none">
                            <div class="article-header">
                                <div class="article-image" data-background="{{asset('storage/'. $artikel->image)}}" style="background-image: url(&quot;{{asset('storage/'. $artikel->image)}}&quot;);">
                                </div>
                            </div>
                            <div class="article-details text-dark">
                                <div class="article-title">
                                    <h2><a href=" {{route('detail', $artikel) }} " class="text-dark" style="text-decoration: none;">{{ $artikel->judul }}</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</div>

@endsection

@push('page-css')
<style>
    body {
        background-image: url('../assets/img/unsplash/bg-1.jpg')
    }

    .img {
        height: 200px;
    }

    @media (min-width: 992px) {
    .img {
        height: 500px;
    }
}

</style>
@endpush
