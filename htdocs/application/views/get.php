<div class="span10">
    <article>
        <h1><?=$topic->title?></h1>
        <div>
            <!-- helper kdate() -->
            <div><?=kdate($topic->created)?></div>
            <!-- helper auto_link() -->
            <?=auto_link($topic->description)?> 
        </div>
    </article>
    <div>
        <a href="/index.php/topic/add" class="btn">추가</a>
    </div>
</div>