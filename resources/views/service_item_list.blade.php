<!DOCTPE html>
<html>

<head>
    <title>View Service Items</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
            <td>Cost</td>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->cost }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
