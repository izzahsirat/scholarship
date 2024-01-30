<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.3/chart.min.js" integrity="sha512-fMPPLjF/Xr7Ga0679WgtqoSyfUoQgdt8IIxJymStR5zV3Fyb6B3u/8DcaZ6R6sXexk5Z64bCgo2TYyn760EdcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div style=" width: 900px; height: 400px;">
	
	<canvas id="myChart"></canvas>

</div>

<script type="text/javascript">

	let labels = ['Australia','Canada','Hong Kong','Malaysia','New Zealand','Republic of Ireland','Singapore','United Kingdom','USA'];
	let itemData = [47, 2, 1, 12, 26, 50, 11, 352, 2];
	
	const data = {
		labels: labels,
		datasets: [{
			data: itemData,
			backgroundColor: 'rgb(66, 221, 245)'
		}]

	};

	const config = {
		type: 'bar',
		data: data
	};

	const chart = new Chart{
		document.getElementById('myChart'),
		config
	};

</script>