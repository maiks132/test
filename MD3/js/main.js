//dokumentā tiek atrasts elements ar id nosutit, kas strādā nospiežot pogu un tiek izsaukta funkcija, kas apstādina notikumu izpildi, lai parādītos modal logs
document.getElementById('nosutit').addEventListener('click', function(eve) {
	eve.preventDefault();
    parks();
}, false);
  
  
  function parks(){
  
  //no elementu id tiek iegūtas vērtības
  	var vards = document.getElementById('vards').value;
  	var epasts = document.getElementById('epasts').value;
  	var zina = document.getElementById('zina').value;
  //ja vērtības vards, epasts un zina ir bez ierakstiem tiek izmesta kļūda un parādās kļūdas modal
  //ja vērtībām ir ieraksti parādās aptstiprinājuma modal  
    if(!vards || !epasts || !zina){
  		console.log("mums nav ierakstu");
  		$('#modalError').modal('show');
    }else{      
      $('#exampleModal').modal('show');
    }
    
  }
  //kad tiek apstiprināts modal pazūd visi ieraksti
  $('#exampleModal').on('hide.bs.modal', function (e) {
  		document.getElementById('vards').value = '';
      document.getElementById('epasts').value = '';
      document.getElementById('zina').value = '';
	})