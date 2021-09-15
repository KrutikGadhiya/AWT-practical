<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>get the data from user registeration form and display in tabular form</title>
</head>

<body>
  <div class="form">
    <form method="POST" onsubmit="return submitForm()">
      <h1>Registeration Form</h1>
      <div class="form-control">
      </div>
      <div class="form-control">
        <label for="Name">Name: </label>
        <input required id="Name" name="Name" type="text">
      </div>
      <div class="form-control">
        <label for="Email">E-Mail: </label>
        <input required id="Email" name="Email" type="Email">
      </div>
      <div class="form-control">
        <label for="pass">Password: </label>
        <input required id="pass" name="pass" type="password">
      </div>
      <div class="form-control">
        <label for="Mobile">Mobile: </label>
        <input required id="Mobile" name="Mobile" type="text">
      </div>
      <div class="form-control">
        <label for="Gender">Gender: </label>
        <div class="check">
          <input required type="radio" id="Male" name="Gender" value="Male">
          <label for="Male">Male</label><br>
          <input required type="radio" id="Female" name="Gender" value="Female">
          <label for="Female">Female</label><br>
        </div>
      </div>
      <div class="form-control">
        <label for="Languages">Languages: </label>
        <div class="check">
          <input type="checkbox" id="Hindi" name="Hindi" value="Bike">
          <label for="Hindi">Hindi</label><br>
          <input type="checkbox" id="Gujarati" name="Gujarati" value="Car">
          <label for="Gujarati">Gujarati</label><br>
          <input type="checkbox" id="English" name="English" value="Boat">
          <label for="English">English</label>
        </div>
      </div>
      <div class="form-control">
        <label for="favcolor">Favorite color: </label>
        <input required type="color" id="favcolor" name="favcolor">
      </div>
      <div class="form-control">
        <label for="birthday">DOB: </label>
        <input required type="date" id="birthday" name="birthday">
      </div>
      <div class="form-control">
        <label for="Time">Select time:</label>
        <input required type="time" id="Time" name="Time">
      </div>
      <div class="form-control">
        <label for="URL">URL: </label>
        <input id="URL" required type="url" name="URL">
      </div>
      <div class="form-control">
        <label for="Range">Range: </label>
        <input type="range" name="Range">
      </div>
      <div class="form-control">
        <label for="Depart">Department: </label>
        <select required id="Depart" name="Depart">
          <option value="Department"></option>
          <option value="IT">IT</option>
          <option value="CE">CE</option>
          <option value="CSE">CSE</option>
          <option value="ME">ME</option>
          <option value="CL">CL</option>
          <option value="EC">EC</option>
          <option value="EE">EE</option>
        </select>
      </div>
      <div class="form-control">
        <label for="Desc">Description: </label>
        <textarea required name="Desc" id="Desc" cols="30" rows="2"></textarea>
      </div>
      <div class="form-control">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
  <div class="output">
    <h1>Submited form</h1>
    <table>
      <?php
      $data = $_POST;
      foreach ($data as $k => $v) {
        echo "<tr>
      <td>$k</td>
      <td>$v</td>
      </tr>";
      }
      ?>
    </table>
  </div>
  <script src="app.js"></script>
</body>

</html>