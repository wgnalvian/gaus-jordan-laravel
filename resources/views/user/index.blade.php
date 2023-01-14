        @include('layout.header')
        @include('layout.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            
            <div class="row" style="box-sizing: border-box;padding : 5rem;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Welcome {{Auth::user()->name}}</h4>
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