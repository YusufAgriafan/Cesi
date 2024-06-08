@extends('layout.master2')
@section('tittle', 'Pesi - Profil')
@section('header', 'header4')
@section('page', 'Profil')
@section('nav_profil', 'active')

@section('content')

<style>

.center-div {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    background-color: white !important;

}

.inner-div {
    max-width: 7xl !important; /* Menyesuaikan dengan kelas max-w-7xl */
    margin: auto !important; /* Menambahkan margin auto untuk sentralisasi horizontal */
    padding: 10px !important; /* Menambahkan padding jika diperlukan */
}

</style>

<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div class="center-div">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

@endsection