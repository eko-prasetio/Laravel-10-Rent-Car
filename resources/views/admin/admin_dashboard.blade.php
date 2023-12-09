<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sewa Mobil Dashboard</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.csss">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h1>Rental Mobil Admin Dashboard</h1>
                <h5>Please select to add Master Data</h5>
            </div>
            <div class="pull-right mb-2">
                <a href="{{route('admin.brand')}}" class="btn btn-outline-primary px-5 radius-30">List Brand Mobil</a>
                <a href="{{route('admin.type')}}" class="btn btn-outline-primary px-5 radius-30">List Type Mobil</a>
                <a href="{{route('add.car')}}" class="btn btn-outline-primary px-5 radius-30">List Mobil</a>
            </div>
        </div>       
    </div>

</body>
</html>