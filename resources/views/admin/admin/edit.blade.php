@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Admin" pageoneRoute="{{ route('admin.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input name="name" label="Name" value="{{ $admin->name }}" />
                        <x-form.input name="email" label="Email" value="{{ $admin->name }}" />
                        <x-form.input name="password" label="Password" />
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        @endsection
