<html>
<head>
    <title>Register</title>
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
            <h3 class="mb-5 text-center">Create account</h3>

            <form method="POST" action="{{ route('register') }}">
              @csrf

              <!-- Name -->
              <div class="form-outline mb-4">
                <label class="form-label" for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control form-control-lg" 
                       value="{{ old('name') }}" required autofocus autocomplete="name">
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
              </div>

              <!-- Email -->
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" 
                       value="{{ old('email') }}" required autocomplete="username">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
              </div>

              <!-- Password -->
              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" 
                       required autocomplete="new-password">
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
              </div>

              <!-- Confirm Password -->
              <div class="form-outline mb-4">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" 
                       class="form-control form-control-lg" required autocomplete="new-password">
                @error('password_confirmation')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
              </div>

              <button class="btn btn-primary btn-lg w-100" type="submit">Register</button>

            </form>
            <div class="text-center mt-3">
              <a href="{{ route('login') }}" class="btn btn-link">
                  Already registered?
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
