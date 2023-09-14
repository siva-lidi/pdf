<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    {{$title}}
    {{$date}}
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>age</th>
                <th>gender</th>
            </tr>
        </thead>
        <tbody>
            @if(is_array($patients) || is_object($patients))
            @foreach ($patients as $patient)
                <tr>
                    <td>{{$patient['id_reg']}}</td>
                    <td>{{$patient['firstname']}}</td>
                    <td>{{$patient['age']}}</td>
                    <td>{{$patient['gender']}}</td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
</body>
</html>