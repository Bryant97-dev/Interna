<x-guest-layout>
    <main>
        <section class="absolute w-full h-full">
            <div
                class="absolute top-0 w-full h-full bg-gray-900"
                style="background-image: url({{ url('assets/login/assets/img/register_bg_2.png') }}); background-size: 100%; background-repeat: no-repeat;"
            ></div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
                        >
                            <div class="rounded-t mb-0 px-6 py-6">
                                <div class="text-center mb-3">
                                    <h6 class="text-gray-600 text-sm font-bold">
                                        Login
                                    </h6>
                                </div>
                                <x-jet-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password"
                                        >Email</label
                                        ><input
                                            name="email"
                                            type="email"
                                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                            placeholder="Email"
                                            style="transition: all 0.15s ease 0s;" required autofocus
                                        />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password"
                                        >Password</label
                                        ><input
                                            name="password"
                                            type="password"
                                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                            placeholder="Password"
                                            style="transition: all 0.15s ease 0s;" required autocomplete="current-password"
                                        />
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center cursor-pointer"
                                        ><input
                                                name="remember"
                                                id="customCheckLogin"
                                                type="checkbox"
                                                class="form-checkbox text-gray-800 ml-1 w-5 h-5"
                                                style="transition: all 0.15s ease 0s;"
                                            /><span class="ml-2 text-sm font-semibold text-gray-700"
                                            >Remember me</span
                                            ></label
                                        >
                                        <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-indigo-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                            type="submit"
                                            style="transition: all 0.15s ease 0s;"
                                        >
                                            Login
                                        </button>
                                    </div>
                                    <div class="flex items-center justify-center mt-4">
                                        <a class="underline text-sm text-indigo-600 hover:text-gray-900" href="{{ route('register') }}">
                                            {{ __('or register') }}
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
                <div class="container mx-auto px-4">
                    <hr class="mb-6 border-b-1 border-gray-700" />
                    <div
                        class="flex flex-wrap items-center md:justify-between justify-center"
                    >
                        <div class="w-full md:w-4/12 px-4">
                            <div class="text-sm text-white font-semibold py-1">
                                Copyright © 2021
                                <a
                                    href="{{ url('/') }}"
                                    class="text-white hover:text-gray-400 text-sm font-semibold py-1"
                                >Interna</a
                                >
                            </div>
                        </div>
                        <div class="w-full md:w-8/12 px-4">
                            <ul
                                class="flex flex-wrap list-none md:justify-end  justify-center"
                            >
                                <li>
                                    <a
                                        target="_blank"
                                        href="https://informatika.uc.ac.id/"
                                        class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                                    >Informatika UC</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </main>
</x-guest-layout>
