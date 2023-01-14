@include('layout.header')
@include('layout.sidebar')

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">


  

    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4"><h4>Petunjuk</h4></div>
                    <div class="alert alert-warning">
                        Berdoa sebelum menggunakan website
                    </div>
                    @if (Auth::user()->name == "Admin")
                    <div class="alert alert-info"  style="white-space: pre-wrap;">
                        Role Admin
                        *Role admin dapat membuat produk dan bahan
                        *untuk membuat produk pada menu Gaus Jordan -> tambah produk
                        <img src="{{url('/images/tambahp.png')}}" height="500" alt="" srcset="">
                        *untuk membuat bahan pada menu Gaus Jordan -> tambah bahan
                        <img src="{{url('/images/tambahb.png')}}" height="500" alt="" srcset="">
                        *untuk melihat produk pada menu Gaus Jordan -> dafar produk
                        <img src="{{url('/images/daftarp.png')}}" height="500" alt="" srcset="">
                        *untuk melihat bahan pada menu Gaus Jordan -> dafar bahan
                        <img src="{{url('/images/daftarb.png')}}" height="500" alt="" srcset="">
                        *untuk menghitung gauss pada menu Hitung Gauss
                        <img src="{{url('/images/hitung.png')}}" height="500" alt="" srcset="">
                    </div>
                    @else
                        
                    <div class="alert alert-info"  style="white-space: pre-wrap;">
                        Role User
                        *untuk menghitung gauss pada menu Hitung Gauss
                        <img src="{{url('/images/hitung.png')}}" height="500" alt="" srcset="">
                    </div>
                    @endif
                 
                </div>
            </div>
        </div>
      </div>










    </div>
    <!-- #/ container -->
</div>
<!--**********************************
    Content body end
***********************************-->


<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->
</div>
<!--**********************************
Main wrapper end
***********************************-->
@include('layout.footer')