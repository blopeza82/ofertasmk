<div class="container mx-auto">
     
      {{-- Close your eyes. Count to one. That is how long forever feels. --}}
      <div class="bg-white rounded-lg shadow overflow-hidden max-w-xl mx-auto mb-8">
       <table>
          <thead class="bg-gray-50 border-b border-gray-300">
              <tr class="text-xs font-medium text-gray-500 uppercase text-left tracking-wide">
                {{-- <th class="px-6 py-3">ID</th> --}}
                <th class="px-6 py-3">Producto</th>
                <th class="px-6 py-3">La Bonita</th>
                <th class="px-6 py-3">Super MC</th>
                <th class="px-6 py-3">Market Kino</th>
                <th class="px-6 py-3">Aurrera</th>
              </tr>
  
          </thead>
          <tbody class="divide-y divide-gray-200">
              @foreach ($products as $product)
              <tr class="text-sm text-gray-500">
                <td class="px-6 py-4">{{$product->name}}</td>
                <td class="px-6 py-4">{{$product->precio1}}</td>
                <td class="px-6 py-4">{{$product->precio2}}</td>
                <td class="px-6 py-4">{{$product->precio3}}</td>
                <td class="px-6 py-4">{{$product->precio4}}</td>
            
                  {{-- <td class="px-6 py-4">
                      <button wire:click="edit({{$post}})" class="bg-blue-500 hover:bg-blue-700 mb-2 text-white font-bol px-4 py-2 rounded w-full">Editar</button>
                      <button wire:click="destroy({{$post}})" class="bg-red-500 hover:bg-red-700 text-white font-bol px-4 py-2 rounded w-full">Eliminar</button>                
                  </td> --}}
  
              </tr>
                  
              @endforeach
  
          </tbody>
  
      
      
       </table>
       {{-- esta es la paginacion --}}
        {{-- <div class="bg-gray-100 py-4 px-6 border-t border-gray-200 ">
            {{$products->links()}}
  
        </div> --}}
      </div>
      <div>aqui el sidebar</div>
  </div>
  