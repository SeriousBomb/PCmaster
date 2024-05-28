let ball = document.querySelector('.catalog');
/*document.addEventListener('keydown', function(e){
    console.log('key code - ', e.keyCode);
    if(e.keyCode == 38){
        let goUp = ball.offsetTop;
        console.log(goUp);
        ball.style.top = goUp - 40 + "px";
    }
    if(e.keyCode == 40){
        let goDown = ball.offsetTop
        ball.style.top = goDown + 40 + "px"
    }
    if(e.keyCode == 37){
        let goLeft = ball.offsetLeft
        ball.style.left = goLeft - 40 + "px"
    }
    if(e.keyCode == 39){
        let goRight = ball.offsetLeft
        ball.style.left = goRight + 40 + "px"
    }
});*/
let topButton = document.querySelector('.catalog');
ball.onclick = function() { ball.style.top = ball.offsetTop + 40 + 'px';}
let time = setInterval(frame, 10);

ball.addEventListener('click', moveDown);
function moveDown(){
    let coordY = 50;
    function frame() {
        if (coordY == 150) {
          clearInterval();
        } else {
          coordY++;
          box.style.top = coordY + 'px';
        }
    }
}

