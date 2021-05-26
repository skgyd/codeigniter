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
    <?php
    if($this->session->flashdata('message')){
    ?>
        <script>
            alert('<?=$this->session->flashdata('message')?>');
        </script>
        <?=$this->session->sess_destroy()?>
    <?php
    }
    ?>
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
                        <div class="nav pull-right">
                            <?php
                            if($this->session->userdata('is_login')){
                            ?>
                                <li><a href="/index.php/auth/logout">로그아웃</a></li>
                            <?php
                            }else{
                            ?>
                                <li><a href="/index.php/auth/login">로그인</a></li>
                                <li><a href="/index.php/auth/join">회원가입</a></li>
                            <?php
                            } 
                            ?>
                        </div>
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
            
        