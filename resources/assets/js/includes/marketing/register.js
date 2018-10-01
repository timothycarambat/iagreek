if( window.view === 'register'){
  $(function(){

    $('#org_size').on('change',function(e){
      let size = +$(e.target).val();
      $('.small-plan,.med-plan,.lg-plan').removeClass('active');

        if(size >= 1 && size <= 50){
          $('.small-plan').addClass('active');
        }else if(size >= 51 && size <= 199){
          $('.med-plan').addClass('active');
        }else if(size >= 200 ){
          $('.lg-plan').addClass('active');
        }else{
          $(e.target).val(1);
          $('.small-plan').addClass('active');
        }
    });
    $('#org_size').change();

    $('#trialOnly').on('click', function(e){
      if( $(e.target).is(':checked') ) {
        $('[data-cc-block]').hide(300)
        $('[data-trial-block]').show(300)
      } else {
        $('[data-cc-block]').show(300)
        $('[data-trial-block]').hide(300)
      }
    })


  })
}
