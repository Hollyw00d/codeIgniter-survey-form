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

    <p class="success">Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter');; ?> times!</p>

    <h2>Submitted Information</h2>

    <?php
    if($this->session->userdata('name'))
    {
        echo '<p><strong>Name:</strong> ' . $this->session->userdata('name') . '</p>';
    }

    if($this->session->userdata('dojo_location'))
    {
        echo '<p><strong>Dojo Location:</strong> ' . $this->session->userdata('dojo_location') . '</p>';
    }

    if($this->session->userdata('fav_language'))
    {
        echo '<p><strong>Favorite Language:</strong> ' . $this->session->userdata('fav_language') . '</p>';
    }

    if($this->session->userdata('comments'))
    {
        echo '<p><strong>Comments:</strong> ' . $this->session->userdata('comments') . '</p>';
    }

    ?>
    
    <p><a href="surveys/destroysession">Go Back</a></p>



</div>

</body>
</html>