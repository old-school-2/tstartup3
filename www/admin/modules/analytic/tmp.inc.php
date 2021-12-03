<div class="container-fluid">
	<div class="row">

	<div class="workload-button mb-3">
        <button type="button" class="btn btn-primary btn-rounded">
          Все категории
        </button>
        <?foreach($xc['categories'] as $ct):?>
        <a href="/admin/analytic?s=1&cat=<?=$ct['id']?>" class="btn btn-primary light btn-rounded">
          <?=$ct['name']?>
        </a>
		<?endforeach;?>


	</div>

<div class="col-xl-2 col-sm-4 mb-2">
<div class="card" style="background: #009a96;">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap" style="color: #FFF;">Всего стартапов</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0" style="color: #FFF;">75</h2>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-5 col-sm-4 mb-2">
<div class="card">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap">На стадии<br/>инвестирования</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0">25</h2>
				<span class="d-block ms-4">
					<svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
					</svg>
					<small class="d-block fs-16 font-w400 text-success">+25,5%</small>
				</span>
			</div>
		</div>
		<div class="bg-gradient1 rounded text-center p-3">
			<div class="d-inline-block position-relative donut-chart-sale mb-3">
				<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;var(--primary)&quot;, &quot;rgba(238, 238, 237, 1)&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="var(--primary)"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
				<small class="text-primary">32%</small>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-5 col-sm-4 mb-2">
<div class="card">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap">Имеющих<br/>пилотные проекты</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0">43</h2>
			</div>
		</div>
		<div class="bg-gradient1 rounded text-center p-3">
			<div class="d-inline-block position-relative donut-chart-sale mb-3">
				<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;#FC2E53&quot;, &quot;#FC2E53&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="#FFCF6D"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
				<small class="text-warning">64%</small>
			</div>
		</div>
	</div>
</div>
</div>




<div class="col-xl-3 col-sm-3 mb-2">
<div class="card" style="background: #009a96;">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap" style="color: #FFF;">Пилотных проектов</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0" style="color: #FFF;">120</h2>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-3 col-sm-3 mb-2">
<div class="card">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap">В работе</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0">56</h2>
				<span class="d-block ms-4">
					<svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
					</svg>
					<small class="d-block fs-16 font-w400 text-success">+15,5%</small>
				</span>
			</div>
		</div>
		<div class="bg-gradient1 rounded text-center p-3">
			<div class="d-inline-block position-relative donut-chart-sale mb-3">
				<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;var(--primary)&quot;, &quot;rgba(238, 238, 237, 1)&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="var(--primary)"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
				<small class="text-primary">25%</small>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-3 col-sm-3 mb-2">
<div class="card">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap">Приостановлено</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0">18</h2>
			</div>
		</div>
		<div class="bg-gradient1 rounded text-center p-3">
			<div class="d-inline-block position-relative donut-chart-sale mb-3">
				<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;#FC2E53&quot;, &quot;#FC2E53&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="#FFCF6D"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
				<small class="text-warning">15%</small>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-3 col-sm-3 mb-2">
<div class="card">
	<div class="card-body d-flex px-4 pb-0 justify-content-between">
		<div>
			<h4 class="fs-18 font-w600 mb-4 text-nowrap">Отменено</h4>
			<div class="d-flex align-items-center">
				<h2 class="fs-32 font-w700 mb-0">7</h2>
			</div>
		</div>
		<div class="bg-gradient1 rounded text-center p-3">
			<div class="d-inline-block position-relative donut-chart-sale mb-3">
				<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;#FC2E53&quot;, &quot;#FC2E53&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="#FC2E53"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
				<small class="text-danger">5%</small>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-6 col-sm-6">
<div class="card">
	<div class="card-body d-flex px-4  justify-content-between" style="position: relative;">
		<div>
			<div class="">
				<h2 class="fs-32 font-w700">+86 915 650 руб.</h2>
				<span class="fs-18 font-w500 d-block">Инвестиций в стартапы</span>
				<!-- <span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span> -->
			</div>
		</div>
		<div id="NewCustomers3" style="min-height: 50px;"><div id="apexcharts5wkws8sp" class="apexcharts-canvas apexcharts5wkws8sp apexcharts-theme-light" style="width: 100px; height: 50px;"><svg id="SvgjsSvg1494" width="100" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1496" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1495"><clipPath id="gridRectMask5wkws8sp"><rect id="SvgjsRect1499" width="110" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask5wkws8sp"><rect id="SvgjsRect1500" width="104" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1506" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1507" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1515" class="apexcharts-grid"><g id="SvgjsG1516" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1518" x1="0" y1="0" x2="100" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1519" x1="0" y1="10" x2="100" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1520" x1="0" y1="20" x2="100" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1521" x1="0" y1="30" x2="100" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1522" x1="0" y1="40" x2="100" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1523" x1="0" y1="50" x2="100" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1517" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1525" x1="0" y1="50" x2="100" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1524" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1501" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1502" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1505" d="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask5wkws8sp)" pathTo="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" pathFrom="M -1 60L -1 60L 20 60L 40 60L 60 60L 80 60L 100 60"></path><g id="SvgjsG1503" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1504" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1526" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1527" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1528" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1529" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1530" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1514" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1497" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
	<div class="resize-triggers"><div class="expand-trigger"><div style="width: 239px; height: 139px;"></div></div><div class="contract-trigger"></div></div></div>
</div>
</div>
<div class="col-xl-6 col-sm-6">
<div class="card">
	<div class="card-body d-flex px-4  justify-content-between" style="position: relative;">
		<div>
			<div class="">
				<h2 class="fs-32 font-w700">157</h2>
				<span class="fs-18 font-w500 d-block">Всего инвесторов</span>
				<!-- <span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span> -->
			</div>
		</div>
		<div id="NewCustomers2" style="min-height: 50px;"><div id="apexchartsswy01sed" class="apexcharts-canvas apexchartsswy01sed apexcharts-theme-light" style="width: 80px; height: 50px;"><svg id="SvgjsSvg1531" width="80" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1533" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1532"><clipPath id="gridRectMaskswy01sed"><rect id="SvgjsRect1536" width="90" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskswy01sed"><rect id="SvgjsRect1537" width="84" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1543" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1544" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1552" class="apexcharts-grid"><g id="SvgjsG1553" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1555" x1="0" y1="0" x2="80" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1556" x1="0" y1="10" x2="80" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1557" x1="0" y1="20" x2="80" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1558" x1="0" y1="30" x2="80" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1559" x1="0" y1="40" x2="80" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1560" x1="0" y1="50" x2="80" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1554" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1562" x1="0" y1="50" x2="80" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1561" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1538" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1539" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1542" d="M 0 47.5C 5.6 47.5 10.4 22.5 16 22.5C 21.6 22.5 26.4 35 32 35C 37.6 35 42.4 10 48 10C 53.6 10 58.4 47.5 64 47.5C 69.6 47.5 74.4 10 80 10" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskswy01sed)" pathTo="M 0 47.5C 5.6 47.5 10.4 22.5 16 22.5C 21.6 22.5 26.4 35 32 35C 37.6 35 42.4 10 48 10C 53.6 10 58.4 47.5 64 47.5C 69.6 47.5 74.4 10 80 10" pathFrom="M -1 60L -1 60L 16 60L 32 60L 48 60L 64 60L 80 60"></path><g id="SvgjsG1540" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1541" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1563" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1564" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1565" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1566" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1567" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1551" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1534" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
	<div class="resize-triggers"><div class="expand-trigger"><div style="width: 239px; height: 143px;"></div></div><div class="contract-trigger"></div></div></div>
</div>

</div>
</div>

</div>