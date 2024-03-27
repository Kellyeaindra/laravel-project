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
    <a href="/appoint/create" class="font-medium text-black dark:text-blue-500 hover:underline px-4 py-1 bg-blue-600 rounded ">Add</a>
   </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-[#A9A9A9] dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
              Appoinment
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
          
            @foreach ($doctor as $doctors)
                
 
                
       
     
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
    @switch($doctors->doctor)
        @case(0)
            Meet Dr.Yamaziki(lung)
            @break
            @case(1)
            Meet Dr.Kangaki(heart)
            @break
            @case(2)
            Meet Dr.YamadaUki(skin)
            @break
        @default
            
    @endswitch
                </th>
                <td class="px-6 py-4">
                    {{$doctors->room}}
                </td>
                <td class="px-6 py-4">
                    {{$doctors->time}}
                </td>
                
                <td class="px-6 py-4">
                    <a href="/appoint/{{ $doctors->id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                
                <td class="px-6 py-4">
                    <form action="/appoint/{{ $doctors->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                    </form>

                </td>
            </tr>
           
            @endforeach
           
        </tbody>
    </table>

</div>

</body>
</html>