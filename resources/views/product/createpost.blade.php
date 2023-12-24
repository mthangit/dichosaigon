@extends('layouts.app')
@section('content')
<!-- Place your code at here! -->
<div id="main">
  <div class="container" id="txtStatus">
    <h2>Đăng tin miễn phí</h2>
    <br />
    <form method="POST" action="{{route('store')}}">
      @csrf
      <div class="form-group">
        <label for="txtProductName">Tên sản phẩm</label>
        <input type="text" class="form-control" id="txtProductName" name="txtProductName"
          placeholder="Iphone 6 like new 99%">
      </div>
      <div class="form-group">
        <label for="txtPrice">Giá bán</label>
        <input type="text" class="form-control" id="txtPrice" name="txtPrice" placeholder="8000000">
      </div>
      <div class="form-group">
        <label for="txtCategory">Loại</label>
        <input type="text" class="form-control" id="txtCategory" name="txtCategory" placeholder="Camera,Phone,...">
      </div>
      <div class="form-group">
        <label for="txtImageLink">Link hình ảnh</label>
        <input type="text" class="form-control" id="txtImageLink" name="txtImageLink"
          placeholder="http://static.lazada.vn/p/image-33784-1-product.jpg">
      </div>
      <div class="form-group">
        <label for="txtImageLink">Link sản phẩm</label>
        <input type="text" class="form-control" id="txtProductLink" name="txtProductLink"
          placeholder="http://lazada.vn/product/iphone-8.html">
      </div>
      <br>
      <div class="input-group-btn">
        <button class="btn btn-danger" type="submit">Đăng tin</button>
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
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>
@endsection
