<div id="slider">
    <ul>
        <li class="slide" v-for="slide in slider">            
            <div align="center" class="slide-overlay text-center">
                <div class="overlay-content text-center">
                    <span>{{ slide.date }}</span>
                    <h3>{{ slide.content }}</h3>
                    <span>{{ slide.by }}</span>
                </div>
            </div>
            <div class="img1"><img class="img-responsive" v-bind:src="slide.img"></div>
        </li>
    </ul>
</div>