<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-10 mx-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 gap-6 grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-4">
            <div class="hidden xl:block col-span-1 text-xs">
                <div class="font-bold mb-4 ml-6 text-xs text-gray-800">Menu</div>
                <a :href="route('dashboard')" class="mt-1 bg-blue-100 text-blue-500 px-4 py-4 font-bold flex items-center gap-2 rounded-md border-l-8 border-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>                                           
                    Posts
                </a>
                <a :href="route('profile.edit')" class="mt-1 px-4 py-4 font-bold flex items-center gap-2 rounded-md text-gray-500 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                                                                           
                    Profile
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" class="mt-1 px-4 py-4 font-bold flex items-center gap-2 rounded-md text-gray-500 hover:bg-gray-200"
                        onclick="event.preventDefault(); this.closest('form').submit()"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>                                                                                                                  
                        Log out
                    </a>
                </form>
            </div>
            <div class="lg:col-span-2">
                <div class="flex justify-end lg:hidden">
                    <a href="#" class="p-4 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold flex items-center rounded shadow mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                            <path d="M2 4.25A2.25 2.25 0 014.25 2h2.5A2.25 2.25 0 019 4.25v2.5A2.25 2.25 0 016.75 9h-2.5A2.25 2.25 0 012 6.75v-2.5zM2 13.25A2.25 2.25 0 014.25 11h2.5A2.25 2.25 0 019 13.25v2.5A2.25 2.25 0 016.75 18h-2.5A2.25 2.25 0 012 15.75v-2.5zM11 4.25A2.25 2.25 0 0113.25 2h2.5A2.25 2.25 0 0118 4.25v2.5A2.25 2.25 0 0115.75 9h-2.5A2.25 2.25 0 0111 6.75v-2.5zM15.25 11.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
                        </svg>
                        <span>Start a New Topic</span>
                    </a>
                </div>
                @if (count($posts) == 0)
                    <p class="text-gray-500 text-sm font-semibold">No posts available!</p>
                @endif
                @foreach ($posts as $i => $post)
                    <div class="bg-white overflow-hidden shadow rounded-lg px-4 py-4 mb-6">
                        <div class="grid grid-cols-8 gap-4">
                            <div class="col-span-1 flex justify-center items-center flex-col">
                                <div @class([
                                    "text-blue-500" => $i % 2 == 0,
                                    "text-gray-400" => $i % 2 != 0
                                ])>
                                    <!-- arrow-small-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M10 15a.75.75 0 01-.75-.75V7.612L7.29 9.77a.75.75 0 01-1.08-1.04l3.25-3.5a.75.75 0 011.08 0l3.25 3.5a.75.75 0 11-1.08 1.04l-1.96-2.158v6.638A.75.75 0 0110 15z" clip-rule="evenodd" />
                                    </svg>
    
                                </div>
                                <div @class([
                                    "font-bold text-sm" => true,
                                    "text-blue-500" => $i % 2 == 0,
                                    "text-red-500" => $i % 2 != 0,
                                ])>{{ $i % 2 == 0 ? "56" : "02" }}</div>
                                <div @class([
                                    "text-red-500" => $i % 2 != 0,
                                    "text-gray-400" => $i % 2 == 0
                                ])>
                                    <!-- arrow-small-down -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M10 5a.75.75 0 01.75.75v6.638l1.96-2.158a.75.75 0 111.08 1.04l-3.25 3.5a.75.75 0 01-1.08 0l-3.25-3.5a.75.75 0 111.08-1.04l1.96 2.158V5.75A.75.75 0 0110 5z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col-span-7 text-gray-500">
                                <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
                                <p class="mt-2 text-sm">
                                    {{ $post->body }}
                                </p>
                                <hr class="my-3">
                                <div class="flex justify-between items-center text-xs text-gray-700 font-medium">
                                    <div class="flex items-center mr-6">
                                        <img src="https://tailwindui.com/img/avatar-3.jpg" alt="" class="h-8 w-8 flex-none rounded-full mr-2">
                                        <div>Posted by <span class="text-blue-500">Ala Baganné</span></div>
                                        <div class="ml-6"><?php echo 8 + $i ?>hr ago</div>
                                    </div>
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500 w-5 h-5 mr-1">
                                            <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902 1.168.188 2.352.327 3.55.414.28.02.521.18.642.413l1.713 3.293a.75.75 0 001.33 0l1.713-3.293a.783.783 0 01.642-.413 41.102 41.102 0 003.55-.414c1.437-.231 2.43-1.49 2.43-2.902V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zM6.75 6a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 2.5a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" />
                                        </svg>
                                        <span>50+</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mt-6 bg-white rounded shadow p-8 grid grid-cols-2 sm:grid-cols-3 gap-2 text-sm font-medium lg:hidden">
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Help</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">About</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Topics</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Top Topics</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Press</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Terms</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Blog</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Privacy Policy</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Advertise</a></div>
                </div>
            </div>
            <div class="hidden lg:inline-block">
                <div class="flex">
                    <a href="{{ route('posts.create') }}" class="p-4 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold flex items-center rounded shadow w-full justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                            <path d="M2 4.25A2.25 2.25 0 014.25 2h2.5A2.25 2.25 0 019 4.25v2.5A2.25 2.25 0 016.75 9h-2.5A2.25 2.25 0 012 6.75v-2.5zM2 13.25A2.25 2.25 0 014.25 11h2.5A2.25 2.25 0 019 13.25v2.5A2.25 2.25 0 016.75 18h-2.5A2.25 2.25 0 012 15.75v-2.5zM11 4.25A2.25 2.25 0 0113.25 2h2.5A2.25 2.25 0 0118 4.25v2.5A2.25 2.25 0 0115.75 9h-2.5A2.25 2.25 0 0111 6.75v-2.5zM15.25 11.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
                        </svg>
                        <span>Create a New Post</span>
                    </a>
                </div>
                <div class="mt-6 bg-white rounded shadow p-8 grid grid-cols-1 gap-4 text-sm font-medium">
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Help</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">About</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Topics</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Top Topics</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Press</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Terms</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Blog</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Privacy Policy</a></div>
                    <div><a href="#" class="text-gray-400 hover:text-gray-500">Advertise</a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
