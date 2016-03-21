<!DOCTYPE html>
<html>
    <head>
        <title>Challenge POO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
        
        include 'class/bdd.class.php';
        include 'class/post.class.php';
        
        $post1 = new post('tete','tyty');
        $bdd = new bdd();
        
        
        ?>
    </head>
    <body>

        <div>
            
            Post 1 : <?php echo $bdd->insertPost($post1); ?>  <br>
            Le titre du premier post est 
                <?php 
                $postbdd=$bdd->getPostById(1);
                echo $postbdd->getTitlePost()."<br> Le contenu du premier post est ".$postbdd->getContentPost();
                ?>
            
            
        </div>
        
        
    </body>
</html>
