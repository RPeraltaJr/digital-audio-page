<section id="lowesApp" class="app--lowes">
    <div class="wrapper">
        <div class="item item--1">
            <div class="box">
                <h3 class="title">{{ title }}</h3>
                <div class="copy">
                    <p>{{ copy }}</p>
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
        <div class="item item--2">
            <div class="box">
                <label for="conditions" class="sr-only">Atmospheric Conditions</label>
                <select class="form-control" :id="getUniqueConditions" name="conditions" v-model="searchCondition">
                    <option value="" disabled selected>Atmospheric Conditions</option>
                    <option v-for="condition in conditions" :value="condition"> {{ condition | capitalize }} </option>
                </select> 
                <button class="btn btn-default" @click="submit" :disabled="!searchCondition" v-if="searchCondition">Submit</button>
            </div>
        </div>
    </div>
</section>