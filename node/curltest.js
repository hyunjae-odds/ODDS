var date = new Date();
date.setDate(date.getDate()-30);
console.log(date.getFullYear() + " " + (date.getMonth()+1) + " " + date.getDate());