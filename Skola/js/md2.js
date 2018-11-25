//Mainīgie datu tipi: string
var string = 'Hello World!';
console.log(string);
//number
var number = 42;
console.log(number);
//array
var array = ['string', 'number', 52, string];
console.log(array);

//funkcijas piemērs, if else un loop piemēri 
function buyMilk(money){
	var milkPrice = 0.9;

	console.log('Man ir: '+ money + ' eiro');
	console.log('Atrodi Rimi pāri ielai');
	console.log('Aiziej uz to');
	console.log('Atrodi pienu');

	if (money >= milkPrice){
		console.log('Nopirkt to');
	}
	else{
		console.log('Nepietiek naudas');
	}

	console.log('Ejam mājās');

	return {
		name: 'Baltais',
		value: '1l',
		price: milkPrice
	};
}
var milk = buyMilk(1);
console.log(milk);

var tries = [2, 1.5, 2.24, 0.5, 0.6, 7];
 
for (var i = 0; i < tries.length; i++){
	buyMilk(tries[i]);
}

//loop: var = mainīgais kas izpilda vajadzīgās reizes loop
//i = sāk skaitīt no nulles
//i <= 4 nosacijums, kas jāizdara, lai apstātos, tātad līdz 4
//i++ pieskaita klāt 1 vērtību
//(i+1) lai izvadītu pareizās reizes pēc kārtas
// for (var i = 0; i <= 4; i++) {
// 	console.log('Ejam pirkt pienu ' + (i + 1) + ' reizes');
// 	buyMilk(0.5);
// }
// console.log(tries[2]); nosaka kuru array vērtību pēc kārtas izvēlas






//objecta piemērs
var person = {
	firstName: 'Maija',
	lastName: 'Kolodina',
	age: 26,
	hobbies: ['foto', 'kulinārija', 'sports'],
	walk: function() {
		console.log('maijas gaita');
	},
	relatives:{
		brothers:{
			name: 'Jānis',
			Age: 30
		}
	}
};



console.log(person.relatives.brothers);

//== pārbauda datu vērtības, bet nepārbauda datu tipu
//=== pārbauda gan vērtības, gan datu tipus
var two = '2';
var numberTwo = 2;
if (two === numberTwo){
	console.log(two + numberTwo);
}

//boolean piemērs (true/false)
console.log(two === numberTwo);


//Saskaitīšanas funkcija ņem 2 parametrus, atgriež to summu

function plus(a, b){
	return a+b;
	
}
console.log(plus(35, 25));

//Atņemšanas, ņem 2 parametrus un atgriež to starpību

function minus(a, b){
	return a-b;
}	
console.log(minus(35, 25));

//Dalīšanas funkcija

function dal(a, b){
	return a/b;
}	
console.log(dal(12, 6));

//Reizināšana

function reiz(a, b){
	return a*b;
}	
console.log(reiz(35, 25));

function calculateTip(total, percentage){
	return multiply(total, divide(percentage, 100));
}
console.log(calculateTip(26.33, 13));