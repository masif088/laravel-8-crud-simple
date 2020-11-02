<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Blog Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Blog</a></div>
            <div class="breadcrumb-item"><a href="">Buat Blog Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:form-blog action="create" />
    </div>
</x-app-layout>
