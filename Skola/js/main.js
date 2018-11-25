//tiek piešķirta sākotnējā vērtība
var counter = 0; 
//elements tiek izvadīts uz ekrāna pēc id, kas ir norādīts HTML
//funkcija atjauno sākuma skaitli
function updateCounterEL(){
	var counterEL = document.getElementById("counter");
	counterEL.innerText = counter;
}
//sākuma skaitlis tiek palielināts par 1 vienību
//un tiek atjauno informācija
function incrementCounter(){
	counter++;
	console.log(counter);
	updateCounterEL();
}
//sākuma skaitlis tiek samazināts par 1 vienību
//un tiek atjauno informācija
function decrementCounter(){
	counter--;
	console.log(counter);
	updateCounterEL();
}
//Viss tiek atjaunots
updateCounterEL();