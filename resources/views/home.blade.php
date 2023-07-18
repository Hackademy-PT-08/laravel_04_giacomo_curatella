<x-layout>
    <x-slot name="title">Home - Tech.it</x-slot>
    <section class="container py-5">
        <div class="row">
            @foreach ($products as $product)
                <x-cards 
                id="{{$product['id']}}"          
                name="{{$product['name']}}"          
                price="{{$product['price']}}"
                photo="{{$product['photo']}}"
                />        
            @endforeach
        </div>
    </section>
</x-layout>