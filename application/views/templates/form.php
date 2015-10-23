<?php echo validation_errors(); ?>
<?php echo form_open('kontroller/index'); ?>
<h4>Név</h4>
<input  type="text" name="nev" value="" size="30" />
<h4>Ország</h4>
<input  type="text" name="orszag" value="" size="30" />
<h4>Születési Dátum(Év/Hónap/Nap)</h4>
<input  type="text" name="szuletes_d_ev" value="" size="8" /> - <input  type="text" name="szuletes_d_honap" value="" size="8" /> - <input  type="text" name="szuletes_d_nap" value="" size="7" />
<h4>Legmagasabb Végzetség</h4>
<input  type="text" name="leg_m_veg" value="" size="30" />
<h4>Munkahely</h4>
<input  type="text" name="munkahely" value="" size="30" />
<h4>Beosztás</h4>
<input  type="text" name="beosztas" value="" size="30" />
<h4>E-mail</h4>
<input  type="text" name="email" value="" size="30" />
<div class="submit"><input type="submit" value="Szavaz" /></div>

</form>
