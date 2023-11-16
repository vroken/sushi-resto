<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="flex justify-end m-2 p-2">
            <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle inline" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>

                Kembali
            </a>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">   
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg inline my-5">
                        <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-white"> Nama Menu </label>
                                <div class="mt-1">
                                    <input type="text" id="name" name="name"
                                        class="block w-full appearance-none border-white-300 dark:border-white-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" value="{{ $menu->name }}"/>
                                </div>
                                @error('name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 mt-6">
                                <label for="image" class="block text-sm font-medium text-white"> Gambar </label>
                                <div class="mt-1">
                                    <div class="items-center">
                                        <input type="file" id="image" name="image"
                                            class="block w-full appearance-none bg-gray-900 border border-gray-400 rounded-md py-3 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 text-white @error('image') border-red-400 @enderror" onchange="previewImage()"/>
                                    </div>                                    
                                </div>
                                <img class="img-preview object-contain mt-3 h-48 w-80" alt="" src="{{ Storage::url($menu->image) }}">
                                @error('image')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 mt-5">
                                <label for="price" class="block text-sm font-medium text-white"> Harga </label>
                                <div class="mt-1">
                                    <input type="number" id="price" name="price"
                                        class="block w-full appearance-none border-white-300 dark:border-white-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('price') border-red-400 @enderror" value="{{ $menu->price }}"/>
                                </div>
                                @error('price')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 mt-5">
                                <label for="category" class="block text-sm font-medium text-white"> Category </label>
                                <div class="mt-1">
                                    <select id="categories" name="categories[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                    {{-- <option selected>Choose a category</option> --}}
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('categories')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5 mt-4">
                                <label for="description" class="block text-sm font-medium text-white">Deskripsi</label>
                                <div class="mt-1">
                                    <textarea id="description" rows="3" name="description"
                                        class="block w-full appearance-none border-white-300 dark:border-white-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('description') border-red-400 @enderror">{{ old('description', $menu->description) }}</textarea>
                                </div>
                                @error('description')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>                            
                            <div class="mt-6">
                                <button type="submit"
                                    class="px-8 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgpreview = document.querySelector('.img-preview');

            // Set Tailwind CSS classes to the imgpreview element
            imgpreview.classList.add('block', 'h-48', 'w-80');

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = (oFREvent) => {
                imgpreview.src = oFREvent.target.result;
            }
        }

    </script>
