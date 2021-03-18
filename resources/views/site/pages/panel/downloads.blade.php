@extends('site.layouts.default')

@section('content')
    <div class="py-16 px-4 bg-gray-100 min-h-screen">
        <h1 class="text-3xl text-black font-light uppercase text-center">Downloads</h1>
        <div class="w-1/2 mx-auto py-12 mt-8 px-12 bg-white shadow-lg rounded-lg">
            <table class="w-full">
                <thead class="border-b-2 ">
                    <th  class="text-sm pb-4 text-gray-400 uppercase font-normal text-left">Photo</th>
                    <th  class="text-sm pb-4 text-gray-400 uppercase font-normal text-left">Size</th>
                    <th class="text-sm pb-4 text-gray-400  uppercase font-normal text-left"></th>                    
                </thead>

                <tbody>
                    <tr class="border-b-2">
                        <td class="py-4 flex items-center">
                            <figure class="w-24 h-24">
                                <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/1975781/pexels-photo-1975781.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                            </figure>
                            <h4 class="text-md text-gray-800 font-light ml-4">#TAS1212</h4>
                            </td>
                        <td class="py-4 text-gray-400 font-light">
                            Web
                        </td>
                        <td class="py-4 font-light text-right">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-sm">Download</button>
                        </td>


                    </tr>
                                        <tr class="border-b-2">
                        <td class="py-4 flex items-center">
                            <figure class="w-24 h-24">
                                <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/1975781/pexels-photo-1975781.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                            </figure>
                            <h4 class="text-md text-gray-800 ml-4 font-light">#TAS1212</h4>
                        </td>
                            <td class="py-4 text-gray-400 font-light">
                            Web
                        </td>
                        <td class="py-4 text-right">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-sm">Download</button>

                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>    
@endsection
