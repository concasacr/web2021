<section id="section-finance" class="section page-section bottom60">
<div class="container clearfix">
   <div class="content-wrap">
      <div class="heading-block center">
         <h2>FINANCIAMIENTO</h2>
         <span>Calculadora de Coutas</span>
      </div>
   </div>
   <div class="container-fullwidth clearfix">
      <div class="col_half imac-ajust" data-animate="fadeInLeftBig">
         <img src="n-images/device-top.png" alt="imac-top-video">
         <video poster="images/videos/explore-poster.jpg" preload="auto" controls style="display: block; width: 100%;" autoplay loop muted>
            <source src='https://concasa.com/video/concasa_video.webm' type='video/webm' />
            <source src='https://concasa.com/video/concasa_video.mp4' type='video/mp4' />
         </video>
         <img src="n-images/device-bottom.png" alt="imac-bottom-video">
      </div>
      <div class="col_half col_last" data-animate="fadeInRightBig">
         <div class="one-half first">
            <form method="post" name="rmcp_form" id="rmcp-form-1" class="rmcp-form rmcp-form-responsive rmcp-form-light">
               <div id="form-calc-bg" style="width: 50%;float: left;">
                  <h3 class="text-center title-cal">Calculadora</h3>
                  <div class="form-group row">
                     <div class="col-12 inputGroupContainer rmcp-input">
                        <div class="input-group"><span class="input-group-addon"><span class="p-icon-home"></span></span>
                           <input type="text" name="rmcp_input[1][0]" required="true" id="rmcp_input_1_0" class="rmcp-input-text form-control" placeholder="Valor del Apartamento" value="96000">
                        </div>
                        <span class="rmcp-error"></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-12 inputGroupContainer rmcp-input">
                        <div class="input-group"><span class="input-group-addon"><span class="p-icon-money"></span></span>
                           <input type="text" name="rmcp_input[1][1]" required="true" id="rmcp_input_1_1" class="rmcp-input-text form-control" placeholder="Pago Inicial" value="10000">
                        </div>
                        <span class="rmcp-error"></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-12 inputGroupContainer rmcp-input">
                        <div class="input-group">
                           <span class="input-group-addon"><span class="p-icon-porcentage"></span></span>
                           <select name="rmcp_input[1][2]" id="rmcp_input_1_2" class="rmcp-input-select form-control select">
                              <option selected="">Tasa de Interes</option>
                              <option value="8.90">8.90% - $ Banco Nacional</option>
                              <option value="7.25">7.25% - $ BAC San José</option>
                              <option value="7.95">7.95% - $ BAC San José</option>
                              <option value="7.25">7.25% - $ Scotiabank</option>
                              <option value="7.25">7.25% - $ Davivienda</option>
                           </select>
                        </div>
                        <span class="rmcp-error"></span>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-12 inputGroupContainer rmcp-input">
                        <div class="input-group"><span class="input-group-addon"><span class="p-icon-time"></span></span>
                           <input type="text" name="rmcp_input[1][3]" required="true" id="rmcp_input_1_3" class="rmcp-input-text form-control" placeholder="Plaza del Crédito" value="30">
                        </div>
                        <span class="rmcp-error"></span>
                     </div>
                  </div>
                  <br style="clear:both">
                  <div id="spa-btn-calc" class="rmcp-input">
                     <button type="submit" name="rmcp_input[1][4]" id="rmcp_input_1_4" class="protected-btn a-btn-2 creative button button-border button-rounded button-large noleftmargin topmargin-sm">CALCULAR</button>
                  </div>
               </div>
               <div id="caltop" class="caltop"></div>
               <div class="divider divider-short divider-rounded divider-center nomargin calmiddle"><i class="icon-refresh"></i></div>
               <div class="rmcp-results rmcp-results-5 calbottom" >
                  <div id="div_bancos">
                     <h5 class="text-center negrita">Cuota mensual aproximada</h5>
                     <h2 class="text-center">$&nbsp;</h2>
                     <h6 class="negrita text-center pt-2">Ingreso mínimo: <span>$</span></h6>
                     <p class="text-center p-3"><small> *Los siguientes son cálculos aproximados<br>*Las cuotas no incluyen los seguros</small></p>
                  </div>
               </div>
               <!-- .rmcp-results -->
               <input type="hidden" name="rmcp_ref" value="1">
            </form>
         </div>
      </div>
   </div>
</div>
</section>