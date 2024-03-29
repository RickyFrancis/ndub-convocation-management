<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <!-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> -->

        <!-- Email Address -->
        <!-- <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> -->

        <!-- NDUB ID -->
        <div>
            <x-input-label for="student_id" :value="__('NDUB ID')" />
            <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')"
                required autofocus autocomplete="student_id" />
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <span style="color:white;">Registration for</span><br>
            <input type="radio" value="1" name="student_program_choice"><span style="color:white;"> One program (Bachelor or Master)</span><br>
            <input type="radio" value="3" name="student_program_choice"><span style="color:white;"> Both programs (Bachelor and Master)</span><br>
            <x-input-error :messages="$errors->get('student_program_choice')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Create a new password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="The password field must be at least 8 characters."/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Please retype your new password for confirmation')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" placeholder="Retype your password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered? click here') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
