<div>
<form method = 'post' action = '{{ route("contacts.store") }}'>
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="submit">Submit</input>
</form>
</div>
