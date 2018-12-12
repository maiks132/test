<!DOCTYPE html>
<html>
<head>
<title>New page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
  <style>
    .odd{
      background-color: black;
      color: white;
    }
    .even{
      background-color: grey;
      color: black;
    }
  </style>
  <header id="header">
    {{x}}
  </header>
    <div id="test">
      <input type="number" v-model="x"/>
      <input type="number" v-model="y"/>
  <div>
    <table class="table">
      <tbody>
        <tr v-for="n in x*1">
          <td v-for="m in y*1" :class="[((n+m)%2)===0 ? 'odd': 'even']">{{n}}x{{m}}</td>
        </tr>
    </table>
  </div>
</div>

</body>
</html>

<script>
  var header = new Vue({
    el: "#header",
    data:{
      x:null
    },
    methods:{
      changeTitle(){
        header.x = x
      }
    }
  })
  var vue = new Vue({
  el: "#test",
  data: {
    x: 0,
    y: 0
  } 
 
});
</script>