<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('admin.teachers.index') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                ← Back to Teachers
            </a>
            <h1 class="text-4xl font-bold">Add New Teacher</h1>
            <p class="text-gray-400 mt-2">Create a new instructor profile</p>
        </div>

        <!-- Form Card -->
        <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden max-w-2xl">
            <div class="p-8 border-b border-gray-800">
                <h3 class="text-xl font-bold">Teacher Information</h3>
            </div>
            <div class="p-8">
                <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Full Name</label>
                        <input type="text" name="name" placeholder="e.g., Dr. Ahmed Hassan" 
                            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Email Address</label>
                        <input type="email" name="email" placeholder="teacher@example.com" 
                            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Phone -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Phone Number</label>
                            <input type="tel" name="phone" placeholder="+92 300 1234567" 
                                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                        </div>

                        <!-- Qualification -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Qualification</label>
                            <select name="qualification" 
                                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                                <option value="">Select Qualification</option>
                                <option value="bachelor">Bachelor's Degree</option>
                                <option value="master">Master's Degree</option>
                                <option value="phd">PhD</option>
                                <option value="certificate">Professional Certificate</option>
                            </select>
                        </div>
                    </div>

                    <!-- Specialty -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Specialty/Expertise</label>
                        <input type="text" name="specialty" placeholder="e.g., AI & Machine Learning" 
                            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                    </div>

                    <!-- Bio -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Biography</label>
                        <textarea name="bio" rows="4" placeholder="Write a brief biography for the teacher..." 
                            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition resize-none"></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Experience (Years) -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Years of Experience</label>
                            <input type="number" name="experience_years" placeholder="10" min="0" 
                                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                        </div>

                        <!-- Hourly Rate -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Hourly Rate ($)</label>
                            <input type="number" name="hourly_rate" placeholder="50" step="0.01" 
                                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                        </div>
                    </div>

                    <!-- Profile Picture -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Profile Picture</label>
                        <div class="border-2 border-dashed border-gray-700 rounded-lg p-6 text-center hover:border-lime-accent/50 transition cursor-pointer">
                            <input type="file" name="profile_picture" accept="image/*" class="hidden" id="profile-picture">
                            <label for="profile-picture" class="cursor-pointer">
                                <p class="text-gray-400">Click to upload or drag and drop</p>
                                <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF up to 10MB</p>
                            </label>
                        </div>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Status</label>
                        <div class="flex gap-4">
                            <label class="flex items-center">
                                <input type="radio" name="status" value="active" checked class="mr-2">
                                <span class="text-sm text-gray-300">Active</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="status" value="inactive" class="mr-2">
                                <span class="text-sm text-gray-300">Inactive</span>
                            </label>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4 pt-6">
                        <button type="submit" class="flex-1 bg-lime-accent text-black py-3 rounded-lg font-bold hover:bg-lime-500 transition">
                            Create Teacher
                        </button>
                        <a href="#" class="flex-1 bg-gray-700 text-white py-3 rounded-lg font-bold hover:bg-gray-600 transition text-center">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
