 <div class="predmet_sadrzaj">
 <div class="predmet_osnovne">
 <div class="predmet_naslov_pod">
 	<h5>Osnovne informacije</h5>
 </div>
 <div class="predmet_osnovne_polja">
 <?php 
 	print render($content['predmet_naziv']);
 	print render($content['predmet_sifra']); 
  	print render($content['predmet_studij']); 
  	print render($content['predmet_predavanja']); 
  	print render($content['predmet_vjezbe']); 
  	print render($content['predmet_tutoriali']);
  	print render($content['predmet_bodovi']); 
 ?> 
</div>
 </div>
 <div class="predmet_ansambl">
  <div class="predmet_naslov_pod">
 	<h5>Nastavni ansambl</h5>
 </div>
 <?php
 	print render($content['predmet_nastavnik']); 	
 ?>
 </div>
 </div>