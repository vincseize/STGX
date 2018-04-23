<style>
:root {

    --height-title-case : 20px;

    --width-case : 400px;
    --height-case : 200px;

    --width-container : 400px;
    --height-container : 220px;



}
#container{
    width: var(--width-container);
    height: var(--height-container);
	background-color: grey;
	/*border-color: 1px solid red;*/
}

#plan1{
    background-color: yellow;
    width: var(--width-case);
    height: var(--height-case);
    /*width: 400px;
    height: 200px;*/
    opacity:0.5;
    position: absolute;
    border:0;
    margin: 0;
    padding:0;
    background-repeat:no-repeat;
    background-size: cover;
    /*z-index:0;*/
}
#plan2{
    background-color: blue;
    width: var(--width-case);
    height: var(--height-case);
	opacity:0.5;
    position: relative;
    border:0;
    margin: 0;
    padding:0;
    z-index:1;
}
#text{
    width: var(--width-case);
	height:var(--height-title-case);
    background-color: black;
	color:white;
    text-align: center;
    vertical-align: middle;
    border:0;
    margin: 0;
    padding:0;
    line-height: var(--height-title-case);      /* the same as your div height */
}
.upload{
    width: var(--width-case);
    height: var(--height-case);
}
.upload:hover{
    border: solid 3px green;
}
.img{
    width: var(--width-case);
    width: var(--height-case);
}
</style>

<div id="container">
	<div id="plan1" style="background-image:url('https://s1.postimg.org/ga0s55bxr/cover1.jpg');">
        <!-- <img src="https://s1.postimg.org/ga0s55bxr/cover1.jpg" class='img' /> -->
	</div>
	<div id="plan2">
	    <input id="button" type="file" class="upload"/>
	</div>
	<div id="text">title 0001</div>
</div>
