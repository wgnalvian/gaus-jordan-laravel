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
                                    <a href="{{url('/produk/reset')}}" class="btn btn-primary">Reset Produk</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Dibuat</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                        @foreach ($produks as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td><a href="{{url('/produk/choose/').'/'.$item->id}}" class="btn btn-primary">Tambah Bahan</a></td>
                                                <td><a href="{{url('/produk/detail/').'/'.$item->id}}" class="btn btn-primary">Detail Data</a></td>
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