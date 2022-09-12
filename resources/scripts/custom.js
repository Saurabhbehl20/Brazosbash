

jQuery(document).ready(function($) {
    
    function calculate_rv(){
        var rv1 = $("input[name=rv-nights-1]").val();
        var rv1_total = 0 ; 
        if(rv1>0){
            var amt_rv1 = $("[for=rv-nights-1]").data('amount');
            rv1_total = parseInt(amt_rv1) * parseInt(rv1);
        }
    
        var rv2 = $("input[name=rv-nights-2]").val();
        var rv2_total = 0;
        if(rv2>0){
            var amt_rv2 = $("[for=rv-nights-2]").data('amount');
            rv2_total = parseInt(amt_rv2) * parseInt(rv2);  
        }
        rv_total = (rv1_total + rv2_total);
        var rv_coma_total = (parseInt(rv_total).toLocaleString("en-US")); 
    
        $("input[name=rv-fee]").val(rv_coma_total);
      }
    
      function calculate_stalls(){
        var stalls = $("input[name=stalls]").val();
        var amt = $("[for=stalls]").data('amount');
        var stalls_total = parseInt(amt) * parseInt(stalls);
    
        var stalls_coma_total = (parseInt(stalls_total).toLocaleString("en-US")); 
    
        $("input[name=stall-fee]").val(stalls_coma_total);
      }
    
       // entry form totals
       function calculate_total(){
        var stalls = jQuery("input[name=stall-fee]").val();
        var stall = stalls.replace(/,/g , '');
       
        var rv = jQuery("input[name=rv-fee]").val();
        var rv1 = rv.replace(/,/g , '');
    
        var entry_fee = 0;
        $('.entry-fee-field .wpcf7-field-group .wpcf7-form-control-wrap input[type=number]').each(function(index,item){
           var val = jQuery(this).val();
            if(val>0){
                entry_fee+=parseInt(val);
            }
        });
        
    
        var checkBoxTotal =0; 
        jQuery('.main-checkbox-label-col span.main-checkbox-value input[type=checkbox]').each(function(index,item){
          if(jQuery(this).is(':checked')){
              var name = jQuery(this).attr('name').replace('[]', '');
              var value = parseInt(jQuery('input[name='+name+'-value]').val());
              if(value>0){
                  checkBoxTotal+=value;
                   var cls = jQuery(this).closest('.wpcf7-form-control-wrap').data('name');
                   if(cls){
                      var childClass = cls+'-child';
                       jQuery('.'+childClass+' input[type=checkbox]').each(function(index,item){
                              if(jQuery(this).is(':checked')){
    
                                var name2 = jQuery(this).attr('name').replace('[]', '');
                                var value2 = parseInt(jQuery('input[name='+name2+'-value]').val());
                                if(value2>0){
                                  checkBoxTotal+=value2;
                                }
                              }
                       });
                   }   
    
              }
          }
    
        });
    
    
        var total = parseInt(rv1) + parseInt(stall) + parseInt(entry_fee) + parseInt(checkBoxTotal);
    
        var coma_total = (parseInt(total).toLocaleString("en-US")); 
        $("input[name=total").val(coma_total);
    
        
      }
      $(".accordion-container input[type=checkbox]").on('change',function(){
        calculate_total();
      });
    
      jQuery(document).on('keyup',".entry-fee",function(){
        
      $(".entry-fee-field .wpcf7-field-group .wpcf7-form-control-wrap input[type=number]").each(function(index,item){
        $(this).on('change',function(){
        calculate_total();
      });
      });
    });
    
      $("input.wpcf7-number").keyup(function(){
        calculate_stalls();
        calculate_rv();
        calculate_total();
      });
    
      $(".total-calculate").on('click',function(){
        console.log('total');
        calculate_total();
      });
      
});