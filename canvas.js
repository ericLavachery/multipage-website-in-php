var c = document.getElementById("jauliMaizon");
var ctx = c.getContext("2d");

// toît
ctx.beginPath();
ctx.moveTo(0, 120);
ctx.lineTo(150, 0);
ctx.lineTo(300, 120);
ctx.lineTo(0, 120);
ctx.fillStyle = '#f48825';
ctx.fill();
ctx.stroke();
ctx.closePath();

// maison
ctx.beginPath();
ctx.moveTo(40, 120);
ctx.lineTo(40, 300);
ctx.lineTo(260, 300);
ctx.lineTo(260, 120);
ctx.fillStyle = '#e4c419';
ctx.fill();
ctx.stroke();
ctx.closePath();

// porte
ctx.beginPath();
ctx.moveTo(65, 300);
ctx.lineTo(65, 230);
ctx.lineTo(115, 230);
ctx.lineTo(115, 300);
ctx.fillStyle = '#634848';
ctx.fill();
ctx.stroke();
ctx.closePath();

// grd fenêtre rez
ctx.beginPath();
ctx.moveTo(135, 230);
ctx.lineTo(135, 275);
ctx.lineTo(185, 275);
ctx.lineTo(185, 230);
ctx.lineTo(135, 230);
ctx.fillStyle = '#d1f0ec';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(135, 275);
ctx.lineTo(185, 240);
ctx.lineTo(185, 275);
ctx.lineTo(135, 275);
ctx.fillStyle = '#a1d7d1';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(185, 230);
ctx.lineTo(185, 275);
ctx.lineTo(235, 275);
ctx.lineTo(235, 230);
ctx.lineTo(185, 230);
ctx.fillStyle = '#d1f0ec';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(185, 275);
ctx.lineTo(235, 240);
ctx.lineTo(235, 275);
ctx.lineTo(185, 275);
ctx.fillStyle = '#a1d7d1';
ctx.fill();
ctx.stroke();
ctx.closePath();

// grd fenêtre étage
ctx.beginPath();
ctx.moveTo(135, 150);
ctx.lineTo(135, 195);
ctx.lineTo(185, 195);
ctx.lineTo(185, 150);
ctx.lineTo(135, 150);
ctx.fillStyle = '#d1f0ec';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(135, 195);
ctx.lineTo(185, 160);
ctx.lineTo(185, 195);
ctx.lineTo(135, 195);
ctx.fillStyle = '#a1d7d1';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(185, 150);
ctx.lineTo(185, 195);
ctx.lineTo(235, 195);
ctx.lineTo(235, 150);
ctx.lineTo(185, 150);
ctx.fillStyle = '#d1f0ec';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(185, 195);
ctx.lineTo(235, 160);
ctx.lineTo(235, 195);
ctx.lineTo(185, 195);
ctx.fillStyle = '#a1d7d1';
ctx.fill();
ctx.stroke();
ctx.closePath();

// pt fenêtre étage
ctx.beginPath();
ctx.moveTo(65, 150);
ctx.lineTo(65, 195);
ctx.lineTo(115, 195);
ctx.lineTo(115, 150);
ctx.lineTo(65, 150);
ctx.fillStyle = '#d1f0ec';
ctx.fill();
ctx.stroke();
ctx.closePath();
ctx.beginPath();
ctx.moveTo(65, 195);
ctx.lineTo(115, 160);
ctx.lineTo(115, 195);
ctx.lineTo(65, 195);
ctx.fillStyle = '#a1d7d1';
ctx.fill();
ctx.stroke();
ctx.closePath();


// TEST ENTRE DEUX PIXELS

var c = document.getElementById("testPixels");
var ctx = c.getContext("2d");

ctx.beginPath();
ctx.moveTo(0, 0);
ctx.lineTo(6, 0);
ctx.lineTo(6, 6);
ctx.lineTo(0, 6);
ctx.lineTo(0, 0);
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.moveTo(3, 0);
ctx.lineTo(3, 6);
ctx.stroke();
ctx.closePath();


// DEAD KENNEDY'S

var c = document.getElementById("dk");
var ctx = c.getContext("2d");
var centerX = c.width/2+4;
var centerY = c.height/2+5;

var radius = 328;
ctx.beginPath();
ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
ctx.fillStyle = '#141414';
ctx.fill();
ctx.closePath();

var radius = 231;
ctx.beginPath();
ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI, false);
ctx.fillStyle = 'red';
ctx.fill();
ctx.lineWidth = 5;
ctx.strokeStyle = '#000000';
ctx.stroke();
ctx.closePath();
