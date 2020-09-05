function readCsv(data) {
	var target = '#csv-body';
	var csv = $.csv.toArrays(data);
	var insert = '';
	$(csv).each(function() {
		if (this.length > 0) {
		//	insert += '<tr>';
			$(this).each(function() {
				insert += '<tr><td>' + this + '</td></tr>';
			});
		//	insert += '</tr>';
		}
	});
	$(target).append(insert);
	}
var csvfile = './soccer_member.csv';
$(function(){
	$.get(csvfile, readCsv, 'text');
});