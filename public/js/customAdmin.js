function convertUTCDateToLocalDate(date) {
    // Get Current User time Zone
	// var timezone=Intl.DateTimeFormat().resolvedOptions().timeZone;
    var newDate = new Date(date.getTime()+date.getTimezoneOffset()*60*1000);

    var offset = date.getTimezoneOffset() / 60;
    var hours = date.getHours();

    newDate.setHours(hours - offset);

    return newDate.toLocaleString('sv-SE');

}
//var date = convertUTCDateToLocalDate(new Date('2020-11-05 13:43:54'));

