var dataJson = [];
var base_url = "http://localhost/c3men/";
$(document).ready(function(){
	setInterval(function () {
		$.getJSON(base_url + "api/position", function(result){
			$.each(result, function(i, field){
				var xyz = [];
				xyz.push(parseInt(field.position_x));
				xyz.push(parseInt(field.position_z));
				xyz.push(parseInt(field.position_y));
				dataJson.push(xyz);
			});

		Highcharts.setOptions({
			colors: ['#2f7ed8', '#0d233a', '#8bbc21', '#910000', '#1aadce',
			'#492970', '#f28f43', '#77a1e5', '#c42525', '#a6c96a']
		});
		var chart = new Highcharts.Chart({
			chart: {
				renderTo: 'threed',
				margin: 100,
				type: 'scatter3d',
				animation: false,
				options3d: {
					enabled: true,
					alpha: 10,
					beta: 30,
					depth: 250,
					viewDistance: 5,
					fitToPlot: false,
					frame: {
						bottom: {
							size: 1,
							color: 'rgba(0,0,0,0.02)'
						},
						back: {
							size: 1,
							color: 'rgba(0,0,0,0.04)'
						},
						side: {
							size: 1,
							color: 'rgba(0,0,0,0.06)'
						}
					}
				}
			},
			title: {
				text: ''
			},
			subtitle: {
				text: ''
			},
			plotOptions: {
				series: {
					animation: false
				},
				scatter: {
					width: 10,
					height: 10,
					depth: 10
				}
			},
			yAxis: {
				min: -250,
				max: 250,
				title: {
				text: 'Z Axis'
				},
			},
			xAxis: {
				min: -250,
				max: 250,
				gridLineWidth: 1,
				title: {
				text: 'X Axis'
				},
			},
			zAxis: {
				min: -250,
				max: 250,
				showFirstLabel: true,
				title: {
				text: 'Y Axis'
				},
			},
			legend: {
				enabled: false
			},
			series: [{
				name: 'Position',
				lineWidth: 2,
				marker: {
					enabled: true
				},
				data: dataJson
			}]
		});
		// (function (H) {
		// 	function dragStart(eStart) {
		// 		eStart = chart.pointer.normalize(eStart);

		// 		var posX = eStart.chartX,
		// 			posY = eStart.chartY,
		// 			alpha = chart.options.chart.options3d.alpha,
		// 			beta = chart.options.chart.options3d.beta,
		// 			sensitivity = 5,
		// 			handlers = [];

		// 		function drag(e) {
		// 			e = chart.pointer.normalize(e);

		// 			chart.update({
		// 				chart: {
		// 					options3d: {
		// 						alpha: alpha + (e.chartY - posY) / sensitivity,
		// 						beta: beta + (posX - e.chartX) / sensitivity
		// 					}
		// 				}
		// 			}, undefined, undefined, false);
		// 		}

		// 		function unbindAll() {
		// 			handlers.forEach(function (unbind) {
		// 				if (unbind) {
		// 					unbind();
		// 				}
		// 			});
		// 			handlers.length = 0;
		// 		}

		// 		handlers.push(H.addEvent(document, 'mousemove', drag, { passive: true }));
		// 		handlers.push(H.addEvent(document, 'touchmove', drag, { passive: true }));


		// 		handlers.push(H.addEvent(document, 'mouseup', unbindAll, { passive: true }));
		// 		handlers.push(H.addEvent(document, 'touchend', unbindAll, { passive: true }));
		// 	}
		// 	H.addEvent(chart.container, 'mousedown', dragStart, { passive: true });
		// 	H.addEvent(chart.container, 'touchstart', dragStart, { passive: true });
		// 	}(Highcharts));
		});
	}, 1000);
});
