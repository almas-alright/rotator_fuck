<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="vendors/unslider-master/dist/css/unslider.css" />
        <link rel="stylesheet" type="text/css" href="vendors/unslider-master/dist/css/unslider-dots.css" />

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js" ></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
        <script src="vendors/unslider-master/dist/js/unslider-min.js"></script>       

    </head>
    <body>
        <?php include_once('template-parts/nav.php'); ?>
        <div class="container">
            <div class="row">
                <header>
                    <img class="img-responsive site-logo" src="window.site.logo" alt="logo" />
                </header>
                <?php include_once('template-parts/slider.php'); ?>
            </div>                
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="row">
                        <?php
                        $posts = simplexml_load_file("data/post.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
                        foreach ($posts->children() as $post) {
                            $fimage = "";
                            $author = "";
                            $date = "";
                            if ($post->fimage != "null"): $fimage = '<img class="img-responsive" src="' . $post->fimage . '"  alt="" />';
                            endif;
                            if ($post->author != "null"): $author = $post->author;
                            endif;
                            if ($post->pdate != "null"): $dtae = $post->pdate;
                            endif;

                            echo '<div class="col-md-12 text-center" v-for="post in posts">                                    
                                    <h5><a href="#">' . $post->title . '</a></h5>
                                        ' . $fimage . '
                                    <span>
                                        <strong>' . $author . '</strong> - ' . $pdate . '                                                                      
                                    </span>
                                    <p>' . $post->content . '</p>
                                </div>';
                        }
                        ?>



                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar-ad"></div>
                    <ul class="list-group table-of-contents" id="sidebar">
                        <li class="list-group-item" v-for="widget in widgets">
                            <span class="badge">{{ widget.comcount }}</span>
                            <h5><a href="#">{{ widget.title }}</a></h5>
                            <span><strong>{{ widget.author }}</strong> - {{ widget.date }}</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><img class="img-responsive site-logo" src="window.site.logo" alt="logo" /></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>                    
            </div>
        </footer>
        <?php include_once('template-parts/footernav.php'); ?>
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
