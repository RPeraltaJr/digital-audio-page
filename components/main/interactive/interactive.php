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
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="audio-player">
                    <div class="logo">
                        <img class="jeopardy-logo" src="assets/build/img/logos/Jeopardy.png" alt="Jeopardy">
                    </div>
                    <div class="player">
                        <div class="box" v-show="showResult">
                            
                            <audio id="jeopardy_player" controls ref="jeopardyPlayer">
                                <source :src="'assets/build/audio/jeopardy/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liberty Mutual -->
        <div class="item item--2" id="libertyMutualApp">
            <div class="box">
                <h4 class="title">Liberty Mutal</h4>
                <div class="copy">
                    <p>As listeners engage, we can automatically open a web page or download an app on their device.</p>
                </div> 

                <div class="form">
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="audio-player">
                    <div class="logo">
                        <img class="liberty-mutual-logo" src="assets/build/img/logos/Liberty-Mutual.jpg" alt="Liberty Mutual">
                    </div>
                    <div class="player">
                        <div class="box" v-show="showResult">
                            
                            <audio id="libertyMutual_player" controls ref="libertyMutualPlayer">
                                <source :src="'assets/build/audio/liberty-mutual/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
