@include('layout.header')
@include('layout.sidebar')

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">


  

    <div class="container-fluid">

        <div class="row" >
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="">
                        <div class="card-title">
                            <h4>PT FRL Industri</h4>
                         
                        </div>
                        <div class="alert alert-info">
                            Mebel digunakan sebagai alat untuk mendukung tubuh manusia, menyimpan atau menampilkan (display) barang, dan membagi ruangan (partisi). Mebel dikategorikan sesuai dengan kegunaan sosial, yaitu healthcare, hospitality, kantor, rekreasi, agama, hunian, toko, dan penyimpanan. 

 Industri mebel di Indonesia terdapat hampir di seluruh provinsi, dengan sentra yang cukup besar di Jepara, Sukoharjo, Surakarta, Klaten dan lain-lain. 

Dalam ekonomi, untuk menentukan jumlah produksi untuk masalah seperti ini ditangani dengan suatu model matematika yaitu model eleminasi dengan metode Gauss Jordan, Metode Gauss Jordan memodelkan pencarian solusi jumlah yang harus diproduksi oleh industri dalam bentuk sistem persamaan linear. 

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="">
                        <div class="card-title mb-5"><h4>Produk</h4></div>
                        <div class="row mb-4"  style="">
                            <div class="col-3">                                                                           <img style="height: 200px;border-radius : 1rem" src="{{url('/images/bf.jpg')}}" ></div>
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;"><h4>Bedframe</h4></div>
                        </div>
                        <hr>
                        <div class="row mb-4"  style="">
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;justify-content: flex-end;padding-right: 10rem"><h4> Lemari Sliding</h4></div>
                            <div class="col-3"><img style="height: 200px;border-radius : 1rem" src="{{url('/images/ls.jpg')}}" alt="" srcset=""></div>
                          
                        </div>
                        <hr>
                        <div class="row mb-4"  style="">
                            <div class="col-3"><img style="height: 200px;border-radius : 1rem" src="{{url('/images/kr.jpg')}}" alt="" srcset=""></div>
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;"><h4>Kursi Ropan</h4></div>
                        </div>
                      
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