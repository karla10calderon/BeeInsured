<div class="cotizacion"><amp-img src="https://www.beeinsured.co/img/john-formulario.png" width="571" height="358" layout="responsive" alt="#" title="#"></amp-img><div class="formulario">
<!--FORMULARIO CORTO DE CONTACTO-->
       <form method="post"
    action-xhr="https://panel.beeinsured.co/api/addRequest"
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
               <option value=“Insurance”>Insurance Services</option>
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

