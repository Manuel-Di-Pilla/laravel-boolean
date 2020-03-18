require('./bootstrap');
const $ = require ('jquery');

$(document).ready(function(){
    $('#go').click(function () {   
      $.ajax({
          'url': window.location.protocol + '//' + window.location.host + '/api/student/gender',
          'data': {
              'eta': $('#filter').val()
          },
          'method': 'POST',
          success: function (data) {
              if (data.response.length > 0) {
                  console.log(data.response);
              } else{
                  console.log('nessun risultato'); 
              }
          },
          error: function () {
              console.log('errore');
          }
      });
    });
});
