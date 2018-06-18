
      <div class="cotizacion">
        <p class="getyour">
       Get your <br>quote Today!
        </p>
        
     
        
        <div class="formulario">
        
         <amp-img src="../img/John.png" width="328" height="380"  alt="#" title="#"></amp-img>
         
            
        <!--FORMULARIO CORTO DE CONTACTO-->
       <form method="post"
    action-xhr="resultados-form.php"
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
                <option value=“Business”>Business Loans</option>
                <option value=“Certificates”>Certificates</option>
<option value=“Insurance”>Insurance Services</option>
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

