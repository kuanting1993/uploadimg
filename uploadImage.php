<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v3.8.5">
<title></title>
<link href="../../bootstrap-4.2.1/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../bootstrap-4.2.1/js/popper.min.js" ></script>
<script type="text/javascript" src="../bootstrap-4.2.1/js/bootstrap.min.js" ></script>
<script>

$(document).ready(function(){
	ImageSize();
});

</script>
</head>
<body>

<section class="jumbotron ">
    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="customFile" multiple />
					<label class="custom-file-label" for="customFile">請選擇照片</label>
					<input hidden id="Ucnt" name="Ucnt" value="0"/><div id="filecnt"></div>
				</div>
			</div>
			<div class="col-md-3">
				<button type="button" class="btn btn-primary" onclick="saveImage()">上傳</button>
			</div>
		</div>
	</div>
</section>
</body>
</html>