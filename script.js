document.addEventListener('mousemove',function(evt) {
    const xInput = document.querySelector('#positionX');
    const yInput = document.querySelector('#positionY'); 
    document.addEventListener("mousemove", position => {
      console.log(position.x, position.y);
      xInput.value = position.x;
      yInput.value = position.y;
    });
});