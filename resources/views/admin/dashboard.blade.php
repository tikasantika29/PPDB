@extends('templates.main')
@section('container')
<div class="conatiner-fluid content-inner mt-n5 py-0">
   <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between">
                <div class="header-title mb-4">
                   <h4 class="card-title">Informasi PPDB 2023 Kab.Kuningan</h4>
                </div>
             </div>
         <div class="overflow-hidden d-slider1 ">
            <ul  class="p-0 m-0 mb-1 swiper-wrapper list-inline">
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="100" data-type="percent">
                           <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                           </svg>
                        </div>
                        <a href="{{ url('jumlah_pendaftar') }}" class="progress-detail">
                           <p  class="mb-1">Jumlah Pendaftar</p>
                           <h4 class="counter">5.000</h4></a>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                           <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <a href="{{ url('jumlah_diterima') }}" class="progress-detail">
                           <p  class="mb-1">Jumlah Diterima</p>
                           <h4 class="counter">4.000</h4></a>
                     </div>
                  </div>
               </li>
               <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                  <div class="card-body">
                     <div class="progress-widget">
                        <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-danger" data-min-value="0" data-max-value="100" data-value="20" data-type="percent">
                           <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                           </svg>
                        </div>
                        <a href="{{ url('jumlah_ditolak') }}" class="progress-detail">
                           <p  class="mb-1">Jumlah Ditolak</p>
                           <h4 class="counter">1.000</h4></a>
                        </div>
                     </div>
                  </div>
                </li>
         </div>
         <div class="col-md-12 col-xl-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
               <div class="flex-wrap card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Grafik Penerimaan Berdasarkan Setiap Jalur</h4>            
                  </div>
               </div>
               <div class="card-body">
                  <div id="d-activity" class="d-activity"></div>
               </div>
            </div>
         </div>     
      </div>
   </div>
   </div> 
</div>
@include('sweetalert::alert')
@endsection