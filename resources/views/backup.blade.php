<!-- beranda -->
@extends('layouts.main')

@section('container')
<div class="bg">

  {{-- //produk atas --}}
  <div class="produk p-5 mx-5">

    <div class="text mb-2">Recommended</div>

    <div class="atas d-flex justify-content-center gap-4">

      <div class="kiri">
        <img src="img/image1.png" alt="">
        <img src="img/image2.png" alt="">
        <img src="img/image3.png" alt="">
        <img src="img/image4.png" alt="">
      </div>

      <div class="kanan d-flex flex-column gap-2">
        <img src="img/image5.png" alt="" width="160" height="80">
        <img src="img/image6.png" alt="" width="160" height="80">
      </div>
    </div>
  </div>
  {{-- //end --}}

  {{-- //new produk --}}
  <div class="newp p-5 mx-5">

    <div class="text mb-2">New Product</div>

    <div class="bawah d-flex justify-content-center gap-4">

      <div class="kiri">
        <img src="img/image1.png" alt="">
        <img src="img/image2.png" alt="">
        <img src="img/image3.png" alt="">
        <img src="img/image4.png" alt="">
      </div>

      <div class="kanan d-flex flex-column gap-2">
        <img src="img/image5.png" alt="" width="160" height="80">
        <img src="img/image6.png" alt="" width="160" height="80">
      </div>
    </div>

  </div>
  {{-- //end --}}

  {{-- //footer --}}
  <div class="footer d-flex justify-content-center gap-4">
    <div class="foot">
      <img src="img/Food.png" alt="">
      <div class="text-center" style="font-size: 12px">Food</div>
    </div>
    <div class="cosmetic">
      <img src="img/Cosmetic.png" alt="">
      <div class="text-center" style="font-size: 12px">Cosmetic</div>
    </div>
    <div class="fashion">
      <img src="img/fashion.png" alt="">
      <div class="text-center" style="font-size: 12px">Fashion</div>
    </div>
    <div class="ecommerce">
      <img src="img/E-commerce.png" alt="">
      <div class="text-center" style="font-size: 12px">E-Commerce</div>
    </div>
    <div class="vehicle">
      <img src="img/Vehicle.png" alt="">
      <div class="text-center" style="font-size: 12px">Vehicle</div>
    </div>
    <div class="more">
      <img src="img/More.png" alt="">
      <div class="text-center" style="font-size: 12px">More</div>
    </div>

  </div>


</div>

{{-- <h4>New Product</h4>
<img src="img/image1.png" alt="">
<img src="img/image2.png" alt="">
<img src="img/image3.png" alt="">
<img src="img/image4.png" alt="">

<div class="kanan">
    <img src="img/image5.png" alt="">
    <img src="img/image6.png" alt="">
</div> --}}
@endsection
<!-- beranda end  -->

<!-- beranda2 -->
@extends('layouts.main')

@section('container')
<div class="bg">

  {{-- //produk atas --}}
  <div class="produk p-5 mx-5">

    <div class="text mb-2">Recommended</div>

    <div class="atas d-flex justify-content-center gap-4">

      <div class="kiri">
        <img src="img/image1.png" alt="">
        <img src="img/image2.png" alt="">
        <img src="img/image3.png" alt="">
        <img src="img/image4.png" alt="">
      </div>

      <div class="kanan d-flex flex-column gap-2">
        <img src="img/image5.png" alt="" width="160" height="80">
        <img src="img/image6.png" alt="" width="160" height="80">
      </div>
    </div>
  </div>
  {{-- //end --}}

  {{-- //new produk --}}
  <div class="newp p-5 mx-5">

    <div class="text mb-2">New Product</div>

    <div class="row row-cols-1 row-cols-md-6 g-4 text-center">
      <div class="col" style="background-clip: #D9D9D9">
        <div class="card h-100">
          <img src="img/jaket.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Stone island hodie</h6>
            <p class="card-text">Bekas</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">RP 1.000.000.000</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/jaket.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Stone island hodie</h6>
            <p class="card-text">Bekas</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">RP 1.000.000.000</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/jaket.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Stone island hodie</h6>
            <p class="card-text">Bekas</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">RP 1.000.000.000</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/jaket.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Stone island hodie</h6>
            <p class="card-text">Bekas</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">RP 1.000.000.000</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/jaket.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Stone island hodie</h6>
            <p class="card-text">Bekas</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">RP 1.000.000.000</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/jaket.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Stone island hodie</h6>
            <p class="card-text">Bekas</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">RP 1.000.000.000</small>
          </div>
        </div>
      </div>
    </div>

  </div>
  {{-- //end --}}

  {{-- //footer --}}
  <div class="footer d-flex justify-content-center gap-4">
    <div class="foot">
      <img src="img/Food.png" alt="">
      <div class="text-center" style="font-size: 12px">Food</div>
    </div>
    <div class="cosmetic">
      <img src="img/Cosmetic.png" alt="">
      <div class="text-center" style="font-size: 12px">Cosmetic</div>
    </div>
    <div class="fashion">
      <img src="img/fashion.png" alt="">
      <div class="text-center" style="font-size: 12px">Fashion</div>
    </div>
    <div class="ecommerce">
      <img src="img/E-commerce.png" alt="">
      <div class="text-center" style="font-size: 12px">E-Commerce</div>
    </div>
    <div class="vehicle">
      <img src="img/Vehicle.png" alt="">
      <div class="text-center" style="font-size: 12px">Vehicle</div>
    </div>
    <div class="more">
      <img src="img/More.png" alt="">
      <div class="text-center" style="font-size: 12px">More</div>
    </div>

  </div>


</div>

{{-- <h4>New Product</h4>
<img src="img/image1.png" alt="">
<img src="img/image2.png" alt="">
<img src="img/image3.png" alt="">
<img src="img/image4.png" alt="">

<div class="kanan">
    <img src="img/image5.png" alt="">
    <img src="img/image6.png" alt="">
</div> --}}
@endsection
<!-- beranda2 end  -->

<!-- category -->
@extends('layouts.main')

@section('container')

<div class="content d-flex">

  <div class="col-xs-6 col-sm-3 col-sm-pull-9 mb-4 pb-4 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
      <a href="#" class="list-group-item active">Categories</a>
      <a href="#" class="list-group-item">
        <img src="img/Food.png" alt=""> Food And Beverage</a>
      <a href="#" class="list-group-item">
        <img src="img/Cosmetic.png" alt=""> Cosmetic</a>
      <a href="#" class="list-group-item">
        <img src="img/Vehicle.png" alt="">Vehicle</a>
      <a href="#" class="list-group-item">
        <img src="img/fashion.png" alt="">Fashion</a>
    </div>
  </div><!--/.sidebar-offcanvas-->


  {{-- //kanan --}}
  <div class="kanan" style="width: 90%">
    <div class="row row-cols-1 row-cols-md-5 g-4 text-center">
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="img/jaket.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-title">Stone island hodie</h6>
        <p class="card-text">Bekas</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">RP 1.000.000.000</small>
      </div>
    </div>
  </div>


</div>
</div>

</div>
@endsection
<!-- category end -->

<div class="card">
  <h1 class="card-header">{{ $post->name }}</h1>
  <div class="card-body">
    <p class="card-desc">{{ $post->detail }}</p>
    <h5 class="card-title">RP {{ $post->harga }}</h5>
    <a href="https://api.whatsapp.com/send?phone={{ $post->nomor_hp }}" class="btn btn-success mt-4">
      <i class="bi bi-whatsapp"></i> Beli sekarang
    </a>
    {{-- berikan href ke WhatsApp diambil dari nomor --}}
  </div>
</div>

<div class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}">
        <div class="card-body">
          <h6 class="card-title">{{ $post->name }}</h6>
          <p class="card-text">{{ $post->kondisi }}</p>
          <div class="card-footer">
            <small class="text-muted">RP {{ $post->harga }}</small>
          </div>
        </div>
      </div>
    </div>