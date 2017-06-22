<!DOCTYPE html>
<html lang="en">
<head>
<title>Práticas Esportivas</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Práticas Esportivas</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<?php
  include 'MenuTopo.php';
?>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php
  include 'MenuLateral.php';
?>
<!--sidebar-menu-->

<!--main-container-part-->

<?php
  $pg=$_GET['pg'];
  $err='';
switch ($pg) {
  case 'lol':
    echo lol;
    break;
  case 'equipe':
    include 'Equipes.php';
    break;
  case 'ptor':
    include 'Proximos_Eventos.php';
    break;
  case 'esporte':
    include 'Esportes.php';
    break;
  case 'grupo':
    include 'grupo.php';
    break;
  case 'ambiente':
    include 'formularioambiente.php';
    break;
  case 'freq':
    include 'Frequencia_Atividades.php';
    break;
  case 'evento':
    include 'formularioevento.php';
    break;
  case inicio:
    default:
    include 'Inicio.php';
    break;

    $err=404;
    include 'error.php';
}


?>
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Todos os direitos reservados</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flot.min.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>
<script src="js/jquery.peity.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.dashboard.js"></script>
<script src="js/jquery.gritter.min.js"></script>
<script src="js/matrix.interface.js"></script>
<script src="js/matrix.chat.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/matrix.form_validation.js"></script>
<script src="js/jquery.wizard.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/matrix.popover.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/matrix.tables.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
