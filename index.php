<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogging App</title>
  </head>
  <body>
    <div class="user_post">
      <form action="includes/process.php" method="POST">
        <input
          type="text"
          name="post_title"
          id="post_title"

          placeholder="Post Title"
        /><br /><br />
        <textarea
          name="post_content"
          id="post_content"
          cols="35"
          rows="10"
        ></textarea>

        <br /><br />
        <input type="text" name="post_tag" placeholder="tag" id="post_tag" /><input type="button" value="Add Tag" />
        </div>
        <div id="post_tag_list">
          tags
          <ul></ul>

        <br /><br />
        <input type="submit" name="submit" value="Submit Form" id="submit" />
      </form>
      <!--end class user_post-->
    </div>
    <!--posted content here-->
    <div class="main_content" id="main_content">
      <div name="submitted_date"></div>
      <div name="submitted_title"></div>
      <div name="submitted_content"></div>
      <div name="submitted_tag_list"></div>
    </div>
  </body>
</html>
