<?php 
session_start();
require_once'header.php';
?>
		<main class="content">
				<form method="post" action="" enctype="multipart/form-data">
			<input type="text" name="posttitle2" class="postelement mytitle" placeholder="Название вашей публикации"/> 
			<?php 
				$sql = "Select * from category";
				$result = mysql_query($sql);
				echo '<select  name="catlist" class="select">';
				echo "<option>Выбирите категорию</option>";
				while($row3 = mysql_fetch_array($result)){
					echo '<option value="'.$row3["catname_ru"].'" class="opt">"'.$row3["catname_ru"].'"</option>';
				}
				echo "</select>";
			?>  
			<textarea name="editor1" id="editor1" rows="10" cols="80"> 
            </textarea>
			 <script> 
                CKEDITOR.replace( 'editor1' );
            </script>
			<textarea class="smalltext" name="smalltext2" placeholder="Короткое описание Вашей публикации "></textarea>
			<input type="text" class="postelement mytitle" name="keywords2" placeholder="Введите ключевые слова через запитую..."/>
			<input type="file" name="uploadfile" class="file_upload"/> 
			<input type="submit" name="sendpost" class="authbutton"/>
		</form>
		</main>
<?php
require_once'footer.php';
?>