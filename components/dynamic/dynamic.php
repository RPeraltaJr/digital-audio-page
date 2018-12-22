<section class="dynamic">
    <div class="wrapper">

        <div class="item item--main">
            <div class="box">
                <h3 class="main--title">
                    One size doesn't fit all. That's why we customize ads automatically and in real time by a listener's gender, age, location, music preference and a whole lot more.
                </h3>
            </div>
        </div>

        <!-- Advance Auto -->
        <div class="item item--1" id="aapApp">
            <div class="box">
                <h4 class="title">Advance Auto</h4>
                <div class="copy">
                    <p>Hear how Dynamic works by selecting the personalized options below.</p>
                </div> 

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

                <div class="audio-player">
                    <div class="logo">
                        <img class="lowes-logo" src="assets/build/img/logos/AdvanceAuto.svg" alt="Advance Auto Parts">
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

        <!-- Lowe's -->
        <div class="item item--2" id="lowesApp">
            <div class="box">
                <h4 class="title">Lowe's</h4>
                <div class="copy">
                    <p>Offers can be personalized with tremendous utility based on factors such as weather.</p>
                </div> 

                <div class="form">
                    <label for="conditions" class="sr-only">Atmospheric Conditions</label>
                    <select class="form-control" :id="getUniqueConditions" name="conditions" v-model="searchCondition">
                        <option value="" disabled selected>Atmospheric Conditions</option>
                        <option v-for="condition in conditions" :value="condition"> {{ condition | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchCondition" v-if="searchCondition">Submit</button>
                </div>

                <div class="audio-player">
                    <div class="logo">
                        <img class="lowes-logo" src="assets/build/img/logos/Lowes.svg" alt="Lowe's">
                    </div>
                    <div class="player">
                        <div class="box" v-show="showResult">
                            
                            <audio id="lowes_player" controls ref="lowesPlayer">
                                <source :src="'assets/build/audio/lowes/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>