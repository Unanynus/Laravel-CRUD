<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="p-5 border-2 border border-secondary rounded">
                <h2>Enter your Data: </h2>
                <form class="form" method="POST" enctype="multipart/form-data" action="{{route('import-user')}}">
                    @csrf
                    <label>Select File</label>
                    <input type="file" name="file" class="form-control" />
                    <div class="mt-5">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('export-user')}}" class="btn btn-primary float-right">Export Excel</a><br><br>
                        <a href="{{route('show-excel')}}" class="btn btn-primary float-left">Show Data</a>
                    </div>
                </form>
            </div>

        </div>

    </div>
    
</body>
</html>