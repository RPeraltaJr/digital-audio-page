var vmLowes = new Vue({
    el: '#lowesApp',
    data: function() {
        return {
            title: 'Lowe\'s',
            copy: 'A practical campaign with great utility in which an offer is tied directly to the weather. (And if the circumstance dictates, the item itself can be switch-out to reflect inventory considerations.)',
            results: [],
            conditions: [],
            searchCondition: '',
            showResult: false,
            track: '',
        }
    },
    methods: {
        submit: function() {
            this.showResult = true;
            var res = getByCondition(this.results, this.searchCondition);
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
        getUniqueConditions() {
            var string = '';
            var area = '';
            var unique = [];
            $.each(this.results, function(index, value){
                if (value.condition.length > 0) {
                    area = value.condition + ","; 
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
            // this.conditions = unique.sort();
            this.conditions = unique;
        },
        filteredByAll() {
            var res = getByCondition(this.results, this.searchCondition);
            return res;  
        },
    },
    created: function() {
        $.getJSON('includes/lowes/data.json')
            .done(function(data) {
                // console.log(data);
                vmLowes.results = data;
        })
    },
    mounted: function() {
        this.$watch('track', function () {
            this.$refs.lowesPlayer.load(); // reloads audio player            
            var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent); // check if Safari browsers
            if (!is_safari) { // if not Safari browser
                // console.log('not safari');
                this.$refs.lowesPlayer.play(); // play
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

// search by condition
function getByCondition(results, condition) {
    if (!condition) return results
    return results.filter(item => item.condition.includes(condition))
}