@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
          <nav class="admin-menu">
            <ul>
              <li>
                <a {{ $module == 'Home' ? 'class=active' : '' }} href="{{ url('home') }}">Home</a>
              </li>
              <li>
                <a {{ $module == 'Berita' ? 'class=active' : '' }} href="{{ url('/berita') }}">Berita</a>
              </li>
              <li>
                <a {{ $module == 'Kategori' ? 'class=active' : '' }} href="{{ url('/kategori') }}">Kategori</a>
              </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-9 no-padding">
            <div class="card">
                <div class="card-header">{{ $module }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @yield('content_dashboard')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
