<?php

return "
  <h5>Nieuwe cover toevoegen</h5>
  <form method='post' action='index.php?pagina=toevoegen' enctype='multipart/form-data' >
  <label for='titel'>Titel:</label>
  <input type='text' name='titel'>
  <label for='artiest'>Artiest:</label>
  <input type='text' name='artiest'>
  <label for='jaar'>Jaar:</label>
  <input type='text' name='jaar'>
  <label for='genre'>Genre:</label>
  <input type='text' name='genre'>
  <label for='land'>Land:</label>
  <input type='land' name='land'>
  <label for='kleur'>Kleur:</label>
    <select name='kleur'>
      <option value='red' class='red'>Rood</option>
      <option value='#5886e8' class='blue'>Blauw</option>
      <option value='pink' class='pink'>Roze</option>
      <option value='white' class='white'>Wit</option>
      <option value='green' class='green'>Groen</option>
      <option value='orange' class='orange'>Oranje </option>
      <option value='brown' class='brown'>Bruin</option>
      <option value='purple' class='purple'>Paars</option>
      <option value='yellow' class='yellow'>Geel</option>
      <option value='grey' class='grey'>Grijs</option>
      <option value='black' class='black'>Zwart</option>
    </select>
    <label for='afbeelding'>Afbeelding:</label>
    <input type='file' name='image-data' accept='image/jpeg' />
    <input type='submit' value='Dit kunstwerk aanmaken' name='toevoegen' />
  </form>
 ";
