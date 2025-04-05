<x-layout>
       <div class="text-center">
           <a href="{{ route('posts.create') }}" class="mt-4 px-4 py-2 bg-green-600 text-white font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
               Create Post
           </a>
       </div>


       <!-- Table Component -->
       <div class="mt-6 rounded-lg border border-gray-200">
           <div class="overflow-x-auto rounded-t-lg">
               <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                   <thead class="text-left">
                       <tr>
                           <th class="px-4 py-2 font-medium whitespace-nowrap text-gray-900">#</th>
                           <th class="px-4 py-2 font-medium whitespace-nowrap text-gray-900">Title</th>
                           <th class="px-4 py-2 font-medium whitespace-nowrap text-gray-900">Posted By</th>
                           <th class="px-4 py-2 font-medium whitespace-nowrap text-gray-900">Created At</th>
                           <th class="px-4 py-2 font-medium whitespace-nowrap text-gray-900">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="divide-y divide-gray-200">
                    @foreach($posts as $post)
                        <tr>
                            <td class="px-4 py-2 font-medium whitespace-nowrap text-gray-900">{{$post->id}}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-gray-700">{{$post->title}}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-gray-700">{{$post->user ? $post->user->name : 'Not Found'}}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-gray-700">{{$post->created_at}}</td>
                            <td class="px-4 py-2 whitespace-nowrap text-gray-700 space-x-2">
                                <a href="{{ route('posts.show', $post->id) }}" class="inline-block px-4 py-1 text-xs font-medium text-white bg-blue-400 rounded hover:bg-blue-500">View</a>
                                <a href="#" class="inline-block px-4 py-1 text-xs font-medium text-white bg-blue-600 rounded hover:bg-blue-700">Edit</a>
                                <a href="#" class="inline-block px-4 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                   </tbody>
               </table>
           </div>


           <!-- Pagination -->
           <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
               <ol class="flex justify-end gap-1 text-xs font-medium">
                   <li>
                       <a href="#" class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900">
                           <span class="sr-only">Prev Page</span>
                           <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                               <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                           </svg>
                       </a>
                   </li>
                   <li>
                       <a href="#" class="block size-8 rounded-sm border border-gray-100 bg-white text-center leading-8 text-gray-900">1</a>
                   </li>
                   <li class="block size-8 rounded-sm border-blue-600 bg-blue-600 text-center leading-8 text-white">2</li>
                   <li>
                       <a href="#" class="block size-8 rounded-sm border border-gray-100 bg-white text-center leading-8 text-gray-900">3</a>
                   </li>
                   <li>
                       <a href="#" class="block size-8 rounded-sm border border-gray-100 bg-white text-center leading-8 text-gray-900">4</a>
                   </li>
                   <li>
                       <a href="#" class="inline-flex size-8 items-center justify-center rounded-sm border border-gray-100 bg-white text-gray-900">
                           <span class="sr-only">Next Page</span>
                           <svg xmlns="http://www.w3.org/2000/svg" class="size-3" viewBox="0 0 20 20" fill="currentColor">
                               <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                           </svg>
                       </a>
                   </li>
               </ol>
           </div>
       </div>
</x-layout>
