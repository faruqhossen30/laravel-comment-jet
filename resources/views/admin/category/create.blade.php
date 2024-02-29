@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Category" pageoneRoute="{{route('category.index')}}" pagetwo="Create"  />
@endsection
@section('content')

<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('category.store')}}" method="POST">
                @csrf
				<div>
					<label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2 w-full">Name:</label>
					<input type="text" name="name" id="simpleinput" class="form-input w-full" placeholder="Category name">
				</div>
                <div class="py-2">
                    <button type="submit" class="btn bg-primary text-white py-1 px-4 border rounded-md bg-blue-600">Save</button>
                </div>
		</form>
	</div>

</div>
@endsection
