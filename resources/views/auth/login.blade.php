@include('auth.layout.header')

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="index.html"> <h4>Login</h4></a>
    
                            <form class="mt-5 mb-5 login-input" method="POST" action="{{url('/auth/login')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name"  class="form-control" placeholder="Username">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                            </form>
                            <p class="mt-5 login-form__footer">Dont have account? <a href="{{url('/auth/register')}}" class="text-primary">Sign Up</a> now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('auth.layout.footer')
