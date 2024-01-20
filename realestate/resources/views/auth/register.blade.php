@include('navbar_guest')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom_register.css') }}">
    <title>Registration Page</title>

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

                <!-- Username -->
                <div>
                    <input type="text" id="username" name="username" placeholder="Username" class="block mt-1 w-full"
                        value="{{ old('username') }}" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Full Name -->
                <div>
                    <input type="text" id="name" name="name" placeholder="Full Name" class="block mt-1 w-full"
                        value="{{ old('name') }}" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <input type="password" id="password" name="password" placeholder="Password"
                        class="block mt-1 w-full" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Confirm Password" class="block mt-1 w-full" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button class="ms-4">
                    {{ __('SIGN UP') }}
                </button>

                <br><br><br><br>
                <div class="flex items-center justify-end mt-4">
                    <p class="text-white">Already signed up? <a
                            class="flex underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            Log in
                        </a></p>

                </div>
            </form>
        </div>
    </div>

</body>

</html>