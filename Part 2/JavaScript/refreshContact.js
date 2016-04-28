$('#postSubmit').hide();
$('#contactForm').submit(function (e) {
  e.preventDefault();
  $(this).hide();
  $('.body').hide()
  $('#preSubmit').hide();
  $('#postSubmit').show();
})