
function readCsv(data) {
	var target = '#csv-body';
	var csv = $.csv.toArrays(data);
	var insert = '';

	$(csv).each(function() {
		
        insert += '<tr>';
        $(this).each(function() {

            if(this.indexOf('RealMadrid')>-1){
                insert += '<td class='+'result'+'>' + this + '</td>';
            }else{
                insert += '<td>' + this + '</td>';
            }
        });
        insert += '</tr>';
		

	});
	$(target).append(insert);

	
	}
var csvfile = './soccer_result.csv';
$(function(){
	$.get(csvfile, readCsv, 'text');
});



function showTab(selector) {
 // 引数selectorの中身をコンソールで確認する
 console.log(selector);
 
 // いったん（ひとまず）、すべての.tabs-menu liからactiveクラスを削除する
 $(".tabs-menu li").removeClass("active");
 // .tabs-menu liのうち、selectorに該当するものにだけactiveクラスを付ける
 $(".tabs-menu a[href='" + selector + "']").parent("li").addClass("active");

 // いったん、すべての.tabs-content > sectionを非表示にする
 $(".tabs-content > section").hide();
 // .tabs-content > sectionのうち、selectorに該当するものだけを表示する
 $(selector).show();
}

$(document).ready(function() {
 // 初期状態として1番目のタブを表示
 showTab("#tabs-1");

 // タブがクリックされたらコンテンツを表示
 $(".tabs-menu a").click(function() {
   // hrefの値を受け取ってshowTab()関数に渡す。thisはクリックされたタブ（.tabs-menu a）を表す
   var selector = $(this).attr("href");
   showTab(selector);

   // hrefへのページ遷移と、クリックイベントが親要素へ伝わるのを止める
   return false;
 });
});