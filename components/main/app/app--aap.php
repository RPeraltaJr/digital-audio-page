<section id="aapApp" class="app--aap">
    <div class="wrapper">
        <div class="item item--1">
            <div class="box">
                <h3 class="title">{{ title }}</h3>
                <div class="copy">
                    <p>{{ copy }}</p>
                </div> 
                <div class="audio-player">
                    <div class="logo">
                        <img class="lowes-logo" src="assets/build/img/logos/AdvancedAuto.svg" alt="Advanced Auto Parts">
                    </div>
                    <div class="player">
                        <div class="box" v-show="showResult">
                        
                            <audio id="app_player" controls ref="aapPlayer">
                                <source :src="'assets/build/audio/aap/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item--2">
            <div class="box">

                <div class="form">
                    <div class="col col--1">
                        <div class="form-group">
                            <label for="day" class="sr-only">Day of Week</label>
                            <select class="form-control" name="day" id="day" v-model="searchDay"> <!-- :value="searchDay" -->
                                <option value="" selected disabled>Day of Week</option>
                                <option v-for="day in days" :value="day"> {{ day | capitalize }} </option>
                                <!-- <option value="">Default</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="weather" class="sr-only">Atmospheric Conditions</label>
                            <select class="form-control" name="weathers" id="weather" v-model="searchWeather" :id="selectWeather"> <!-- :value="searchWeather" -->
                                <option value="" selected disabled>Atmospheric Conditions</option>
                                <option v-for="weather in weathers" :value="weather"> {{ weather | capitalize }} </option>
                                <!-- <option value="">Default</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="col col--2">
                        <div class="form-group">
                            <label for="device" class="sr-only">Device</label>
                            <select class="form-control" name="devices" id="device" v-model="searchDevice"> <!-- :value="searchDevice" -->
                                <option value="" selected disabled>Device</option>
                                <option v-for="device in devices" :value="device"> {{ device | capitalize }} </option>
                                <!-- <option value="">Default</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="station" class="sr-only">Pandora Stations</label>
                            <select class="form-control" name="station" id="station" v-model="searchStation"> <!-- :value="searchStation" -->
                                <option value="" selected disabled>Pandora Stations</option>
                                <option v-for="station in stations" :value="station"> {{ station | capitalize }} </option>
                                <!-- <option value="">Default</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="col col--3">
                        <div class="form-group">
                            <button class="btn btn-default" @click="submit" :disabled="isDisabled" v-if="searchDay && searchWeather && searchDevice && searchStation">Submit</button>
                        </div>
                    </div>

                </div> <!-- /.form -->

                <ul class="moreinfo">
                    <li>
                        <p><strong>Type of Car Maintenance:</strong> {{ searchType }}</p>
                    </li>
                    <li>
                        <p><strong>Product:</strong> {{ searchProduct }}</p>
                    </li>
                    <li>
                        <p><strong>Extra Service/Misc:</strong> {{ searchExtra }}</p>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>