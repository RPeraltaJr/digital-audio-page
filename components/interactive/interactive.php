<section class="interactive">
    <div class="wrapper">

        <div class="item item--main">
            <div class="box">
                <h3 class="main--title">
                    For years we've been known to make ads that speak to people. Now our ads can speak <em>with</em> them. Interactive audio allows mobile listeners to respond and engage on their voice-enabled devices.
                </h3>
            </div>
        </div>

        <!-- Jeopardy -->
        <div class="item item--1" id="jeopardyApp">
            <div class="box">
                <h4 class="title">Jeopardy</h4>
                <div class="copy">
                    <p>Here's a sample ad where listeners can literally play along. With Interactive, we can even set an automatic tune-in reminder.</p>
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
                        <img class="lowes-logo" src="assets/build/img/logos/Jeopardy.png" alt="Jeopardy">
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

        <!-- Liberty Mutual -->
        <div class="item item--2" id="libertyMutalApp">
            <div class="box">
                <h4 class="title">Liberty Mutal</h4>
                <div class="copy">
                    <p>As listeners engage, we can automatically open a web page or download an app on their device.</p>
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
