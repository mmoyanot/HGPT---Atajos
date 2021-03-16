<?php
// Esto devolverá todos los archivos de esa carpeta

$archivos = scandir("protocolos");
$num = 0;
$redondeo = count($archivos);
echo "<script>console.log('Debug Objects: " . $redondeo . "' );</script>";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Anexos</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="../css/gallery-materialize.min.css" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <body>

      <!-- Navbar and Header -->
      <nav class="nav-extended blue">

        <div class="categories-wrapper amber darken-3">
          <div class="categories-container">
            <ul class="categories container">
              <li id="all" class="active"><a href="../index.php#all">Volver a Atajos </a></li>
              <li id="sacred"><a href="protocolos.php">Protocolos</a></li>
            </ul>
          </div>
        </div>
      </nav>


<form action="loadFile.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" value="Cargar archivos">
</form>

<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      Archivos
      <span class="new badge"><?php echo(ceil(count($archivos)/2)); ?></span></div>
    <div class="collapsible-body">
<table border="1" class="table-bordered table pull-right" id="mytable" cellspacing="0" style="width: 80%; margin-left:40px; margin-top:20px;">
  <thead border="1">
    <tr role="row">
    <th>N°</th>
    <th>Archivo</th>
    </tr>
  </thead>
  <tbody>

<?php

for ($i=2; $i<count($archivos) ; $i++)
{$num++;
?>

<!--Visualización del nombre del archivo -->
<tr>
  <th scope="row"><?php echo $num; ?></th>
  <td><a title="Descargar archivo" href="protocolos/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span><?php echo $archivos[$i]; ?></a> </td>
  <td><a title="Eliminar archivo" href="deleteFile.php?name=protocolos/<?php echo $archivos[$i] ?>" style="color: red; font-size:18px;" onclick="return confirm('Está seguro de eliminar el archivo?')"> <span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span> </a> </td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
</li>
</ul>

</div><!-- /.container -->
<!-- Core Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
<script src="../js/color-thief.min.js"></script>
<script src="../js/galleryExpand.js"></script>
<script src="../js/init.js"></script>

</body>
</html>
