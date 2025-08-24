
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Mini product catalog project</title>
  </head>
  <body>

      <div style="margin-left:250px;margin-top:80px; width:1000px;" class="p-5 bg-info-subtle"><!--for rest page-->
        <form action="/add" method="POST" class="justify-contene-end">
          @csrf

          <div class="d-flex">
            <div class="mb-3 " style="margin-right:60px;">
              <label for="exampleFormControlInput1" class="form-label fw-bolder">Product Name </label>
              <input type="text" name="name" class="form-control border-success border-2" id="exampleFormControlInput1" placeholder="">
            </div>
              <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label fw-bolder">Price </label>
              <input type="text" name="price" class="form-control border-success border-2" id="exampleFormControlInput1" placeholder="$$">
            </div>
          </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label fw-bolder">Category </label>
              <input type="text" name="category" class="form-control border-success border-2" style="width:210px;" id="exampleFormControlInput1" placeholder="food">
            </div>
          
         
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label fw-bolder">Product Details </label>
              <textarea class="form-control border-success border-2" name="details" style="width:478px;" id="exampleFormControlTextarea1" rows="2" placeholder=""></textarea>
            </div>
          
              <button  type="submit" class="btn btn-outline-info text-dark border-4 fw-bolder">Save</button>
            
               
        
        </form>
        </div>
      </div>    
  
      
  
  </body>

</html>