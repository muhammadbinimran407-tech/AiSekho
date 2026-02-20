<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header -->
        <div class="mb-8 flex justify-between items-start">
            <div>
                <a href="{{ route('admin.courses.index') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                    ← Back to Courses
                </a>
                <h1 class="text-4xl font-bold">Mastering ChatGPT</h1>
                <p class="text-gray-400 mt-2">AI & Machine Learning</p>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('admin.courses.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                    Edit
                </a>
                <button class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-red-700 transition">
                    Delete
                </button>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Students</p>
                <h3 class="text-3xl font-bold mt-2">342</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 28 this week</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Avg. Rating</p>
                <h3 class="text-3xl font-bold mt-2">4.8★</h3>
                <p class="text-lime-accent text-xs mt-2">245 reviews</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Revenue</p>
                <h3 class="text-3xl font-bold mt-2">$17,098</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 12% this month</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Completion Rate</p>
                <h3 class="text-3xl font-bold mt-2">87%</h3>
                <p class="text-green-500 text-xs mt-2">Excellent engagement</p>
            </div>
        </div>

        <!-- Course Details Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Course Information -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                    <div class="p-8 border-b border-gray-800">
                        <h3 class="text-xl font-bold">Course Details</h3>
                    </div>
                    <div class="p-8 space-y-6">
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Description</p>
                            <p class="text-gray-300 leading-relaxed">
                                Learn to master ChatGPT and other AI tools to boost your productivity. This comprehensive course covers everything from basic prompting techniques to advanced usage patterns that will transform your workflow.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Duration</p>
                                <p class="text-lg font-semibold">40 hours</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Level</p>
                                <p class="text-lg font-semibold">Intermediate</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Price</p>
                                <p class="text-lg font-semibold">$49.99</p>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest mb-2">Status</p>
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-sm font-bold">Active</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modules/Sections -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                    <div class="p-8 border-b border-gray-800">
                        <h3 class="text-xl font-bold">Course Modules</h3>
                    </div>
                    <div class="divide-y divide-gray-800">
                        <div class="p-6 hover:bg-white/5 transition cursor-pointer">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Module 1: Introduction to ChatGPT</h4>
                                    <p class="text-sm text-gray-400 mt-1">6 lessons • 4 hours</p>
                                </div>
                                <span class="text-lime-accent font-bold">→</span>
                            </div>
                        </div>
                        <div class="p-6 hover:bg-white/5 transition cursor-pointer">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Module 2: Advanced Prompting</h4>
                                    <p class="text-sm text-gray-400 mt-1">8 lessons • 6 hours</p>
                                </div>
                                <span class="text-lime-accent font-bold">→</span>
                            </div>
                        </div>
                        <div class="p-6 hover:bg-white/5 transition cursor-pointer">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Module 3: Real-World Applications</h4>
                                    <p class="text-sm text-gray-400 mt-1">10 lessons • 8 hours</p>
                                </div>
                                <span class="text-lime-accent font-bold">→</span>
                            </div>
                        </div>
                        <div class="p-6 hover:bg-white/5 transition cursor-pointer">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Module 4: Best Practices & Tips</h4>
                                    <p class="text-sm text-gray-400 mt-1">5 lessons • 3 hours</p>
                                </div>
                                <span class="text-lime-accent font-bold">→</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Instructor Info -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Instructor</h4>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-lime-accent to-lime-600"></div>
                        <div>
                            <p class="font-medium">Dr. Ahmed Hassan</p>
                            <p class="text-xs text-gray-400">AI Specialist</p>
                        </div>
                    </div>
                    <button class="w-full py-2 border border-lime-accent text-lime-accent rounded-lg font-medium hover:bg-lime-accent/10 transition">
                        View Profile
                    </button>
                </div>

                <!-- Quick Stats -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6 space-y-4">
                    <h4 class="font-bold">Quick Stats</h4>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Enrollment Growth</span>
                            <span class="text-lime-accent font-bold">↑ 24%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Daily Signups</span>
                            <span class="text-lime-accent font-bold">12</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Certificates Issued</span>
                            <span class="text-lime-accent font-bold">298</span>
                        </div>
                    </div>
                </div>

                <!-- Certificate Template -->
                <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 p-6">
                    <h4 class="font-bold mb-4">Certificate</h4>
                    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl p-4 text-center">
                        <p class="text-xs text-yellow-900 font-bold">CERTIFICATE OF COMPLETION</p>
                        <p class="text-sm text-yellow-900 mt-2 font-semibold">Mastering ChatGPT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
