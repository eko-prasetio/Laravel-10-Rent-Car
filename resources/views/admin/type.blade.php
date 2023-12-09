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
                <h2>List Type Mobil</h2>
            </div>
            <div class="pull-right mb-2">
                <a href="{{route('add.type')}}" class="btn btn-outline-primary px-5 radius-30">Add Type</a>
            </div>
        </div>
        <div class="card_body">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($type as $key => $item )                            
                                <tr>
                                    <td>{{$key+1}} </td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href="" class="btn btn-warning px-3 radius-30">Edit</a>
                                        <a href="" class="btn btn-danger px-3 radius-30" id="delete" >Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>                    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>