<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Resize</title>
</head>
<body>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Upload Image</h1>

        <input type="file" name="file" id="file"><br><br>

        <button type="submit">Upload Image</button>
    </form>
</body>
</html>
