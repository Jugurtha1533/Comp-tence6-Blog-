<!DOCTYPE html>
<html lang="en">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?=ROOT_URL?>static/css/style.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="static/css/bootstrap.rtl.min.css">
    </head>
<body>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8" />
      <title><?=\AgencePhp\Engine\Config::SITE_NAME?></title>
      <meta name="author" content="Romain Ollier" />

    </head>
    <body>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?=ROOT_URL?>static/js/materialize.js"></script>
      <script type="text/javascript" src="<?=ROOT_URL?>static/js/script.js"></script>

      <script src="<?=ROOT_URL?>static/js/tinymce/tinymce.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
      <script>
        tinymce.init({
          selector:'#editable',
          branding: false,
          height: 500,
          menubar: false,
          plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
          ],
          toolbar1: "formatselect | undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
          toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | caption | styleselect",

          image_caption: true,
          image_advtab: true ,

          external_filemanager_path:"<?=ROOT_URL?>static/filemanager/",
          filemanager_title:"Responsive Filemanager" ,
          external_plugins: { "filemanager" : "<?=ROOT_URL?>static/filemanager/plugin.min.js"},
          visualblocks_default_state: true ,

          style_formats_autohide: true,
          style_formats_merge: true,
        });

      </script>



