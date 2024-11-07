@foreach($products as $product)
    <div>
        <h3>{{ $pokemons->nome }}</h3>
        <p>{{ $pokemons->tipo }}</p>
        <a href="{{ url('products/'.$product->id.'/edit') }}">Edit</a>
        <form action="{{ url('products/'.$product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach