<!DOCTYPE html>
<html>
    <head>
            <title></title>
    </head>
    <body>
        <?=form_open_multipart(base_url().'cargar/upload_file')?>
        <?=form_upload('file')?>
        <?=form_submit('submit', 'Upload')?>
        <?=form_close()?>
    </body>
</html>