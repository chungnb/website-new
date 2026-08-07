<h1>Sản phẩm </h1>

@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->price }}</p>
    </div>
@endforeach