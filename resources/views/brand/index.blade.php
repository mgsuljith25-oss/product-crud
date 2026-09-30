<h1>Brands</h1>

<a href="{{ route('brands.create') }}">Create Brand</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td align="center">
            <a href="">Edit</a>

            <form action="" style="display:inline">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
</table>
