@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-12 p-3  ">

        <div class="media pt-3 " style="height:400px;">

            <div class="align-self-center" style="width: 300px;">
              <img class="align-self-center mr-3 h-50" style="width:200px;" src="/img/home/money.png" alt="Generic placeholder image" >
                      </div>


        </div>
      </div>
        <div class="col-md-8 col-xs-12 col-sm-12 p-3">
          <div class="title-order">
              <h1>HOW TO ORDER</h1>

          </div>

          <div class="media pt-3 ">

              <div class="" style="width: 100px;">
                <img class="align-self mr-3 h-50" style="width:80px;" src="/img/home/money.png" alt="Generic placeholder image" >
                        </div>

            <div class="media-body">
              <h4>Lebih Hemat</h4>
                    <p>Dengan harga yang terjangkau dan dapat berbagi undangan ke tak terbatas jumlah tamu undangan, tentunya dapat menghemat pengeluaran.</p>
            </div>
          </div>
          <div class="media pt-3" >

              <div class="" style="width: 100px;">
              <img class="align-self-start mr-3 h-25" style="width:80px;" src="/img/home/share.png" alt="Generic placeholder image" >
              </div>

            <div class="media-body">
              <h4>Lebih Mudah Disebar</h4>
                  <p>Dengan harga yang terjangkau dan dapat berbagi undangan ke lebih banyak jumlah penerima undangan, tentunya dapat menghemat pengeluaran.</p>
            </div>
          </div>
          <div class="media pt-3">

              <div class="" style="width: 100px;">
                <img class="align-self mr-3 h-50" style="width:80px;" src="/img/home/money.png" alt="Generic placeholder image" >
                        </div>

            <div class="media-body">
              <h4>Lebih Hemat</h4>
                    <p>Dengan harga yang terjangkau dan dapat berbagi undangan ke tak terbatas jumlah tamu undangan, tentunya dapat menghemat pengeluaran.</p>
            </div>
          </div>


      </div>
    </div>

  </div>


<section class="pricing py-5">

  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">NORMAL PACKAGE</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block bg-black text-white text-uppercase">PREVIEW</a>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus PACKAGE</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block bg-black text-white text-uppercase">PREVIEW</a>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">PREMIUM PACKAGE</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
            </ul>
            <a href="#" class="btn btn-block bg-black text-white text-uppercase">PREVIEW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
