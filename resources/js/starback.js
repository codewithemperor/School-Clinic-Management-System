<script>
    
        const starback = new Starback("#canvas", {
        width: document.body.clientWidth,
        height: document.body.clientHeight,
        type: 'line',
        speed: 5,
        frequency: 5,
        slope: { x: -1, y: 10 },
        directionX: 1,
        speed: 3,
        spread: -10,
        randomOpacity: true,
        backgroundColor: ['#0F2027', '#203A43', '#2C5364'],
        quantity: 30,
        });

        let mountain = new Image();
        mountain.src = 'images/mountain2.png';

        mountain.onload = () => {
        starback.addToFront((ctx) => {
            ctx.drawImage(
            mountain,
            0,
            0,
            mountain.width,
            mountain.height,
            0,
            canvas.height - mountain.height,
            canvas.width,
            mountain.height
            );
        });
        }
    
        
      </script>