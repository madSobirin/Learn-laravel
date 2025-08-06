<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Page</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo1.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                class="mx-auto h-10 w-auto" /> --}}
            <img src="img/logo1.png" alt="Sobirin" class="mx-auto h-20 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign up to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="/register" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class=" flex items-center text-sm/6 font-medium text-gray-100">
                        Name</label>
                    <div class="mt-2">
                        <input id="name" type="text" name="name"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6 @error('name') border border-red-500 @enderror"
                            required placeholder="Enter your name" value="{{ old('name') }}" />
                        <!-- Pesan error -->
                        @error('email')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="username" class=" flex items-center text-sm/6 font-medium text-gray-100">
                        Username</label>
                    <div class="mt-2">
                        <input id="username" type="text" name="username"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6 @error('username') border border-red-500 @enderror"
                            required placeholder="Enter your username" value="{{ old('username') }}" />
                        <!-- Pesan error -->
                        @error('username')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="email" class=" flex items-center text-sm/6 font-medium text-gray-100">
                        Email address</label>
                    <div class="mt-2">
                        <input id="email" type="email" name="email"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6 @error('email') border border-red-500 @enderror"
                            required placeholder="you@example.com" value="{{ old('email') }}" />
                        <!-- Pesan error -->
                        @error('email')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                        {{-- <div class="text-sm">
                            {{-- <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot
                                password?</a>
                        </div> --}}
                    </div>
                    <div class="mt-2">
                        {{-- required autocomplete="current-password" --}}
                        <input id="password" type="password" name="password"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6 @error('password') border border-red-500 @enderror"
                            required placeholder="Enter your password" />
                        <!-- Pesan error -->
                        @error('password')
                            <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign
                        up</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                already have an account?
                <a href="/login" class="font-semibold text-indigo-400 hover:text-indigo-300">Login</a>
            </p>
        </div>
    </div>

</body>

</html>
