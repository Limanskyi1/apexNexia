document.addEventListener("DOMContentLoaded", () => {
  const ball = document.querySelector(".rotate-wrap");
  const diametr = Math.floor(Number(ball.clientWidth));
  const smallBall = document.querySelectorAll(".rotate-wrap .planet");

  smallBall.forEach((ball) => {
    let startPos = ball.dataset.startPosition;
    let angle = (Number(startPos) * Math.PI) / 180;
    const radius = diametr / 2;

    function updatePosition() {
      const x = radius * Math.cos(angle);
      const y = radius * Math.sin(angle);

      ball.style.top = `${y + radius}px`;
      ball.style.left = `${x + radius}px`;

      angle += 0.003;
      requestAnimationFrame(updatePosition);
    }

    updatePosition();
  });
});