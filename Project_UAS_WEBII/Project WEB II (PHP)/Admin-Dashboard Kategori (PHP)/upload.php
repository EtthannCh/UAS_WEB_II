<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require __DIR__ . "../../../../vendor/autoload.php";
    use codeguy\upload;

    $storage = new \Upload\Storage\FileSystem('gambar');
    $file = new \Upload\File('foo', $storage);

    // Optionally you can rename the file on upload
    $new_filename = uniqid();
    $file->setName($new_filename);

    // Validate file upload
// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
    $file->addValidations(
        array(
                // Ensure file is of type "image/png"
            new \Upload\Validation\Mimetype(array('image/png', 'image/gif', 'image/jpg', 'image/jpeg')),

                //You can also add multi mimetype validation
                //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))
    
                // Ensure file is no larger than 5M (use "B", "K", M", or "G")
            new \Upload\Validation\Size('5M')
        )
    );

    // Access data about the file that has been uploaded
    $data = array(
        'name' => $file->getNameWithExtension(),
        'extension' => $file->getExtension(),
        'mime' => $file->getMimetype(),
        'size' => $file->getSize(),
        'md5' => $file->getMd5(),
        'dimensions' => $file->getDimensions()
    );

    // Try to upload file
    try {
        // Success!
        $file->upload();
        $imgName = $data["name"];
    } catch (\Exception $e) {
        // Fail!
        $errors = $file->getErrors();
    }
    ?>
</body>

</html>