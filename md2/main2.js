function onAddItemClick(){
	//pārbauda vai poga reaģē
	console.log('poga noklikšķināta');
	//pēc klikšķa tiek saglabāts jaunais elements
	var newItem = getNewItem();
	var item = getItem();
	/*
	if (!newItem){
		alert('Nav virsraksta');
	}else{
		if (!item){
			alert('Nav ieraksta');
		}else{
	//tiek pievienots jaunais elements
				addItem(newItem, item);
	//addItem(item);
	// console.log(newItem);	
			};	
	};
	*/
	if (!newItem || !item){
		alert('Nav ieraksts');
	}else{
		addItem(newItem, item);
	};
	//tiek pievienots jaunais elements
				
	//addItem(item);
	// console.log(newItem);	
	

}
//Elements ir daļa no HTML satura, kā viss <> saturs
//1. Dabūjam vērtību, ko lietotājs ievada, ievades laukā
//dabū ievadīto elementu
function getNewItem(){
	//jaunā elemeta nosaukums un tā iegūšana
	var newItemInputEl = document.getElementById("new-item-input");
	//pievienojot jaunu mainīgo nodzēšas jaunais ieraksts input laukā
	var newItem = newItemInputEl.value;
	//nodzēš ievades lauka vērtību
	newItemInputEl.value = '';
	// console.log(newItemInputEl.value);
	//atgriež iegūto vērtību
	return newItem;
}
function getItem(){
	//jaunā elemeta nosaukums un tā iegūšana
	var itemInputEl = document.getElementById("item-input");
	//pievienojot jaunu mainīgo nodzēšas jaunais ieraksts input laukā
	var item = itemInputEl.value;
	//nodzēš ievades lauka vērtību
	itemInputEl.value = '';
	// console.log(newItemInputEl.value);
	//atgriež iegūto vērtību
	return item;
}

//2. Atrodam saraksta kontaineri
//3. Izveidojam jaunu saraskta ierakstu
function addItem(newItem, item){
	//atrod elementu kurā gribēs likt iekšā
	var todoListEl = document.getElementById("todo-list");
	//nomaina esoša elementa saturu
	todoListEl.innerHTML = todoListEl.innerHTML + '<li id="todo-list" class="list-group-item">' + newItem + ': ' + item + ' ' + 
	'<button onclick="removeItem(this)" type="button" class="btn btn-danger">Dzēst</button></li>';
}

function removeItem(clickedButton){
	// console.log(clickedButton);
	//this - veids kā piekļūt informācijai, kas saistīta ar veikto darbību
	//tiek nodzēst saraksta tag visas parent un children daļas
	//button    ->     li   ->   ul ->  delete ul child ->  button -> li     
	clickedButton.parentNode.parentNode.removeChild(clickedButton.parentNode);
}
