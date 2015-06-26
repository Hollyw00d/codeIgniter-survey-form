<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeIgniter Survey Form - Coding Dojo Assignment</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"/>
</head>
<body>

<div id="wrapper">

    <h1>CodeIgniter Survey Form - Coding Dojo Assignment</h1>

    <form action="result" method="post">
        <p>Your Name: <input type="text" name="name"/></p>

        <p>Dojo Location: <select name="dojo_location">
            <option name="dojo_location" value="choose_one">Choose one...</option>
            <option name="dojo_location" value="Bellevue, WA">Bellevue, WA</option>
            <option name="dojo_location" value="San Jose, CA">San Jose, CA</option>
            <option name="dojo_location" value="Burbank, CA">Burbank, CA</option>
        </select></p>

        <p>Favorite Language: <select name="fav_language">
                <option name="fav_language" value="choose_one">Choose one...</option>
                <option name="fav_language" value="SQL">SQL</option>
                <option name="fav_language" value="Java">Java</option>
                <option name="fav_language" value="JavaScript">JavaScript</option>
                <option name="fav_language" value="C#">C#</option>
                <option name="fav_language" value="Python">Python</option>
                <option name="fav_language" value="C++">C++</option>
                <option name="fav_language" value="Ruby on Rails">Ruby on Rails</option>
                <option name="fav_language" value="iOS/Swift">iOS/Swift</option>
        </select></p>

        <p>Comments (optional):<br /><textarea name="comments"></textarea></p>
        
        <p><input type="submit" value="Submit"/></p>






    </form>

</div>


</body>
</html>