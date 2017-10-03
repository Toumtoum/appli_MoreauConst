//materialize component for dropdown menu in navbar small displays

$( document ).ready(function(){
  $(".button-collapse").sideNav();
})

//materialize component for dropdown calendar

$('.datepicker').pickadate({
    formatSubmit: 'yyyy/mm/dd',
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
