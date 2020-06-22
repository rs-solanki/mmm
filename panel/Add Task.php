<?php
include('Inc/conn.php');
include('function/function.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Css/page%20style.css"/>    
    </head>
<body>
    <div class="container">
    <div class="main">
    <div class="header"></div>  
    <a href="index.php">Home</a>  
    <div class="table" style="height: auto;ma">
    <h2 align="center">Add Task</h2>
    <div style="margin:20px;">
    <form method="POST"  enctype="multipart/form-data" >
    <b>Task Name</b> : <input type="text" name="task_name" style="width: 100%;margin: 6px 0px;">	
    <b>Task Title</b> : <input type="text" name="task_title" style="width: 100%;margin: 6px 0px;">	
    <b>Task Tag</b> : <input type="text" name="task_tag" style="width: 100%;margin: 6px 0px;">	
    <b>Task Code</b> : <input type="text" name="task_code" style="width: 100%;margin: 6px 0px;">	
    <b>Link</b> : <input type="text" name="link" style="width: 100%;margin: 6px 0px;">	
    <b>Link Name</b> : <input type="text" name="link_name" style="width: 100%;margin: 6px 0px;">	
    <h3>Task Headline</h3>
    <b>Step 1</b>	
    <input type="text" name="step_1" style="width: 100%; margin: 7px 0px;">	
    <b>Step 2</b>
    <input type="text" name="step_2" style="width: 100%;margin: 7px 0px;">
    <b>Step 3</b>
    <input type="text" name="step_3" style="width: 100%;margin: 7px 0px;">
    <b>Step 4</b>
    <input type="text" name="step_4" style="width: 100%;margin: 7px 0px;">
    <b>Step 5</b>
    <input type="text" name="step_5" style="width: 100%;margin: 7px 0px;">
    <b>Step 6</b>
    <input type="text" name="step_6" style="width: 100%;margin: 7px 0px;">
    <b>Step 7</b>
    <input type="text" name="step_7" style="width: 100%;margin: 7px 0px;">
    <b>Step 8</b>
    <input type="text" name="step_8" style="width: 100%;margin: 7px 0px;">

    <h3>Task Images</h3>
    <div style="border: 1px solid black;margin:0px 0px 10px 0px ;padding: 10px;">
     <b>Section 1</b>   
    <input type="file" name="img_1" style="margin: 7px 0px;">
    <input type="file" name="img_2" style="margin: 7px 0px;">
    </div>

    <div style="border: 1px solid black;margin: 10px 0px;padding: 10px;">
        <b>Section 2</b>
    <input type="file" name="img_3" style="margin: 7px 0px;">
    </div>

    <div style="border: 1px solid black;margin:10px 0px;padding: 10px;">
        <b>Section 3</b>
    <input type="file" name="img_4" style="margin: 7px 0px;">
    <input type="file" name="img_5" style="margin: 7px 0px;">
    </div>

    <div style="border: 1px solid black;margin: 10px 0px;padding: 10px;">
        <b>Section 4</b>
    <input type="file" name="img_6" style="margin: 7px 0px;">
    </div>

    <div style="border: 1px solid black;margin:10px 0px;padding: 10px;">
        <b>Section 5</b>
    <input type="file" name="img_7" style="margin: 7px 0px;">
    <input type="file" name="img_8" style="margin: 7px 0px;">
    </div>

    <div style="border: 1px solid black;margin:10px 0px;padding: 10px;">
        <b>Section 6</b>
    <input type="file" name="img_9" style="margin: 7px 0px;">
    </div>

    <div style="border: 1px solid black;margin:10px 0px;padding: 10px;">
        <b>Section 7</b>
    <input type="file" name="img_10" style="margin: 7px 0px;">
    </div>
<div style="border: 1px solid black;margin:10px 0px;padding: 10px;">
        <b>Section 8</b>
    <input type="file" name="img_11" style="margin: 7px 0px;">
    </div>

   <input type="submit" name="add" value="Add Task" style="display: block; margin: 20px auto; padding: 10px 40px; background: green; color: white;border: none; border-radius: 10px; cursor: pointer;">
    </form>	
    <?php addTask(); ?>
    </div>	
    </div>    
    <div class="footer"></div>    
    </div>
    
    </div>
    </body>
</html>