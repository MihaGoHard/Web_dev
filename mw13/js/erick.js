function drawErick(ctx) {
  drawErickBody(ctx);
  drawErickHead(ctx);
}

function drawErickBody(ctx) {
  drawErickPants(ctx);
  drawErickBoots(ctx);
  drawErickJacket(ctx);
  drawErickClasp(ctx);
  drawErickHands(ctx);
}

function drawErickHead(ctx) {
  drawErickFaceOval(ctx);
  drawErickFaceFeatures(ctx)
  drawErickEyes(ctx);
  drawErickCap(ctx);
}

function drawErickPants(ctx) {
  ctx.fillStyle = '#85492d';
  ctx.beginPath();
  ctx.moveTo(222, 170);
  ctx.lineTo(245, 241);
  ctx.lineTo(430, 241);
  ctx.lineTo(453, 170)
  ctx.closePath();
  ctx.fill();
}  

function drawErickBoots(ctx) {
  ctx.fillStyle = '#322b3a';
  ctx.beginPath();
  ctx.moveTo(434, 241);
  ctx.quadraticCurveTo(408, 228, 338, 238);
  ctx.quadraticCurveTo(323, 227, 238, 238);
  ctx.quadraticCurveTo(236, 239, 238, 241);
  ctx.closePath();
  ctx.fill();
}

function drawErickJacket(ctx) {                                       
  ctx.fillStyle = '#ff2243';
  ctx.beginPath();
  ctx.moveTo(249, 121);
  ctx.quadraticCurveTo(234, 130, 220, 152);
  ctx.lineTo(223, 180);
  ctx.quadraticCurveTo(231, 200, 230, 207);
  ctx.bezierCurveTo(260, 240, 372, 235, 387, 218);
  ctx.quadraticCurveTo(420, 218, 435, 216);
  ctx.quadraticCurveTo(457, 206, 451, 180);
  ctx.lineTo(456, 148);
  ctx.bezierCurveTo(442, 144, 450, 127, 425, 123);
  ctx.closePath();
  ctx.fill();
}

function drawErickClasp(ctx) {
  ctx.beginPath(ctx);
  ctx.strokeStyle = '#322b3a';
  ctx.moveTo(350, 171.5);
  ctx.quadraticCurveTo(350, 220, 348, 230);
  ctx.stroke();  

  ctx.beginPath();
  ctx.fillStyle = '#322b3a';
  ctx.ellipse(343, 219, 1, 3, 0, 0, 2 * Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = '#322b3a';
  ctx.ellipse(345, 198, 1, 3, 0, 0, 2 * Math.PI);
  ctx.fill();

  ctx.beginPath();
  ctx.fillStyle = '#322b3a';
  ctx.ellipse(343, 175, 1, 3, 0, 0, 2 * Math.PI);
  ctx.fill();
}

function drawErickHands(ctx) {
  ctx.fillStyle = '#ffe11d';
  ctx.beginPath();
  ctx.moveTo(238, 188);
  ctx.bezierCurveTo(275, 190, 260, 170, 230, 155);
  ctx.bezierCurveTo(201, 147, 202, 185, 230, 188);
  ctx.moveTo(256, 173);
  ctx.quadraticCurveTo(256, 166, 250, 168);
  ctx.closePath();
  ctx.fill();

  ctx.fillStyle = '#ffe11d';
  ctx.beginPath();
  ctx.moveTo(450, 147);
  ctx.quadraticCurveTo(445, 147, 438, 149);
  ctx.quadraticCurveTo(432, 147, 432, 154);
  ctx.bezierCurveTo(422, 160, 430, 170, 420, 170);
  ctx.quadraticCurveTo(417, 180, 427, 180);
  ctx.bezierCurveTo(444, 178, 445, 193, 460, 182);
  ctx.bezierCurveTo(469, 180, 465, 144, 453, 147);
  ctx.closePath();
  ctx.fill();
}

function drawErickFaceOval(ctx) {
  ctx.beginPath();
  ctx.fillStyle = '#ffe0b1';
  ctx.lineWidth = 0.2;
  ctx.ellipse(337, 95, 77, 95, 1.6, 0, 2 * Math.PI);
  ctx.fill();
  ctx.stroke();
  ctx.closePath();
}

function drawErickFaceFeatures(ctx) {  
  ctx.beginPath();
  ctx.lineWidth = 1;
  ctx.moveTo(265, 134);
  ctx.bezierCurveTo(305, 172, 369, 176, 415, 129);
  ctx.stroke();
  ctx.moveTo(326, 154);
  ctx.lineWidth = 0.5;
  ctx.bezierCurveTo(333, 157, 350, 156, 361, 154);
  ctx.stroke();
  ctx.closePath();

  ctx.fillStyle = '#1a171e';
  ctx.beginPath();
  ctx.moveTo(325, 140);
  ctx.lineTo(333, 150);
  ctx.bezierCurveTo(335, 149, 350, 156, 349, 152);
  ctx.bezierCurveTo(348, 148, 355, 143, 354, 138);
  ctx.quadraticCurveTo(330, 135, 325, 140);
  ctx.closePath();
  ctx.fill();
  
  ctx.fillStyle = '#fdf8f2';
  ctx.beginPath();
  ctx.fillRect(332, 139, 5, 3);
  ctx.fillRect(338, 139.5, 6, 3);
  ctx.fillRect(345, 139, 6, 4);
}

function drawErickEyes(ctx) {                                            
  ctx.beginPath();
  ctx.fillStyle = '#fcfcfc';
  ctx.ellipse(318, 92, 24, 28, 3.8, 0, 2 * Math.PI, true);
  ctx.fill();

  ctx.beginPath(ctx);
  ctx.fillStyle = '#fcfcfc';
  ctx.ellipse(366, 92, 23, 27, 2.4, 0, 2 * Math.PI, true);
  ctx.fill();

  ctx.beginPath(ctx);
  ctx.arc(326, 90, 2.2, 0, 2 * Math.PI);
  ctx.fillStyle = '#323337';
  ctx.fill();

  ctx.beginPath(ctx);
  ctx.arc(356, 91, 2.5, 0, 2 * Math.PI);
  ctx.fillStyle = '#323337';
  ctx.fill();
  ctx.closePath();

  ctx.beginPath(ctx);
  ctx.lineWidth = 0.3;
  ctx.strokeStyle = "rgba(0, 0, 0, 0.7)";
  ctx.moveTo(299, 77);
  ctx.quadraticCurveTo(327, 53, 342, 80);
  ctx.quadraticCurveTo(355, 57, 380, 73.5);
  ctx.moveTo(342, 82)
  ctx.quadraticCurveTo(340, 86, 342, 94);
  ctx.stroke();
  ctx.closePath();
}  

function drawErickCap(ctx) {
  ctx.beginPath(ctx);
  ctx.fillStyle = '#00b9c5';
  ctx.moveTo(242, 90);
  ctx.bezierCurveTo(260, -5, 400, -5, 430, 78);
  ctx.bezierCurveTo(390, 54, 300, 54, 242, 90);
  ctx.fill();
  ctx.closePath();

  ctx.beginPath();
  ctx.strokeStyle = '#ffe117';
  ctx.lineWidth = 5;
  ctx.moveTo(430, 78);
  ctx.bezierCurveTo(390, 52, 300, 52, 242, 90);
  ctx.stroke();

  ctx.beginPath(ctx);
  ctx.lineWidth = 1;
  ctx.fillStyle = '#ffe117';
  ctx.moveTo(352, 22);
  ctx.bezierCurveTo(360, 27, 370, 16, 350, 11);
  ctx.bezierCurveTo(345, 10, 347, 5, 325, 10);
  ctx.bezierCurveTo(323, 8, 308, 17, 307, 20);
  ctx.bezierCurveTo(306, 27, 318, 27, 324, 19);
  ctx.lineTo(324, 26);
  ctx.bezierCurveTo(340, 17, 332, 29, 352, 22);
  ctx.fill();
  ctx.closePath();
}




















