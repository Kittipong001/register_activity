<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
</head>
<body>
    
    <?php
    
        $this->load->view('frontend/includes/header');
        
        $this->load->view($main_content);
        
        
    
    ?>

</body>
