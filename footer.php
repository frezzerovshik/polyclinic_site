<footer>
    <table>
    <tr>
        <td>
        <?php 
            include_once "check.php"; 
        ?>
        <table> 
        <tbody> 
        <tr> 
        <td rowspan="2">Посещаемость за <?=date("d.m");?></td> 
        <td>Всего:<?= $cnt_all?></td> 
        <td>Сегодня:<?= $cnt_today?></td> 
        </tr> 
        <tr> 
        <td colspan="2">Уникальных посетителей:<?= $cnt_IP?></td> 
        </tr> 
        </tbody> 
        </table>
        </td>
        <td>
        <form method="post" action="sendmail.php"> 
<fieldset> 
<legend>Сообщите о проблеме</legend> 
<label> 
Введите ваше имя: 
<input required placeholder="Вася" type="text" name="name" minlength="3" maxlength="20" size="20"></br></br> 
</label> 
<label> 
Введите email: 
<input required placeholder="email@mail.ru" type="email" name="email" minlength="3" maxlength="50" size="20"></br></br> 
</label> 

<label> 
Сообщение: 
<textarea required name="message" 
rows="5" cols="20" wrap="hard"> 
</textarea> 
</label></br> 
<div> 
<input type="submit" value="Отправить"> 
<input type="reset" value="Очистить"> 
</div> 
</fieldset> 
</form>
        </td>
    </tr>
    </table>
</footer>