@extends('_layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card bg-light border-primary" style="border-radius: 20px">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <img src="assets/images/ori/poto1.jpg" class="img-fluid mb-2" width="100">
                                <h4 class="text-center">Login fans</h4>
                            </div>


                            {{-- Alert ketika success dan error --}}
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-warning">
                                    {{ Session::get('error') }}
                                    @php
                                        Session::forget('error');
                                    @endphp
                                </div>
                            @endif

                            <form action="{{ url("user/process-login") }}" method="POST">
                                @@csrf 
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg" type="button">Login</button>
                                </div>

                                <div class="d-grid gap-2 mt-4 mb-1">
                                    <p class="mb-0">Sudah punya akun?</p>
                                    <a href="{{ url("user/register") }}" class="btn btn-outline-primary">Daftar Member</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
