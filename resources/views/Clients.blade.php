<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar bg-dark text-light">
        <div class="container-fluid">
          <span class="navbar-text text-light">
            Clients
          </span>
        </div>
      </nav>
      <div class="item mt-2 " >  
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">CIN</th>
                <th scope="col">dateNaissance</th>
                <th scope="col">telephone</th>
                <th scope="col">adress</th>
                <th scope="col">dateDelivrence</th>
                <th scope="col">dateExpiration</th>
                <th scope="col">ville</th>
                <th scope="col">status</th>
                <th scope="col">remarque</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item )
                  
              @endforeach
            </tbody>
        </table>
          
      </div>
</body>
</html>