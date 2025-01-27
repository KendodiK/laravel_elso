<h1>Új Kategória</h1>

<form action="{{route('categories.store')}}">
    @csrf
    <fieldset>
        <label for="name">Kategória név</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>