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
	<div id="app">
		
		<p>{{ title }}</p>
		<button v-on:click="changeTitle">Change Title</button>
	</div>

</body>
</html>
<script>
	var vue = new Vue({
  el: "#app",
  data: {
    title: "Hello world!"
  },
 methods:{
 	changeTitle(){
 		this.title = "Change Title";
 	}
 }
});
</script>