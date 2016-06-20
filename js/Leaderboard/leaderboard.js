
var $table = $('.table');

/*
$(function () {
  	$table.on('click-row.bs.table', function (e, row, $element) {
    		$('.success').removeClass('success');
    		$($element).addClass('success');
  	});
    $('#button').click(function () {
    		alert('Selected name: ' + getSelectedRow().leaderboard_name);
    });
});
*/

function detailFormatter(index, row) {
    var html = [];
    $.each(row, function (key, value) {
        if(key=="person_id"){
            var questions = leaderbaordModel.questionsSelected(value);
            for (var i = 0; i < questions.length; i++) {
                html.push('<p>' + questions[i].question + '</p>');
            };
        }
    });
    return html.join('');
}

function operateFormatter(value, row, index) {
    return [
        '<button type="button" class="showPicks btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-tasks" aria-hidden="true"></i></button>'
    ].join('');
}

window.operateEvents = {
    'click .showPicks': function (e, value, row, index) {
        leaderbaordModel.setupPicks(value, row, index);
    }
};

function getSelectedRow() {
    var index = $table.find('tr.success').data('index');
    return $table.bootstrapTable('getData')[index];
}