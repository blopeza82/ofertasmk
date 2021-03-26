<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

use Livewire\WithPagination;

class ProductComponent extends Component
{
    // use WithPagination;
    // public $name, $body, $post_id;
    // public $accion = "store";

    // protected $rules = [
    //     'name'=> 'required',
    //     'body'=> 'required',
    // ];



    // protected $validationAttributes = [
    //    // 'name' => 'nombre del post',
    //     'body' => 'descripcion del post'
    // ];




    //se personaliza el mensage
    protected $messages = [
        'name.required' => "por favor ingrese el nombre que es obligatorio"

    ];


    public function render()
    {
        //aqui recupero todos los registros de la tabla post atravez del modelo Post y los almaceno en la variable $posts
       // $posts= Post::all();

        //y aqui recupero los registros ordenados del ultimo por id
       $products= Product::latest('id')->get();

       //aqui los recupero paginados
        // $product= Product::latest('id')->paginate(10);
         return view('livewire.product-component', compact('products'));
    }


    // public function store(){
    //     $this->validate([
    //         'name'=> 'required|max:10',
    //         'body'=> 'required',
    //     ]);

    //     Post::create([
    //         'name' => $this->name,
    //         'body' => $this->body
    //     ]);
    //     $this->reset(['name', 'body']);
    // }


    // public function edit(Post $post){
        
    //     $this->name = $post->name;
    //     $this->body= $post->body;
    //     $this->post_id= $post->id;

    //     $this->accion= "update";
    // }


    // public function update(){
    //     $post= Post::find($this->post_id);

    //     $this->validate();

    //     $post->update([
    //         'name' => $this->name,
    //         'body' => $this->body
    //     ]);               
    //     $this->reset(['name','body', 'accion', 'post_id']);
    // }



    // public function destroy(Post $post){
    //     $post->delete();
    // }
    

    // public function default(){
    //     $this->reset(['name','body', 'accion', 'post_id']);
    // }


}
