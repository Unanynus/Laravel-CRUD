
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Data form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

   <style>
         /* {{-- Bordered form --}} */
    form {
       border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
   input[type=text], input[type=email] ,input[type=number]{
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #ccc;
  box-sizing: border-box;
   }

   label{
    text-align: left;
   }


/* Set a style for all buttons */
  button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  }

  /* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Add padding to containers */
.container {
  padding: 16px;
}
   
.error{
            color: red;
        }

    </style> 
</head>
<body>
<form method="POST" action="{{route('post.data')}}">
        @csrf  
        {{-- <pre>
            @php
               print_r($errors->all());
            @endphp
        </pre> --}}

        <div class="container" style="text-align: center">
        <h1 style="text-align:center">Enter your details here </h1> 
        
        <label for="post" ><b>Branch id</b></label><br>
         <input type="number" name="branch_id" placeholder="Enter branch id" required></input> 
         {{--<p>Your detials are safe with us</p>--}}<br><br>
        
         <label for="post"><b>Name</b></label><br> 
         <input type="text" name="name" placeholder="Enter your name" required></input> <br><br>

         <label for="post"><b>Last Name</b></label><br> 
         <input type="text" name="lastname" placeholder="Enter your name" required></input> <br><br>

         
         <label for="post"><b>Age</b></label><br> 
         <input type="number" name="age" placeholder="Enter your age" required></input> <br><br>
        
         
         <label for="post"><b>Product</b></label><br> 
         <input type="text" name="product" placeholder="Enter your product detail" required></input> <br><br>
         <p class="error"></p>
         
        
         <label for="description"><b>Description</b></label><br> 
         <input type="text" name="description" placeholder="Enter designation" required></input><br>
        
         <p  class="error"></p> 
        
        {{--<input type="submit" name="Submit" style="background-color: green"></input>--}}
        <a href="{{route('data.enter')}}"><button type="submit">Submit</button></a>
        
         @if(session()->has('status'))
         <div>
          {{session('status')}}
         </div>
         @endif
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
