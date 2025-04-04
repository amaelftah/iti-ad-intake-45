<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Create Post</title>
   @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50">
   <!-- Navigation -->
   <nav class="bg-white shadow">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
           <div class="flex justify-between h-16">
               <div class="flex">
                   <div class="flex-shrink-0 flex items-center">
                       <a class="text-lg font-semibold text-gray-900" href="#">ITI Blog Post</a>
                   </div>
                   <div class="ml-6 flex items-center space-x-4">
                       <a class="px-3 py-2 text-sm font-medium text-gray-900 border-b-2 border-blue-500" href="#">All Posts</a>
                   </div>
               </div>
               <div class="flex items-center">
                   <button type="button" class="md:hidden flex items-center justify-center p-2 rounded-md text-gray-400">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                       </svg>
                   </button>
               </div>
           </div>
       </div>
   </nav>


   <!-- Container -->
   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
       <div class="max-w-3xl mx-auto">
           <div class="bg-white rounded-lg shadow overflow-hidden">
               <div class="px-6 py-4 border-b border-gray-200">
                   <h2 class="text-xl font-semibold text-gray-800">Create New Post</h2>
               </div>
              
               <div class="px-6 py-4">
                   <form method="POST" action="/posts">
                        @csrf
                       <!-- Title Input -->
                       <div class="mb-4">
                           <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                           <input
                                name="title"
                               type="text"
                               id="title"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 py-2 px-3 border"
                           >
                       </div>
                      
                       <!-- Description Textarea -->
                       <div class="mb-4">
                           <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                           <textarea
                            name="description"
                               id="description"
                               rows="5"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 py-2 px-3 border"
                           ></textarea>
                       </div>
                      
                       <!-- Post Creator Select -->
                       <div class="mb-6">
                           <label for="creator" class="block text-sm font-medium text-gray-700 mb-1">Post Creator</label>
                           <select
                            name="post_creator"
                               id="creator"
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 py-2 px-3 border bg-white"
                           >
                               <option value="1">Ahmed</option>
                               <option value="2">Mohamed</option>
                           </select>
                       </div>
                      
                       <!-- Submit Button -->
                       <div class="flex justify-end">
                           <button
                               type="submit"
                               class="px-4 py-2 bg-green-600 text-white font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 hover:cursor-pointer"
                           >
                               Submit
                           </button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</body>
</html>
