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
    <form method="post" action="{{route('reports.get')}}">
        @csrf
        <div class="form-group">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="" selected>choose</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Others</option>
        </select>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" id="name" class="form-control">
        </div>
        <div class="form-group">
            <select name="martial" id="martial" class="form-control">
                <option value="" selected>choose</option>
                <option value="marital">Marital</option>
                <option value="Married">maried</option>
                <option value="UnMarried">unmaried</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">submit</button>
    </form>
    
</body>
</html>