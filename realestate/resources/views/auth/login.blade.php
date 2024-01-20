@include('navbar_guest')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom_login.css') }}">
    <title>Login</title>

</head>

<body>

    <div id="container">
        <div id="image-container">
            <img src="https://scontent.fmnl33-5.fna.fbcdn.net/v/t39.30808-6/420669929_122121423494134039_7470414024384905931_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=3635dc&_nc_ohc=U9JqQy3rwkcAX8YckbX&_nc_ht=scontent.fmnl33-5.fna&oh=00_AfDhxxvuPoDT3ZgW7tMlb8imRSO3z9JSVd9OCZnMPDhwUw&oe=65AFD7B6"
                alt="Background Image">
        </div>
        <div id="form-container">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="name">
                    <h1>Downshift Supply</h1>
                    <h2>Welcome! Let's get started.</h2>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <input type="email" id="email" name="email" placeholder="Email" class="block mt-1 w-full"
                        value="{{ old('email') }}" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="block mt-1 w-full" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div class="forgot-password">
                    <a href="{{ route('login') }}">
                        {{ __('Forgot Password?') }}
                    </a>

                    <button class="ms-4">
                        {{ __('LOG IN') }}
                    </button>

                    <div class="signup">
                        <a href="{{ route('login') }}">
                            {{ __('Not signed up yet? Sign up ') }}
                        </a>

                    </div>
            </form>
        </div>
    </div>

</body>

</html>