<div class="cotizacion"><amp-img src="https://www.beeinsured.co/img/john-quote.png" width="571" height="358" layout="responsive" alt="#" title="#"></amp-img><div class="formulario">
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
               
                <option value=“WorkersComp”>Workers Compensation</option>
                
                <option value=“GeneralLiability”>General Liability</option>
                
                <option value=“CommercialVehicle”>Commercial Vehicle</option>
                
                <option value=“Bond”>Bond</option>
                
                <option value=“SmallBusiness”>Small Business</option>
                
                <option value=“ToolEquipment”>Tool & Equipment</option>
                
                <option value=“ExcessUmbrella”>Excess & Umbrella</option>
                <option value=“Homeowners”>Homeowners</option>
                <option value=“PersonalAuto”>Personal Auto</option>
                <option value=“Certificates”>Certificates</option>
                <option value=“Other”>
                Other</option>
           </select> 
             
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