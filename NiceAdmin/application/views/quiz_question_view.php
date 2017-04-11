<div align="center" class="container">
<form method="POST" action="<?php echo site_url('Quiz_questions_controller/file_upload');?>" enctype='multipart/form-data'>
<table border="1">
<tr>
<td>Question</td>
<td><input type="file" name="question" required id="question" accept=".png,.jpg,.jpeg"></td>
</tr>
<!--
<tr>
<td>Answer</td>
<td><input type="file" name="ans01" required id="ans01" accept=".png,.jpg,.jpeg"></td>
</tr>
-->
<tr>
<td colspan="2" align="center"><input style="width: 50%;" type="submit" value="Submit"></td>
</tr>
</table>
</form>
</div>