
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
                                <div class="card-title">Kesediaan Bahan</div>
                                    <form action="{{url('/bahan/count')}}" method="post">
                                    @csrf
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>bahan</th>
                                                        <th>value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($bahans as $item)
                                                        <tr>
                                                            <td>{{$item->name}}</td>
                                                            <td><input type="text" name="{{'bahan_'.$item->id}}" id="" class="form-control"></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
      