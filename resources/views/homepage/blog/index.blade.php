@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

    <style>
        .page-item {
            margin: 0;
        }

    </style>

    <div class="section mx-3">
        <div class="section-body">
            <div class="card mb-0" style="background-color: transparent">
                <div class="container-fluid">
                    <h3 class="text-center text-white pt-3">Artikel</h3>
                    <hr style="width: 10%; border-top: 2px solid white;">
                    <div class="row">
                        @foreach ($artikels as $artikel)
                            <div class="col-12 col-md-3 col-lg-4">
                                <article class="article article-style-c" style="border: 2px solid white;">
                                    <div class="article-header">
                                        <div class="article-image"
                                            data-background="{{ asset('storage/' . $artikel->image) }}"
                                            style="background-image: url(&quot;{{ asset('assets/img/artikel/' . $artikel->image) }}&quot;);">
                                        </div>
                                    </div>
                                    <div class="article-details bg-white text-dark" style="height: 370px">
                                        <div class="article-title" style="min-height: 6rem">
                                            <h2><a href="{{ route('detail', encrypt($artikel->id)) }}"
                                                    class="text-dark"
                                                    style="text-decoration: none;">{{ \Illuminate\Support\str::limit($artikel->judul, 100, '...') }}</a>
                                            </h2>
                                        </div>
                                        <div class="text-blockquote" style="min-height: 4rem">
                                            {!! \Illuminate\Support\str::limit($artikel->isi, 85, '.....') !!}
                                        </div>
                                        <div class="article-user">
                                            <i class="far fa-user-circle"></i>
                                            {{-- <h6 style="display: inline;">{{ $artikel->user->judul }}</h6>
                                            <p class="text-dark">{{ $artikel->kategori->judul }}</p> --}}
                                        </div>
                                        <div class="card-footer px-0">
                                            <div class="float-left">
                                                <i class="fas fa-calendar"></i>
                                                {{ $artikel->created_at->isoformat('D MMMM Y') }}
                                            </div>
                                            <div class="float-right">
                                                <a href="{{ route('detail', $artikel) }}"
                                                    class="text-dark" style="text-decoration: none">Read more <i
                                                        class="fa fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer float-right">
                        {{ $artikels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
