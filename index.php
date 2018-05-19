<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Telegram bots</title>
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
</head>
<body>

<div class="content">
	<section class="content-header">
  	<i class="fa fa-home"></i> Home / <i class="fa fa-dashboard"></i> Dashboard / <b></b>
	</section>

	<div class="col-md-4">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
                  </div>

            <div class="box-body">
        	<form method="post" action="sendMessage.php">
                  <div class="form-group row">
                            <label class="col-md-4 col-form-label">Telegram ID</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="telegram_id" placeholder="Telegram ID">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-md-4 col-form-label">Messages</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="message_text" placeholder="Custom Text Message">
                            </div>
                            </div>
                  <button type="submit" class="btn btn-primary pull-right">Send <i class="fa fa-send"></i></button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
