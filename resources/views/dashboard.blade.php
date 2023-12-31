<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <!-- card start -->
        <div class="flex flex-wrap">
            <div class="w-1/4 p-2 mt-2 mb-2">
                <div
                    class="p-6 mt-6 mb-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="mb-3 font-normal text-gray-900 dark:text-white">
                        @php
                            if ($user->account_clearance == '0') {
                                echo 'Account clearance <br><br> Done';
                            } elseif ($user->account_clearance == '1') {
                                echo 'Account clearance <br><br> Pending<br><br>';

                                echo 'Due: ' . $user->due_amount;
                            }
                        @endphp
                    </p>
                </div>
            </div>
            <div class="w-1/4 p-2 mt-2 mb-2">
                <div
                    class="p-6 mt-6 mb-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="mb-3 font-normal text-gray-900 dark:text-white">
                        @php
                            if ($user->library_clearance == '0') {
                                echo 'Library clearance <br><br> Done';
                            } elseif ($user->library_clearance == '1') {
                                echo 'Library clearance <br><br> Pending<br><br>';
                            }
                        @endphp
                    </p>
                </div>
            </div>
            <div class="w-1/4 p-2 mt-2 mb-2">
                <div
                    class="p-6 mt-6 mb-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="mb-3 font-normal text-gray-900 dark:text-white">
                        @php
                            if ($user->administrative_clearance == '0') {
                                echo 'Administrative clearance <br><br> Done';
                            } elseif ($user->administrative_clearance == '1') {
                                echo 'Administrative clearance <br><br> Pending<br><br>';
                            }
                        @endphp
                    </p>
                </div>
            </div>
            <div class="w-1/4 p-2 mt-2 mb-2">
                <div
                    class="p-6 mt-6 mb-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <p class="mb-3 font-normal text-gray-900 dark:text-white">
                        @php
                            if ($user->department_clearance == '0') {
                                echo 'Department clearance <br><br> Done';
                            } elseif ($user->department_clearance == '1') {
                                echo 'Department clearance <br><br> Pending<br><br>';
                            }
                        @endphp
                    </p>
                </div>
            </div>
            <!-- Other content or cards here -->
        </div>
        <!-- card end -->
        <div class="box-content h-32 w-32 p-4 border-4">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Profile Information') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __("Update your account's profile information and email address.") }}
            </p>


            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-half"
                        :value="old('name', $user->name)" required autofocus autocomplete="name" readonly />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                        :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div>
                    <x-input-label for="batch" :value="__('Batch')" />
                    <x-text-input id="batch" name="batch" type="text" class="mt-1 block w-full"
                        :value="old('batch', $user->batch)" required autocomplete="batch" />
                    <x-input-error class="mt-2" :messages="$errors->get('batch')" />
                </div>

                <div>
                    <x-input-label for="program" :value="__('Program')" />
                    <x-text-input id="program" name="program" type="text" class="mt-1 block w-full"
                        :value="old('program', $user->program)" required autocomplete="program" readonly />
                    <x-input-error class="mt-2" :messages="$errors->get('program')" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>
