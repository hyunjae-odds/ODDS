<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CKEditor TEST</title>
</head>

<body>
<textarea name="editor1" id="editor1" rows="10" cols="80">
    This is my textarea to be replaced with CKEditor.
</textarea>
</body>
<script src="/public/lib/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
</html>

