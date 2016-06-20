var Question = function(number, question, answers, answered) {
    this.number = ko.observable(number);
    this.question = ko.observable(question);
    this.answers = ko.observableArray(answers);
    this.answered = ko.observable(answered);
 
    this.selectAnswer = function(answer) {
        var noSelect = false;
        for (var i = 0; i < this.answers().length; i++) {
            if((this.answers()[i].select == true) && (i == answer.number)) {
                noSelect = true;
            }
            this.answers()[i].select = null;
        };
        if(!noSelect) {
            this.answers()[answer.number].select = true;
            this.answered(1);
        }
        else {
            this.answered(0);
        }
    }.bind(this);
}

var ViewModel = function(first, last) {
    this.firstName = ko.observable(first);
    this.lastName = ko.observable(last);

    this.leaderboardName = ko.observable(null);
    this.email = ko.observable(null);
    this.phoneNumber = ko.observable(null);  

    this.showDetails = ko.observable(true);
    this.showQuestions = ko.observable(null);
    this.showPayment = ko.observable(null);

    this.questions = ko.observableArray([
	    new Question(0, "Who will be the next Taoiseach?",[{number: 0, answer:"Enda Kenny", points: 2, select: null}, {number: 1, answer:"Michael Martin", points: 4, select: null}, {number: 2, answer:"Gerry Adams", points: 10, select: null}, {number: 3, answer:"Other", points: 15, select: 0, select: null}], 0),
	    new Question(1, "How many seats will Fianna Fail win?", [{number: 0, answer:"less than 20", points: 5, select: null}, {number: 1, answer:"between 20-35 inclusive", points: 4, select: null}, {number: 2, answer:"between 36-50 inclusive", points: 3, select: null}, {number: 3, answer:"more than 50", points: 2, select: null}], 0)
	]);

    this.questionsComplete = ko.computed(function() {
        var count = 0;
        for (var i = 0; i < this.questions().length; i++) {
            count = count + this.questions()[i].answered();
        }
        if(count == this.questions().length) {
            return true;
        }
        else {
            return false;
        }
    }, this);

    this.fullName = ko.computed(function() {
    	return this.firstName() + " " + this.lastName();
    }, this);

    this.detailsComplete = ko.computed(function() {
        if((this.firstName() != null)&&(this.lastName() != null)&&(this.leaderboardName() != null)&&(this.email() != null)&&(this.phoneNumber() != null)){
    		return true;
    	}
    	else {
    		return false;
    	}
    }, this);

    this.paymentComplete = ko.computed(function() {
        return true;
    }, this);

    this.getQuestions = ko.computed(function() {
		
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
    }, this);

    this.selectAnswer = function(question, answer) {
        this.questions()[question.number()].selectAnswer(answer);
        $('.question').each ( function() {
            var questionText = $(this).find('h4');
            if($.trim(questionText.text()) === (question.question())) {
                console.log(questionText.text());
                console.log(question.question());
                var answers = $(this).find('.answer');
                $(answers).each ( function() {
                    if($(this).text() === answer.answer) {
                        if($(this).hasClass('btn btn-primary')) {
                            $(this).attr('class', 'answer btn btn-default');
                        }
                        else {
                            $(this).attr('class', 'answer btn btn-primary');
                        }
                    }
                    else {
                        $(this).attr('class', 'answer btn btn-default');
                    }
                });
            }
        });
    }

    this.submitPayment = function() {
        if(this.paymentComplete()){
        	this.showDetails(null);
        	this.showQuestions(null);
        	this.showPayment(null);
		    $('.dot3').popover("hide")
		    $('.dot2').popover("hide")
		    $('.dot1').popover("hide")
        }
    }

    this.clickPaymentStage = function() {
        if((this.questionsComplete()) && (this.paymentComplete()) && (!this.showPayment())){
        	this.showDetails(null);
        	this.showQuestions(null);
        	this.showPayment(true);
		    $('.dot3').popover("show")
		    $('.dot2').popover("hide")
		    $('.dot1').popover("hide")
		    $("#secondStep").attr('class', 'dot2 dot green');
        }
    }

    this.clickQuestionsStage = function() {
        if((this.detailsComplete()) && (!this.showQuestions())){
        	this.showDetails(null);
        	this.showQuestions(true);
        	this.showPayment(null);
		    $('.dot3').popover("hide")
		    $('.dot2').popover("show")
		    $('.dot1').popover("hide")
		    $("#firstStep").attr('class', 'dot1 dot green');
        }
    }

    this.clickDetailsStage = function() {
        if((this.detailsComplete()) && (!this.showDetails())){
        	this.showDetails(true);
        	this.showQuestions(null);
        	this.showPayment(null);
		    $('.dot3').popover("hide")
		    $('.dot2').popover("hide")
		    $('.dot1').popover("show")
        }
    }
};
 
ko.applyBindings(new ViewModel("Eoghan", "Martin")); // This makes Knockout get to work