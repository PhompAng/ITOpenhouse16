// Countdown class
var Countdown = function (settings) {

	var self = this;

	self.holder = $("#" + settings.holder_id);

	//  if there is no element with this id - do not apply plugin
	if (!self.holder[0]) return;


	if (!settings.holder_width) settings.holder_width = 5;

	var current_date = (new Date()).getTime();

	// constants
	var ONE_DAY_SECONDS = 79700000,
		hours_day = 20,
		MAIN_SECTION_MARGIN_BOTTOM = 35,
		MAIN_SECTION2_PADDING = 20,
		COUNTDOWN_PADDING = 40;



	if (!settings.end_work) settings.end_work = current_date + 2 * ONE_DAY_SECONDS;

	// number styles
	if (!settings.fill) settings.fill = "none";
	if (!settings.stroke) settings.stroke = "#78909C";
	if (!settings.fill_opacity) settings.fill_opacity = 1;
	if (!settings.stroke_width) settings.stroke_width = 2;


	var countdown_width = settings.holder_width,
		countdown_item_width = Math.floor(countdown_width * 250 / 730),
		countdown_item_height = Math.floor(countdown_width * 310 / 730),
		countdown_margin = Math.floor(countdown_width * 0 / 730),
		number_scale_x = (countdown_item_width / 250).toFixed(2) * 1,
		number_scale_y = (countdown_item_height / 310).toFixed(2) * 1;

	self.countdown_template = '' +
		'<div class="main_section" style="margin-bottom: ' + (Math.ceil(MAIN_SECTION_MARGIN_BOTTOM * number_scale_x)) + 'px;">' +
			'<div class="main_section2" style="padding: ' + (Math.ceil(MAIN_SECTION2_PADDING * number_scale_x)) + 'px 0">' +
				'<div id="countdown_' + settings.holder_id + '" class="countdown clearfix" style="padding: ' + (Math.ceil(COUNTDOWN_PADDING * number_scale_x)) + 'px 0">' +
					'<div class="time_block">' +
						'<div id="countdown_days_' + settings.holder_id + '" class="time_block_number"></div>' +
					'</div>' +
					'<div class="time_block">' +
						'<span class="number">:</span>' +
					'</div>' +
					'<div class="time_block" style="margin-left: ' + countdown_margin + 'px">' +
						'<div id="countdown_hours_' + settings.holder_id + '" class="time_block_number"></div>' +
					'</div>' +
					'<div class="time_block">' +
					'<span class="number">:</span>' +
					'</div>' +
					'<div class="time_block" style="margin-left: ' + countdown_margin + 'px">' +
						'<div id="countdown_minutes_' + settings.holder_id + '" class="time_block_number"></div>' +
					'</div>' +
					'<div class="time_block">' +
					'<span class="number">:</span>' +
					'</div>' +
					'<div class="time_block" style="margin-left: ' + countdown_margin + 'px">' +
						'<div id="countdown_seconds_' + settings.holder_id + '" class="time_block_number"></div>' +
					'</div>' +
				'</div>' +
			'</div>' +
		'</div>'

	// function that returns object with dates difference
	self.dateDifference = function (start_works_date, end_works_date) {
		var difference = end_works_date - start_works_date;

		return (isNaN(difference) || difference <= 0) ? {s : 0, m : 0, h : 0, d : 0} : {
			s : Math.floor(difference / 1000 % 60),    // seconds
			m : Math.floor(difference / 60000 % 60),   // minutes
			h : Math.floor(difference / 3600000 % 24), // hours
			d : Math.floor(difference / 86400000)      // days
		}
	};

	self.getFormatedDate = function(current_date, end_works_date) {

		// get difference for current date and end working day
		var time_obj = self.dateDifference(current_date, end_works_date);

		time_obj.d = time_obj.d.toString();
		time_obj.h = time_obj.h.toString();
		time_obj.m = time_obj.m.toString();
		time_obj.s = time_obj.s.toString();

		for (var i in time_obj) {
			// if value of date item has one number - adding "0" before
			if (time_obj[i].length == 1) time_obj[i] = "0" + time_obj[i];

			// if value of date is negative set all date items to "00",
			// it means that the working date is expired
			if (time_obj[i][0] && time_obj[i][0] == "-") {
				var zeroD = "00";
				time_obj.d = time_obj.h = time_obj.m = time_obj.s = zeroD;

				break;
			}
		}

		return time_obj;
	}

	self.hideWorkLimits = function() {
		$("#work_limits_" + settings.holder_id).hide();
	}

	self.hideCountdownTitle = function() {
		$("#countdown_title_" + settings.holder_id).hide();
	}

	self.hideProgressBar = function() {
		$("#construction_progress_" + settings.holder_id).hide();
	}


	// set value for progress bar and animate it on start

	// init countdown
	self.Init = function(start_works_date, end_works_date) {

		// append html template for counter
		self.holder.append(self.countdown_template);

		// set text for "Start Time" and "End Time"
		$("#start_working_" + settings.holder_id + " span.limit_date").text(new Date(start_works_date).toLocaleDateString());
		$("#end_working_" + settings.holder_id + " span.limit_date").text(new Date(end_works_date).toLocaleDateString());

		if (!settings.show_working_dates || (countdown_width < 500)) self.hideWorkLimits();
		if (countdown_width < 400) self.hideCountdownTitle();
		if (!settings.show_progress_bar) self.hideProgressBar();

		// set svg/vml areas for date items
		var r1 = Raphael("countdown_days_" + settings.holder_id, countdown_item_width, countdown_item_height);
		var r2 = Raphael("countdown_hours_" + settings.holder_id, countdown_item_width, countdown_item_height);
		var r3 = Raphael("countdown_minutes_" + settings.holder_id, countdown_item_width, countdown_item_height);
		var r4 = Raphael("countdown_seconds_" + settings.holder_id, countdown_item_width, countdown_item_height);

		// set default style for countdown numbers
		var style_object = {fill: settings.fill, stroke:  "green", "fill-opacity":  settings.fill_opacity, "stroke-width": settings.stroke_width, "stroke-dasharray": "105,16",  "stroke-linecap":"round", translation:"0 0"};

		var number1_x = 7;
		var number2_x = Math.round(countdown_item_width / 2 + 4);

		// scale each number and set default position
		var letter1 = r1.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, 0, 0).translate(number1_x, 1);
		var letter2 = r1.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, countdown_item_width / 2, 1).translate(number2_x, 1);
		var letter3 = r2.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, 0, 0).translate(number1_x, 1);
		var letter4 = r2.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, countdown_item_width / 2, 0).translate(number2_x, 1);
		var letter5 = r3.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, 0, 0).translate(number1_x, 1);
		var letter6 = r3.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, countdown_item_width / 2, 0).translate(number2_x, 1);
		var letter7 = r4.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, 0, 0).translate(number1_x, 1);
		var letter8 = r4.path(helvetica["0"]).attr(style_object).scale(number_scale_x, number_scale_y, countdown_item_width / 2, 0).translate(number2_x, 1);


		// start 1-second interval
		var getCurrentTimeInterval = setInterval(function () {

			// get current date
			var current_date = new Date();

			var date_obj = self.getFormatedDate(current_date, end_works_date);

			// set animation of Days
			letter1.animate({path:helvetica[(date_obj.d).substr(0, 1)]}, 250);

			letter2.animate({path:helvetica[(date_obj.d).substr(1)]}, 250);

			// set animation of Hours
			letter3.animate({path:helvetica[(date_obj.h).substr(0, 1)]}, 250);
			letter4.animate({path:helvetica[(date_obj.h).substr(1)]}, 250);

			// set animation of Minutes
			letter5.animate({path:helvetica[(date_obj.m).substr(0, 1)]}, 250);
			letter6.animate({path:helvetica[(date_obj.m).substr(1)]}, 250);

			// set animation of Seconds
			letter7.animate({path:helvetica[(date_obj.s).substr(0, 1)]}, 250);
			letter8.animate({path:helvetica[(date_obj.s).substr(1)]}, 250);



		}, 1000);
	}

	return self.Init(settings.start_work, settings.end_work);
};

