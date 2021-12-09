$('.slick-slider').slick({
    dots: false,
    slidesToShow: 3,
    arrows: true,
    autoplay: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
        }
      }
    ]
});

$(document).on('beforeSubmit', '#calculator-form', function(){
  var data = $(this).serialize();
  $.ajax({
      url: '/site/send-calculator-form',
      type: 'POST',
      data: data,
      success: function(res){
        $(document).find("#request").html(res);
      },
  });
  return false;
});

$(document).on('change', '#calculatorcontactform-srok', function(){
  calculator()
})

$(document).on('change', '#calculatorcontactform-summa', function(){
  calculator()
})

function calculator(){
  var summa = $(document).find('#calculatorcontactform-summa').val()
  var srok = $(document).find('#calculatorcontactform-srok').val()

  srok = srok * 12

  m_stavka = percent / 12 / 100

  var annuitet = m_stavka * Math.pow((1 + m_stavka), srok) / (Math.pow((1 + m_stavka), srok) - 1)
  
  var payment = Math.round(summa * annuitet)

  payment = moneyFormat(payment)

  $(document).find('#payment').html(payment)
  
}

function moneyFormat(n) {
  return parseFloat(n).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1 ").replace('.', ',');
}

//btnCreditCar
$(document).on('click', '.btnContactCar', function(){
  
  var id = $(this).data('id')

  if(id){

    $('#modal-sm .modal-body').load('/site/contact-car?id='+id, function(){

      $('#modal-sm').modal('show')

    })

  }
  
})