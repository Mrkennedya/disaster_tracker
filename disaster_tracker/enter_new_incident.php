<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>I Was Affected By - Insert New Incident</title>
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div id="container">

    <h1>I Was Affected By: Insert New Incident</h1>

    <p>What disaster have you been affected by? Fill out the form and submit below.</p>

    <div id="buttons">
    <a class="btn btn-dark btn-sm" id="center" href="incident_update.php" role="button">View All Incidents</a>
    </div>

    <div id="incidents">

      <form id="incident_form" method="post" autocomplete="off">

      <label for="name">Name</label>
        <input type="text" name="name" id="name" maxlength="40" required>

      <label for="city">City</label>
        <input type="text" name="city" id="city" maxlength="30" required>

      <label for="state">State</label>
        <input type="text" name="state" id="state" maxlength="30" required>

      <label for="disaster">Disaster</label>
          <input type="text" name="disaster" id="disaster" maxlength="30" required>

      <label for="description">Description (140 Characters or Less)</label>
          <input type="text" name="description" id="description" maxlength="140" required>

      <label for="link">Additional Links (Bit.ly preffered)</label>
          <input type="text" name="link" id="link" maxlength="140">

          <div id="buttons">
            <button type="submit" id="submit" class="btn btn-dark">Submit</button>
          </div>
      </form>

    </div>

    <div id="response">
      <p class="announcement">You have successfully posted! Thanks for your new listing!</p>
      <a class="btn btn-dark btn-sm" id="center" href="enter_new_incident.php" role="button">Create Another Incident</a>
      <a class="btn btn-dark btn-sm" id="center" href="incident_update.php" role="button">View All Incidents</a>
    </div>

    </div> <!-- close container -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
      <script src="js/enter.js"></script>
    </body>
</html>
