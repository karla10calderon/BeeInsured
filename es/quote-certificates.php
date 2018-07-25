 <div class="cotizacion">
        <p class="getyour">
        Get your <br>quote today!
        </p>
        
     
        
        <div class="formulario">
        
         <amp-img src="../img/John.png" width="262" height="304"  alt="#" title="#"></amp-img>
         
            
        <!--FORMULARIO CORTO DE CONTACTO-->
        <!--Falta hacer formulario diseño -->
       <form method="post"
    action-xhr="https://example.com/subscribe"
    target="_top"
    class="quote">
    <fieldset>
      <label>
        <input type="text"
          name="name"
          placeholder="Name"
          required>
      </label>
      <br>
      <label>
        <input type="text"
          name="Last Name"
          placeholder="Last Name"
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
          name="Phone"
          placeholder="Phone"
          required>
      </label>
  <br>
       <div class="options">
            <select name=“Service” id="status">
                <option value=“Certificates”>Certificates</option>

           </select> 
           <label for="Service"
      class="opt">Service</label>   
        </div>
      <input type="submit"
        value="Send">
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

