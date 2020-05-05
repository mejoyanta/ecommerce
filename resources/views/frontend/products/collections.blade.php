@extends('frontend.layouts.app')

@section('content')
<div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">{{ $meta }}</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="current"><span>Shop {{ $meta }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="content" class="main-content-wrapper">
    <div class="shop-page-wrapper">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                @forelse($datas as $data)
                    <div class="col-md-4">
                        <div class="banner-box banner-type-3 banner-type-3-1 banner-hover-1">
                            <div class="banner-inner">
                                <div class="banner-image">
                                    <img src="/{{$data->image}}" alt="Banner">
                                </div>
                                <div class="banner-info">
                                    {{-- <p class="banner-title-1 lts-13 lts-lg-4 text-uppercase">New Season</p> --}}
                                    <h2 class="banner-title-2">{{ $data->name }}</h2>
                                </div>
                                <a class="banner-link banner-overlay" href="/{{ $meta.'/'.$data->id }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-danger">
                        <h2>Bad luck</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection