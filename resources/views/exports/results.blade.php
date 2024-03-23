<table>
    <thead>
    <tr>
        <th style="font-weight: bold;">Date</th>
        <th style="font-weight: bold;">Time</th>
        <th style="font-weight: bold;">Brand</th>
        <th style="font-weight: bold;">Category</th>
        <th style="font-weight: bold;">Identifier(ASIN)</th>
        <th style="font-weight: bold;">SKU</th>
        <th style="font-weight: bold;">Title</th>
        <th style="font-weight: bold;">URL</th>
        <th style="font-weight: bold;">Current_seller</th>
        <th style="font-weight: bold;">Last_seller</th>
        <th style="font-weight: bold;">Current_price</th>
        <th style="font-weight: bold;">Last_price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($results as $result)
        <tr>
            <td>{{ $result->date }}</td>
            <td>{{ $result->time }}</td>
            <td>{{ $result->brand }}</td>
            <td>{{ $result->category }}</td>
            <td>{{ $result->identifier }}</td>
            <td>{{ $result->sku }}</td>
            <td>{{ $result->title }}</td>
            <td>{{ $result->url }}</td>
            <td>{{ $result->current_seller }}</td>
            <td>{{ $result->last_seller }}</td>
            <td>{{ $result->current_price }}</td>
            <td>{{ $result->last_price }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
