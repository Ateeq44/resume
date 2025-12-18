<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-sm-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5">
                <div class="d-flex justify-content-center mb-4">
                    <img style="width: 100px;" src="{{asset('images/1.png')}}">
                </div>
                <h3 class="mb-5 text-center">Welcome back!</h3>
                <form method="POST" action="/login">
                    @csrf

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Email or Password is incorrect.</strong>
                    </div>
                    @endif

                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                        required>

                        @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" 
                        id="password" 
                        name="password" 
                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                        required>

                        @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg w-100" type="submit">Sumbit</button>
                </form>

                <div class="text-center mt-3">
                  <a href="{{ route('register') }}" class="btn btn-link">
                      Not a member?
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</section>
</body>
</html>
