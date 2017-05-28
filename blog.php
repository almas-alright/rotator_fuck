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
        <link rel="stylesheet" type="text/css" href="vendors/unslider-master/dist/css/unslider.css" />
        <link rel="stylesheet" type="text/css" href="vendors/unslider-master/dist/css/unslider-dots.css" />

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.js" ></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
        <script src="vendors/unslider-master/dist/js/unslider-min.js"></script>       

    </head>
    <body>

        <div class="container">
            <div class="row">
                <header>
                    <img class="img-responsive site-logo" src="window.site.logo" alt="logo" />
                </header>
                <div id="slider">
                    <ul>
                        <li class="slide" v-for="slide in slider">
                            <div class="slide-overlay text-center">
                                <span>{{ slide.date }}</span>
                                <h3>{{ slide.content }}</h3>
                                <span>{{ slide.by }}</span>
                            </div>
                            <div class="img1"><img class="img-responsive" v-bind:src="slide.img"></div>
                        </li>
                    </ul>
                </div>
            </div>                
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="row">
                        <blog>
                            <div class="col-md-12 text-center" v-for="post in posts">
                                <img class="img-responsive" v-bind:src="post.img"  alt="" />                                
                                <h5><a href="#">{{ post.title }}</a></h5>
                                <span>
                                    <strong>{{ post.author }}</strong> - {{ post.date }} 
                                    <span class="badge">{{ post.content }}</span>                                        
                                </span>
                                <p>{{ post.content }}</p>
                            </div>
                        </blog>
                    </div>
                </div>

                <div class="col-md-4">
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
        <script type="text/javascript" src="js/index.js"></script>
    </body>
</html>
