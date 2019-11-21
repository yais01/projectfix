<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
	<div class="kotak_create">
		<p class="tulisan_create">Membuat Thread</p>
		<form>
            <label>Title</label>
			<input type="text" name="title" class="form_create" placeholder="Title">

			<label>Content</label>
            <input type="text" name="content" class="form_desc" placeholder="Content">

            <label>Kategori</label>
                <select class="form_create">
                    <option>Tari Tradisional</option>
		            <option>Tari Modern</option>
                    <option>Tari Kreasi</option>
                </select>

            <label>Upload</label>
                <br /><input type="file" class="form_create" name="image" >
                <p></p>

			<input type="submit" class="tombol_create" value="BUAT">

			<br/>
			<br/>
			
		</form>
		
	</div>


</body>
</html>