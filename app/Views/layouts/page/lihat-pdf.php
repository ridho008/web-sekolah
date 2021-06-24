<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $materi['materi']; ?></title>
   <style>
      * {
         margin: 0;
         padding: 0;
      }
   </style>
</head>
<body>
   <embed type="application/pdf" src="<?= base_url('img/materi/' . $materi['upload_materi']); ?>" width="100%" height="700px"></embed>
</body>
</html>