
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* {{-- Bordered form --}} */
    form {
       border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
   input[type=text], input[type=email] ,input[type=number]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
   }


/* Set a style for all buttons */
  button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
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
  <form >
  @csrf
  {{-- <pre>
            @php
               print_r($errors->all());
            @endphp
        </pre> --}}
    <h1>Enter your data</h1>
    <div class="container">
        <label for="uname"><b>User name: </b></label><br>
        <input type="text" name="name" placeholder="Enter your name" >
        @error('name')
        <p class="error"> {{ $message }}</p>
        @enderror
        <br><br>
        
        <label for="dept"><b>Department</b></label><br>
        <input type="text" name="department" placeholder="Enter your department" >
        @error('department')
        <p class="error" > {{$message}}</p>
        @enderror
        <br><br>

        <label for="email"><b>Email ID</b></label><br>
        <input type="email" name="email" placeholder="Enter your email" >
        @error('email')
        <p class="error"> {{ $message }}</p>
        @enderror
        <br><br>

        <label for="usalary"><b>Salary</b></label><br>
        <input type="number" name="salary" placeholder="Enter your salary" >
        @error('salary')
        <p class="error"> {{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit"><a href="/resources/views/submit.blade.php">Login</a></button>

       


    </div>

</form>
</body>
</html>