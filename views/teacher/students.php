<?php include("includes/header.html")?>
<?php include("includes/nav.html")?>
        <main>
            <article>
                <h2>Журнал - редактирование</h2>
                <table border="1">
                    <tr>
                        <td>10-А</td>
                        <td>10-Б</td>
                        <td>11-А</td>
                        <td>11-Б</td>
                    </tr>
                    <tr>
                        <td>
<?php
    $link = db_connect();
    $students = get_students($link, 0);
    foreach($students as $a): 
?>
                            <p><a href=<?="index.php?teacher=add&id=".$a['id']?>><?=$a['name']?></a></p>
<?php endforeach ?>
                        </td>
                        <td>
<?php
    $link = db_connect();
    $students = get_students($link, 1);
    foreach($students as $a): 
?>
                            <p><a href=<?="index.php?teacher=add&id=".$a['id']?>><?=$a['name']?></a></p>
<?php endforeach ?>
                        </td>
                        <td>
<?php
    $link = db_connect();
    $students = get_students($link, 2);
    foreach($students as $a): 
?>
                            <p><a href=<?="index.php?teacher=add&id=".$a['id']?>><?=$a['name']?></a></p>
<?php endforeach ?>
                        </td>
                        <td>
<?php
    $link = db_connect();
    $students = get_students($link, 3);
    foreach($students as $a): 
?>
                            <p><a href=<?="index.php?teacher=add&id=".$a['id']?>><?=$a['name']?></a></p>
<?php endforeach ?>
                        </td>
                    </tr>
                </table> 
            </article>
        </main>
<?php include("includes/footer.html")?>