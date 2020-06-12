function drawKenny(ctx) {
  drawKennyBody(ctx);
  drawKennyHead(ctx)
}

function drawKennyBody(ctx) {
  drawKennyJacket(ctx);
  drawKennyBoots(ctx);
  drawKennyHands(ctx)
  drawKennyClasp(ctx);
}

function drawKennyHead(ctx) {
  drawKennyHood(ctx);  
  drawKennyCollar(ctx);
  drawKennyFaceOval(ctx);
  drawKennyEyes(ctx);
  drawKennyHearCollar(ctx);
  drawKennyLaces(ctx);
}

function drawKennyJacket(ctx) {                                   // куртка
  ctx.fillStyle = '#f96c02';
  ctx.beginPath();
  ctx.moveTo(495, 158);
  ctx.quadraticCurveTo(477, 186, 478, 196);
  ctx.lineTo(497, 202);
  ctx.lineTo(495, 218);
  ctx.lineTo(502, 220);
  ctx.lineTo(502, 237);
  ctx.lineTo(602, 237);
  ctx.lineTo(602, 220);
  ctx.lineTo(611, 220);
  ctx.lineTo(611, 202);
  ctx.lineTo(623, 198);
  ctx.quadraticCurveTo(623, 180, 607, 158);
  ctx.closePath();
  ctx.fill();
}  

function drawKennyBoots(ctx) {                                    // кеды      
  ctx.fillStyle = '#000000';
  ctx.beginPath();
  ctx.moveTo(502, 237);
  ctx.lineTo(604, 237);
  ctx.quadraticCurveTo(607, 239, 604, 241);
  ctx.lineTo(497, 241);
  ctx.quadraticCurveTo(493, 239, 497, 237);
  ctx.closePath();
  ctx.fill();
}  

function drawKennyHands(ctx) {                                     // варежки, чтоб не замёрз   
  ctx.beginPath();
  ctx.moveTo(498, 202);
  ctx.quadraticCurveTo(499, 194, 500, 189);
  ctx.moveTo(603, 202);
  ctx.quadraticCurveTo(602.5, 192, 602, 190);
  ctx.strokeStyle = '#000000';
  ctx.lineWidth = 0.5;
  ctx.stroke();
  ctx.beginPath();
  ctx.fillStyle = '#844418';
  ctx.arc(483, 207, 12, 0, 2 * Math.PI);
  ctx.fill();
  ctx.beginPath();
  ctx.fillStyle = '#844418';
  ctx.strokeStyle = '#000000';
  ctx.arc(493, 204, 5, 0, 2 * Math.PI);
  ctx.stroke();
  ctx.fill();
  ctx.beginPath();
  ctx.fillStyle = '#844418';
  ctx.arc(617, 209, 12, 0, 2 * Math.PI);
  ctx.fill();
  ctx.beginPath();
  ctx.fillStyle = '#844418';
  ctx.strokeStyle = '#000000';
  ctx.arc(607, 204, 5, 0, 2 * Math.PI);
  ctx.stroke();
  ctx.fill();
  ctx.closePath();
}  

function drawKennyClasp(ctx) {                                         // застёжка       
  ctx.beginPath();                                                  
  ctx.lineWidth = 0.6;
  ctx.strokeStyle = '#852000';
  ctx.moveTo(495, 159);
  ctx.quadraticCurveTo(550, 200, 600, 166);
  ctx.stroke();
  ctx.beginPath();
  ctx.lineWidth = 1;
  ctx.strokeStyle = '#000000';
  ctx.moveTo(552, 181);
  ctx.lineTo(552, 226);
  ctx.stroke();
  ctx.closePath();
} 

function drawKennyHood(ctx) {                                           // капюшон  
  ctx.beginPath();
  ctx.fillStyle = '#f96c02';
  ctx.arc(550, 94, 85, 0, 2 * Math.PI);
  ctx.fill();
  ctx.closePath();
}   

function drawKennyCollar(ctx) {                                          // воротник капюшона оранжевый
  ctx.beginPath();
  ctx.ellipse(550, 100, 54, 61, Math.PI / 2, 0, 2 * Math.PI);
  ctx.lineWidth = 0.8;
  ctx.strokeStyle = '#000000';
  ctx.stroke();
}  

function drawKennyFaceOval(ctx) {                                            
  ctx.beginPath();
  ctx.fillStyle = '#ffe0b1';
  ctx.arc(550, 94, 46, 0, 2 * Math.PI);
  ctx.fill();
}  
 
function drawKennyEyes(ctx) {                                             
  ctx.beginPath();
  ctx.fillStyle = '#fcfcfc';
  ctx.ellipse(527, 90, 23, 27, 3.8 , 0, 2 * Math.PI, true);
  ctx.fill();

  ctx.beginPath(ctx);
  ctx.fillStyle = '#fcfcfc';
  ctx.ellipse(575, 95, 23, 28, 2.5, 0, 2 * Math.PI, true);
  ctx.fill();

  ctx.beginPath(ctx);
  ctx.arc(535, 89, 3, 0, 2 * Math.PI);
  ctx.fillStyle = '#000000';
  ctx.fill();

  ctx.beginPath(ctx);
  ctx.arc(566, 91, 3, 0, 2 * Math.PI);
  ctx.fillStyle = '#000000';
  ctx.fill();
  ctx.closePath();

  ctx.beginPath(ctx);
  ctx.lineWidth = 0.3;
  ctx.strokeStyle = "rgba(0,0,0,0.7)";
  ctx.moveTo(551, 84);
  ctx.quadraticCurveTo(549, 90, 550, 94);
  ctx.moveTo(523, 66);
  ctx.quadraticCurveTo(545, 62, 551, 83);
  ctx.quadraticCurveTo(562, 64, 577, 71);
  ctx.stroke();
  ctx.closePath();
}  

function drawKennyHearCollar(ctx) {                                            // волосатый воротник
  ctx.beginPath();
  ctx.moveTo(546, 140);
  ctx.quadraticCurveTo(622, 98, 550, 47);
  ctx.moveTo(550, 47);
  ctx.bezierCurveTo(635, 50, 608, 157, 546, 140);
  ctx.moveTo(546, 140);
  ctx.bezierCurveTo(500, 114, 506, 67, 550, 47);
  ctx.moveTo(550, 47);
  ctx.bezierCurveTo(466, 50, 485, 148, 546, 140);
  ctx.fillStyle = '#844418';
  ctx.fill();
  ctx.closePath();
}

function drawKennyLaces(ctx) {                                                  // висюльки
  ctx.beginPath();
  ctx.moveTo(547, 140);
  ctx.bezierCurveTo(554, 145, 546, 167, 553, 173);
  ctx.moveTo(547, 140);
  ctx.bezierCurveTo(545, 147, 540, 167, 538, 166);
  ctx.lineWidth = 1;
  ctx.strokeStyle = '#000000';
  ctx.stroke();
  ctx.closePath();
}  

