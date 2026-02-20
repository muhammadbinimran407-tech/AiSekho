<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-bold">Teachers</h1>
                <p class="text-gray-400 mt-2">Manage instructors and teacher profiles</p>
            </div>
            <a href="{{ route('admin.teachers.create') }}" class="bg-lime-accent text-black px-6 py-3 rounded-lg font-bold hover:bg-lime-500 transition">
                + Add Teacher
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Teachers</p>
                <h3 class="text-3xl font-bold mt-2">24</h3>
                <p class="text-lime-accent text-xs mt-2">3 new this quarter</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Active Teachers</p>
                <h3 class="text-3xl font-bold mt-2">22</h3>
                <p class="text-green-500 text-xs mt-2">92% active rate</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Avg. Rating</p>
                <h3 class="text-3xl font-bold mt-2">4.7★</h3>
                <p class="text-lime-accent text-xs mt-2">From 1,240 reviews</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Courses</p>
                <h3 class="text-3xl font-bold mt-2">48</h3>
                <p class="text-lime-accent text-xs mt-2">2.0 courses per teacher</p>
            </div>
        </div>

        <!-- Teachers Table -->
        <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
            <div class="p-8 border-b border-gray-800">
                <h3 class="text-xl font-bold">All Teachers</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-gray-500 text-sm uppercase">
                            <th class="px-8 py-5 font-medium">Teacher</th>
                            <th class="px-8 py-5 font-medium">Specialty</th>
                            <th class="px-8 py-5 font-medium">Courses</th>
                            <th class="px-8 py-5 font-medium">Students</th>
                            <th class="px-8 py-5 font-medium">Avg. Rating</th>
                            <th class="px-8 py-5 font-medium">Status</th>
                            <th class="px-8 py-5 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-lime-accent to-lime-600 flex items-center justify-center text-black font-bold">D</div>
                                    <div>
                                        <p class="text-sm font-medium">Dr. Ahmed Hassan</p>
                                        <p class="text-xs text-gray-400">ID: TCH001</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">AI & Machine Learning</td>
                            <td class="px-8 py-5 text-sm font-bold">3</td>
                            <td class="px-8 py-5 text-sm font-bold">892</td>
                            <td class="px-8 py-5">
                                <span class="text-lime-accent font-bold">4.9★</span>
                                <p class="text-xs text-gray-400">328 reviews</p>
                            </td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.teachers.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.teachers.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-black font-bold">S</div>
                                    <div>
                                        <p class="text-sm font-medium">Sara Malik</p>
                                        <p class="text-xs text-gray-400">ID: TCH002</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">UI/UX Design</td>
                            <td class="px-8 py-5 text-sm font-bold">2</td>
                            <td class="px-8 py-5 text-sm font-bold">645</td>
                            <td class="px-8 py-5">
                                <span class="text-lime-accent font-bold">4.7★</span>
                                <p class="text-xs text-gray-400">289 reviews</p>
                            </td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.teachers.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.teachers.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-black font-bold">U</div>
                                    <div>
                                        <p class="text-sm font-medium">Usman Khan</p>
                                        <p class="text-xs text-gray-400">ID: TCH003</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">Web Development</td>
                            <td class="px-8 py-5 text-sm font-bold">4</td>
                            <td class="px-8 py-5 text-sm font-bold">1,156</td>
                            <td class="px-8 py-5">
                                <span class="text-lime-accent font-bold">4.8★</span>
                                <p class="text-xs text-gray-400">412 reviews</p>
                            </td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.teachers.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.teachers.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center text-black font-bold">F</div>
                                    <div>
                                        <p class="text-sm font-medium">Fatima Zahra</p>
                                        <p class="text-xs text-gray-400">ID: TCH004</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">Business Strategy</td>
                            <td class="px-8 py-5 text-sm font-bold">2</td>
                            <td class="px-8 py-5 text-sm font-bold">456</td>
                            <td class="px-8 py-5">
                                <span class="text-lime-accent font-bold">4.6★</span>
                                <p class="text-xs text-gray-400">187 reviews</p>
                            </td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">On Leave</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.teachers.show') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <a href="{{ route('admin.teachers.index') }}" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Edit</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
