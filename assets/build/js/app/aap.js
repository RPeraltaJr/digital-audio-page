var vmAap = new Vue({
    el: '#aapApp',
    data: function() {
        return {
            title: 'Advance Auto',
            copy: 'This campaign utilizes Dynamic to customize ads based on the day of the week, current weather, type of music enjoyed by the listener, device being used, and special offer on item being promoted at a specific time.',
            results: [],
            devices: [ 
                'desktop', 
                'mobile', 
                'tablet', 
            ],
            searchDevice: '',
            days: [
                'monday', 
                'wednesday', 
                'friday', 
            ],
            searchDay: '',
            weathers: [
                'rainy', 
                'sweltering', 
                'freezing', 
                'not too bad', 
            ],
            searchWeather: '',
            stations: [
                'top 40',
                'dance', 
                'country', 
                'acoustic', 
            ],
            searchStation: '',
            types: [
                'changed your wiper blades',
                'changed your antifreeze',
                'changed your coolant',
                'changed your motor oil',
            ],
            searchType: '',
            products: [
                'long lasting rain-X latitude and weatherbeater wiper blades are 20% off',
                'carquest extended life coolant is just $14.99 a gallon',
                'carquest extended life antifreeze/coolant is just $14.99',
                '5 quarts of Valvoline High Mileage and a filter are just $26.99'
            ],
            searchProduct: '',
            extras: [
                'they\'ll even install them, free',
                'speedperks members save even more',
            ],
            searchExtra: '',
            showResult: false,
            track: '',
        }
    },
    methods: {
        submit: function() {
            this.showResult = true;
            var res = getByStation( getByWeather( getByDay( getByDevice(this.results, this.searchDevice.toLowerCase()), this.searchDay), this.searchWeather ), this.searchStation );
            // console.log(res[0].video);
            // console.log(res.length);
            if( res.length == 0 ) {
                this.track = '';
            } else {
                this.track = res[0].track;
            }
        }
    },
    computed: {
        filteredByAll() {
            // var res = getByExtra( getByProduct( getByType( getByStation( getByWeather( getByDay( getByDevice(this.results, this.searchDevice.toLowerCase()), this.searchDay), this.searchWeather ), this.searchStation ), this.searchType ), this.searchProduct ), this.searchExtra );
            var res = getByStation( getByWeather( getByDay( getByDevice(this.results, this.searchDevice.toLowerCase()), this.searchDay), this.searchWeather ), this.searchStation );
            return res;  
        },
        selectWeather() {
            switch( this.searchWeather ) {
                case "rainy":
                    this.searchType = "change your wiper blades";
                    this.searchProduct = "long lasting rain-X latitude and weatherbeater wiper blades are 20% off";
                    this.searchExtra = "they'll even install them, free";
                    break;
                case "sweltering":
                    this.searchType = "change your coolant";
                    this.searchProduct = "carquest extended life coolant is just $14.99 a gallon";
                    this.searchExtra = "speedperks members save even more";
                    break;
                case "freezing":
                    this.searchType = "change your antifreeze";
                    this.searchProduct = "carquest extended life antifreeze/coolant is just $14.99";
                    this.searchExtra = "speedperks members save even more";
                    break;
                case "not too bad":
                    this.searchType = "change your motor oil";
                    this.searchProduct = "5 quarts of Valvoline High Mileage and a filter are just $26.99";
                    this.searchExtra = "speedperks members save even more";
                    break;
                default:
                    this.searchType = "";
                    this.searchProduct = "";
                    this.searchExtra = "";
            }
        },
        isDisabled() {
            if( this.searchDay == "" || this.searchWeather == "" || this.searchDevice == "" || this.searchStation == "" ) {
                return true;
            }
        }
    },
    mounted: function() {
        this.$watch('track', function () {
            this.$refs.aapPlayer.load(); // reloads audio player
            var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent); // check if Safari browsers
            if (!is_safari) { // if not Safari browser
                // console.log('not safari');
                this.$refs.aapPlayer.play(); // play
            } else {
                // console.log('safari');
            }
        });
    },
    created: function() {
        $.getJSON('includes/aap/data.json')
            .done(function(data) {
                // console.log(data);
                vmAap.results = data;
        })
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

// search by day
function getByDay(results, day) {
    if (!day) return results
    return results.filter(item => item.day.includes(day))
}

// search by weather
function getByWeather(results, weather) {
    if (!weather) return results
    return results.filter(item => item.weather.includes(weather))
}

// search by device
function getByDevice(results, device) {
    if (!device) return results
    return results.filter(item => item.device.includes(device))
}

// search by station 
function getByStation(results, station) {
    if (!station) return results
    return results.filter(item => item.station.includes(station))
}

// search by type
function getByType(results, type) {
    if (!type) return results
    return results.filter(item => item.type.includes(type))
}

// search by product
function getByProduct(results, product) {
    if (!product) return results
    return results.filter(item => item.product.includes(product))
}

// search by extra
function getByExtra(results, extra) {
    if (!extra) return results
    return results.filter(item => item.extra.includes(extra))
}