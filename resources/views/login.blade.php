
@extends('layout.master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
@endsection

@section('content')

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h2>ĐĂNG NHẬP</h2>
                <form action="/" method="POST">
                    <div class="form-group">
                        <label for="email">Địa chỉ email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">Duy trì tình trạng đăng nhập
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-danger">Submit</button>
                </form>

            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>
        //

    </script>
@endsection
