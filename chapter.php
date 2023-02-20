<?php
    function get_chapter_file_path ( $course, $chapter )
    {
        return "courses/" . $course . "/chapter_" . $chapter . ".php";
    }
?>

<html>
    
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.7.0/build/styles/agate.min.css">
        <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.7.0/build/highlight.min.js"></script>
    </head>

    <body>
        <!-- Initialize highlightjs -->
        <script>hljs.highlightAll();</script>

        <link rel="stylesheet" href="style/common.css">
        <?php include get_chapter_file_path ( $_GET["course"], $_GET["chapter"] ); ?>        
        
        <!-- Footer -->
        <link rel="stylesheet" href="../style/footer.css">
        
        <div id="navbar-container">
            <div id="navbar">
                <!-- Previous button -->
                <?php if ( file_exists ( get_chapter_file_path ( $_GET["course"], $_GET["chapter"] - 1 ) ) ){?>
                    <a href= "<?="/chapter.php?course=" . $_GET["course"] . "&chapter=" . $_GET["chapter"] - 1?>" class="btn btn-success">
                        <i class="bi bi-chevron-left"></i> Prev
                    </a>
                <?php } ?>
                
                <!-- Next button -->
                <?php if ( file_exists ( get_chapter_file_path ( $_GET["course"], $_GET["chapter"] + 1 ) ) ){?>
                    <a href= "<?="/chapter.php?course=" . $_GET["course"] . "&chapter=" . $_GET["chapter"] + 1?>" class="btn btn-success">
                        Next <i class="bi bi-chevron-right"></i>
                    </a>
                    
                <?php } ?>
            </div>
        </div>
    </body>

</html>