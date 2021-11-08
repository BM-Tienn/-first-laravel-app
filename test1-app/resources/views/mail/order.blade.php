<h1>PHP 2104 Test send mail</h1>

<table>
    <tr>
        <td>Name</td>
        <td>Code</td>
        <td>Total price</td>
    </tr>

    <tr>
        <td>{{ $order->name }}</td>
        <td>{{ $order->code }}</td>
        <td>{{ $order->total_price }}</td>
    </tr>
</table>

<h3>List product</h3>
<table>
    <tr>
        <td>Name</td>
        <td>image</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Quantity1</td>
    </tr>

    @foreach ($order->products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td><img src="{{ $product->image }}" width="300px"></td>
        <td>{{ $product->price }}</td>
        <td>{{ $quantities[$product->id] }}</td>
    </tr>
    @endforeach
</table>