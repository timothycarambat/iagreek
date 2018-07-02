if( window.view === 'register'){
  $(function(){

    $('#org_size').on('change',function(e){
      let size = +$(e.target).val();
      $('.small-plan,.med-plan,.lg-plan').removeClass('active');

        if(size >= 1 && size <= 99){
          $('.small-plan').addClass('active');
        }else if(size >= 100 && size <= 200){
          $('.med-plan').addClass('active');
        }else if(size >= 201 ){
          $('.lg-plan').addClass('active');
        }else{
          $(e.target).val(1);
          $('.small-plan').addClass('active');
        }
    });
    $('#org_size').change();




  })
}
