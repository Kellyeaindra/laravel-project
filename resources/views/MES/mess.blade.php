<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>
  <p class="mt-2 mx-2">{{ __("message.welcome") }}</p>
  <div class="mt-4 mx-[90%]">
    <a href="/mess/create" class="font-medium text-white dark:text-blue-500 hover:underline px-4 py-1 bg-blue-600 rounded">Add</a>
  </div>
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
               <thead class="text-xs text-gray-700 uppercase bg-[#FF6347] dark:bg-gray-700 dark:text-gray-400">
                   <tr>
                       <th scope="col" class="px-6 py-3 rounded-s-lg">
                         Unread Message
                       </th>
                       <th scope="col" class="px-6 py-3">
                           
                       </th>
                       <th scope="col" class="px-6 py-3">
                           
                       </th>
                       <th scope="col" class="px-6 py-3">
                           
                       </th>
                   
                   </tr>
               </thead>
               <tbody>
                @foreach ($message as $mess)
                    
                
                   <tr class="bg-white dark:bg-gray-800">
                       <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         {{ $mess->message }}
                       </th>
                       <td class="px-6 py-4">
                        {{ $mess->time }}
                       </td>
                       
                       <td class="px-6 py-4">
                        <a href="/mess/{{ $mess->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                       </td>
                       <td class="px-6 py-4">
                      <form action="/mess/{{ $mess->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                      </form>
                       </td>
                   </tr>
                  
                        
                @endforeach
               </tbody>
            
           </table>
           <div>{{ $message->links() }}</div>
</body>
</html>