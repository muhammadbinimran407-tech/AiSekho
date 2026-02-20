<x-my-layouts.admin-layout>

  <div class="p-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Total Revenue</p>
                    <h3 class="text-3xl font-bold mt-2">$24,500</h3>
                    <p class="text-lime-accent text-xs mt-2">↑ 12% since last month</p>
                </div>
                <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Active Students</p>
                    <h3 class="text-3xl font-bold mt-2">1,240</h3>
                    <p class="text-lime-accent text-xs mt-2">↑ 5% new signups</p>
                </div>
                <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Live Courses</p>
                    <h3 class="text-3xl font-bold mt-2">48</h3>
                    <p class="text-gray-400 text-xs mt-2">3 pending approval</p>
                </div>
                <div class="bg-[#1A1A1A] p-6 rounded-3xl border border-gray-800">
                    <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">Course Completion</p>
                    <h3 class="text-3xl font-bold mt-2">85%</h3>
                    <p class="text-lime-accent text-xs mt-2">High engagement</p>
                </div>
            </div>

            <div class="mt-12 bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden">
                <div class="p-8 border-b border-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-bold">Recent Course Sales</h3>
                    <button class="bg-lime-accent text-black px-4 py-2 rounded-lg text-xs font-bold">Download Report</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-gray-500 text-sm uppercase">
                                <th class="px-8 py-5 font-medium">Student</th>
                                <th class="px-8 py-5 font-medium">Course</th>
                                <th class="px-8 py-5 font-medium">Price</th>
                                <th class="px-8 py-5 font-medium">Status</th>
                                <th class="px-8 py-5 font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-8 py-5 flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-gray-700"></div>
                                    <span class="text-sm font-medium">Ali Ahmed</span>
                                </td>
                                <td class="px-8 py-5 text-sm text-gray-300">Mastering ChatGPT</td>
                                <td class="px-8 py-5 text-sm font-bold">$49.99</td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-green-500/10 text-green-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Completed</span>
                                </td>
                                <td class="px-8 py-5">
                                    <button class="text-gray-500 hover:text-white">•••</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-8 py-5 flex items-center space-x-3">
                                    <div class="w-8 h-8 rounded-full bg-gray-700"></div>
                                    <span class="text-sm font-medium">Sara Malik</span>
                                </td>
                                <td class="px-8 py-5 text-sm text-gray-300">AI-Driven UI Design</td>
                                <td class="px-8 py-5 text-sm font-bold">$39.99</td>
                                <td class="px-8 py-5">
                                    <span class="px-3 py-1 bg-yellow-500/10 text-yellow-500 rounded-full text-[10px] font-bold uppercase tracking-tighter">Pending</span>
                                </td>
                                <td class="px-8 py-5">
                                    <button class="text-gray-500 hover:text-white">•••</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-my-layouts.admin-layout>