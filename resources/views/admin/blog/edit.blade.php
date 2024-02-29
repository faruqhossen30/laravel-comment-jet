@extends('admin.layouts.app')
@section('breadcrumb')
<x-breadcrumb pageone="Blog" pageoneRoute="{{route('blog.index')}}" pagetwo="Create"  />
@endsection
@section('content')

<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
		<div class="p-6">

			<form action="{{route('blog.update', $blog->id)}}" method="POST">
                @csrf
                @method('PUT')
				<div>
					<label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2 w-full">Title:</label>
					<input type="text" name="title" id="simpleinput" class="form-input w-full rounded-md" placeholder="" value="{{$blog->title}}">
				</div>
                <div>
                    <label for="simpleinput"
                        class="text-gray-800 text-sm font-medium inline-block mb-2 w-full">Description :</label>
                    <textarea type="text" name="description" id="" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" value="">{{$blog->description}}</textarea>
                </div>
                <div class="py-2">
                    <button type="submit" class="btn bg-primary text-white py-1 px-4 border rounded-md bg-blue-600">Save</button>
                </div>
		</form>
	</div>

</div>
@endsection
