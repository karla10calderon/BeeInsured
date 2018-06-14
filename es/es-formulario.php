
      <div class="cotizacion">
        <p class="getyour">
        ¡Obtenga una <br>cotización!
        </p>
        
     
        
        <div class="formulario">
        
         <amp-img src="../img/John.png" width="328" height="380"  alt="#" title="#"></amp-img>
         
            
        <!--FORMULARIO CORTO DE CONTACTO-->
        <!--Falta hacer formulario diseño -->
       <form method="post"
    action-xhr="https://example.com/subscribe"
    target="_top"
    class="quote">
    <fieldset>
      <label>
        <input type="text"
          name="nombre"
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
        <input type="email"
          name="Email"
          placeholder="Email"
          required>
      </label>
      <br>
      <label>
         <input type="text"
          name="Teléfono"
          placeholder="Teléfono"
          required>
      </label>
  <br>
       <div class="options">
            <select name=“Service” id="status">
                <option value=“Business”>Préstamos a negocios</option>
                <option value=“Certificates”>Certificados</option>
<option value=“Insurance”>Servicios de seguros</option>
           </select> 
           <label for="Service"
      class="opt">Servicio</label>   
        </div>
      <input type="submit"
        value="Enviar">
    </fieldset>
    <div submit-success>
      <template type="amp-mustache">
        Subscription successful!
      </template>
    </div>
    <div submit-error>
      <template type="amp-mustache">
        Subscription failed!
      </template>
    </div>
  </form>      
                 </div>
    </div>

