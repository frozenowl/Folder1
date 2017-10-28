<?php 
//定义了两个表单，分别代表出的数字和猜的数字。
return "<form method='post' action='index.php?page=quiz'>
<p>你出的数字是?</p>
<select name='answer1'>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
</select>
<p>你猜是数字是?</p>
<select name='answer2'>
<option value='0'>0</option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
</select>
<input type='submit' name='quiz-submitted' value='划拳吧！'/>
</form>";
?>
