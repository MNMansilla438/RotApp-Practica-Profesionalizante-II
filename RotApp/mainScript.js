const imageRandom = ["https://campaignsandcoffee.files.wordpress.com/2012/12/179546_456365777743951_2086700720_n.jpg?w=584",
"http://www.adworld.ie/wp-content/uploads/2016/09/op.jpg", "https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2010%2F03%2Fwin-an-ipad-00.jpg?w=960&cbr=1&q=90&fit=max",
"https://i.pinimg.com/originals/57/da/f8/57daf8d33dc09764bdfa7d6ccb882958.png", 
"https://external-preview.redd.it/I0oe0eOZNL1quCpiL5V0Hu3677QxyZx7Rr7RmBUlMoI.jpg?auto=webp&s=638fda26483b814f2673c7df6ec3d338dd6b6751"] 
		
const x = document.querySelector("#imagenRand");
setInterval(tiempo, 4000);

function tiempo(){
    let cron = Math.round(Math.random() * (0, 4));
    x.src = imageRandom[cron]
}
