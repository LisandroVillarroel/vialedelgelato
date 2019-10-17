<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gracias por contactarnos</title>
<style type="text/css">
<!--
.menu1 {
	color: #990000;
	font-size: 14px;
}
.menu2 {color: #990000; font-size: 14px; font-weight: bold; }
.texto2 {font-size: 12px}
.menu3 {color: #990000; font-size: 12px; font-weight: bold; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.texto1 {font-family: Arial}
.Estilo10 {font-size: 11px; font-family: Arial; }
.Estilo13 {color: #990000; font-size: 12px; font-weight: bold; font-family: Arial; }
.Estilo15 {font-size: 11px; font-family: Arial; color: #990000;}
-->
</style>

<link href="form-estilos.css" rel="stylesheet" type="text/css" />
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<SCRIPT>
<!--
// Array de los meses
var monthNames = new makeArray(12);
monthNames[0] = "Enero";
monthNames[1] = "Febrero";
monthNames[2] = "Marzo";
monthNames[3] = "Abril";
monthNames[4] = "Mayo";
monthNames[5] = "Junio";
monthNames[6] = "Julio";
monthNames[7] = "Agosto";
monthNames[8] = "Septiembre";
monthNames[9] = "Octubre";
monthNames[10] = "Noviembre";
monthNames[11] = "Diciembre";

// Array de los d�as

var dayNames = new makeArray(7);
dayNames[0] = "Domingo";
dayNames[1] = "Lunes";
dayNames[2] = "Martes";
dayNames[3] = "Mi&eacute;rcoles";
dayNames[4] = "Jueves";
dayNames[5] = "Viernes";
dayNames[6] = "S&aacute;bado";

var now = new Date();
var year = now.getYear();

if (year < 2000) year = year + 1900;

function makeArray(len)
{
for (var i = 0; i < len; i++) this[i] = null;
this.length = len;
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</SCRIPT>
<body>
<table width="895" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><table width="901" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="901">&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="46" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="697" align="center" valign="top"><table width="555" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="552" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" colspan="4" align="left"><div align="center"><a href="http://www.vialedelgelato.cl"><img src="/img/logos/logo1.jpg" width="100" height="100" border="0" /></a></div></td>
            </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
            </tr>
          <tr>
            <td width="29">&nbsp;</td>
            <td width="8">&nbsp;</td>
            <td width="461"><div align="center"><span class="Estilo13">Gracias por contactarnos </span></div></td>
            <td width="56">&nbsp;</td>
          </tr>
          <tr>
            <td height="12" colspan="4"><table width="555" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td width="5" class="fondotablaclaro">&nbsp;</td>
                <td align="center" class="fondotablaclaro"><?
$nombre = $_POST['nombre'];
/*$empresa = $_POST['empresa'];*/
$telephone = $_POST ['telephone']; 
$email = $_POST['email'];
/*$asunto = $_POST['asunto'];*/
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " Fono: " . $telephone . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
/*$mensaje .= "Su consulta es sobre: " . $asunto . " \r\n";*/
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'lisandrovillarroell@gmail.com';//'contacto@vialedelgelato.cl';
$asunto = 'Formulario contacto Viale del Gelato';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Mensaje enviado Correctamente.';
?></td>
                </tr>
              <tr>
                <td rowspan="2">&nbsp;</td>
                <td align="left" valign="top" bgcolor="#FFFFFF"> <p align="justify" class="Estilo13">&nbsp;</p>
                  </td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#FFFFFF" class="Estilo13"><a href="http://www.viagoladelgelato.cl" class="Estilo13">Volver</a></td>
              </tr>
              
            </table></td>
            </tr>
            </table></td>
      </tr>
      
    </table></td>
    <td width="158" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><table width="882" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="513" valign="baseline">&nbsp;</td>
        <td width="18">&nbsp;</td>
        <td width="63" align="center">&nbsp;</td>
        <td width="51" align="center">&nbsp;</td>
        <td width="40" align="center">&nbsp;</td>
        <td width="40" align="center">&nbsp;</td>
        <td width="47" align="center">&nbsp;</td>
        <td width="110">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
