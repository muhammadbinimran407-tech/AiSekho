<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header -->
        <div class="mb-8 flex justify-between items-start">
            <div>
                <a href="{{ route('admin.teachers.index') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                    ← Back to Teachers
                </a>
                <h1 class="text-4xl font-bold">Dr. Ahmed Hassan</h1>
                <p class="text-gray-400 mt-2">Teacher ID: TCH001 • AI & Machine Learning Specialist</p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('admin.teachers.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                    Edit
                </a>
                <button class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-red-700 transition">
                    Remove
                </button>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Courses</p>
                <h3 class="text-3xl font-bold mt-2">3</h3>
                <p class="text-lime-accent text-xs mt-2">2 active now</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Students</p>
                <h3 class="text-3xl font-bold mt-2">892</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 42 new this month</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Avg. Rating</p>
                <h3 class="text-3xl font-bold mt-2">4.9★</h3>
                <p class="text-lime-accent text-xs mt-2">328 reviews</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Revenue</p>
                <h3 class="text-3xl font-bold mt-2">$44,560</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 28% this quarter</p>
            </div>
        </div>

        <!-- Details Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Personal Information -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                    <div class="p-8 border-b border-gray-800">
                        <h3 class="text-xl font-bold">Personal Information</h3>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Full Name</p>
                                <p class="text-lg font-semibold">Dr. Ahmed Hassan</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Email</p>
                                <p class="text-lg font-semibold">dr.ahmed@aisekho.com</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Phone</p>
                                <p class="text-lg font-semibold">+92 300 1234567</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Qualification</p>
                                <p class="text-lg font-semibold">PhD in AI</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Experience</p>
                                <p class="text-lg font-semibold">15 years</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Status</p>
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-sm font-bold inline-block">Active</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Biography -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                    <div class="p-8 border-b border-gray-800">
                        <h3 class="text-xl font-bold">Biography</h3>
                    </div>
                    <div class="p-8">
                        <p class="text-gray-300 leading-relaxed">
                            Dr. Ahmed Hassan is a leading AI specialist with over 15 years of experience in machine learning and artificial intelligence. He holds a PhD from a leading international university and has published numerous papers on AI applications. His teaching style combines theoretical knowledge with practical industry experience, making complex concepts accessible to students of all levels.
                        </p>
                    </div>
                </div>

                <!-- Teaching Courses -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                    <div class="p-8 border-b border-gray-800">
                        <h3 class="text-xl font-bold">Courses Teaching</h3>
                    </div>
                    <div class="divide-y divide-gray-800">
                        <a href="{{ route('courses.show', 1) }}" class="p-6 hover:bg-white/5 transition block">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold">Mastering ChatGPT</h4>
                                    <p class="text-sm text-gray-400 mt-1">AI & Machine Learning</p>
                                </div>
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold">Active</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 text-sm">
                                <div>
                                    <p class="text-gray-400">Students</p>
                                    <p class="font-bold text-lime-accent">342</p>
                                </div>
                                <div>
                                    <p class="text-gray-400">Rating</p>
                                    <p class="font-bold text-lime-accent">4.9★</p>
                                </div>
                                <div>
                                    <p class="text-gray-400">Revenue</p>
                                    <p class="font-bold text-lime-accent">$17,098</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('courses.show', 2) }}" class="p-6 hover:bg-white/5 transition block">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold">Machine Learning Advanced</h4>
                                    <p class="text-sm text-gray-400 mt-1">AI & Machine Learning</p>
                                </div>
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold">Active</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 text-sm">
                                <div>
                                    <p class="text-gray-400">Students</p>
                                    <p class="font-bold text-lime-accent">234</p>
                                </div>
                                <div>
                                    <p class="text-gray-400">Rating</p>
                                    <p class="font-bold text-lime-accent">4.8★</p>
                                </div>
                                <div>
                                    <p class="text-gray-400">Revenue</p>
                                    <p class="font-bold text-lime-accent">$11,700</p>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('courses.show', 3) }}" class="p-6 hover:bg-white/5 transition block">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold">Deep Learning Fundamentals</h4>
                                    <p class="text-sm text-gray-400 mt-1">AI & Machine Learning</p>
                                </div>
                                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[10px] font-bold">Draft</span>
                            </div>
                            <div class="grid grid-cols-3 gap-4 text-sm">
                                <div>
                                    <p class="text-gray-400">Students</p>
                                    <p class="font-bold text-lime-accent">0</p>
                                </div>
                                <div>
                                    <p class="text-gray-400">Rating</p>
                                    <p class="font-bold text-gray-400">-</p>
                                </div>
                                <div>
                                    <p class="text-gray-400">Revenue</p>
                                    <p class="font-bold text-gray-400">$0</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Profile Card -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <div class="text-center mb-4">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-lime-accent to-lime-600 mx-auto mb-4"></div>
                        <h4 class="font-bold">Dr. Ahmed Hassan</h4>
                        <p class="text-sm text-gray-400 mt-1">AI Specialist</p>
                    </div>
                </div>

                <!-- Performance Metrics -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Performance Metrics</h4>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Student Satisfaction</span>
                                <span class="font-bold">98%</span>
                            </div>
                            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-lime-accent w-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Course Quality</span>
                                <span class="font-bold">95%</span>
                            </div>
                            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-lime-accent w-5/6"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm text-gray-400">Completion Rate</span>
                                <span class="font-bold">87%</span>
                            </div>
                            <div class="h-2 bg-gray-700 rounded-full overflow-hidden">
                                <div class="h-full bg-lime-accent w-5/6"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Info -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Payment Information</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-400">Hourly Rate</span>
                            <span class="font-bold">$150</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Total Earnings</span>
                            <span class="text-lime-accent font-bold">$44,560</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">This Month</span>
                            <span class="text-lime-accent font-bold">$8,640</span>
                        </div>
                        <button class="w-full mt-4 py-2 border border-lime-accent text-lime-accent rounded-lg font-medium hover:bg-lime-accent/10 transition">
                            View Payments
                        </button>
                    </div>
                </div>

                <!-- Recent Reviews -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Recent Reviews</h4>
                    <div class="space-y-3">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-lime-accent">★★★★★</span>
                                <span class="text-xs text-gray-400">Ali Ahmed</span>
                            </div>
                            <p class="text-xs text-gray-400">"Excellent course, very clear explanations!"</p>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-lime-accent">★★★★★</span>
                                <span class="text-xs text-gray-400">Sara Malik</span>
                            </div>
                            <p class="text-xs text-gray-400">"Best AI instructor I've learned from."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
