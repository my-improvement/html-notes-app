<!DOCTYPE html>

<html>
  <head>
    <title>
      Notes App
    </title>

    <link rel="stylesheet" href="./styles.css">

    <script src="./actions.js"></script>

    <script>
      const id = localStorage.getItem('id')

      if(id != undefined) {
        redirect(`/`)
      }
    </script>
  </head>

  <body>
    <div
      class="non-session-page-container"
    >
      <p
        class="title"
      >
        Welcome To Notes App
      </p>

      <div
        class="content-container"
      >
        <input
          class="non-session-input"
          placeholder="Username"
        >

        <input
          class="non-session-input"
          placeholder="Password"
          type="password"
        >
      </div>

      <div
        class="bottom-options-container"
      >
        <a
          class="bottom-option"
          href="#"
          onclick="login()"
        >
          Login
        </a>

        <a
          class="bottom-option"
          href="#"
          onclick="redirect('/register')"
        >
          Register
        </a>
      </div>
    </div>
  </body>
</html>