<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js">
    
    </script>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/sub?val=6" method="post">
    @csrf
        <input type="text" name="nom">
        <input type="submit" value="Valider">
        <textarea name="editor1"></textarea>

<!-- <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea> -->
    </form>
</body>
<!-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->

<script>
    
CKEDITOR.replace('editor1');
</script>
</html>