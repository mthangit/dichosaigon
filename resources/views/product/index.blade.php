@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('search') }}">
            @csrf
            <input type="hidden" name="action" value="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm theo tên sản phẩm..." name="keyword"
                    id="keyword">

                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg></i></button>
                </div>
            </div>
        </form>
        <br />
        <!-- Grid system -->



        <div id="search-result" class="row">
            @foreach ($products as $product)
                <div class='col-md-4 col-sm-6 col-xs-12 thumbnail'>
                    <img class='img-responsive' src='{{ asset($product->ImageLink) }}' style="max-width: 100%;">
                    <p class='product-name'>{{ $product->ProductName }}</p>
                    <p class='product-price'>{{ $product->SalePrice }}</p>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <p>All rights reserved by RaoVat.Com</p>
        </div>
    </div>
    <script src="/resources/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/resources/js/bootstrap.min.js"></script>
@endsection
