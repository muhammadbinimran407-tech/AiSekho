<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-bold">Courses</h1>
                <p class="text-gray-400 mt-2">Manage all your online courses</p>
            </div>
            <a href="{{ route('admin.courses.create') }}" class="bg-lime-accent text-black px-6 py-3 rounded-lg font-bold hover:bg-lime-500 transition">
                + Create Course
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Courses</p>
                <h3 class="text-3xl font-bold mt-2">48</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 5 this month</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Active Courses</p>
                <h3 class="text-3xl font-bold mt-2">42</h3>
                <p class="text-lime-accent text-xs mt-2">87.5% active rate</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Revenue</p>
                <h3 class="text-3xl font-bold mt-2">$12,450</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 18% increase</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Students</p>
                <h3 class="text-3xl font-bold mt-2">1,240</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 156 new</p>
            </div>
        </div>

        <!-- Courses Table -->
        <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
            <a href="{{ route('admin.courses.show') }}" class="p-8 border-b border-gray-800">
                <h3 class="text-xl font-bold">All Courses</h3>
            </a>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-gray-500 text-sm uppercase">
                            <th class="px-8 py-5 font-medium">Course Name</th>
                            <th class="px-8 py-5 font-medium">Instructor</th>
                            <th class="px-8 py-5 font-medium">Students</th>
                            <th class="px-8 py-5 font-medium">Price</th>
                            <th class="px-8 py-5 font-medium">Status</th>
                            <th class="px-8 py-5 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div>
                                    <p class="text-sm font-medium">Mastering ChatGPT</p>
                                    <p class="text-xs text-gray-400 mt-1">AI & ML</p>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">Dr. Ahmed Hassan</td>
                            <td class="px-8 py-5 text-sm font-bold">342</td>
                            <td class="px-8 py-5 text-sm font-bold">$49.99</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.courses.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.courses.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                    <button class="text-red-400 hover:text-red-300 text-sm font-medium">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div>
                                    <p class="text-sm font-medium">AI-Driven UI Design</p>
                                    <p class="text-xs text-gray-400 mt-1">Design</p>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">Sara Malik</td>
                            <td class="px-8 py-5 text-sm font-bold">289</td>
                            <td class="px-8 py-5 text-sm font-bold">$39.99</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.courses.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.courses.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                    <button class="text-red-400 hover:text-red-300 text-sm font-medium">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div>
                                    <p class="text-sm font-medium">Web Development Masterclass</p>
                                    <p class="text-xs text-gray-400 mt-1">Development</p>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">Usman Khan</td>
                            <td class="px-8 py-5 text-sm font-bold">156</td>
                            <td class="px-8 py-5 text-sm font-bold">$59.99</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Pending</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.courses.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.courses.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                    <button class="text-red-400 hover:text-red-300 text-sm font-medium">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
