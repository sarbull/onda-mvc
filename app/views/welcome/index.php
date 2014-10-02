    <style>
      body {
        font-family:Arial;
        background-color:#eee;
      }

      #welcome {
        width:450px;
        margin:auto;
        font-size:12px;
        margin-top:100px;
        color:#555;
        text-align:justify;
      }
    </style>
    <div id="welcome">
      <h1>Welcome to Onda-MVC</h1>
      <p>This MVC is 100% PHP. Thank you for downloading. It gets job done.</p>
      <h2>Quick start</h2>
      <p>You are here because you created the <strong>config.php</strong> file in the
      <strong>/config/</strong>.</p>
      <p>This file can be found at <strong>/app/views/welcome/index.php</strong>. 
      The root <strong>'/'</strong> route is currently set on the 'Welcome'
      controller found in <strong>/app/controllers/Welcome.php</strong>. You can
      see the routes in <strong>/config/routes.php</strong>.</p>
      <p>To continue, you can generate a controller with the command:</p>
      <code>
        $ php generate/controller.php users user
      </code>
      <p>The 'users' stands for the controller's name and 'user' for the controller's model name.</p>
      <p>You can also generate models with the following command:</p>
      <code>
        $ php generate/model.php user users field1:int:11 field2:decimal:5,2 field3:varchar:40
      </code>
      <p>The first <strong>'user'</strong> is the name of the model and the second <strong>'users'</strong>
      is the multiplied name of the db table that will be generated in <strong>/db/migrations/</strong>.</p>
      <p>You can contribute to this project on <a href="http://github.com/sarbull/onda-mvc" target="_blank">http://github.com/sarbull/onda-mvc</a>.</p>
    </div>
