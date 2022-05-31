if (!('Notification' in window)) {
    alert('le navigateur ne supporte pas les notification');
}

if(Notification.permission === 'granted'){
    new Notification('notif si pas de permission! ');
}else{
    Notification.requestPermission()
    .then(status =>{
        if(status === "granted"){
            new Notification('Notif apres la permission  !'); 
        }
    })
}

Notification.requestPermission().then(function (status) {
    if (status === 'denied') {
        Notification.requestPermission()
        .then(status =>{
            if(status === "granted"){
                new Notification('Notif apres la permission  !'); 
            }
        })
    } else if (status === 'granted') {
        new Notification('notif si pas de permission! ');
    }
});

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position){
        console.log(position);
        //var img = new Image();
        //img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + position.coords.latitude +","+ position.coords.longitude + "&zoom=13&size=800x400&sensor=false";
    })
}