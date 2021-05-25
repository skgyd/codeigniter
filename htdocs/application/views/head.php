<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8"/>
        <!-- static/css연동 -->
        <link href="/static/css/style.css?refresh" rel="stylesheet" type="text/css" media="all"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <style>
            body{
                padding-top: 20px; 
            }
        </style> -->
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/index.php/topic" ><h2>Topic</h2></a>
                    <div calss="nav-collapse collapse">
                    </div>
                </div>
            </div>
        </div>
        <?php
            if($this->config->item('is_dev')){
            ?>
                <div class="well span12" style="margin:10px; color:red">
                    <b>개발환경 수정 중입니다.</b><br>
                </div>
                <!-- <?php
                var_dump($this->config->item('is_dev'));
                ?> -->
            <?php
            }
        ?>
            
        