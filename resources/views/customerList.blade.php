<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
    <style>
        /* table{
            border: 1px solid;
            width: 100%;
            padding: 5px;
        }
        td,th{
            padding: 10px;
            border: 1px solid;
        } */
 table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td,  th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
}

button {
  background-color: cyan;
  color: white;
  padding: 7px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100px;
}
    </style>
</head>
<body>
    <a href="{{route('post.data')}}" >
    
    <button type="button" class="AddPost">Add post</button>
    </a>
    <table>
        <tr>
            <th>ID</th>
            <th>Branch ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Product</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
      
        @foreach($customer as $cust)
        <tr>
            <td>{{$cust->id}}</td> 
            <td>{{$cust->branch_id}}</td>
            <td>{{$cust->name}}</td>
            <td>{{$cust->lastname}}</td> 
            <td>{{$cust->age}}</td>
            <td>{{$cust->product}}</td>
            <td>{{$cust->description}}</td>
            <td>
                <a href="{{route('edit',$cust->id)}}" ><button style="Background-color: green" >Edit</button></a>
                <a href="" ><button style="background-color: #f44336">Delete</button></a>
            </td>
        </tr>
          @endforeach
            
           
    
    </table>
</body>
</html>