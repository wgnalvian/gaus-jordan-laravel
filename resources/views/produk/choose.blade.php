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
                            <h4>Pilih jumlah bahan untuk produk {{$produk->name}}</h4>
                        </div>
                        <div class="table-responsive">
                            <form action="{{url('/produk/choose')}}" method="POST">
                                @csrf
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <input type="hidden" name="id" value="{{$produk->id}}">
                                        @foreach ($bahans as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td><input type="text" name="{{'bahan_'.$item->id}}" id="" class="form-control"></td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary" >pilih</button>
                                    </div>
                                </div>
                            </form>
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