<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('admin.courses.index') }}" 
               class="text-lime-accent hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                ← Back to Courses
            </a>
            <h1 class="text-4xl font-bold">Create New Course</h1>
            <p class="text-gray-400 mt-2">Add a new course to your platform</p>
        </div>

        <!-- Form Card -->
        <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden max-w-2xl">
            <div class="p-8 border-b border-gray-800">
                <h3 class="text-xl font-bold">Course Information</h3>
            </div>

            <div class="p-8">
                <form action="{{ route('admin.courses.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Course Title -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Course Title</label>
                        <input type="text" name="title"
                               value="{{ old('title') }}"
                               placeholder="e.g., Mastering Advanced JavaScript"
                               class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                    </div>

                    <!-- Course Description -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Description</label>
                        <textarea name="description" rows="4"
                                  placeholder="Write a compelling description for your course..."
                                  class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition resize-none">{{ old('description') }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Price -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Price</label>
                            <div class="flex items-center">
                                <span class="text-gray-400 mr-2">$</span>
                                <input type="number" name="price"
                                       value="{{ old('price') }}"
                                       placeholder="99.99" step="0.01"
                                       class="flex-1 px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                            </div>
                        </div>

                        <!-- Duration -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Duration (Hours)</label>
                            <input type="number" name="duration"
                                   value="{{ old('duration') }}"
                                   placeholder="40"
                                   class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Instructor -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Instructor</label>
                            <select name="instructor_id"
                                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                                <option value="">Select Instructor</option>
                                @foreach($instructors as $instructor)
                                    <option value="{{ $instructor->id }}"
                                        {{ old('instructor_id') == $instructor->id ? 'selected' : '' }}>
                                        {{ $instructor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-sm font-bold text-gray-300 mb-3">Category</label>
                            <select name="category"
                                    class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                                <option value="">Select Category</option>
                                <option value="ai" {{ old('category') == 'ai' ? 'selected' : '' }}>AI & Machine Learning</option>
                                <option value="design" {{ old('category') == 'design' ? 'selected' : '' }}>Design</option>
                                <option value="development" {{ old('category') == 'development' ? 'selected' : '' }}>Development</option>
                                <option value="business" {{ old('category') == 'business' ? 'selected' : '' }}>Business</option>
                            </select>
                        </div>
                    </div>

                    <!-- Level -->
                    <div>
                        <label class="block text-sm font-bold text-gray-300 mb-3">Level</label>
                        <div class="flex gap-4">
                            @foreach(['beginner','intermediate','advanced'] as $level)
                                <label class="flex items-center">
                                    <input type="radio" name="level" value="{{ $level }}"
                                        {{ old('level') == $level ? 'checked' : '' }} class="mr-2">
                                    <span class="text-sm text-gray-300 capitalize">{{ $level }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4 pt-6">
                        <button type="submit"
                                class="flex-1 bg-lime-accent text-black py-3 rounded-lg font-bold hover:bg-lime-500 transition">
                            Create Course
                        </button>
                        <a href="{{ route('admin.courses.index') }}"
                           class="flex-1 bg-gray-700 text-white py-3 rounded-lg font-bold hover:bg-gray-600 transition text-center">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
