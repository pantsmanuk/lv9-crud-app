<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="font-sans antialiased">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold">Add Authority</h1>
                </div>

                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form method="post" action="{{ route('authorities.index') }}">
                        @csrf
                        <!-- Custodian Code -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="auth_code">
                                Custodian Code
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   type="text" name="auth_code" placeholder="180" value="{{old('auth_code')}}">
                            @error('auth_code')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <!-- Authority Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="auth_name">
                                Authority Name
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   type="text" name="auth_name" placeholder="Authority" value="{{old('auth_name')}}">
                            @error('auth_name')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <!-- USRN Start -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="usrn_start">
                                USRN Start
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   type="text" name="usrn_start" placeholder="11100000" value="{{old('usrn_start')}}">
                            @error('usrn_start')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <!-- USRN End -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="usrn_end">
                                USRN End
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   type="text" name="usrn_end" placeholder="11199999" value="{{old('usrn_end')}}">
                            @error('usrn_end')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <!-- LAD Code -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="lad_code">
                                LAD Code
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   type="text" name="lad_code" placeholder="E01000001" value="{{old('lad_code')}}">
                            @error('lad_code')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <!-- LAD Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700" for="lad_name">
                                LAD Name
                            </label>
                            <input class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   type="text" name="lad_name" placeholder="Authority" value="{{old('lad_name')}}">
                            @error('lad_name')
                            <span class="text-red-600 text-sm">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="flex items-center justify-start mt-4">
                            <button type="submit"
                                    class="inline-flex items-center px-6 py-2 text-sm font-semibold rounded-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Save Authority
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
