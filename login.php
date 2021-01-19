<!DOCTYPE html>

<html>
  <head>
    <title>
      Notes App
    </title>

    <link rel="stylesheet" href="./styles.css">

    <script src="./actions.js"></script>
  </head>

  <body>
    <div
      class="login-page-container"
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
          class="login-input"
          placeholder="Username"
        >

        <input
          class="login-input"
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
          onclick="register()"
        >
          Register
        </a>
      </div>
    </div>
  </body>
</html>