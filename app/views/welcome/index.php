    <style>
      body {
        font-family:Arial;
        background-color:#eee;
      }

      #welcome {
        width:450px;
        margin:auto;
        font-size:12px;
        margin-top:150px;
        color:#555;
        text-align:justify;
      }
    </style>
    <div id="welcome">
      <h1>Welcome to Onda-MVC</h1>
      <p>This file can be found at <strong>/app/views/welcome/index.php</strong>. 
      The root <strong>'/'</strong> route is currently set on the 'Welcome'
      controller found in <strong>/app/controllers/Welcome.php</strong>. You can
      see the routes in <strong>/config/routes.php</strong>.</p>
      <p>For a quick start you can generate a controller with the command:</p>
      <code>
        $ php generate/controller users
      </code>
      <p>You can also generate models with the following command:</p>
      <code>
        $ php generate/model user field1:integer field2:string field3:text
      </code>
    </div>
