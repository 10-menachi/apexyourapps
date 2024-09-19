@extends('layouts.admin-app')

@section('title', 'Products')

@section('content')
    <div class="page-wrapper relative w-[calc(100%-260px)] p-10 pt-[64px] duration-300 ltr:ml-auto rtl:ml-0 rtl:mr-auto">
        <div class="w-full min-h-[calc(100vh-152px)] pb-14">
            <div class="w-full bg-white border rounded-md dark:bg-gray-900 border-slate-200 dark:border-slate-700/40">
                <div class="grid grid-cols-12 gap-4 p-4">
                    <div class="col-span-12 text-right">
                        <div class="flex justify-end">
                            <a href="{{ route('product.create') }}"
                                class="flex items-center justify-center max-w-xs px-4 py-1 text-center text-white bg-blue-600 rounded-md hover:bg-blue-700">
                                <i class="mr-2 text-2xl fas fa-plus"></i>
                                Add Product
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 border-b border-slate-200 dark:border-slate-700/40 dark:text-slate-300/70">
                    <div class="flex">
                        <h4 class="flex-1 text-lg font-medium">Products</h4>
                    </div>
                </div>
                <div class="w-full p-4 overflow-x-auto">
                    <table class="w-full border-collapse" id="datatable_1">
                        <thead class="bg-slate-100 dark:bg-slate-700/20">
                            <tr>
                                <th
                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Category
                                </th>
                                <th
                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Sub Category
                                </th>
                                <th
                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Name
                                </th>
                                <th
                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Description
                                </th>
                                <th
                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Price
                                </th>
                                <th
                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">
                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                        {{ $product->subcategory->category->name }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $product->subcategory->name }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $product->name }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $product->description }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $product->price }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        <a href="{{ route('categories.edit', $subcategory->id) }}"
                                            class="text-blue-500 hover:underline">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $subcategory->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
