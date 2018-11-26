function addItem(name){
	$(
		'<li class="list-group-item d-flex justify-content-between align-items-center"><span class="name">' 
		+ name + 
		'</span><span class="actions"><button class="done-btn">Done</button><button class="delete-btn" data-toggle="modal" data-target="#exampleModal">Delete</button></span></li>'
		).appendTo('#mustHaveList');
	//appendTo pievieno konkrētajai vietai lapā, kur norādīts ID
}

function deleteItem(){
	$(this).parents('li').remove();
}

//tiek norādīts objekts, ar ko darbosies
//funkcija ar dolārzīmes nosaukumu
$(document).ready(function(){
	//#-id vietai kuru grib aptiprināt
	$('#add-form').submit(function(event){
		event.preventDefault();

		var newItemInput = $('.input-group .form-control');
		// console.log(newItemInput.val());
		var newItem = newItemInput.val();
		addItem(newItem);
	});
	
	//uz klikšķa tiek atrasta vieta, kur izdzēst ierakstu
	$('.modal .btn-primary').click(deleteItem);
	// $("#mustHaveList").on("click", ".actions .delete-btn", deleteItem);
});

