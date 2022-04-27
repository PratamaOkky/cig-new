<x-auth-layout>

    @slot('styles')
        <style>
            #card-login {
                margin: -150px 0 -60px;
            }

            @media (min-width: 992px) {
                .auth-line {
                    border-left: 3px #bb1d33 solid;
                    height: 350px;
                    width: 0px;
                    margin: -430px 675px;
                    position: fixed;
                }

                #card-login {
                    margin: 0;
                }
            }

        </style>
    @endslot

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 d-flex align-items-center mt-5 py-5">
                    <div class="card-content" id="card-login">
                        <div class="card-body mt-5">
                            <h1 class="welcome mb-5 mt-5">Garda Mitra Nasional</h1>
                            <p>Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada tanggal 5 November 2010. Memiliki
                                personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi yang
                                harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 d-flex align-items-center mt-5 py-5">
                    <div class="card-content mb-5" id="card-login">
                        <div class="card-body mt-5">
                            <h1 class="welcome mb-4 mt-5">Login</h1>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group mb-4">
                                    <label for="nip">NIP</label>
                                    <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" size="50" placeholder="Input NIP" value="{{ old('nip') }}">
                                    @error('nip')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <button type="submit" class="btn-red btn-danger"> Masuk <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="auth-line py-1"></div>

    @include('sweetalert::alert')

</x-auth-layout>
