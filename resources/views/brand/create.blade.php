<h1>Create Brand</h1>

<form action="{{ route('brands.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="brand name" value="{{ old('name') }}">

    {{-- @error('name')
        <p>{{ $message }}</p>
    @enderror --}}
    <button type="submit">Save</button>
</form>
