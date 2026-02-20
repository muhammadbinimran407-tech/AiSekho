<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
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
            <h2 class="text-white text-xl font-bold mb-2 text-center">Create Account</h2>
            <p class="text-gray-500 text-sm mb-8 text-center font-medium">Join the AI learning revolution</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-400 text-xs uppercase tracking-widest font-bold mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                        class="w-full bg-[#1A1A1A] border border-gray-800 text-white p-3 rounded-xl focus:outline-none focus:border-[#D4FF5E] transition">
                    @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-400 text-xs uppercase tracking-widest font-bold mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                        class="w-full bg-[#1A1A1A] border border-gray-800 text-white p-3 rounded-xl focus:outline-none focus:border-[#D4FF5E] transition">
                    @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-400 text-xs uppercase tracking-widest font-bold mb-1">Password</label>
                    <input type="password" name="password" required autocomplete="new-password"
                        class="w-full bg-[#1A1A1A] border border-gray-800 text-white p-3 rounded-xl focus:outline-none focus:border-[#D4FF5E] transition">
                    @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-400 text-xs uppercase tracking-widest font-bold mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required autocomplete="new-password"
                        class="w-full bg-[#1A1A1A] border border-gray-800 text-white p-3 rounded-xl focus:outline-none focus:border-[#D4FF5E] transition">
                </div>

                <div class="flex flex-col space-y-4">
                    <button type="submit" class="w-full bg-[#D4FF5E] text-black py-3 rounded-xl font-bold hover:opacity-90 transition transform active:scale-95">
                        Sign Up
                    </button>
                    
                    <a href="{{ route('login') }}" class="text-center text-sm text-gray-500 hover:text-[#D4FF5E] transition">
                        Already have an account? Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>