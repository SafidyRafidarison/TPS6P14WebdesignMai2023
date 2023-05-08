<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="picture">
    <button type="submit">Upload Picture</button>
</form>