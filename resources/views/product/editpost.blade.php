@extends('layouts.app')
@section('content')
    <!-- Place your code at here! -->
    <div id="main">
        <div class="container">
            <h2>Chỉnh Sửa Tin</h2>
            <br />
            <form method="POST" action="{{route('update')}}">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="form-group">
                    <label for="txtProductName">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="txtProductName" name="txtProductName" placeholder="Iphone 6 like new 99%"
                        value="{{ $product->ProductName }}">
                </div>
                <div class="form-group">
                    <label for="txtPrice">Giá bán</label>
                    <input type="text" class="form-control" id="txtPrice" name="txtPrice" placeholder="8000000"
                        value="{{ $product->SalePrice }}">
                </div>
                <div class="form-group">
                    <label for="txtCategory">Loại</label>
                    <input type="text" class="form-control" id="txtCategory" name="txtCategory" placeholder="Camera,Phone,..."
                        value="{{ $product->CategoryName }}">
                </div>
                <div class="form-group">
                    <label for="txtImageLink">Link hình ảnh</label>
                    <input type="text" class="form-control" id="txtImageLink" name="txtImageLink"
                        placeholder="http://static.lazada.vn/p/image-33784-1-product.jpg" value="{{ $product->ImageLink }}">
                </div>
                <div class="form-group">
                    <label for="txtImageLink">Link sản phẩm</label>
                    <input type="text" class="form-control" id="txtProductLink" name="txtProductLink"
                        placeholder="http://lazada.vn/product/iphone-8.html" value="{{ $product->ProductLink }}">
                </div>
                <br>
                <div class="input-group-btn">
                    <button class="btn btn-danger" type="submit">Cập Nhật</button>
                </div>
                <br />
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <p>All rights reserved by RaoVat.Com</p>
        </div>
    </div>

    <!-- DO NOT REMOVE THE 2 LINES -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/resources/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/resources/js/bootstrap.min.js"></script>
@endsection
