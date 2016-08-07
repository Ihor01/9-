<?php include("includes/header.html")?>
<?php include("includes/nav.html")?>
        <main>
            <article>
                <h2>Оценки ученика</h2>
                <a class="btn" href="index.php?journal=logout">Выход</a>
                <a class="btn" href=<?="\"index.php?journal=average&id=".$_GET['id']."\""?>>Подсчитать средний бал</a>
<?php
    $link = db_connect();
    $marks = get_marks($link, $_GET['id']); 
    foreach($marks as $a): 
?>
                <div class="article">
                    <p>
                        <i><?=$a['date']?></i>:  
                        <b><?=$a['mark']?></b>
                        - <?=$a['why']?>
                    
                    </p>
                </div>
<?php endforeach ?>
            </article>
        </main>
<?php include("includes/footer.html")?>