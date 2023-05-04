@extends('templates.layout')
@section('title', $_title)
@section('content')
    <!-- Main content -->
    <section class="content appTuyenSinh">
        <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
        <style>
            .select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
                padding: 3px 0px;
                height: 30px;
            }
            .select2-container {
                margin-top: -5px;
            }

            option {
                white-space: nowrap;
            }

            .select2-container--default .select2-selection--single {
                background-color: #fff;
                border: 1px solid #aaa;
                border-radius: 0px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                color: #216992;
            }
            .select2-container--default .select2-selection--multiple{
                margin-top:10px;
                border-radius: 0;
            }
            .select2-container--default .select2-results__group{
                background-color: #eeeeee;
            }
        </style>

        <?php //Hiển thị thông báo thành công?>
        @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        <?php //Hiển thị thông báo lỗi?>
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif

        <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Tên Lớp<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="ten_lop" id="name" class="form-control" value="@isset($request['ten_lop']){{ $request['ten_lop'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Số chỗ<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="so_cho" id="name" class="form-control" value="@isset($request['so_cho']){{ $request['so_cho'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Trạng thái<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="trang_thai" id="name" class="form-control" value="@isset($request['trang_thai']){{ $request['trang_thai'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Ngày bắt đầu<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="ngay_bat_dau" id="name" class="form-control" value="@isset($request['ngay_bat_dau']){{ $request['ngay_bat_dau'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Ngày kết thúc<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="ngay_ket_thuc" id="name" class="form-control" value="@isset($request['ngay_ket_thuc']){{ $request['ngay_ket_thuc'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Thời gian học<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="thoi_gian_hoc" id="name" class="form-control" value="@isset($request['thoi_gian_hoc']){{ $request['thoi_gian_hoc'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">ID khóa học<span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="id_khoa_hoc" id="name" class="form-control" value="@isset($request['id_khoa_hoc']){{ $request['id_khoa_hoc'] }}@endisset">
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{ route('route_BackEnd_Lop_add') }}" class="btn btn-default">Cancel</a>
            </div>
            <!-- /.box-footer -->
        </form>

    </section>
@endsection
@section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
@endsection

