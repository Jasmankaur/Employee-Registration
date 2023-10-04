<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title>Employee Registration form</Form></title>
  </head>
  <body>
    <div class="menu-bar">
      <h1 class="logo">Light<span>Spark</span></h1>
  <nav>
    
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="showlist.php">See List</a></li>
                   
                  
        </li>
        <li><a href="#">Blog</a>
        </li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>

    <div class="hero">
      &nbsp;
     
    <div class="container">
      <h2>Employee Registration</h2>
      <form action="upload.php" method="post" id="register_id">
          <div class="form-group">
              <label for="name">Full Name:</label>
              <input type="text" id="name" name="name" required>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
          </div>

          <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required>
          </div>

          <div class="form-group">
              <label for="department">Department:</label>
              <select id="department" name="department" required>
                  <option value="Hr">HR</option>
                  <option value="Sales">SALES</option>
                  <option value="It">IT</option>
              </select>
          </div>

          <div class="form-group">
              <label for="bio">Bio:</label>
              <textarea id="bio" name="bio" rows="4"></textarea>
          </div>

          <input type="submit" value="Register">
      </form>
  </div>

  <footer>
      <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>