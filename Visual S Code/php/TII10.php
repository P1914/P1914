<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1></h1>
    <form method="get" action="TII11.php">
        <p>My Name : <input type="text" name="txtname"/></p>
        <p>Sex : <br><input type="radio" id="male" name="sex" value="Male">
        <label for="male">Male</label></p>
        <p> <input type="radio" id="femal" name="sex" value="Femal">
        <label for="femal">Femal</label></p>
        <p>Date Of Birth<input type="date" name="date"></p>
        <label for="pro">Choose a Provin:</label>
        <select id="pro" name="pro">
          <option value="pp">Phnome Penh</option>
          <option value="TK">Takeo</option>
          <option value="kd">Kondal</option>
          <option value="sr">Seam Reab</option>
        </select><br>
        <label for="skill">Choose a Skill:</label>
        <select id="skill" name="skill">
          <option value="Hard Skill">Hard Skill</option>
          <option value="Soft Skill">Soft Skill</option>
        </select><br>
        <p>Choose your Favorite :</p>
        <input type="radio" id="sm" name="fav" value="Swimming">
         <label for="sm">Swimming</label><br>
         <input type="radio" id="run" name="fav" value="Running">
         <label for="run">Running</label><br>
         <input type="radio" id="race" name="fav" value="Racing Car">
         <label for="race">Racing Car</label>
        <p><input type="submit" value="send"/></p>
    </form>
</body>
</html>