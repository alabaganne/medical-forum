<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full max-w-6xl mt-6 bg-white shadow-md overflow-hidden sm:rounded-lg grid grid-cols-1 lg:grid-cols-2">
        <div class="p-6 hidden lg:flex justify-center items-center col-span-1 bg-gray-800 text-white text-4xl font-bold bg-cover bg-center bg-blend-overlay" style="background-image: url('{{ asset('images/1.jpg') }}')">
            LOGO
        </div>
        <div class="col-span-1 py-8">
            <div class="border-b border-gray-100 px-6 pb-8">
                <div class="flex justify-center gap-12">
                    <a class="text-gray-500 hover:text-gray-700 font-medium" href="{{ route('login') }}">Login</a>
                    <a class="text-gray-500 hover:text-gray-700 font-medium" href="{{ route('register') }}">Register</a>
                </div>
                <div class="mt-8 flex flex-col gap-6">
                    <a href="#" class="flex items-center justify-center gap-6 w-full px-6 py-3 border border-gray-200 shadow-sm rounded hover:bg-gray-50">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4549 5.62905H13.891V5.6H7.59104V8.39999H11.5471C10.9699 10.0299 9.41908 11.2 7.59104 11.2C5.2716 11.2 3.39105 9.31944 3.39105 6.99999C3.39105 4.68055 5.2716 2.8 7.59104 2.8C8.66168 2.8 9.63573 3.2039 10.3774 3.86365L12.3573 1.8837C11.1071 0.718549 9.43483 0 7.59104 0C3.7253 0 0.591064 3.13425 0.591064 6.99999C0.591064 10.8657 3.7253 14 7.59104 14C11.4568 14 14.591 10.8657 14.591 6.99999C14.591 6.53064 14.5427 6.0725 14.4549 5.62905Z" fill="#FFC107"/>
                            <path d="M1.39819 3.74185L3.69803 5.4285C4.32033 3.8878 5.82743 2.8 7.59107 2.8C8.66172 2.8 9.63576 3.2039 10.3774 3.86365L12.3574 1.8837C11.1072 0.718549 9.43486 0 7.59107 0C4.90238 0 2.57069 1.51795 1.39819 3.74185Z" fill="#FF3D00"/>
                            <path d="M7.5911 14C9.3992 14 11.0421 13.3081 12.2842 12.1828L10.1177 10.3495C9.39134 10.902 8.50371 11.2007 7.5911 11.2C5.77041 11.2 4.22446 10.0391 3.64207 8.41892L1.35938 10.1777C2.51787 12.4446 4.87056 14 7.5911 14Z" fill="#4CAF50"/>
                            <path d="M14.4549 5.62905H13.891V5.6H7.59106V8.4H11.5471C11.271 9.17574 10.7737 9.85361 10.1167 10.3498L10.1177 10.3491L12.2842 12.1824C12.1309 12.3217 14.591 10.5 14.591 7C14.591 6.53065 14.5427 6.0725 14.4549 5.62905Z" fill="#3B8FF0"/>
                        </svg>                            
                        Continue with Google
                    </a>
                    <a href="#" class="flex items-center justify-center gap-6 w-full px-6 py-3 border border-gray-200 shadow-sm rounded hover:bg-gray-50">
                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_27_143)">
                            <path d="M14.1721 15.5001C14.6293 15.5001 15 15.1294 15 14.6722V1.32787C15 0.870605 14.6293 0.5 14.1721 0.5H0.827871C0.370547 0.5 0 0.870605 0 1.32787V14.6722C0 15.1294 0.370547 15.5001 0.827871 15.5001H14.1721Z" fill="#395185"/>
                            <path d="M10.3498 15.5003V9.69145H12.2996L12.5915 7.42768H10.3498V5.98229C10.3498 5.32686 10.5318 4.8802 11.4717 4.8802L12.6705 4.87968V2.85497C12.4631 2.82737 11.7515 2.76573 10.9237 2.76573C9.1953 2.76573 8.01206 3.82071 8.01206 5.75817V7.42768H6.05725V9.69145H8.01206V15.5003H10.3498Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_27_143">
                            <rect width="15" height="15" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>                            
                        Continue with Facebook
                    </a>
                </div>
            </div>
            <div class="px-8 py-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
