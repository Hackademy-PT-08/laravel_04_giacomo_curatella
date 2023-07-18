<x-layout>
    <x-slot name="title">DettaglioProdotto - Tech.it</x-slot>
    <section class="container py-5">
        <div class="row">
            <x-singleCard
            id="{{$product['id']}}"          
            name="{{$product['name']}}"          
            price="{{$product['price']}}"
            photo="{{$product['photo']}}"
            description="{{ $product['description'] }}"
            />
        </div>
    </section>
    
</x-layout>