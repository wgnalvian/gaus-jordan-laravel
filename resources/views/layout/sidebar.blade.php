  <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{url('/')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/petunjuk')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Petunjuk Penggunaan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/tentang')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Tentang</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/pengembang')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Pengembang</span>
                        </a>
                    </li>
                    @if (Auth::user()->name == "Admin")
                    <li >
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Gauss Jordan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/produk/add')}}">Tambah Produk</a></li>
                            <li><a href="{{url('/produk/list')}}">Daftar Produk</a></li>
                            <li><a href="{{url('/bahan/add')}}">Tambah Bahan</a></li>
                            <li><a href="{{url('/bahan/list')}}">Daftar Bahan</a></li>                      
                            
                            
                    
                        </ul>
                    </li>
                  
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Hitung Gauss</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/bahan/count')}}">Hitung</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/logout')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Hitung Gauss</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/bahan/count')}}">Hitung</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/logout')}}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                    @endif
                    
                </ul>

            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->