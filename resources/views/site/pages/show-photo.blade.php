@extends('site.layouts.default')

@section('content')

        <div class="flex px-4">
            <div class="w-1/2">
                <figure class="p-12 h-1/2">
                    <img class="w-full h-full object-cover" src="https://images.pexels.com/photos/1975781/pexels-photo-1975781.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                </figure>
            </div>
            <div class="w-1/2">
                <div class="pricing  p-12 px-4">
                    <div class="bg-gray-200 p-4 rounded-md shadow-sm">
                        <h3 class="text-black font-semibold text-xl">Single Photo Pricing</h3>
                        <div class="text-gray-500">#TAS55454</div>
                        <table class="mt-8 w-full ">
                            <thead>
                                <th class="text-left">Image Type</th>
                                <th class="text-left">Resolution</th>
                                <th class="text-left">Dimension</th>
                                <th class="text-left">Price (RS)</th>
                                <th class="text-left">File Format</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="radio" name="image_type" value="web" id="">
                                        <label for="">Web</label>
                                    </td>
                                    <td>
                                        72DPI
                                    </td>
                                    <td>
                                        800 x 1200
                                    </td>
                                    <td>
                                        8000
                                    </td>
                                    <td>
                                        JPEG
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="image_type" value="small" id="">
                                        <label for="">Small</label>
                                    </td>
                                    <td>
                                        300DPI
                                    </td>
                                    <td>
                                        15000 x 2250
                                    </td>
                                    <td>
                                        16000
                                    </td>
                                    <td>
                                        JPEG
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <button class="uppercase bg-black text-white py-2 px-8 mt-8">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

@endsection