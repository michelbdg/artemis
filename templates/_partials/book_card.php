<div class="w-full lg:w-1/3 p-4">
    <div class="p-4 bg-white rounded">
        <div class="relative h-40 w-full mb-4">
            <img class="w-full h-full object-cover rounded" src="/artemis-assets/images/artemis-book-defaut.png" alt="">
            <!-- <span class="absolute top-0 right-0 py-1 px-2 mt-2 mr-2 bg-indigo-500 rounded text-xs text-white">14 Tasks</span> -->
        </div>
        <div class="flex mb-6 justify-between items-center">
            <div>
                <h3 class="text-sm font-medium"><?= $book['BookTitle'] ?? 'Undefined' ?></h3>
                <span class="text-xs text-gray-500"><?= $book['PublisherName'] ?? 'Undefined' ?></span>
                <p>
                    <span class="text-xs text-gray-500"><?= $book['BookTitle'] ?? 'Undefined' ?></span>
                </p>
            </div>
            <button class="ml-auto p-2 bg-indigo-50 rounded">
                <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.99984 9.33335C8.73622 9.33335 9.33317 8.7364 9.33317 8.00002C9.33317 7.26364 8.73622 6.66669 7.99984 6.66669C7.26346 6.66669 6.6665 7.26364 6.6665 8.00002C6.6665 8.7364 7.26346 9.33335 7.99984 9.33335Z" fill="#382CDD"></path>
                    <path d="M3.33333 9.33335C4.06971 9.33335 4.66667 8.7364 4.66667 8.00002C4.66667 7.26364 4.06971 6.66669 3.33333 6.66669C2.59695 6.66669 2 7.26364 2 8.00002C2 8.7364 2.59695 9.33335 3.33333 9.33335Z" fill="#382CDD"></path>
                    <path d="M12.6668 9.33335C13.4032 9.33335 14.0002 8.7364 14.0002 8.00002C14.0002 7.26364 13.4032 6.66669 12.6668 6.66669C11.9304 6.66669 11.3335 7.26364 11.3335 8.00002C11.3335 8.7364 11.9304 9.33335 12.6668 9.33335Z" fill="#382CDD"></path>
                </svg>
            </button>
        </div>
        <div class="flex items-ceenter justify-between border-t border-gray-50 pt-4">
            <a 
                class="py-2 px-3 bg-indigo-500 hover:bg-indigo-600 rounded text-xs text-white transition duration-200" 
                href="book.php?id=<?= $book['BookId'] ?? 'Undefined' ?>">See Details</a>
        </div>
    </div>
</div>