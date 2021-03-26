
@extends ('layouts.plantilla')

@section ('title', 'Productos')

@section('content')
<h1>bienvenidos a la pagina productos</h1>
<div class="container mx-auto">
    <div class="bg-white rounded-lg shadow overflow-hidden max-w-4xl mx-auto p-4 mb-6">

        <div class="container mx-auto">
        <table>
            <thead class="bg-gray-50 border-b border-gray-500">
                <tr class="text-xs font-medium text-gray-500 uppercase text-left tracking-wide">
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Producto</th>
                    <th class="px-6 py-3">La Bonita</th>
                    <th class="px-6 py-3">Super MC</th>
                    <th class="px-6 py-3">Market Kino</th>
                    <th class="px-6 py-3">Aurrera</th>

                </tr>
    
            </thead>
            <tbody class="divide-y divide-gray-200 ">
                @foreach ($products as $product)
                <tr class="text-sm text-gray-500">
                    <td class=" border-r-8 border-l-8 border-b-8 border-red-600 px-6 py-4">{{$product->id}}</td>
                    <td class="px-6 py-4">{{$product->name}}</td>
                    <td class="px-6 py-4">{{$product->precio1}}</td>
                    <td class="px-6 py-4">{{$product->precio2}}</td>
                    <td class="px-6 py-4">{{$product->precio3}}</td>
                    <td class="px-6 py-4">{{$product->precio4}}</td>
                                    
    
                </tr>
                    
                @endforeach
    
            </tbody>
    
        
        
         </table>
         <div class="bg-gray-100 py-4 px-6 border-t border-gray-200 ">
            {{-- {{$products->links()}} --}}
  
        </div>
    </div>

   

</div>
@endsection
 