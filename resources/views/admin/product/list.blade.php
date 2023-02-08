
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<style>
    .listSP {
        padding: 50px 150px;
       

    }
    .listSP h3 {
        padding: 10px;
        background: #eeee;
        color: #000;
        border-radius:10px


    }
    .listSP img {
        width: 100px;
    }
    .table {
        text-align: center
    }
</style>
<div class="listSP">
    <h3>Danh sách sản phẩm</h3>

<table class="table">
    <thead class="table-light ">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Mã sản phẩm </th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Mã loại sản phẩm</th>
        <th scope="col">Đơn giá</th>
        <th scope="col">Ghi chú</th>
            <th scope="col">Hình ảnh</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>SD1</td>
        <td>Quạt điện thông minh </td>
        <td>@mdo</td>
        <td>600.000 đ</td>
        <td>Quạt điện thông minh thế hệ mới</td>
        <td><img src="{{asset('/images/sp1.jpg')}}" alt=""></td>
        <td> 
<button type="button" class="btn btn-outline-info">Sửa</button>
<button type="button" class="btn btn-outline-danger">Xóa</button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>SD1</td>
        <td>Quạt điện thông minh </td>
        <td>@mdo</td>
        <td>600.000 đ</td>
        <td>Quạt điện thông minh thế hệ mới</td>
        <td><img src="{{asset('/images/sp1.jpg')}}" alt=""></td>
        <td> 
<button type="button" class="btn btn-outline-info">Sửa</button>
<button type="button" class="btn btn-outline-danger">Xóa</button>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>SD1</td>
        <td>Quạt điện thông minh </td>
        <td>@mdo</td>
        <td>600.000 đ</td>
        <td>Quạt điện thông minh thế hệ mới</td>
        <td><img src="{{asset('/images/sp1.jpg')}}" alt=""></td>
        <td> 
<button type="button" class="btn btn-outline-info">Sửa</button>
<button type="button" class="btn btn-outline-danger">Xóa</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
