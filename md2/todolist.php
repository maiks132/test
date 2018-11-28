<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col">
        	<h1>Todo list</h1>

          	<div class="input-group mb-3">
            	<input 
            	id="new-item-input" 
            	type="text" 
            	class="form-control"
            	placeholder="Darāmais darbu saraksts" />
           		
          	</div>
          	 <div class="form-group">
  				<label for="comment">Comment:</label>
  				<textarea id="item-input" class="form-control" rows="5" id="comment"></textarea>
			</div> 
			<div class="input-group-append">
              		<button 
              		onclick="onAddItemClick()"  
              		class="btn btn-outline-secondary"
              		type="button">
                	Add
              		</button>
            </div>

          	<ul id="todo-list" class="list-group list-group-flush">

          	</ul>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="main2.js"></script>
  </body>
</html>