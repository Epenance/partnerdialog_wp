<?php mailModal(); ?>
<div id="getContacted">
  <h2>
    Skal vi kontakte dig?
  </h2>
  <form action="" method="post">
    <input class="getContactedVegan" name="getContactedAlergies" type="checkbox"/>
    <div class="input_wrapper">
      <input id="getContactedNavn" name="getContactedNavn" required="" type="text" /><label for="getContactedNavn">Navn</label>
    </div>
    <div class="input_wrapper">
      <input id="getContactedTelefon" name="getContactedTelefon" required="" type="text" /><label for="getContactedTelefon">Telefon</label>
    </div>
    <div class="input_wrapper">
      <input name="getContactedSubmit" type="submit" value="send" />
    </div>
  </form>
  <div class="cf"></div>
</div>
