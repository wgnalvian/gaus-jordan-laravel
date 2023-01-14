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
                        <div class="card-title">
                            <div class="row">
                                <div class="col-9">
                                    <h4>Daftar Produk</h4>
                                </div>
                                <div class="col-3">
                                    <a href="{{url('/bahan/reset')}}" class="btn btn-primary">Reset Bahan</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Dibuat</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                        @foreach ($bahans as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->created_at}}</td>
                                               
                                            </tr>
                                        @endforeach
                              
                                </tbody>
                            </table>
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