<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0A0A0A] text-white">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <div class="mb-8 text-3xl font-bold tracking-tighter">
            AI_<span class="text-[#D4FF5E]">Sekho</span>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-[#0F0F0F] border border-gray-800 shadow-2xl rounded-[2rem]">
            <h2 class="text-white text-xl font-bold mb-2 text-center">Welcome Back</h2>
            <p class="text-gray-500 text-sm mb-8 text-center font-medium">Enter your details to sign in</p>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-400 text-xs uppercase tracking-widest font-bold mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus 
                        class="w-full bg-[#1A1A1A] border border-gray-800 text-white p-3 rounded-xl focus:outline-none focus:border-[#D4FF5E] transition">
                    @error('email') 
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span> 
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-400 text-xs uppercase tracking-widest font-bold mb-1">Password</label>
                    <input type="password" name="password" required autocomplete="current-password"
                        class="w-full bg-[#1A1A1A] border border-gray-800 text-white p-3 rounded-xl focus:outline-none focus:border-[#D4FF5E] transition">
                    @error('password') 
                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span> 
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <label class="flex items-center text-sm text-gray-500 cursor-pointer">
                        <input type="checkbox" name="remember" class="mr-2 w-4 h-4 rounded border-gray-800 bg-[#1A1A1A] accent-[#D4FF5E]">
                        Remember me
                    </label>
                    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-gray-500 hover:text-[#D4FF5E] transition">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <div class="flex flex-col space-y-4 mt-8">
                    <button type="submit" class="w-full bg-[#D4FF5E] text-black py-3 rounded-xl font-bold hover:opacity-90 transition transform active:scale-95">
                        Log in
                    </button>
                    
                    <a href="{{ route('register') }}" class="text-center text-sm text-gray-500 hover:text-[#D4FF5E] transition">
                        Don't have an account? Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>