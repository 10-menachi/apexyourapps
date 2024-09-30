@extends('layouts.admin-app')

@section('title', 'Create Sub Category')

@section('content')
    <div class="page-wrapper relative w-[calc(100%-260px)] p-10 pt-[64px] duration-300 ltr:ml-auto rtl:ml-0 rtl:mr-auto">
        <div class="w-full min-h-[calc(100vh-152px)] pb-14">
            <div class="w-full bg-white border rounded-md dark:bg-gray-900 border-slate-200 dark:border-slate-700/40">
                <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-12 gap-4 p-4">
                        <div class="col-span-12 text-right">
                            <div class="flex justify-end">
                                <a href="{{ route('product.index') }}"
                                    class="flex items-center justify-center max-w-xs px-4 py-1 text-center text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-700/40 dark:text-slate-300/70">
                        <div class="flex">
                            <h4 class="flex-1 text-lg font-medium">Add Sub Category</h4>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div>
                                <select name="category_id" id="categories"
                                    class="w-full px-3 py-2 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input type="text" name="name" id="name" placeholder="Sub Category Name"
                                    class="w-full px-3 py-2 bg-transparent border rounded-md form-input border-slate-300/60 dark:border-slate-700 dark:text-slate-300 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 border-t border-slate-200 dark:border-slate-700/40">
                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-4 py-1 text-white rounded-md bg-primary-500 hover:bg-primary-600">Save</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
