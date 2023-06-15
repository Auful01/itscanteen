@extends('layouts.app-pages')

@section('content')
<div class="p-4">
    <div class="d-flex">
        <div class="col-2 p-0 text-left">
            <a href="/rincian">
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>
        <div class="col-8 text-center" >
            <p class="m-0 text-dark" style="font-size: 17px;font-weight: 700;">Ulas</p>
        </div>
        <div class="col-2 p-0">

        </div>
    </div>

    <div class="content my-3 py-4">
        <img src="{{asset('menu/menu1.png')}}" class="img-fluid w-100" style="border-radius: 25px;" alt="">

        <div class="desc text-center mt-2">
            <div class="desc-head text-dark">
                <h3  style="font-size: 20px;font-weight: 900">Nasi Goreng Original</h3>
                <p style="font-size: 14px;color: #9EA0AE;font-weight: 600">Rp 12.000</p>
            </div>

            <div class="detail">
                <p style="font-size: 13px;font-weight: 700;color:#9EA0AE" class="m-0">Nasi Goreng Mamita</p>
                <p style="font-size: 13px;font-weight: 500;color:#9EA0AE">Kantin Pusat ITS</p>
            </div>
        </div>

        <div class="review my-4" style="bottom: 100px;border-radius: 10px;border:2px solid #DEDFE9">
            <div class="content-review p-2">
                <div class="d-flex justify-content-center mb-2" id="rating" style="font-size: 20px;">
                    <i class="fas fa-star" style="color: gold"></i>&nbsp;
                    <i class="fas fa-star" style="color: gold"></i>&nbsp;
                    <i class="fas fa-star" style="color: gold"></i>&nbsp;
                    <i class="fas fa-star" style="color: gold"></i>&nbsp;
                    <i class="fas fa-star" style="color: gold"></i>
                </div>
                <div class="ulasan">
                    <textarea name="" style="font-size: 13px;" id="" class="form-control border-0" cols="30" rows="1" placeholder="Tulis Alasanmu"></textarea>
                </div>
            </div>
        </div>

        <a href="/user/dashboard" class="btn btn-sm btn-primary w-100 py-2" style="border-radius: 25px;font-weight: 800">
            Lanjut
        </a>
    </div>
</div>
@endsection


@section('script')
    <script>


    </script>
@endsection
