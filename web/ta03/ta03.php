<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>03 Teach : Team Activity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>

<body>
  <form action="form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br/>
    <label for="email">Email:</label>
    <input type="text" name="email">
    <br/>
    <h1>Major:</h1>
    <br/>
    <input type="radio" name="major" value="CS" />Computer Science
    <br/>
    <input type="radio" name="major" value="WD" />Web Design and Development
    <br/>
    <input type="radio" name="major" value="CIT" />CIT
    <br/>
    <input type="radio" name="major" value="CE" />Computer Engineering
    <br/> Comments
    <br/>
    <textarea name="comments" rows="5" columns="40"></textarea>
    <br/> Continents Visited:
    <br/>
    <select name="continents[]" size="7" multiple>
      <option value="North America">North America</option>
      <option value="South America">South America</option>
      <option value="Europe">Europe</option>
      <option value="Asia">Asia</option>
      <option value="Australia">Australia</option>
      <option value="Africa">Africa</option>
      <option value="Antarctica">Antarctica</option>
    </select>
    <br>
    <input type="submit">
  </form>
</body>

</html>