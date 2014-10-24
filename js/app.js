$(document).on("ready", function(){
	Morris.Donut({
	  element: 'q1',
	  data: [
	    {label: "Papá", value: 12},
	    {label: "Mamá", value: 30},
	    {label: "Otros", value: 20}
	  ]
	});
});