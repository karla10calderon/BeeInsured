<!doctype html>
<html amp lang="es">
  <head>
    <meta charset="utf-8">
   <script async src="https://cdn.ampproject.org/v0.js"></script><title>Certificates by BeeInsured</title><link rel="icon" href="https://www.beeinsured.co/img/favicon.ico" type="image/x-icon"><link rel="canonical" href="https://www.beeinsured.co/es/services/certificates"><link rel="alternate" hreflang="en" href="https://www.beeinsured.co/services/certificates"><meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"><meta name="description" content="Get your insurance certificate online just in minutes with BeeInsured"><meta name="keywords" content="insurance certificates, insurance certificates online, certificates for insurance"><meta name="author" content="BeeInsured"><link rel="author" href="https://plus.google.com/109911843397009123579/posts"/><link rel="publisher" href="https://plus.google.com/109911843397009123579"/><meta itemprop="name" content="Certificates by BeeInsured"><meta itemprop="description" content="Get your insurance certificate online just in minutes with BeeInsured"><meta itemprop="image" content="https://www.beeinsured.co/img/tw/certificate-tw-card.jpg"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:site" content="BeeInsured"><meta name="twitter:creator" content="BeeInsured"><meta name="twitter:title" content="Certificates by BeeInsured"><meta name="twitter:description" content="Get your insurance certificate online just in minutes with BeeInsured"><meta name="twitter:image" content="https://www.beeinsured.co/img/tw/certificate-tw-card.jpg"><meta name="twitter:image:alt" content="insurance certificates, insurance certificates online, certificates for insurance"><meta property="og:url" content="https://www.beeinsured.co/services/certificados"/><meta property="og:type" content="website"/><meta property="og:title" content="Certificates by BeeInsured"/><meta property="og:description" content="Get your insurance certificate online just in minutes with BeeInsured"/><meta property="og:image" content="https://www.beeinsured.co/img/fb/certificate-fb-card.jpg"/><meta property="og:site_name" content="BeeInsured"/>
    <?php readfile( getcwd() . "../../../ampset.php"); ?>   
    <style amp-custom><?php readfile( getcwd() . "../../../styles.css"); ?></style>
    </head><body>
<?php include ('../../chat.php');?><?php include('../../menu-es.php');?>    <amp-img class="oculto" src="https://www.beeinsured.co/img/certs-new.jpg" width="1680" height="570" layout="responsive"></amp-img><div class="title-section"><h1>Certificates </h1></div><ol class="breadcrumbs"><li><a href="https://www.beeinsured.co/es/">Inicio /&nbsp;</a></li><li><a href="https://www.beeinsured.co/es/services">Services /&nbsp;</a></li><li><a href="https://www.beeinsured.co/es/services/certificates" class="active">Certificates</a></li></ol>
    
 <div class="cotizacion"><amp-img src="https://www.beeinsured.co/img/john-certificado.png" width="571" height="358" layout="responsive" alt="Get your quote today with BeeInsured" title="Get your quote today with BeeInsured"></amp-img><div class="formulario"><!--FORMULARIO CERTFICIATES-->  
    <form method="post"
        id="requestForm"
     action-xhr="https://panel.beeinsured.co/api/addRequest"
    target="_top"
    class="quote">
        <input type="text" name="type" value="cert"  style="display:none"/>
    <fieldset>
      <label>
        <input type="text"
          name="Nombre"
          placeholder="Nombre"
          required>
      </label>
      <br>
      <label>
        <input type="text"
          name="Apellido"
          placeholder="Apellido"
          required>
      </label>
      <br>
          <label>
           <input type="text" name="company" placeholder="Compañía" required>
            </label>
             <br>
      <label>
        <input type="email"
          name="email"
          placeholder="Email"
          required>
      </label>
      <br>
      <label>
         <input type="text"
          name="telefono"
          placeholder="Teléfono"
          required>
      </label>
      <br>
      <label>
        <input type="text"
          name="seguro"
          placeholder="Nombre de seguro"
          required>
      </label>
      <br>
      <label>
        <input type="text"
          name="numeroPoliza"
          placeholder="Número de póliza"
          required>
      </label>
      <br>
       <label>
        <input type="text"
          name="nombreNegocio"
          placeholder="Nombre de negocio"
          required>
      </label>
        <br><label><input type="text" name="numeroLicContratista" placeholder="Número de licencia de Contratista" required></label>
      <br>
       <div class="options">
    <select name="certificate"
      id="status">
      <option value="Blank">Blank</option>
      <option value="Certificate Holder ONLY w/Out Additional Insured Endorsement">Titular del certificado solo sin endoso asegurado adicional</option>
      <option value="Certificate w/ Blanket On- going Operations Additional Insured">Certificado con Blanket Operaciones en curso Asegurado adicional</option>
      <option value="Certificate w/ Scheduled On-Going Operations Only">Certificado con solo operaciones programadas programadas</option>
      <option value="Certificate w/ Scheduled On-Going Operations & Completed">Certificado con las operaciones continuas programadas y completadas</option>
    </select>
    <label for="cerficate"
      class="opt">¿Qué tipo de certificado prefiere?</label>
  </div>
      <br>
     <div class="options">
    <select name="waiverSubrogation"
      id="status">
         <option value="No">No</option>
      <option value="si">Si</option>
    </select>
    <label for="waiverSubrogation"
      class="opt">¿Necesita una exención de subrogación?</label>
  </div>
      <br>
        <div class="options">
    <select name="PrimaryandNon-Contributory"
      id="status">
         <option value="No">No</option>
      <option value="si">Si</option>
    </select>
    <label for="waiverSubrogation"
      class="opt">¿Necesita redacción primaria y no contributiva?</label>
  </div> <br>
       <label>
        <input type="text"
          name="certificateHolderName"
          placeholder="Nombre del titular del certificado"
          required>
      </label>
      <br>
      <label>
        <input type="text"
          name="certificateHolderAddress"
          placeholder="Dirección del titular del certificado"
          required>
      </label>
         <br>
        <label>
            <input type="text" name="contractorLicNumber" placeholder="Número de licencia de contratista" required>
        </label>
      <br>
      <label>
        <input type="text"
          name="scopeOfWork"
          placeholder="Alcance del trabajo"
          required>
      </label>
      <br>
        <p class="note">Si el proyecto requiere endosos asegurados adicionales, proporcione la siguiente información</p>
      <br>
      <label>
        <input type="text"
          name="projectAddress"
          placeholder="Dirección de negocio"
         >
      </label>
      <br>
       <label>
        <input type="text"
          name="estimatedStartDate"
          placeholder="Fecha estimada de inicio"
          >
      </label>
      <br>
       <label>
        <input type="text"
          name="estimatedEndDate"
          placeholder="Fecha estimada de terminación"
         >
      </label>
      <br>
      <div class="options">
    <select name="terms"
      id="status">
      <option value="deacuerdo">De acuerdo</option>
      <option value="desacuerdo">Desacuerdo</option>
    </select>
    <label for="terms"
      class="opt">Entiendo que cualquier idioma ingresado en este campo no altera ni cambia
cualquiera de los términos y condiciones de la política</label>
  </div>
      <br>
        <label>
        <input type="text"
          name="recibosBrutosEstimados"
          placeholder="Recibos brutos estimados"
          required>
      </label>
      <br>
<p class="final-note"><b>Solo archivos en PDF, peso máximo 5M</b></p>
<label><input type="file" name="file" accept="application/pdf"/></label><br><br>
        <p class="final-note">La sección 7159 del Código de Negocios y Profesiones de California estipula todas las disposiciones contractuales
requisitos para las obras públicas y que mencionan los elementos de seguro que se abordarán
en cada proyecto. <br>
Por favor, revise el contrato que tiene con el titular del certificado adjunto y / o adicional
asegurado para asegurarse de tener todos los endosos y coberturas requeridos. <br>
Su agente estaría feliz de revisar ese contrato con usted si pudiera enviarlo a:
            <b>certs@beeinsured.co</b></p>
      <input type="submit"
        value="Enviar">
    </fieldset>
    <div submit-success>
      <template type="amp-mustache">
        Envío exitoso.
      </template>
    </div>
    <div submit-error>
      <template type="amp-mustache">
        Envío fallido, por intente de nuevo.
      </template></div></form></div></div>
</body>
 <?php include('../../footer-menu-es.php');?>
</html>