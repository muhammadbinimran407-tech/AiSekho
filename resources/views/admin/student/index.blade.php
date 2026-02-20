<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-bold">Students</h1>
                <p class="text-gray-400 mt-2">Manage and track all students</p>
            </div>
            <div class="flex gap-3">
                <input type="text" placeholder="Search students..." 
                    class="px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition w-64">
                <button class="bg-lime-accent text-black px-6 py-3 rounded-lg font-bold hover:bg-lime-500 transition">
                    Import
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Students</p>
                <h3 class="text-3xl font-bold mt-2">1,240</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 156 new this month</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Active Now</p>
                <h3 class="text-3xl font-bold mt-2">348</h3>
                <p class="text-green-500 text-xs mt-2">28% of total</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Avg. Completion</p>
                <h3 class="text-3xl font-bold mt-2">72%</h3>
                <p class="text-lime-accent text-xs mt-2">Good progress</p>
            </div>
            <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Revenue Generated</p>
                <h3 class="text-3xl font-bold mt-2">$61,950</h3>
                <p class="text-lime-accent text-xs mt-2">↑ 18% increase</p>
            </div>
        </div>

        <!-- Students Table -->
        <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
            <div class="p-8 border-b border-gray-800">
                <h3 class="text-xl font-bold">All Students</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-gray-500 text-sm uppercase">
                            <th class="px-8 py-5 font-medium">Student</th>
                            <th class="px-8 py-5 font-medium">Email</th>
                            <th class="px-8 py-5 font-medium">Courses Enrolled</th>
                            <th class="px-8 py-5 font-medium">Completion Rate</th>
                            <th class="px-8 py-5 font-medium">Join Date</th>
                            <th class="px-8 py-5 font-medium">Status</th>
                            <th class="px-8 py-5 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-lime-accent to-lime-600 flex items-center justify-center text-black font-bold">A</div>
                                    <div>
                                        <p class="text-sm font-medium">Ali Ahmed</p>
                                        <p class="text-xs text-gray-400">ID: STU001</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">ali.ahmed@email.com</td>
                            <td class="px-8 py-5 text-sm font-bold">5</td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-2">
                                    <div class="w-16 h-2 bg-gray-700 rounded-full overflow-hidden">
                                        <div class="h-full bg-lime-accent w-3/4"></div>
                                    </div>
                                    <span class="text-xs font-bold">75%</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-400">Jan 15, 2025</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.students.show', 1) }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <button class="text-red-400 hover:text-red-300 text-sm font-medium">Block</button>
                                </div>
                            </td>''
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-black font-bold">S</div>
                                    <div>
                                        <p class="text-sm font-medium">Sara Malik</p>
                                        <p class="text-xs text-gray-400">ID: STU002</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">sara.malik@email.com</td>
                            <td class="px-8 py-5 text-sm font-bold">8</td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-2">
                                    <div class="w-16 h-2 bg-gray-700 rounded-full overflow-hidden">
                                        <div class="h-full bg-lime-accent w-5/6"></div>
                                    </div>
                                    <span class="text-xs font-bold">92%</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-400">Dec 20, 2024</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.students.show', 2) }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <button class="text-gray-400 hover:text-gray-300 text-sm font-medium">•••</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center text-black font-bold">U</div>
                                    <div>
                                        <p class="text-sm font-medium">Usman Khan</p>
                                        <p class="text-xs text-gray-400">ID: STU003</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">usman.khan@email.com</td>
                            <td class="px-8 py-5 text-sm font-bold">3</td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-2">
                                    <div class="w-16 h-2 bg-gray-700 rounded-full overflow-hidden">
                                        <div class="h-full bg-lime-accent w-1/3"></div>
                                    </div>
                                    <span class="text-xs font-bold">38%</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-400">Feb 01, 2025</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Active</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.students.show', 3) }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <button class="text-gray-400 hover:text-gray-300 text-sm font-medium">•••</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center text-black font-bold">F</div>
                                    <div>
                                        <p class="text-sm font-medium">Fatima Zahra</p>
                                        <p class="text-xs text-gray-400">ID: STU004</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-300">fatima.zahra@email.com</td>
                            <td class="px-8 py-5 text-sm font-bold">6</td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-2">
                                    <div class="w-16 h-2 bg-gray-700 rounded-full overflow-hidden">
                                        <div class="h-full bg-lime-accent w-2/3"></div>
                                    </div>
                                    <span class="text-xs font-bold">68%</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-sm text-gray-400">Jan 08, 2025</td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 bg-red-500/10 text-red-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Inactive</span>
                            </td>
                            <td class="px-8 py-5">
                                <div class="flex gap-2">
                                    <a href="{{ route('admin.students.show', 4) }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium">View</a>
                                    <button class="text-gray-400 hover:text-gray-300 text-sm font-medium">•••</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
