<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
    <title>Contact us </title>
</head>

<body>
  <header>
        <nav>
            <ul style="list-style: none; display : flex" >
                <li class="nav"><a href="/" style="text-decoration: none;">Home</a></li>
                <li  class="nav" ><a href="/about" style="text-decoration: none;">About</a></li>
                <li  class="nav"><a href="/contacts" style="text-decoration: none;">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <H1>Hit us up fam ! </H1>
        <section id="form">
<form action="" onsubmit="getDetails(event)">
            <label for="name">Name</label>
            <input type="text" id="name">
            <label for="password">Password</label>
            <input type="password" id="password">
            <button type="submit">Submit</button>
        </form>

        </section>
         <div id="welcome">

         </div>
        <script>
            function getDetails(e) {
                e.preventDefault()
                let name = document.getElementById('name').value;
                let password = document.getElementById('password').value;
                // console.log(`Welcome ${name}`)
                   let welcome = document.getElementById('welcome');
                   welcome.textContent= `Welcome ${name}`
                let form = document.getElementById('form');
                form.textContent = '';

            }
        </script>
    </section>
</body>

</html>