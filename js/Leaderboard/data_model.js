var Person = function(id, leaderboard_name, points, questions) {
    this.person_id = ko.observable(id);
    this.leaderboard_name = ko.observable(leaderboard_name);
    this.points = ko.observable(points);
    this.questions = ko.observableArray(questions);
}

var ViewModel = function() {

    this.leaderboard_data = ko.observableArray([
	    new Person("1", "test1", 10, [{question:"Who will be the next Taoiseach?", answer:"Enda Kenny", points:2, lost: false, won: true, notPlayed: false}, {question:"How many seats will Fianna Fail win?", answer:"less than 20", points:2, lost: false, won: true, notPlayed: false}, {question:"Who will win the Euros?", answer:"England", points:10, lost: false, won: true, notPlayed: false}]),
        new Person("2", "test2", 12, [{question:"Who will be the next Taoiseach?", answer:"Enda Kenny", points:4, lost: true, won: false, notPlayed: false}, {question:"How many seats will Fianna Fail win?", answer:"less than 20", points:2, lost: false, won: true, notPlayed: false}, {question:"Who will win the Euros?", answer:"England", points:10, lost: false, won: true, notPlayed: false}]),
        new Person("3", "test3", 8, [{question:"Who will be the next Taoiseach?", answer:"Enda Kenny", points:3, lost: false, won: false, notPlayed: true}, {question:"How many seats will Fianna Fail win?", answer:"less than 20", points:2, lost: false, won: true, notPlayed: false}, {question:"Who will win the Euros?", answer:"England", points:10, lost: false, won: true, notPlayed: false}]),
        new Person("4", "test4", 3, [{question:"Who will be the next Taoiseach?", answer:"Enda Kenny", points:8, lost: true, won: false, notPlayed: false}, {question:"How many seats will Fianna Fail win?", answer:"less than 20", points:2, lost: false, won: true, notPlayed: false}, {question:"Who will win the Euros?", answer:"England", points:10, lost: false, won: true, notPlayed: false}])
	]);

    this.modal_data = ko.observable(null);

    this.questionsSelected = function(id) {
        for (var i = 0; i < this.leaderboard_data().length; i++) {
            var personId = this.leaderboard_data()[i].person_id().toString();
            if (personId == id) {
                return this.leaderboard_data()[i].questions();
            }
        }
    }

    this.setupPicks = function(value, data, index) {
        for (var i = 0; i < this.leaderboard_data().length; i++) {
            var personId = this.leaderboard_data()[i].person_id().toString();
            if (personId == data.person_id) {
                this.modal_data(this.leaderboard_data()[i]);
            }
        }
    }

    /*this.getData = ko.computed(function() {
		
		jQuery.getJSON('http://www.easyfundraising.ie/eoghan/easyfundraising/restAPI/api2.php?action=get_questions',
			function(data, status){
				if(status == "success"){
					console.log(data[0]);
				}
				else {
					console.log(status);
				}
		});

        return this.questions();
    }, this);*/
};
 
var leaderbaordModel = new ViewModel();
ko.applyBindings(leaderbaordModel);