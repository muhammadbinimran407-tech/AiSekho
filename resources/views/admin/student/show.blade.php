<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header -->
        <div class="mb-8 flex justify-between items-start">
            <div>
                <a href="{{ route('admin.students.index') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                    ← Back to Students
                </a>
                <h1 class="text-4xl font-bold">Ali Ahmed</h1>
                <p class="text-gray-400 mt-2">Student ID: STU001</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                    Send Message
                </button>
                <button class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-red-700 transition">
                    Block Student
                </button>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Courses Enrolled</p>
                <h3 class="text-3xl font-bold mt-2">5</h3>
                <p class="text-lime-accent text-xs mt-2">2 completed</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Overall Progress</p>
                <h3 class="text-3xl font-bold mt-2">75%</h3>
                <p class="text-lime-accent text-xs mt-2">Good pace</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Learning Time</p>
                <h3 class="text-3xl font-bold mt-2">128 hrs</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 12 hrs this week</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Avg. Rating</p>
                <h3 class="text-3xl font-bold mt-2">4.8★</h3>
                <p class="text-lime-accent text-xs mt-2">15 course reviews</p>
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
                                <p class="text-lg font-semibold">Ali Ahmed</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Email</p>
                                <p class="text-lg font-semibold">ali.ahmed@email.com</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Phone</p>
                                <p class="text-lg font-semibold">+92 300 1234567</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Join Date</p>
                                <p class="text-lg font-semibold">January 15, 2025</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Country</p>
                                <p class="text-lg font-semibold">Pakistan</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Status</p>
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-sm font-bold inline-block">Active</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enrolled Courses -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                    <div class="p-8 border-b border-gray-800">
                        <h3 class="text-xl font-bold">Enrolled Courses</h3>
                    </div>
                    <div class="divide-y divide-gray-800">
                        <div class="p-6 hover:bg-white/5 transition">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold">Mastering ChatGPT</h4>
                                    <p class="text-sm text-gray-400 mt-1">Instructor: Dr. Ahmed Hassan</p>
                                </div>
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold">Completed</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="flex-1 h-2 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-lime-accent w-full"></div>
                                </div>
                                <span class="text-xs font-bold">100%</span>
                            </div>
                        </div>
                        <div class="p-6 hover:bg-white/5 transition">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold">AI-Driven UI Design</h4>
                                    <p class="text-sm text-gray-400 mt-1">Instructor: Sara Malik</p>
                                </div>
                                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[10px] font-bold">In Progress</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="flex-1 h-2 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-lime-accent w-3/4"></div>
                                </div>
                                <span class="text-xs font-bold">75%</span>
                            </div>
                        </div>
                        <div class="p-6 hover:bg-white/5 transition">
                            <div class="flex justify-between items-start mb-3">
                                <div>
                                    <h4 class="font-bold">Web Development Masterclass</h4>
                                    <p class="text-sm text-gray-400 mt-1">Instructor: Usman Khan</p>
                                </div>
                                <span class="px-3 py-1 bg-lime-500/10 text-lime-500 rounded-full text-[10px] font-bold">In Progress</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="flex-1 h-2 bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-lime-accent w-1/2"></div>
                                </div>
                                <span class="text-xs font-bold">50%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Quick Actions</h4>
                    <div class="space-y-2">
                        <button class="w-full py-2 px-4 bg-lime-accent/10 text-lime-accent rounded-lg font-medium hover:bg-lime-accent/20 transition text-sm">
                            Download Certificate
                        </button>
                        <button class="w-full py-2 px-4 bg-blue-500/10 text-blue-400 rounded-lg font-medium hover:bg-blue-500/20 transition text-sm">
                            View Submissions
                        </button>
                        <button class="w-full py-2 px-4 bg-purple-500/10 text-purple-400 rounded-lg font-medium hover:bg-purple-500/20 transition text-sm">
                            View Certificates
                        </button>
                    </div>
                </div>

                <!-- Activity -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Recent Activity</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex gap-3">
                            <div class="text-lime-accent">●</div>
                            <div>
                                <p class="text-gray-300">Completed Module 2: Advanced Prompting</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="text-lime-accent">●</div>
                            <div>
                                <p class="text-gray-300">Submitted quiz with 95% score</p>
                                <p class="text-xs text-gray-500">5 hours ago</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="text-lime-accent">●</div>
                            <div>
                                <p class="text-gray-300">Enrolled in Web Development course</p>
                                <p class="text-xs text-gray-500">1 day ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Status -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Account Status</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-400">Status</span>
                            <span class="text-green-500 font-bold">Active</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Last Login</span>
                            <span class="text-lime-accent font-bold">Today</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Total Spent</span>
                            <span class="text-lime-accent font-bold">$247.95</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
