@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Admin" pageoneRoute="{{ route('admin.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <x-form.input name="name" label="Name" />
                        <x-form.input name="email" label="Email" type="email"/>
                        <x-form.input name="password" label="Password" type="password"/>
                        <x-form.submit-button />

                    </form>
                </div>

            </div>
        @endsection
