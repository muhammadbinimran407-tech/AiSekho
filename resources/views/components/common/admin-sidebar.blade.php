<aside class="w-64 bg-[#0F0F0F] border-r border-gray-800 flex flex-col">
    <div class="p-8 text-2xl font-bold tracking-tighter">
        AI_<span class="lime-accent">Sekho</span>
    </div>
    
    <nav class="flex-1 px-4 space-y-2">

        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
           class="sidebar-link flex items-center space-x-3 p-3 rounded-xl transition
           {{ request()->routeIs('admin.dashboard') ? 'bg-red-600 text-white' : 'text-gray-400' }}">
            <span>📊</span>
            <span class="text-sm font-medium">Dashboard</span>
        </a>

        <!-- Courses -->
        <a href="{{ route('admin.courses.index') }}"
           class="sidebar-link flex items-center space-x-3 p-3 rounded-xl transition
           {{ request()->routeIs('admin.courses.*') ? 'bg-red-600 text-white' : 'text-gray-400' }}">
            <span>📚</span>
            <span class="text-sm font-medium">Manage Courses</span>
        </a>

        <!-- Students -->
        <a href="{{ route('admin.students.index') }}"
           class="sidebar-link flex items-center space-x-3 p-3 rounded-xl transition
           {{ request()->routeIs('admin.students.*') ? 'bg-red-600 text-white' : 'text-gray-400' }}">
            <span>👥</span>
            <span class="text-sm font-medium">Students</span>
        </a>

        <!-- Earnings -->
        <a href="#"
           class="sidebar-link flex items-center space-x-3 p-3 rounded-xl text-gray-400 transition">
            <span>💰</span>
            <span class="text-sm font-medium">Earnings</span>
        </a>

    </nav>

    <div class="p-4 border-t border-gray-800">
        <button class="w-full flex items-center space-x-3 p-3 text-red-400 hover:bg-red-400/10 rounded-xl transition">
            <span>🚪</span>
            <span class="text-sm font-medium">Logout</span>
        </button>
    </div>
</aside>
