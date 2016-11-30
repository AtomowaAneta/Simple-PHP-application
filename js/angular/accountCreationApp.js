var app = angular.module('clientValidation', []);


app.directive('namesValidation', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attr, nvCtrl) {
            function nValidation(value) {
                if (value.length >= 5 && value.length <= 30) {
                    nvCtrl.$setValidity('', true);
                } else {
                    nvCtrl.$setValidity('', false);
                }
                return value;
            }
            nvCtrl.$parsers.push(nValidation);
        }
    };
});

app.directive('ageValidation', function() {
	return {
		require: 'ngModel',
		link: function(scope,element,attr,aCtrl){
			function aValidation(value) {
				if (value >= 10 && value <= 100) {
					aCtrl.$setValidity('', true);
				}
				else {
					aCtrl.$setValidity('',true);
				}
				return value;
			}
			aCtrl.$parsers.push(aValidation);
		}

	};
});