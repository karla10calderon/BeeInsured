<div class="cotizacion"><amp-img src="https://www.beeinsured.co/img/john-formulario.png" width="571" height="358" layout="responsive" alt="John from BeeInsured" title="John from BeeInsured"></amp-img><div class="formulario">
<!--FORMULARIO CORTO DE CONTACTO-->
       <form method="post"
    action-xhr="https://panel.beeinsured.co/api/addRequest"
    target="_top"
    class="quote">
    <fieldset>
      <label>
        <input type="text"
          name="name"
          placeholder="Nombre *"
          required>
      </label>
      <br>
      <label>
        <input type="email"
          name="Email"
          placeholder="Correo*"
          required>
      </label>
      <br>
      <label>
         <input type="text"
          name="Phone"
          placeholder="Teléfono *"
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
         <br><p class="note">* Información requerida</p>
      <input type="submit" id="sendForm"
        value="Enviar">
    </fieldset>
    <div submit-success>
      <template type="amp-mustache">
        Subscription successful!
      </template>
    </div>
    <div submit-error>
      <template type="amp-mustache">
        Subscription successful!
      </template>
    </div>
  </form>      
                 </div>
    </div>