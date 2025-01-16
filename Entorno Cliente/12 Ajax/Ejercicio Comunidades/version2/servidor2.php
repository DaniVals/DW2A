<?php
if ($_REQUEST['autonomia']=='cantabria')
{
  echo '<option >--Elija una provincia--</option>
<option>Cantabria</option>';
}
if ($_REQUEST['autonomia']=='galicia')
{
  echo '<option>--Elija una provincia--</option>
<option>La Coruña</option>
<option>Lugo</option>
<option>Orense</option>
<option>Pontevedra</option>';
}
if ($_REQUEST['autonomia']=='asturias')
{
   echo "<option value='Oviedo'>Oviedo</option>";
}
if ($_REQUEST['autonomia']=='pais_vasco')
{
  echo '<option>--Elija una provincia--</option>
<option>Alava</option>
<option>Guipuzcoa</option>
<option>San Sebastián</option>';
}
?>