var vmTide = new Vue({
    el: '#tideApp',
    data: function() {
        return {
            results: [], 
            responses: [],
            searchResponse: '',
            showResult: false,
            track: '',
        }
    }, 
    methods: {
        submit: function() {
            this.showResult = true;
            var res = getByResponse(this.results, this.searchResponse);
            // console.log(res[0].track);
            // console.log(res.length);
            if( res.length == 0 ) {
                this.track = '';
            } else {
                this.track = res[0].track;
            }
        }
    },
    computed: {
        getUniqueResponses() {
            var string = '';
            var area = '';
            var unique = [];
            $.each(this.results, function(index, value){
                if (value.response.length > 0) {
                    area = value.response + ","; 
                    string += area;
                } 
            });
            array = string.split(',');
            // console.log(array);
            $.each(array, function(index, value) {
                if ( checkValue(value, unique) == 'Not exist' && value !== "" ) {
                    unique.push(value);
                }
            });
            // this.responses = unique.sort();
            this.responses = unique;
        },
        filteredByAll() {
            var res = getByResponse(this.results, this.searchResponse);
            return res;  
        },
    },
    created: function() {
        $.getJSON('includes/tide/data.json')
            .done(function(data) {
                // console.log(data);
                vmTide.results = data;
        })
    },
    mounted: function() {
        this.$watch('track', function () {
            this.$refs.tidePlayer.load(); // reloads audio player            
            var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent); // check if Safari browsers
            if (!is_safari) { // if not Safari browser
                // console.log('not safari');
                this.$refs.tidePlayer.play(); // play
            }
        });
    },
    filters: {
        capitalize: function(value) {
            return value.replace( /\w\S*/g, function(txt) {
                return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
            });
        }
    }
});

// check if value exists
function checkValue(value, arr){
    var status = 'Not exist';
    for(var i = 0; i < arr.length; i++){
        var name = arr[i];
        if(name == value){
            status = 'Exist';
            break;
        }
    }
    return status; 
}

// search by response
function getByResponse(results, response) {
    if (!response) return results
    return results.filter(item => item.response.includes(response))
}