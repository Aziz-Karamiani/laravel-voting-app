<x-app-layout>
    <div class="filters flex space-x-10">
        <div class="w-1/3">
            <label for="category"></label>
            <select name="category" id="category" class="w-full rounded border-0 px-4 py-2 text-gray-500" style="border: none;">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <label for="other"></label>
            <select name="other" id="other" class="w-full rounded border-0 px-4 py-2 text-gray-500" style="border: none;">
                <option value="Other One">Other One</option>
                <option value="Other Two">Other Two</option>
                <option value="Other Three">Other Three</option>
                <option value="Other Four">Other Four</option>
            </select>
        </div>
        <div class="w-2/3">
            <div class="relative">
                <label>
                    <input class="border-0 rounded pl-5" type="text" placeholder="   Search Idea ...">
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 absolute top-0 align-content-center h-5 w-5" viewBox="0 0 20 20" fill="currentColor" style="top: 10px;">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>
