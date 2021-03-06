 <div id="sliders-tab" class="calculator-body-item sliders active">
     <p id="product-description" class="calculator-body-description"></p>
     <div id="saver" class="saver">
         <div class="form-group">
             <label for="saved-amount">How much do you have saved with us?</label>
             <input class="form-control" data-type="currency" id="saved-amount" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="£0.00" name="saved-amount">
         </div>
     </div>
     <div class="slider">
         <label for="loan-amount">I want to borrow <span class="selected-amount"></span></label>
         <div id="loanamount"></div>
     </div>
     <div class="slider">
         <label for="loan-duration">and repay over <span class="selected-term"></span></label>
         <div id="loanterm"></div>
     </div>
 </div>
