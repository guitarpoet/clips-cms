var max = 50;
var min = 20;
var mutant_max = 20;
var mutant_min = 10;
var box_width = 100;
var box_min_width = 30;
var box_max_width = 300;
var box_height = 100;
var box_min_height = 30;
var box_max_height = 300;
var vgap = 10;
var hgap = 10;

Array.prototype.remove = function (item) {
	var i = this.indexOf(item);
	return this.splice(i, 1);
}

function random(min, max) {
	if(min >= 0 && max > min) {
		var value = -1;
		while(value < min) {
			value = Math.ceil(Math.random() * max);
		}
		return value;
	}
	return 0;
}

Array.prototype.choice = function () {
	var i = random(0, this.length - 1);
	return this[i];
}

function generate_boxes() {
	var count = random(min, max);
	var mutant_count = random(mutant_min, mutant_max);

	var arr = [];

	for(var i = 0; i < count; i++) {
		arr.push(i);
	}

	for(var i = 0; i < mutant_count; i++) {
		var m = arr.choice();
		arr.remove(m);
	}

	for(var i = 0; i < count; i++) {
		if(arr.indexOf(i) != -1) {
			$('#container').append(generateBox(i));
		}
		else {
			$('#container').append(generateMutantBox(i));
		}
	}
}

function generateBox(i) {
	return $(document.createElement('div'))
		.attr('id', i).addClass('box').width(box_width).height(box_height).html("<h3>" + i + "</h3>")
		.css('line-height', 100 + "px");
}

function generateMutantBox(i) {
	var h = random(box_min_height, box_max_height);
	return generateBox(i).addClass('mutant').
		width(random(box_min_width, box_max_width)).height(h).css('line-height', h + "px");
}

function initialize() {
	var boxes = generate_boxes();
	Clips.rules.load('application/rules/layout.rules');
	Clips.rules.assert(['vgap', vgap]);
	Clips.rules.assert(['hgap', hgap]);
	Clips.rules.assert(['total-width', $("#container").width()]);
	Clips.rules.assert(['layout', 'row', 'left']);
	Clips.rules.filter('box');
	$("#container .box").each(function(i){
		var data = ['b'];
		var item = $(this);
		data.push(i);
		data.push(item.width());
		data.push(item.height());
		data.push(parseInt(item.css("margin-left").replace(/[^-\d\.]/g, '')));
		data.push(parseInt(item.css("margin-right").replace(/[^-\d\.]/g, '')));
		data.push(parseInt(item.css("margin-top").replace(/[^-\d\.]/g, '')));
		data.push(parseInt(item.css("margin-bottom").replace(/[^-\d\.]/g, '')));
		Clips.rules.assert(data);
	});
	Clips.rules.run(function(data){
		$("#container").addClass('abs');
		var boxes = $("#container .box");
		$(data).each(function(i){ // Iterationg boxes
			boxes.eq(this.index).css('left', this.x).css('top', this.y);
		});
	});
}
