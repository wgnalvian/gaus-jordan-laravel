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
                    <div class="card-body" style="border: 2px solid purple">
                        <div class="card-title mb-5"><h4>Pengembang</h4></div>
                        <div class="row mb-4"  style="border: 2px solid purple">
                            <div class="col-3"><img style="height: 200px;border-radius : 1rem" src="{{url('/images/mr.jpeg')}}" alt="" srcset=""></div>
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;"><h4>YUMARLIN MZ, S.KOM., M.PD., M.KOM.</h4></div>
                        </div>
                        <div class="row mb-4"  style="border: 2px solid purple">
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;justify-content: flex-end;padding-right: 10rem"><h4>Ilyas Yanuar (20330056@janabadra.student.ac.id)</h4></div>
                            <div class="col-3"><img style="height: 200px;border-radius : 1rem" src="{{url('/images/il.jpeg')}}" alt="" srcset=""></div>
                          
                        </div>
                        <div class="row mb-4"  style="border: 2px solid purple">
                            <div class="col-3"><img style="height: 200px;border-radius : 1rem" src="{{url('/images/sb.JPG')}}" alt="" srcset=""></div>
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;"><h4>Sabila (20330045@janabadra.student.ac.id)</h4></div>
                        </div>
                        <div class="row mb-4"  style="border: 2px solid purple">
                            <div class="col-9" style="box-sizing: border-box;display: flex;align-self: center;justify-content: flex-end;padding-right: 10rem"><h4>Alvian Arif Wiguna (20330030@janabadra.student.ac.id)</h4></div>
                            <div class="col-3"><img style="height: 200px;border-radius : 1rem"src="{{url('/images/al.jpeg')}}"  alt="" srcset=""></div>
                          
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