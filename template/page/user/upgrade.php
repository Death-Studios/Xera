<!DOCTYPE html>
<html>
<head>
	<title>Upgrade Hosting - <?= $this->base->get_hostname() ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/png" href="<?= base_url()?>assets/img/fav.png">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/tabler.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
</head>
<body class="border-top-wide border-primary d-flex flex-column">
	<div class="page page-center">
		<div class="container text-center">
			<div class="empty">
	        <div class="empty-header"><i class="fa fa-sync"></i></div>
		        <p class="empty-title">Redirecting</p>
		        <button onclick="location.href = 'https://ifastnet.com/portal/afhp?aff=' + <?= get_aff_id() ?>" hidden="true" id="button"></button>
	        </div>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById('button').click();
	</script>
</body>
</html>