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
                                        Register
                                    </h6>
                                </div>
                                <x-jet-validation-errors class="mb-4" />
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password"
                                        >Name</label
                                        ><input
                                            name="name"
                                            type="text"
                                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                            placeholder="Name"
                                            style="transition: all 0.15s ease 0s;" required autofocus autocomplete="name"
                                        />
                                    </div>
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
                                            style="transition: all 0.15s ease 0s;" required
                                        />
                                    </div>
                                    <div class="mt-4">
                                        <x-jet-label for="study_program_id" value="{{ __('Study Program') }}" />
                                        <select id="study_program_id" name="study_program_id" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md block mt-1 w-full" required>
                                            @foreach ($study_programs as $study_program)
                                                <option value="{{ $study_program->id }}">{{$study_program->abbreviation . ' (' . $study_program->study_program .')'}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="period_id" value="{{ __('Period') }}" />
                                        <select id="period_id" name="period_id" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md block mt-1 w-full" required>
                                            @foreach ($periods as $period)
                                                <option value="{{ $period->id }}">{{$period->period}}</option>
                                            @endforeach
                                        </select>
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
                                            style="transition: all 0.15s ease 0s;" required autocomplete="new-password"
                                        />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                            for="grid-password"
                                        >Confirm Password</label
                                        ><input
                                            name="password_confirmation"
                                            type="password"
                                            class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                            placeholder="Password Confirmation"
                                            style="transition: all 0.15s ease 0s;" required autocomplete="new-password"
                                        />
                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                            type="submit"
                                            style="transition: all 0.15s ease 0s;"
                                        >
                                            Register
                                        </button>
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
