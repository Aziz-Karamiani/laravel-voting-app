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
            <div class="relative w-full">
                <label>
                    <input class="border-0 rounded pl-5 w-full" type="text" placeholder="   Search Idea ...">
                </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 absolute top-0 align-content-center h-5 w-5" viewBox="0 0 20 20" fill="currentColor" style="top: 10px;">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>

    <div class="container space-y-5 mt-8">
        <div class="bg-white rounded flex justify-between">
            <div class="flex flex-col justify-between bg-white p-6" style="border-right: 1px solid #e5dede;">
                <div class="flex flex-col items-center mb-4">
                    <div class="font-semibold">12</div>
                    <div class="text-gray-500 p-1">Votes</div>
                </div>
                <button class="bg-gray-100 py-2 px-4 rounded-l-md rounded-r-md" type="button">Vote</button>
            </div>
            <div class="flex justify-between">
                <img src="https://picsum.photos/100/100" alt="unsplash" class="w-10 h-10 rounded" style="margin: 10px;">
                <div class="p-2">
                    <h6 class="p-2 font-semibold">This is the title of Idea ...</h6>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet commodi debitis eum ipsa maiores nobis obcaecati repellat saepe sequi, tempora voluptatum? ...</p>
                    <div class="flex justify-between items-center">
                        <div class="flex py-2 mt-4">
                            <span class="text-gray-500 font-sans">10 hours ago &bull;</span>
                            <span class="text-gray-500">1 category &bull;</span>
                            <span class="text-gray-800">3 commit</span>
                        </div>
                        <div class="flex py-2 mt-4">
                            <button class="bg-gray-100 px-6 rounded-l-md rounded-r-md mr-2 text-gray-500" type="button">Open</button>
                            <button class="bg-gray-100 text-gray-500 px-4 rounded-l-md rounded-r-md" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-y-5 mt-8">
        <div class="bg-white rounded flex justify-between">
            <div class="flex flex-col justify-between bg-white p-6" style="border-right: 1px solid #e5dede;">
                <div class="flex flex-col items-center mb-4">
                    <div class="font-semibold">12</div>
                    <div class="text-gray-500 p-1">Votes</div>
                </div>
                <button class="bg-indigo-50 py-2 px-4 rounded-l-md rounded-r-md" type="button">Vote</button>
            </div>
            <div class="flex justify-between">
                <img src="https://picsum.photos/100/100" alt="unsplash" class="w-10 h-10 rounded" style="margin: 10px;">
                <div class="p-2">
                    <h6 class="p-2 font-semibold">This is the title of Idea ...</h6>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet commodi debitis eum ipsa maiores nobis obcaecati repellat saepe sequi, tempora voluptatum? ...</p>
                    <div class="flex justify-between items-center">
                        <div class="flex py-2 mt-4">
                            <span class="text-gray-500 font-sans">10 hours ago &bull;</span>
                            <span class="text-gray-500">1 category &bull;</span>
                            <span class="text-gray-800">3 commit</span>
                        </div>
                        <div class="flex py-2 mt-4">
                            <button class="bg-gray-100 px-6 rounded-l-md rounded-r-md mr-2 text-gray-500" type="button">Open</button>
                            <button class="bg-gray-100 text-gray-500 px-4 rounded-l-md rounded-r-md" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-y-5 mt-8">
        <div class="bg-white rounded flex justify-between">
            <div class="flex flex-col justify-between bg-white p-6" style="border-right: 1px solid #e5dede;">
                <div class="flex flex-col items-center mb-4">
                    <div class="font-semibold">12</div>
                    <div class="text-gray-500 p-1">Votes</div>
                </div>
                <button class="bg-gray-100 py-2 px-4 rounded-l-md rounded-r-md" type="button">Vote</button>
            </div>
            <div class="flex justify-between">
                <img src="https://picsum.photos/100/100" alt="unsplash" class="w-10 h-10 rounded" style="margin: 10px;">
                <div class="p-2">
                    <h6 class="p-2 font-semibold">This is the title of Idea ...</h6>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet commodi debitis eum ipsa maiores nobis obcaecati repellat saepe sequi, tempora voluptatum? ...</p>
                    <div class="flex justify-between items-center">
                        <div class="flex py-2 mt-4">
                            <span class="text-gray-500 font-sans">10 hours ago &bull;</span>
                            <span class="text-gray-500">1 category &bull;</span>
                            <span class="text-gray-800">3 commit</span>
                        </div>
                        <div class="flex py-2 mt-4">
                            <button class="bg-gray-100 px-6 rounded-l-md rounded-r-md mr-2 text-gray-500" type="button">Open</button>
                            <button class="bg-gray-100 text-gray-500 px-4 rounded-l-md rounded-r-md" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
