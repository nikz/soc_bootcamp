<?php

  function connect_to_database() {
    
    if (!($m = mysql_connect("localhost", "root", ""))) die("Couldn't connect to mysql, oh noes!");
    if (!mysql_select_db("database_name", $m)) die("Couldn't select that db, oh noes!");
  
    return true;
    
  }
  
  function create_song($attributes) {
    
    // COMPLETE ME
    
    // THIS WILL HELP YOU: http://nz.php.net/manual/en/function.mysql-query.php
    // QUERY HINT: insert into `users` set name = '$something';    
    
    return false;
    
  }
  
  connect_to_database();
  
  if ($_POST["add"]) {
    
    if (add_song($_POST)) {
      
      header("Location: songs.php");
      exit(); 
      
    } else {
      
      // you'll need to display some error messages
      // remember you can embed php into html using the start/stop tags
      
    }
    
    
  }
  
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Non-Sucky Lyrics Site &mdash; Make a New Song</title>

</head>

<body>

  <h1>Non Sucky Lyrics Site</h1>
  
  <p>The time is: <?php echo(date("%H:%i:%s")) ?></p>
  
  <form action="new_song.php">
    
    <p>
      <label>Artist</label><br />
      <input type="text" name="artist" size="30" />
    </p>

    <p>
      <label>Album</label><br />
      <input type="text" name="album" size="30" />
    </p>

    <p>
      <label>Title</label><br />
      <input type="text" name="title" size="30" />
    </p>
    
    <p>
      <label>Lyrics</label><br />
      <textarea name="lyrics" rows="50" cols="30" />
    </p>
    
    <p>
      <input type="submit" name="add" value="Add Song" />
    </p>
    
  
  </form>
  

</body>
</html>



