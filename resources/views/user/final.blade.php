{{-- {{dd($tersedia)}} --}}
@include('layout.header')
        @include('layout.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
          
            @if (Auth::user()->name == "Admin")
                
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Produk
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @php
                                                $var =  ['X','Y','Z'];
                                                $index = 0;
                                            @endphp
                                            @foreach ($formatProduk[0] as $item)
                                                <tr>
                                                    <td>{{$item['name']}}</td>
                                                   <td>{{$var[$index]}}</td>
                                                </tr>
                                                @php
                                                    $index++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        Ketersediaan
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                
                                                @foreach ($tersedia as $item)
                                                    <tr>
                                                        <td>{{$item['name']}}</td>
                                                       <td>{{$item['value']}}</td>
                                                    </tr>
                                                    
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan as $item)
                                                <tr>
                                                    <td>{{$item[0].'X'}}</td>
                                                    <td>{{$item[1].'Y'}}</td>
                                                    <td>{{$item[2].'Z'}}</td>
                                                    <td> = </td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan1 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan2 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan3 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan4 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan5 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan6 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan7 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan8 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Matriks
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($produkBahan9 as $item)
                                                <tr>
                                                    <td>{{$item[0]}}</td>
                                                    <td>{{$item[1]}}</td>
                                                    <td>{{$item[2]}}</td>
                                                    <td>{{$item[3]}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    Hasil Akhir
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            @php
                                                $var =  ['X','Y','Z'];
                                                $index = 0;
                                            @endphp
                                            @foreach ($formatProduk[0] as $item)
                                                <tr>
                                                    <td>{{$item['name']}}</td>
                                                   <td>{{$produkBahan9[$index][3]}}</td>
                                                </tr>
                                                @php
                                                    $index++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @else
                
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                Hasil Akhir
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @php
                                            $var =  ['X','Y','Z'];
                                            $index = 0;
                                        @endphp
                                        @foreach ($formatProduk[0] as $item)
                                            <tr>
                                                <td>{{$item['name']}}</td>
                                               <td>{{$produkBahan9[$index][3]}}</td>
                                            </tr>
                                            @php
                                                $index++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>







            @endif
















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