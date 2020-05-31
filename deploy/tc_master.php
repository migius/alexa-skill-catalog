<?php

//dati da valorizzare
//$titolo
//$tipoPagina [terms o privacy]
//$linkAmazon link alla skill amazon alexa
switch ($tipoPagina) {
  case 'terms':
    $descrizioneTipoPagina = 'Termini di utilizzo';
    break;
  case 'privacy':
    $descrizioneTipoPagina = 'Informativa sulla privacy';
    //$dataCollected = dati che conserva la skill    
    break;
  default:
    header("HTTP/1.1 418 I'm a teapot");
    return;
}
//


?>

<!DOCTYPE html>
<html lang=it>
  <head>
  <meta charset=utf-8>
  <title><?php echo $titolo ?></title>
  <meta charset="utf-8"/>
  <meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1"/>
  <meta name=description content="<?php echo $titolo." - ". $descrizioneTipoPagina?>"/>
  <meta name=author content="migio"/>
  <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


  <div class="jumbotron" style="margin-bottom: 0px">
  <div class="container container-sm">

<script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=728X90/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>
    <div class="justify-content-md-center mt-5 mb-5 text-justify">
      <h1 class="col-12"><?php echo $titolo." - ". $descrizioneTipoPagina?></h1>
      <div class="col-12 pb-5">
<?php 
switch ($tipoPagina) {
  case 'terms':

?>
        <p class="col-12">Le presenti Condizioni d'Uso della skill "<?php echo $titolo ?>" regolano l'utilizzo della skill fornita da Michele Bruni su Amazon Alexa. L'accettazione delle presenti Condizioni d'Uso è condizione necessaria per accedere ai servizi della Skill.
        Utilizzando la Skill, l'utente accetta di rispettare Condizioni d'Uso e di essere a conoscenza dei rischi derivanti da accessi non autorizzati alle informazioni disponibili nella Skill in caso l'accessibilità ad Alexa non sia stata opportunamente protetta.
        L'utilizzo della Skill è anche regolato all'informativa sulla privacy che si può visionare <a href="privacy.php" target="_blank">qui</a> mentre l'utilizzo di Amazon Alexa è regolato dalle Condizioni d'Uso di Alexa e dalla privacy policy di Amazon.
        </p>
        <h2 class="col-12">Disclaimer</h2>
        <p class="col-12">Questa skill potrebbe avere malfunzionamenti o fornire informazioni errate, l'utilizzo delle informazioni fornite dalla skill è di responsabilità dell'utente.</p>
        <h2 class="col-12">Modifiche</h2>
        <p class="col-12">Queste condizioni e la skill possono essere variate in qualsiasi momento e l'utilizzatore si dichiara fin da ora consapevole che l'utilizzo della Skill comporterà l'accettazione delle stesse.</p>
        <h2 class="col-12">Feedback</h2>
        <p class="col-12">Se stai utilizzando questa skill e ne sei soddisfatto valita la possibilità di lasciare una recensione qui: <a href="<?php echo $linkAmazon ?>" target="_blank"><?php echo $titolo ?></a>. Se vuoi lasciarmi scrivermi qualcosa puoi farlo a <a href="/contatti" target="_blank">questa pagina</a>. </p>
        
<?php 
    break;
  case 'privacy':
    ?>


        <p class="col-12">La presente informativa viene resa in ossequio all'art. 13 del Regolamento 2016/679 (GDPR), ai sensi dell'art. 13 del d.lgs. n. 196/2003 (Codice in materia di protezione dei dati personali) ed è relativa a tutti i dati personali trattati secondo le modalità di seguito indicate.</p>

        <h2 class="col-12">Il titolare del trattamento</h2>
        <p class="col-12">Il titolare del trattamento dei dati personali raccolti è Michele Bruni. I dati di natura personale forniti potranno essere comunicati a destinatari opportunamente nominati che tratteranno i dati in qualità di responsabili per il trattamento e/o in qualità di incaricati, al fine di ottemperare ai contratti o finalità connesse. L'elenco completo dei responsabili del trattamento e degli incaricati al trattamento dei dati personali può essere richiesto inviando apposita richiesta attraverso <a href="/contatti" target="_blank">questo form</a>.

        <h2 class="col-12">Trasferimento dei dati</h2>
        <p class="col-12">Nel caso in cui i dati personali siano trasferiti al di fuori dell'Unione Europea, per finalità di carattere tecnico operativo e per garantire un'elevata continuità del servizio, il Titolare assicura che il trasferimento sia fondato su una decisione di adeguatezza della Commissione, al fine di assicurare che il livello di protezione delle persone fisiche garantito dalla normativa vigente e in particolare dal Regolamento UE 2016/679 non sia pregiudicato.</p>

        <h2 class="col-12">Dati raccolti</h2>
        <p class="col-12">I dati personali trattati sono raccolti in quanto forniti direttamente dall'interessato o raccolti automaticamente. I dati forniti direttamente dall'interessato sono tutti i dati personali che siano forniti al Titolare del Trattamento con qualsiasi modalità, direttamente dall'interessato. I dati raccolti automaticamente sono i dati di utilizzo. Tali dati, pur non essendo raccolti al fine di essere associati all'identità dell'utente, potrebbero indirettamente, mediante elaborazione e associazioni con dati raccolti dal Titolare, consentire la sua identificazione.</p>
        <p class="col-12"><?php echo $dataCollected ?></p>

        <h2 class="col-12">Finalità del trattamento</h2>
        <p class="col-12">Il conferimento dei dati personali ha come base giuridica del trattamento esigenze contrattuali o precontrattuali o l'adempimento di obblighi legali ai quali il Titolare del trattamento è soggetto. Per tale ragione l'eventuale rifiuto al trattamento ovvero il mancato, inesatto o parziale conferimento dei dati potrebbe avere come conseguenza l'impossibilità di una corretta erogazione del servizio o l'impossibilità, per il Titolare, di rispondere alle richieste di informazioni inviate dall'interessato.</p>

        <h2 class="col-12">Modalità del trattamento</h2>
        <p class="col-12">I dati personali sono trattati con strumenti automatizzati per il tempo strettamente necessario a conseguire gli scopi per cui sono stati raccolti, prevedendo in ogni caso la verifica annuale dei dati conservati al fine di cancellare quelli ritenuti obsoleti, salvo che la legge non preveda obblighi di archiviazione.</p>

        <p class="col-12">Il trattamento dei dati avviene di norma presso la sede del Titolare, da personale o collaboratori esterni debitamente designati quali responsabili del trattamento. L'elenco completo dei responsabili del trattamento e degli Incaricati al trattamento dei dati personali può essere richiesto inviando apposita richiesta <a href="/contatti" target="_blank">questo form</a>.

        <p class="col-12">Specifiche misure di sicurezza sono osservate per prevenire la perdita dei dati, usi illeciti o non corretti ed accessi non autorizzati.</p>

        <h2 class="col-12">Diritti dell'interessato</h2>
        <p class="col-12">Ai sensi degli artt. 15 – 21 del Regolamento UE 2016/679 a ciascun interessato vengono riconosciuti una serie di diritti.</p>

        <p class="col-12">Diritto di accesso: l'interessato, ai sensi dell'art. 15, ha diritto di ottenere la conferma che sia in corso un trattamento di dati personali che lo riguardano e, se del caso, di ottenerne copia. Ha inoltre il diritto di ottenere l'accesso ai dati personali che lo riguardano e a ulteriori informazioni quali la finalità del trattamento, le categorie di destinatari, il periodo di conservazione dei dati e i diritti esercitabili.</p>
        <p class="col-12">Diritto di rettifica: l'interessato, ai sensi dell'art. 16, ha diritto di ottenere la rettifica dei dati personali inesatti che lo riguardano o l'integrazione degli stessi.</p>
        <p class="col-12">Diritto alla cancellazione: l'interessato ha diritto di ottenere la cancellazione dei dati personali che lo riguardano, senza ingiustificato ritardo, qualora sussista una dei motivi previsti dall'art. 17.</p>
        <p class="col-12">Diritto di limitazione di trattamento: l'interessato ha diritto, nei casi previsti dall'art 18 del Regolamento 2016/679, di ottenere la limitazione del trattamento.</p>
        <p class="col-12">Diritto alla portabilità dei dati: l'interessato ha diritto di ricevere in un formato strutturato, di uso comune e leggibile da dispositivo automatico, i dati personali che lo riguardano e ha il diritto di trasmettere tali dati a un altro titolare senza impedimento, secondo quanto previsto dall'art. 20 del Regolamento 2016/679;</p>
        <p class="col-12">Diritto di opposizione al trattamento: l'interessato ha diritto di opporsi al trattamento dei dati personali che lo riguardano secondo quanto previsto dall'art. 21 del Regolamento 2016/679.</p>
        <p class="col-12">L'interessato ha altresì diritto di proporre reclamo all'Autorità di controllo competente, il Garante della Privacy.</p>

        <p class="col-12">Le richieste di cui ai punti precedenti dovranno essere rivolte per iscritto al Titolare del trattamento. Il Titolare del trattamento provvederà, nei limiti temporali stabiliti dalla vigente normativa, a fornire tempestiva risposta alle richieste di esercizio dei diritti degli interessati.</p>

        <p class="col-12">Ogni delucidazione o richiesta di chiarimenti può essere rivolta per iscritto al Titolare del trattamento.</p>

        <h2 class="col-12">Aggiornamenti e modifiche</h2>
        <p class="col-12">Il Titolare del trattamento si riserva il diritto di modificare, integrare o aggiornare periodicamente la presente Informativa in ossequio alla normativa applicabile o ai provvedimenti adottati dal Garante per la Protezione dei dati personali.</p>

        <p class="col-12">Le suddette modifiche o integrazioni saranno portate a conoscenza degli interessati. Invitiamo gli utenti a prendere visione della Privacy Policy con regolarità, per verificare l'Informativa aggiornata e decidere se continuare o meno ad usufruire dei servizi offerti.</p>


<?php     
  break;
}
   ?>     
      </div>
    </div>
  <!--ADS-->
    <script>!function(d,l,e,s,c){e=d.createElement("script");e.src="//ad.altervista.org/js.ad/size=300X250/?ref="+encodeURIComponent(l.hostname+l.pathname)+"&r="+Date.now();s=d.scripts;c=d.currentScript||s[s.length-1];c.parentNode.insertBefore(e,c)}(document,location)</script>
    </footer>
    </div>


    <footer class="footer mt-auto py-3">
      <div class="container"><a href="https://migio.altervista.org/" target="_blank">migio</a> | <a href="http://www.iubenda.com/privacy-policy/7899706/cookie-policy?an=no&s_ck=false" class=white>cookies</a> | <a href="/contatti" target="_blank">scrivimi</a></span>
      </div>



  </div>
  
  <script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"whitelabel":false,"siteId":597114,"cookiePolicyId":7899706,"lang":"it"};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <script>(function(a,h,d,c,g,f){a.GoogleAnalyticsObject=c;a[c]||(a[c]=function(){(a[c].q=a[c].q||[]).push(arguments)});a[c].l=+new Date;g=h.createElement(d);f=h.getElementsByTagName(d)[0];g.src="//www.google-analytics.com/analytics.js";f.parentNode.insertBefore(g,f)}(window,document,"script","ga"));ga("create","UA-82977202-1","auto");ga("send","pageview");</script>
  
</body>

</html>