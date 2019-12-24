@extends('layouts.app')

@section('content')
    <section class="content">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="create-suit">Create test suit</a>
                </div>
            </div>
    </section>
@endsection
