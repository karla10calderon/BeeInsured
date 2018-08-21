  <style amp-custom>
    .search-result {
        background: #23455f;
        border-radius: 2px 2px 10px 10px;
        padding: 16px;
        margin-right: 10px;
        margin-left: 10px;
        font-family:sans-serif;
    }
    .search-item {
        padding-top: 2%;
        padding-bottom: 2%;
        width: 180px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .search-item-mobile {
        padding-top: 2%;
        padding-bottom: 2%;        
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .search-item a {
        color: white;
        text-decoration: none;
    }
    .search-item{
        color: white;
        text-decoration: none;
    }
    .search-item a:hover {
        color: #EBA835;
        text-decoration: none;
    }
    .search-input {
        position: absolute;
        z-index: 100;
        right:0px;
    }
    .language-input {
        position: absolute;
        z-index: 100;
        right: 242px;
        margin-top: 18px;
    }
  </style>
<div class="top">
    <ul class="contact">
        <li> <amp-img src="https://beeinsured.co/img/Black-Phone-Icon.png" alt="#" title="#" height="35" width="35" ></amp-img></li><li><p>1 844 468 7400</p></li>
    </ul>
    <a href="https://beeinsured.co"><amp-img class="logo" src="https://beeinsured.co/img/Logo-BeeInsured.png" alt="Bee Insured Steps that build your future" title="Logo Bee Insured" height="69" width="210" ></amp-img></a>
</div>
<div class="nav2 language-input">
    <div class="lang">
            <a href="https://beeinsured.co/es.php">Español</a>
    </div> 
</div>

<div class="menu-desktop">
        <!--CAJA HIJO2-->
        <div class="nav2 search-input"> 
            <!--CAJA HIJO4 -->    
            <form 
                method="post" 
                class="searchbox" 
                action-xhr="https://panel.beeinsured.co/api/indexSearch" 
                target="_blank"
                id="search-form"
                on="submit-success:results.show"
                autocomplete="off">
                <div class="searchboxelements">
                    <input 
                        id="query"
                        name="query"
                        type="search" 
                        placeholder="Search..."
                        on="input-debounced:results.hide"
                        [value]="query || ''">
                </div>                     
                <div submit-success id="results" class="search-result">
                    <template type="amp-mustache">
                        {{#data}}
                            <p class="search-item">
                                <a href="{{url}}">{{name}}</a>
                            </p>
                        {{/data}}
                        {{^data}}<p class="search-item">No items founded<p>{{/data}}                
                    </template>
                </div>
            </form>           
        </div>
      <ul class="nav">
        <li class="barra"><a href="https://beeinsured.co">Home</a></li>
        <li>
            <a href="https://beeinsured.co/services/insurance-services" class="barra" >Insurance</a>
            <ul class="hidden"><div class="column">
                <li><a href="https://beeinsured.co/services/workers-compensation">Workers Compensation</a></li>
                 <li><a href="https://beeinsured.co/services/general-liability">General Liability</a></li>
                  <li><a href="https://beeinsured.co/services/commercial-vehicle">Commercial Vehicle</a></li>
                   <li><a href="https://beeinsured.co/services/bond">Bond</a></li>
                   </div>
                   <div class="column">
                    <li><a href="#">Small Business</a></li>
                     <li><a href="https://beeinsured.co/services/inland-marine-tool">Tool & Equipment</a></li>
                      <li><a href="#">Excess & Umbrella</a></li>
                       <li><a href="https://beeinsured.co/services/personal-lines">Personal Lines</a></li> </div>
            </ul>
        </li>
        <li class="barra"><a href="https://beeinsured.co/services/certificates">Certificates</a></li>
        <li>
            <a href="https://beeinsured.co/contact">Contact</a>
            <ul class="hidden"><div class="column">
                 <li><a href="https://beeinsured.co/job-opportunities">Job Opportunities</a></li>
                <li><a href="https://beeinsured.co/our-partners">Our Partners</a></li>
                <li><a href="https://beeinsured.co/about-us">About Us</a></li>
                <li><a href="https://beeinsured.co/our-team">Team</a></li></div>
            </ul>
        </li>
          <li class="barra blog"><a href="#">Blog</a></li>
    </ul>
</div>
       
<!--MENU RESPONSIVO  -->
<div class="menu-responsive">
    <button class="hamburger">&#9776;</button>
    <ul class="content">
        <div class="search-input-mobile"> 
            <!--CAJA HIJO4 -->    
            <form 
                method="post" 
                class="searchbox" 
                action-xhr="https://panel.beeinsured.co/api/indexSearch" 
                target="_blank"
                id="search-form-mobile"
                on="submit-success:resultsm.show"
                autocomplete="off">
                <div class="searchboxelements">
                    <input 
                        id="query"
                        name="query"
                        type="search" 
                        placeholder="Search..."
                        on="input-debounced:resultsm.hide"
                        [value]="query || ''">
                </div>                     
                <div submit-success id="resultsm" class="search-result">
                    <template type="amp-mustache">
                        {{#data}}
                            <p class="search-item">
                                <a href="{{url}}">{{name}}</a>
                            </p>
                        {{/data}}
                        {{^data}}<p class="search-item">No items founded<p>{{/data}}                
                    </template>
                </div>
            </form>           
        </div>
        <li><a href="https://beeinsured.co">Home</a></li>    
        <amp-accordion animate>
            <section>
            <h4>Insurance <i class="down"></i></h4>
            <ul> <li><a href="https://beeinsured.co/services/workers-compensation">Workers Compensation</a></li>
                    <li><a href="https://beeinsured.co/services/general-liability">General Liability</a></li>
                    <li><a href="https://beeinsured.co/services/commercial-vehicle">Commercial Vehicle</a></li>
                    <li><a href="https://beeinsured.co/services/bond">Bond</a></li>
                    
                    
                        <li><a href="#">Small Business</a></li>
                        <li><a href="https://beeinsured.co/services/inland-marine-tool">Tool & Equipment</a></li>
                        <li><a href="#">Excess & Umbrella</a></li>
            <li><a href="https://beeinsured.co/services/personal-lines">Personal Lines</a></li> 
            </ul>
            </section>
        </amp-accordion>     
        <li><a href="https://beeinsured.co/services/certificates">Certificates</a></li>
        <amp-accordion animate>
            <section>
                <h4>Contact <i class="down"></i></h4>
                <ul> <li><a href="https://beeinsured.co/job-opportunities">Job Opportunities</a></li>
                    <li><a href="https://beeinsured.co/our-partners">Our Partners</a></li>
                    <li><a href="https://beeinsured.co/about-us">About Us</a></li>
                    <li><a href="https://beeinsured.co/our-team">Team</a></li>
                </ul>
            </section>     
        </amp-accordion>
        <li><a href="#">Blog</a></li>
    </ul>
</div>