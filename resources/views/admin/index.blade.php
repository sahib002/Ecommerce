<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
</head>
<body>

  <h1> Admin </h1>  

  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value = "Log Out">
                </form>

</body>
</html>
=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>ADMIN</h1>
    
    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                      <input type="submit" value="Logout">
                </form>
</body>
</html>
>>>>>>> 87315c8b80b581c7c133bd3357ba2fc416cbc8eb
