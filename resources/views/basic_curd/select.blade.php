<table border="1px solid">
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Roll</th>
    </tr>
    @foreach ($selectKey as $item)

    <tr>
        <td>
            {{ $item->name }}
        </td>
        <td>
            {{ $item->class }}
        </td>
        <td>
            {{ $item->roll }}
        </td>
    </tr>
    @endforeach
</table>