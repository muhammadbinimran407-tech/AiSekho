<x-my-layouts.main-layout>

    < <main class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
            
            <div class="lg:col-span-1 space-y-8">
                <div class="bg-[#1A1A1A] p-2 rounded-[3rem] border border-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=800" 
                         alt="Teacher" class="w-full rounded-[2.5rem] object-cover aspect-[4/5]">
                </div>
                
                <div class="space-y-4">
                    <h2 class="text-3xl font-bold">Dr. Arsalan Khan</h2>
                    <p class="text-lime-accent font-medium">Senior AI Research Scientist</p>
                    <div class="flex space-x-4">
                        <div class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-lime-accent hover:text-black cursor-pointer transition">in</div>
                        <div class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-lime-accent hover:text-black cursor-pointer transition">tw</div>
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        With over 12 years of experience in Silicon Valley, Dr. Arsalan has pioneered multiple LLM frameworks. He is dedicated to making AI education accessible to everyone in simple Urdu/Hindi.
                    </p>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-12">
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-[#1A1A1A] border border-gray-800 p-6 rounded-3xl text-center">
                        <div class="text-3xl font-bold lime-accent">15k+</div>
                        <div class="text-xs text-gray-500 uppercase mt-2">Students</div>
                    </div>
                    <div class="bg-[#1A1A1A] border border-gray-800 p-6 rounded-3xl text-center">
                        <div class="text-3xl font-bold lime-accent">4.9</div>
                        <div class="text-xs text-gray-500 uppercase mt-2">Rating</div>
                    </div>
                    <div class="bg-[#1A1A1A] border border-gray-800 p-6 rounded-3xl text-center">
                        <div class="text-3xl font-bold lime-accent">12</div>
                        <div class="text-xs text-gray-500 uppercase mt-2">Courses</div>
                    </div>
                    <div class="bg-[#1A1A1A] border border-gray-800 p-6 rounded-3xl text-center">
                        <div class="text-3xl font-bold lime-accent">8k+</div>
                        <div class="text-xs text-gray-500 uppercase mt-2">Reviews</div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold mb-8">Courses by Arsalan</h3>
                    <div class="space-y-6">
                        
                        <div class="bg-[#1A1A1A] border border-gray-800 p-6 rounded-[2rem] flex flex-col md:flex-row items-center gap-6 hover:border-lime-400/30 transition">
                            <div class="w-full md:w-48 h-32 bg-gray-800 rounded-2xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold">Mastering ChatGPT & Prompt Engineering</h4>
                                <p class="text-gray-400 text-sm mt-2 line-clamp-1">Advanced techniques for workflow automation using AI.</p>
                                <div class="flex items-center gap-4 mt-4">
                                    <span class="text-xl font-bold">$49.99</span>
                                    <span class="text-xs bg-gray-800 px-3 py-1 rounded-full text-lime-accent">Bestseller</span>
                                </div>
                            </div>
                            <div class="flex gap-3 w-full md:w-auto">
                                <button class="flex-1 md:flex-none px-6 py-3 bg-lime-accent text-black font-bold rounded-xl text-sm">Add to Cart</button>
                                <button class="flex-1 md:flex-none px-6 py-3 border border-gray-700 rounded-xl text-sm hover:bg-gray-800 transition">View</button>
                            </div>
                        </div>

                        <div class="bg-[#1A1A1A] border border-gray-800 p-6 rounded-[2rem] flex flex-col md:flex-row items-center gap-6 hover:border-lime-400/30 transition">
                            <div class="w-full md:w-48 h-32 bg-gray-800 rounded-2xl overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold">Deep Learning with TensorFlow</h4>
                                <p class="text-gray-400 text-sm mt-2 line-clamp-1">Build your first neural network from scratch.</p>
                                <div class="flex items-center gap-4 mt-4">
                                    <span class="text-xl font-bold">$79.99</span>
                                </div>
                            </div>
                            <div class="flex gap-3 w-full md:w-auto">
                                <button class="flex-1 md:flex-none px-6 py-3 bg-lime-accent text-black font-bold rounded-xl text-sm">Add to Cart</button>
                                <button class="flex-1 md:flex-none px-6 py-3 border border-gray-700 rounded-xl text-sm hover:bg-gray-800 transition">View</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    </x-my-layouts.main-layout>