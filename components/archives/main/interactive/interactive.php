<section class="Interactive">
    <div class="Interactive__container">

        <div class="Interactive__col Interactive__col--main">
            <div class="box">
                <h3 class="Interactive__headline">
                    For years we've been known to make ads that speak to people. Now our ads can speak <em>with</em> them. Interactive audio allows mobile listeners to respond and engage on their voice-enabled devices.
                </h3>
            </div>
        </div>

        <!-- Tide -->
        <div class="Interactive__col Interactive__col--1" id="tideApp">
            <div class="box">
                <h4 class="Interactive__title">Tide</h4>
                <div class="Interactive__copy">
                    <p>Engagement is key, because it's not enough to merely solicit a 'yes' or 'no' from listeners. We give them the chance to participate.</p>
                </div> 

                <div class="Interactive__form">
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="Interactive__player">
                    <div class="Interactive__player__logo">
                        <img src="assets/build/img/logos/TideLogo.svg" alt="Tide" width="60" height="65">
                    </div>
                    <div class="Interactive__player__audio">
                        <div class="box" v-show="showResult">
                            
                            <audio id="tide_player" controls ref="tidePlayer">
                                <source :src="'assets/build/audio/tide/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pampers -->
        <div class="Interactive__col Interactive__col--2" id="pampersApp">
            <div class="box">
                <h4 class="Interactive__title">Pampers</h4>
                <div class="Interactive__copy">
                    <p>Being relevant is the best way to hold a listener's interest. After all - who among us can't relate to this experience?</p>
                </div> 

                <div class="Interactive__form">
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="Interactive__player">
                    <div class="Interactive__player__logo">
                        <img src="assets/build/img/logos/PampersLogo.svg" alt="Pampers" width="120" height="65">
                    </div>
                    <div class="Interactive__player__audio">
                        <div class="box" v-show="showResult">
                            
                            <audio id="pampers_player" controls ref="pampersPlayer">
                                <source :src="'assets/build/audio/pampers/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pepsi -->
        <div class="Interactive__col Interactive__col--3" id="pepsiApp">
            <div class="box">
                <h4 class="Interactive__title">Pepsi</h4>
                <div class="Interactive__copy">
                    <p>Interactive offers great utility. What better platform to conduct surveys and harvest data, all in real time?</p>
                </div> 

                <div class="Interactive__form">
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="Interactive__player">
                    <div class="Interactive__player__logo">
                        <img src="assets/build/img/logos/PepsiLogo.svg" alt="Pepsi" width="120" height="65">
                    </div>
                    <div class="Interactive__player__audio">
                        <div class="box" v-show="showResult">
                            
                            <audio id="pepsi_player" controls ref="pepsiPlayer">
                                <source :src="'assets/build/audio/pepsi/' + track" type="audio/mpeg" v-if="track">
                                Your browser does not support the audio element.
                            </audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jeopardy -->
        <div class="Interactive__col Interactive__col--4" id="jeopardyApp">
            <div class="box">
                <h4 class="Interactive__title">Jeopardy</h4>
                <div class="Interactive__copy">
                    <p>Here's a sample ad where listeners can literally play along. With Interactive, we can even set an automatic tune-in reminder.</p>
                </div> 

                <div class="Interactive__form">
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="Interactive__player">
                    <div class="Interactive__player__logo">
                        <img class="jeopardy-logo" src="assets/build/img/logos/Jeopardy.png" alt="Jeopardy">
                    </div>
                    <div class="Interactive__player__audio">
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
        <div class="Interactive__col Interactive__col--5" id="libertyMutualApp">
            <div class="box">
                <h4 class="Interactive__title">Liberty Mutal</h4>
                <div class="Interactive__copy">
                    <p>As listeners engage, we can automatically open a web page or download an app on their device.</p>
                </div> 

                <div class="Interactive__form">
                    <label for="response" class="sr-only">Response</label>
                    <select class="form-control" :id="getUniqueResponses" name="response" v-model="searchResponse">
                        <option value="" disabled selected>Response</option>
                        <option v-for="response in responses" :value="response"> {{ response | capitalize }} </option>
                    </select> 
                    <button class="btn btn-default" @click="submit" :disabled="!searchResponse" v-if="searchResponse">Submit</button>
                </div>

                <div class="Interactive__player">
                    <div class="Interactive__player__logo">
                        <img class="liberty-mutual-logo" src="assets/build/img/logos/Liberty-Mutual.jpg" alt="Liberty Mutual">
                    </div>
                    <div class="Interactive__player__audio">
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

        <div class="Interactive__col"></div>

    </div>
</section>
