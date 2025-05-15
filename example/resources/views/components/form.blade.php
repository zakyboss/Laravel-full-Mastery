<section id="form">
<form action="" onsubmit="getDetails(event)">
            <label for="name">Name</label>
            <input type="text" id="name" style="background-color: grey">
            <label for="password">Password</label>
            <input type="password" id="password" style="background-color: grey">
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