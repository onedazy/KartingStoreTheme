<?php
/**
 * Template Name: Template - Customer service
 * Description: Page template full width.
 *
 */

get_header();
?>
<div>
	<div class="customer-service">

    <h1 class="text-center">Hey, waar kunnen we je mee helpen?</h1>
    <div class="row">
      <div class="col-12 col-md-7">
        <h2>FAQ</h2>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Wanneer wordt mijn pakket verstuurd?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Je pakketten worden verstuurd op maandag en donderdag. <br><br>Als je jou bestelling op vrijdag binnen wil hebben, bestel dan op woensdag. Dan worden ze op donderdag verstuurd.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Waar blijft mijn pakketje?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Helaas ben je, net als wij, afhankelijk van PostNL. Wij leveren de pakketen altijd netjes aan op maandag en donderdag voor 17:00. <br><br> Wij verwachten in dit geval overigens dat het pakketje helaas bij PostNL in het sorteercentrum een vertraging heeft opgelopen i.v.m. drukte, een fout of storing bij PostNL en dat het pakketje dus nog onderweg is naar uw brievenbus.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-3" aria-expanded="false" aria-controls="flush-collapseTwo">
                Retour
              </button>
            </h2>
            <div id="flush-3" class="accordion-collapse collapse" aria-labelledby="3" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">U kunt een product of bestelling retouneren door met ons contact op te nemen met het contactformulier. <br><br> U heeft 14 dagen de tijd na ontvangst om te besluiten of u het proudct retour stuurt, neemt dan ook contact met ons op. <br><br> Producten vallen onder garantie als het een fabricagefout of productfout betreft. Bij voorkeur ontvangen wij het product in originele verpakking, volledig en in originele staat. <br><br>LET OP: Schades door montagefouten of gebruikersfouten vallen niet onder garantie. <br><br> De kosten van retouren zijn voor de klant, tenzij anders afgesproken via het contactformulier.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-4" aria-expanded="false" aria-controls="flush-collapseTwo">
                Algemene voorwaarden
              </button>
            </h2>
            <div id="flush-4" class="accordion-collapse collapse" aria-labelledby="4" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <h5>Levertijd</h5>
                Omdat we een startende webshop zijn, hebben we nog niet veel op voorraad, verwacht dus dat er binnen 2-4 dagen je pakket binnen komt.
                <br><br>
                <h5>Prijzen</h5>
                Alle prijzen zijn inclusief B.T.W. maar exclusief verzendkosten.
                <br><br>
                <h5>Verzendkosten</h5>
                Verzendkosten zijn € 6,75
                <br><br>
                <h5>Ruilen</h5>
                Een product anders dan de uitzonderingen hieronder kunnen binnen 14 dagen na de aankoop worden teruggestuurd. Kosten voor het terug sturen van het te ruilen product zijn voor de kosten van de klant. Ook de verzendkosten voor het opnieuw opsturen van producten zijn voor rekening van de klant.
                <br><br>
                <h5>Garantie</h5>
                Garantie wordt er in de kartsport op bijna geen enkel product gegeven daar er in de kartsport geen normaal gebruik gemaakt wordt van een product. Toch kan Kartingstore bij een defect kijken of er eventueel garantie bij fabrikant of leverancier verkregen kan worden. Als de fabrikant of leverancier geen garantie geeft of het product niet willen/ kunnen repareren dan is Kartingstore niet aansprakelijk voor de kosten. 
                <br><br>
                Dit geldt tevens niet op verbruiksartikelen zoals olie, spuitbussen, banden, accu's, tandwielen en kettingen, motoren, motoronderdelen, koppelingen, uitlaten, carburateurs en onderdelen nog voor schade aan een product veroorzaakt door het gebruik van verbruiksartikelen. 
                <br><br>
                De garantie vervalt indien de consument schade veroorzaakt door een onjuiste behandeling van het product. 
                <br><br>
                <h5>Aansprakelijkheid</h5>
                De klant is zelf verantwoordelijk voor de kart en het gebruik daarvoor dus ook voor montage van aangeschafte producten. Bij wedstrijden gelden bepaalde regels en de klant is zelf verantwoordelijk dat zijn spullen aan deze regels voldoen. De klant moet dus zelf nakijken of de aangekocht spullen bij Kartingstore de juiste spullen zijn voor gebruik bij een wedstrijd. Kartingstore is op geen enkele manier aansprakelijk als een product niet voor een wedstrijd in toegestaan.
                <br><br>
                Aansprakelijkheid voor eventuele schade (in welke vorm dan ook) veroorzaakt door een ondeugdelijk product wordt uitdrukkelijk uitgesloten. 
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-5">
        <h2>Contact</h2>
        <div class="contactform">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Contactformulier 1"]') ?>
        </div>
      </div>
    </div>
  </div>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();
