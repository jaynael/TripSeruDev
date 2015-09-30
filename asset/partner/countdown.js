jQuery(document).ready(function(){

	// count down 
		
	jQuery(".countdown").each(function(){
	
		dataname = jQuery(this).attr("data-name");
		
		eUrl = $(this).attr("data-expiry-url");
		
		if(dataname) {
		
			// countdown to absolute date & time
			if ( jQuery(this).attr("data-date") ) {
			
				// console.log(dataname +", data-date: true");
			
				datadate = jQuery(this).attr("data-date").split("-");
					
				if (jQuery(this).attr("data-time")) {
					datatime = jQuery(this).attr("data-time").split(":");
				} else {
					datatime = Array(0,0,0);
				}
				
				if (jQuery(this).attr("data-gmt")) {
					datatimezone = jQuery(this).attr("data-gmt");
				} else {
					datatimezone = 0;
				}
				
				

				jQuery(this).countdown({
					until: jQuery.countdown.UTCDate(
						datatimezone, 
						datadate[0], 
						datadate[1] - 1, 
						datadate[2], 
						datatime[0], 
						datatime[1], 
						datatime[2] 
					),
					alwaysExpire: false,
					expiryUrl: eUrl
				});

				
				
			// count down to relative date & time, read from cookie
			

			} else if (jQuery.cookie(dataname)) {
			
				// console.log(dataname +", data-cookie: true");
			
				datestr = jQuery.cookie(dataname);
				
				jQuery(this).countdown({
					until: new Date(datestr),
					alwaysExpire: false,
					onExpiry: alert(dataname)
				});	
							

			
			// count down to relative date & time then set cookie
			
			} else if ( jQuery(this).attr("data-relative-time") ) {
			
				// console.log(dataname +", data-relative-date: true");
			
				relativetime = jQuery(this).attr("data-relative-time");
				
				datestr = relativedate(relativetime).toString();
				
				jQuery(this).countdown({
					until: new Date(datestr),
					alwaysExpire: false,
					expiryUrl: eUrl
				});		
				
				/* jQuery.cookie(dataname, datestr, {expires: 365}); */
			} else {
				jQuery(this).text("error: undefined date");
			}
		
		} else {
			jQuery(this).text("error: unique name has not been set.")
		}
			
	});
});

function relativedate(offset) {
	offset = offset.toLowerCase();
	var time = new Date();
	var year = time.getFullYear();
	var month = time.getMonth();
	var day = time.getDate();
	var hour = time.getHours();
	var minute = time.getMinutes();
	var second = time.getSeconds();
	var pattern = /([+-]?[0-9]+)\s*(s|m|h|d|w|o|y)?/g;
	var matches = pattern.exec(offset);
	while (matches) {
		switch (matches[2] || 's') {
			case 's': second += parseInt(matches[1], 10); break;
			case 'm': minute += parseInt(matches[1], 10); break;
			case 'h': hour += parseInt(matches[1], 10); break;
			case 'd': day += parseInt(matches[1], 10); break;
			case 'w': day += parseInt(matches[1], 10) * 7; break;
			case 'o':
				month += parseInt(matches[1], 10); 
					day = Math.min(day, self._getDaysInMonth(year, month));
				break;
			case 'y':
				year += parseInt(matches[1], 10);
					day = Math.min(day, self._getDaysInMonth(year, month));
				break;
		}
		matches = pattern.exec(offset);
	}
	return new Date(year, month, day, hour, minute, second, 0);
}

function expiryAction(element) {
	if (element.attr("data-expiry-url")) {
		// console.log(element.attr("data-expiry-url"));
		return window.location = element.attr("data-expiry-url");
		
	}
}
