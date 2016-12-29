<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php' ?>
</head>

<body class="site com_content view-featured no-layout no-task itemid-101 page-home">
<div id="main-wrap" class="collapsed">

	<?php include 'header.php' ?>
	<div class="body">

		<div class="banner-above fleetweek-banner">
			<div class="content-block">
				<div class="fleetweek-banner__badge">
					<img src="images/temp/fleetweek-badge.png" alt="Shindaiwa&reg; Fleet Week">
				</div>

				<div class="fleetweek-banner__text">
					<div class="fleetweek-banner__suptitle text-uppercase">This Spring Get Pre-Season</div>
					<div class="fleetweek-banner__title text-uppercase">Fleet Deals <span>For Everyone</span></div>
					<div class="fleetweek-banner__subtitle text-uppercase">(Excludes Accessories)</div>
				</div>

				<div class="fleetweek-banner__arrow text-uppercase">20% Off <em>All Shindaiwa Units*</em></div>
			</div>
		</div>

		<div id="content-container">
			<main id="content">

			<div class="container-fluid fleetweek-content">
				<div class="container">
					<div class="table-wrap">
					<table class="hide-small">
					<thead>
						<tr>
							<th colspan="3">Mark Your Calendar!</th>
						</tr>
						<tr>
							<th>Dates</th>
							<th>Dealer Name</th>
							<th>Location</th>
						</tr>
					</thead>
					<tbody class="fleetweek-rows">
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here</td>
							<td>Orlando, FL</td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here</td>
							<td>Orlando, FL</td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here</td>
							<td>Orlando, FL</td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here</td>
							<td>Orlando, FL</td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here</td>
							<td>Orlando, FL</td>
						</tr>
					</tbody>
					</table>

					<table class="hide-desktop">
					<thead>
						<tr>
							<th colspan="2">Mark Your Calendar!</th>
						</tr>
						<tr>
							<th>Dates</th>
							<th>Dealer Name</th>
						</tr>
					</thead>
					<tbody class="fleetweek-rows">
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here <span>Orlando, FL</span></td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here <span>Orlando, FL</span></td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here <span>Orlando, FL</span></td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here <span>Orlando, FL</span></td>
						</tr>
						<tr>
							<td>April 9</td>
							<td>Enter Dealer Name Here <span>Orlando, FL</span></td>
						</tr>
					</tbody>
					</table>
					</div>

					<img class="fleetweek-equipment hide-small" src="/images/temp/fleetweek-equipment.png" alt="7-Day Money-Back Guarantee | Shindaiwa&reg;">
					<img class="fleetweek-equipment hide-desktop" src="/images/temp/fleetweek-equipment-mobile.png" alt="7-Day Money-Back Guarantee | Shindaiwa&reg;">
					<p class="disclaimer">Shindaiwa Fleet Week discounts apply only during the dealer promotion window dates. See your participating dealer for details. *Fleet Week discount does not apply to Shindaiwa accessories. Not valid with any other offers.</p>
				</div>
			</div>

			</main>
		</div>

	</div>
	<?php include 'footer.php' ?>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
		var tbody = $('.fleetweek-rows');
		tbody.each(function(){
			var rows = $(this).children('tr');
			if (rows.length % 2 == 0) {
				$(this).addClass('even');
			} else {
				$(this).addClass('odd');
			}
		})
	})
</script>
</body>
</html>