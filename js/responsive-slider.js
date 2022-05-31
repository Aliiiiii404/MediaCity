$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:false,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  }); 


  $(document).ready(function() {
    $('#autoWidth1').lightSlider({
        autoWidth:true,
        loop:false,
        onSliderLoad: function() {
            $('#autoWidth2').removeClass('cS-hidden');
        } 
    });  
  }); 

  $(document).ready(function() {
    $('#autoWidth2').lightSlider({
        autoWidth:true,
        loop:false,
        onSliderLoad: function() {
            $('#autoWidth2').removeClass('cS-hidden');
        } 
    });  
  }); 