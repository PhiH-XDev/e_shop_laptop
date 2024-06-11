@extends('admin.layoutadmin')
@section('tieuDes', 'admin')
@section('adminconten')
    <main class="app-content">

        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><a href="index.php?page=bangsp">Danh sách sản phẩm</a></li>
                <li class="breadcrumb-item"><a href="index.php?page=sanpham">Thêm sản phẩm</a></li>
            </ul>
            <div id="clock"></div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger m-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="/admin/addsp" title="Thêm">
                                    <i class="fas fa-plus"></i> Tạo mới Sản phẩm
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)">
                                    <i class="fas fa-trash-alt"></i> Xóa tất cả
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <select id="selLoai" class="py-1 px-3 shadow-none" onchange="locsp(this.value)">
                                    <option value="-1">Lọc theo NSX</option>
                                    @foreach ($loai_arr as $loai)
                                        <option value="{{ $loai->id }}" {{ $loai->id == $id_loai ? 'selected' : '' }}>
                                            {{ $loai->ten_loai }}
                                        </option>
                                    @endforeach
                                </select>
                                <script>
                                    function locsp(id_loai) {
                                        document.location = `/admin/sanphamde?id_loai=${id_loai}`;
                                    }
                                </script>


                            </div>
                            <div class="col-sm-2">
                                <select id="trangthai" class="py-1 px-3 shadow-none"  onchange="loctrangthai(this.value)">
                                    <option value="chuaxoa" {{$trangthai == "chuaxoa"? "selected":""}}>Sản phẩm hiện hành</option>
                                    <option value="daxoa" {{$trangthai == "daxoa"? "selected":""}}>Sản phẩm đã xóa</option>
                                 </select>

                                 <script>
                                    function loctrangthai(tt){
                                        document.location=`/admin/sanphamde?trangthai=${tt}`;
                                    }
                                    </script>

                            </div>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                                border="0"id="sampleTable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="all"></th>
                                        <th>Ẩn Hiện</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Avatar</th>
                                        <th>Giá</th>
                                        <th>Số Lượng</th>
                                        <th>View</th>
                                        <th>Tính năng</th>
                                        <th>Tính năng</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($sanpham_arr as $sp)
                                        <tr data-id="{{ $sp->id }}">
                                            <td><input type="checkbox" name="check1" value="1"></td>
                                            {{-- <td>{{ $sp->id }}</td> --}}
                                            <td>
                                                Ẩn hiện: {{ $sp->an_hien == 0 ? 'Đang ẩn' : 'Đang hiện' }} <br>
                                                Nổi bật: {{ $sp->hot == 0 ? 'Bình thường' : 'Nổi bật' }}
                                            </td>
                                            <td>{{ $sp->ten_sp }}</td>
                                            <td>
                                                @if (substr($sp->hinh, 0, 8) == 'https://')
                                                    <img class="img-card-person" src="{{ $sp->hinh }}" width="120" height="80">
                                                @else
                                                    <img class="img-card-person" src="{{ url('/') . '/' . $sp->hinh }}" width="120" height="80">
                                                @endif
                                            </td>
                                            <td>{{ number_format($sp->gia, 0, ',', '.') }}</td>
                                            {{-- <td>{{ $sp->soluong }}</td> --}}
                                            <td>{{ $sp->luot_xem }}</td>
                                            <td class="table-td-center">
                                                <button class="btn btn-primary btn-sm trash" type="button"
                                                    data-id="{{ $sp->id }}" title="Xóa">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                            <td class="table-td-center">
                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                                    data-toggle="modal" data-target="#ModalUP"
                                                    data-id="{{ $sp->id }}" data-name="{{ $sp->ten_sp }}"
                                                    data-img="{{ $sp->hinh }}" data-gia="{{ $sp->gia }}"
                                                    data-giakm="{{ $sp->gia_km }}" data-ngay="{{ $sp->ngay }}"
                                                    data-soluong="{{ $sp->soluong }}" data-view="{{ $sp->luot_xem }}" cái
                                                    form model đâu>
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>







    <!--
            MODAL
          -->
    <div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
        data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <form id="editForm" method="POST" action="{{ route('sanpham.update', ['id' => $sp->id]) }}"
                    data-original-action="{{ route('sanpham.update', $sp->id) }}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <span class="thong-tin-thanh-toan">
                                    <h5>Chỉnh sửa sản phẩm</h5>
                                </span>
                            </div>
                        </div>
                        {{-- <input type="text" id="id" name="id" value="{{old('id', $sp->id)}}"> --}}

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Tên</label>

                                <input class="form-control" id="ten_sp" name="ten_sp" type="text" value="">
                            </div>
                            {{-- <div class="form-group col-md-6">
                                <label class="control-label">Ngày</label>
                                <input class="form-control" id="ngay" name="ngay" type="date" value="">
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label class="control-label">Giá</label>
                                <input class="form-control" id="giasp" name="gia" type="text"
                                    value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Giá khuyến mãi</label>
                                <input class="form-control" id="giakm" name="gia_km" type="text"
                                    value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Ảnh</label>
                                <input class="form-control" id="img" name="hinh" type="file"
                                    value="">
                            </div>
                        </div>
                        <div id="errorMessages" style="color: red;"></div>
                        <button class="btn btn-save" type="submit">Lưu lại</button>
                        <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                    </div>
                    <div class="modal-footer"></div>
                </form>
            </div>
        </div>
    </div>


    <!--
            MODAL
          -->
    <script>
        document.getElementById("editForm").addEventListener("submit", function(event) {
            var ten = document.getElementById("userName").value;
            var gia = document.getElementById("gia").value;
            var soluong = document.getElementById("soluong").value;
            var view = document.getElementById("view").value;
            var img = document.getElementById("img").value;

            var errors = [];

            if (ten === '') {
                errors.push("Vui lòng nhập Tên");
            }

            if (gia === '') {
                errors.push("Vui lòng nhập Giá");
            }

            if (soluong === '') {
                errors.push("Vui lòng nhập Số lượng");
            } else if (isNaN(soluong)) {
                errors.push("Số lượng phải là số");
            }

            if (view === '') {
                errors.push("Vui lòng nhập View");
            }

            if (img === '') {
                errors.push("Vui lòng chọn Ảnh");
            }

            if (errors.length > 0) {
                var errorMessage = "<ul>";
                for (var i = 0; i < errors.length; i++) {
                    errorMessage += "<li>" + errors[i] + "</li>";
                }
                errorMessage += "</ul>";

                document.getElementById("errorMessages").innerHTML = errorMessage;
                document.getElementById("errorMessages").style.display = "block";
                event.preventDefault();
            }
            return true;

        });
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="/Assets/js/js/jquery-3.2.1.min.js"></script>
    <script src="/Assets/js/js/popper.min.js"></script>
    <script src="/Assets/js/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- <script src="Assets/js/js/plugins/jquery.table2excel.js"></script> -->
    <script src="/Assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/Assets/js/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Data table plugin-->
    <!-- <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
          <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
          <script type="text/javascript">
              $('#sampleTable').DataTable();
          </script> -->
    <script>
        // <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        jQuery(function() {
            jQuery(".trash").click(function() {
                var rowToDelete = jQuery(this).closest("tr");
                var id = jQuery(this).data('id');

                swal({
                    title: "Cảnh báo",
                    text: "Bạn có chắc chắn muốn xóa sản phẩm này?",
                    buttons: ["Hủy bỏ", "Đồng ý"],
                }).then((willDelete) => {
                    if (willDelete) {
                        jQuery.ajax({
                            type: 'DELETE',
                            url: '/admin/sanpham/' + id,
                            data: {
                                _token: $('meta[name="csrf-token"]').attr(
                                    'content') // Ensure CSRF token is included
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    rowToDelete
                                        .remove(); // Xóa hàng khỏi bảng sau khi xóa thành công
                                    swal("Đã xóa thành công!", {
                                        icon: "success",
                                    });
                                } else {
                                    swal(response.message, {
                                        icon: "error",
                                    });
                                }
                            },
                            error: function(error) {
                                swal("Đã xảy ra lỗi khi xóa!", {
                                    icon: "error",
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>

    <script>
        //Thời Gian
        function time() {
            var today = new Date();
            var weekday = new Array(7);
            weekday[0] = "Chủ Nhật";
            weekday[1] = "Thứ Hai";
            weekday[2] = "Thứ Ba";
            weekday[3] = "Thứ Tư";
            weekday[4] = "Thứ Năm";
            weekday[5] = "Thứ Sáu";
            weekday[6] = "Thứ Bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            nowTime = h + " giờ " + m + " phút " + s + " giây";
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = day + ', ' + dd + '/' + mm + '/' + yyyy;
            tmp = '<span class="date"> ' + today + ' - ' + nowTime +
                '</span>';
            document.getElementById("clock").innerHTML = tmp;
            clocktime = setTimeout("time()", "1000", "Javascript");

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        }
        //In dữ liệu
        var myApp = new function() {
            this.printTable = function() {
                var tab = document.getElementById('sampleTable');
                var win = window.open('', '', 'height=700,width=700');
                win.document.write(tab.outerHTML);
                win.document.close();
                win.print();
            }
        }



        //Modal
        $("#show-emp").on("click", function() {
            $("#ModalUP").modal({
                backdrop: false,
                keyboard: false
            })
        });
    </script>


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.edit').on('click', function() {
                var productId = $(this).data('id');
                var productName = $(this).data('name');
                var productGia = $(this).data('gia');
                var originalAction = $('#editForm').data('original-action');
                var updatedAction = originalAction.replace(/\/\d+$/, '/' + productId);
                var productGiaKM = $(this).data('giakm');
                var productNgay = $(this).data('ngay');
                var productSoLuong = $(this).data('soluong');
                var productLuotXem = $(this).data('view');
                var productImg = $(this).data('img');

                console.log(productId, productGiaKM, productName, productGia, updatedAction, productNgay,
                    productSoLuong, productLuotXem, productImg);

                // Cập nhật giá trị của các input trên form
                $('#id').val(productId);
                $('#ten_sp').val(productName);
                $('#giasp').val(productGia);
                $('#giakm').val(productGiaKM);
                $('#ngay').val(productNgay);
                $('#soluong').val(productSoLuong);
                $('#view').val(productLuotXem);
                // $('#img').val(productImg);
                // Thay thế id cũ bằng id mới

                $('#editForm').attr('action', updatedAction)

                //  $('#editForm').attr('method', 'POST'); // Thay đổi phương thức thành PO
                // Thêm một trường ẩn để gửi phương thức PUT
                // var token = $('meta[name="csrf-token"]').attr('content');
                // $('<input>').attr({
                //     type: 'hidden',
                //     name: '_method',
                //     value: 'post'
                // }).appendTo('#editForm');

                // $('#editForm').submit();


            });
        });
    </script>

    </html>
@endsection
