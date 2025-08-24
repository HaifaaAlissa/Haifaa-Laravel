
  <!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
       <title>Mini Tasks management project</title>
  </head>
  <body>
  <div style="margin-left:200px;margin-top:100px;" ><!--for rest page-->
        
        <div class="d-flex justify-content-start">

        
            <form action="/search" method="POST" class="d-flex ">
                @csrf
                
                <input class="m-1" type="text" name="name" placeholder="name" style="width:200px;height:40px;"> </input>
            
                <button class=" btn bg-info text-dark  fw-bolder " style="width:100px;height:40px;margin-top:5px;" type="submit">Search</button>
            </form>

            <form action="{{url('/filter')}}" method="POST" class="d-flex justify-content-start" style="margin-top:5px;">
                @csrf
                    <div class="input-group"style="margin-bottom:30px;margin-left:30px;width:300px;">
                        <select class="form-select" name="category" id="inputGroupSelect04" aria-label="Example select with button addon">
                        @foreach($categories as $category)   
                     
                            <option value="{{$category}}">{{$category}}</option>
                         @endforeach
                        </select>
                        <button class="btn bg-info btn-outline-secondary text-dark  fw-bolder" type="submit">Apply filter</button>
                    </div>
            </form>
        </div>

    
   <table class="table table-hover" style="width:1100px;">
        <thead class="table-success">
            <tr>
            <th scope="col"> Name</th>
            <th scope="col">Details</th>
            <th scope="col">Price</th>
            <th scope="col"> Category</th>
           
            <th scope="col" style="width:70px;"> </th>
            <th scope="col" style="width:70px;"> </th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
         
           
             @foreach($products as $p) 
            <tr>
            <td>{{$p->name}}</td>
            <td>{{$p->details}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->category}}</td>
            
            <td style="width:70px;">
              <form
                method="post"
                  action="{{url('/edit',$p->id)}}">                        
                @csrf
                <button type="submit" class="border-white" style="width:35px;height:35px"> <i class="bi bi-pen-fill text-success"></i>  </button>
              </form>
            </td>
            <td style="width:70px;">
              <form
                method="post"
                onsubmit="return confirm('Are you sure?');" 
                action="{{url('/delete',$p->id)}}" >                     
                @csrf
                <button type="submit" class="border-white" style="width:35px;height:35px"> <i class="bi bi-trash3-fill text-danger"></i> </button>
              </form>
            </td>
              </tr>
            @endforeach
          
       
        </tbody>
    </table>
    <form action="/new" method="POST" class="d-flex ">
      @csrf
      <button class=" btn bg-info text-dark  fw-bolder " style="width:200px;height:40px;margin-top:5px;" type="submit">Add product</button>
    </form>
<br>
<br>

</body>

</html>