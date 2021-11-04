<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UploadPage</title>
</head>
<body>
    <form action="{{ url('uploadfile') }}" method="post" enctype="multipart/form-data">
        @csrf
            <input type="text" class="" name="name" placeholder="Uploadfile Name"><br>
    <input type="text" class="" name="description" placeholder="Uploadfile Description"><br>
    <input type="file" class="" name="file"><br>
    <input type="submit"><br>
    </form>

</body>
</html>
