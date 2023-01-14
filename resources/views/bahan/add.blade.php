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
                                <div class="card-title">Tambah Bahan</div>
                                    <form action="{{url('/bahan/add')}}" method="post">
                                    @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input  type="text" name="name" id="" class="form-control">
                                            @error('name')
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary" type="submit">tambah</button>
                                    </form>
                                   
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
    *****************************
            @include('layout.footer')
      