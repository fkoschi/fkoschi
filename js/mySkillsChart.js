$(document).ready(function(){

	var context = $('#mySkillsChart').get(0).getContext('2d');



	var data = [
    {
        value: 90,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Webentwicklung"
    },
    {
        value: 50,
        color: "#89DDE1",
        highlight: "#5AD3D1",
        label: "Datenbanken"
    },
    {
        value: 70,
        color: "#EBBF18",
        highlight: "#D4AD16",
        label: "Intrexx"
    },
    {
        value: 30,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "e-commerce"
    },
    {
        value: 50,
        color: "#4D5360",
        highlight: "#616774",
        label: "App Entwicklung"
    },
    {
    	value: 70, 
    	color: "#701E54",
    	highlight: "#330523",
    	label: "design"
    },
    {
    	value: 40,
    	color: "#2ECC3A",
    	highlight: "#29B534",
    	label: "Filmproduktion"
    },
    {
    	value: 75,
    	color: "#1F0569",
    	highlight: "#1A084F",
    	label: "3D-Modellierung"
    }

	];

	var options = [
	{
    	//Boolean - Show a backdrop to the scale label
    	scaleShowLabelBackdrop : true,

    	//String - The colour of the label backdrop
    	scaleBackdropColor : "rgba(255,255,255,0.75)",

    	// Boolean - Whether the scale should begin at zero
    	scaleBeginAtZero : true,

    	//Number - The backdrop padding above & below the label in pixels
    	scaleBackdropPaddingY : 2,

    	//Number - The backdrop padding to the side of the label in pixels
    	scaleBackdropPaddingX : 2,

    	//Boolean - Show line for each value in the scale
    	scaleShowLine : true,

    	//Boolean - Stroke a line around each segment in the chart
    	segmentShowStroke : true,

    	//String - The colour of the stroke on each segement.
    	segmentStrokeColor : "#fff",

    	//Number - The width of the stroke value in pixels
    	segmentStrokeWidth : 2,

    	//Number - Amount of animation steps
    	animationSteps : 100,

    	//String - Animation easing effect.
    	animationEasing : "easeOutBounce",

    	//Boolean - Whether to animate the rotation of the chart
    	animateRotate : true,

    	//Boolean - Whether to animate scaling the chart from the centre
    	animateScale : true,

    	//String - A legend template
    	legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"

	}
	];

	var myChart = new Chart(context).PolarArea(data,options);

})