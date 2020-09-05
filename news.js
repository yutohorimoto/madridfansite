function readCsv(data) {
	var target = '#csv-body';
	var csv = $.csv.toArrays(data);
    var insert = '';
    var insert2='';
    console.log(csv[0])
	//$(csv[0]).each(function() {
		//if (this.length > 0) {
        //insert += '<tr>';
        //		$(this).each(function() {
		//insert += '<td>'+'<a href='+csv[1][0]+'>' + this + '</a>'+'</td>';
//			});
            
		//insert += '</tr>';
		//}
	//});
	//$(target).append(insert);
    //}
    for(var i=0;i<csv[0].length;i++){
        insert2 +='<tr>';
        insert2 +='<td>'+'<a href='+csv[2][i]+'>'+csv[1][i]+'</a>'+'<td>';
        insert2 +='</tr>';
    }
    $(target).append(insert2)
    }
    //$('.container').find('a').each(function(){
      //this.attr('href',"yahoo.com");
    //})

//$('a').attr('href',"yahoo.com");
    

      
    
var csvfile = './news.csv';


$(function(){
	$.get(csvfile, readCsv, 'text');
});
