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
    <a href="/room/create" class="font-medium text-white dark:text-white hover:underline px-6 bg-blue-600 rounded ">{{ __("message.add") }}</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-[#FFA500] dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{ __("message.room") }}
                </th>
                <th scope="col" class="px-6 py-3">
               
                </th>
                <th scope="col" class="px-6 py-3">
           
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
            @foreach ($room as $rooms)
                
     
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$rooms->name  }}
                </th>
                <td class="px-6 py-4">
                  @switch($rooms->active)
                      @case(0)
                          Active
                          @break
                          @case(1)
                          Available
                          @break
                          @case(2)
                         Lock
                          @break
                      @default
                          
                  @endswitch
                </td>
                <td class="px-6 py-4">
                    {{$rooms->total  }}
                </td>
                <td class="px-6 py-4">
                    {{$rooms->price }}
                </td>
                <td class="px-6 py-4">
                    <a href="/room/{{ $rooms->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __("message.edit") }}</a>
                </td>
               
                <td class="px-6 py-4">
                    <form action="/room/{{ $rooms->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __("message.delete") }}</button>
                    </form>

                </td>
            </tr>
           
            @endforeach
           
        </tbody>
    </table>
    <div>{{ $room->links() }}</div>
</div>

</body>
</html>