<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>VueJS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
	<style>
		.red{
			background-color: red;
		}
		.blue{
			background-color: blue;
		}
	</style>
	<div id="app">
		
		<input type="text" v-on:input="cssClass = $event.target.value"/>
		<p v-bind:class="cssClass">Class: {{cssClass}}</p>
	</div>

</body>
</html>
<script>
	var vue = new Vue({
  el: "#app",
  data: {
    cssClass: ''
  }
});
</script>