@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Blog" pageoneRoute="{{ route('blog.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('blog.update', $blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input name="title" label="Title" value="{{ $blog->title }}" />
                        <x-form.select name="category_id" label="Select Category" :data="$categories" :id="$blog->id" />
                        <x-form.textarea name="description" label="Description" value="{{ $blog->description }}" />
                        <x-form.submit-button />
                    </form>
                </div>

            </div>
        @endsection
