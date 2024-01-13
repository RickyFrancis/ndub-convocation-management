<x-guest-layout>
    <form method="POST" action="{{ route('submit_ticket') }}">
        @csrf

        <span style="color: white; text-align: center; margin-left: 100px;">
            @if(Session::has('success'))
            {{Session::get('success')}}
            @endif
            @if(Session::has('error'))
            {{Session::get('error')}}
            @endif
        </span>
        <br>

        <div style="color: white; text-align:justify">
            For support, call the NDUB IT (Software Division) between 9 AM and 5 PM at +8800000000, or email convocation.support@ndub.edu.bd.
        </div>
        <br>
        <!-- NDUB ID -->
        <div>
            <x-input-label for="student_id" :value="__('NDUB ID')" />
            <x-text-input id="student_id" class="block mt-1 w-full" type="text" name="student_id" :value="old('student_id')"
                required autofocus autocomplete="student_id" />
            <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
        </div>
        <br>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address  -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone  -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Details  -->
        <div class="mt-4">
            <x-input-label for="details" :value="__('Write your problem in detail')" />
            <!-- Replace x-text-input with textarea -->
            <textarea id="details" id="details" class="block mt-1 w-full" name="details" required autocomplete="details" style="background-color: #111827; color:white">{{ old('details') }}</textarea>
            <x-input-error :messages="$errors->get('details')" class="mt-2" />
        </div>

        <!-- Attachment  -->
        <!-- <div class="mt-4">
            <x-input-label for="photo" :value="__('Attachment (NDUB ID )')" />
            <x-text-input id="photo" class="block mt-1 w-full" type="text" name="photo" :value="old('photo')" required autocomplete="photo" />
            <x-input-error :messages="$errors->get('photo')" class="mt-2" />
        </div> -->


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ url('/') }}">
                {{ __('Home page') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
