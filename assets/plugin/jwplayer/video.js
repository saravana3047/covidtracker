var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
function setHiderRatio(e) {
    var x = function () {
        var k = e.css("display");
        e.css("display", "block");
        e.height(e.width() * 9 / 16);
        e.css("display", k);
    }
    x();
    document.addEventListener('DOMContentLoaded', x);
    window.addEventListener('resize', x);
}
var dimg = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAASCAYAAABb0P4QAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0"
	+ "WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6e"
	+ "D0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJ"
	+ "kZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIge"
	+ "G1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3R"
	+ "SZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW"
	+ "50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpCRDc2NUM3RDFEMEMxMUUyQjU2QUFCQUEyM0JGREJGRCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpCR"
	+ "Dc2NUM3RTFEMEMxMUUyQjU2QUFCQUEyM0JGREJGRCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkJENzY1QzdCMUQwQzExRTJC"
	+ "NTZBQUJBQTIzQkZEQkZEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkJENzY1QzdDMUQwQzExRTJCNTZBQUJBQTIzQkZEQkZEIi8+IDwvcmRmOkRlc2NyaXB0aW9u"
	+ "PiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+czMQdgAAAPdJREFUeNpi+P//PwMOzATEh/9jgp149DAwMeAGjFCMTRwnwGcgLnmKDGSg"
	+ "poF/yfEyCxqfDYiTgZgZiP8BsTAWPSJAnATEXFBL5wLxL7gslpidiBSj/7DE8l8kdhtUD9wMbFHPAsQ9/wmDFmzJBld64gHi83gM24juMkIGgrAaEN/AYtg1IFbGpQ+f"
	+ "gSBsDMT3kAy7DcR6+PQQMhCEHZEMtCeknhFsKmGQD0oQQDyJYKoHGigEpGOBWAoq9g9NDcig31A2K5aEDcvzoLS4CeTM0v/UA8dBWY+PgXqAC5T1ZgLxdyAWQvIiOQUGK"
	+ "Kh2ExspRAOAAAMARqI5WRk9ASEAAAAASUVORK5CYII%3D";
function setPlayer(hider, player) {
    setHiderRatio(hider);
    setHiderRatio(player);
    hider.css("display", "block");
    hider.css("background-image", "url('./images/play.png')");
    player.css("display", "none");
    var t, as = 0;
    
    player.on('error', function () {
        console.log("error");
    })
    player.on('waiting', function () {

        hider.css("background-image", "url('./images/loading.gif')");
        hider.css("opacity", "0.75");
        hider.css("display", "block");
        this.controls = false;
    })
    player.on('pause', function () {
        if (this.readyState >= this.HAVE_FUTURE_DATA) {
            hider.css("background-image", "url('./images/play.png')");
            hider.css("opacity", "0.75");
            hider.css("display", "block");
        }
    })
    player.on('progress', function () {
        console.log('a');
    },false)
    player.on('play', function () {
        hider.css("background-image", "url('./images/play.png')");
        hider.css("display", "none");
        hider.css("opacity", "1");
        player.css("display", "block");
        this.controls = true;
    })
    player.on('canplay', function () {
        hider.css("background-image", "url('./images/play.png')");
        hider.css("display", "none");
        hider.css("opacity", "1");
        $(this).css("display", "block");
        this.controls = true;
    });
    
    hider.on('click', function () {
        player.each(function () {
            this.play();
        })
    });
}
/*
var video = document.createElement('video');
    video.className = "video";
    video.style.width = "100%";
    video.setAttribute("preload", "none");
    video.controls = true;
    var src = document.createElement('source');
    src.setAttribute('src', lsrc);
    video.appendChild(src);
    video.style.display = "none";
    video.addEventListener('waiting', function () {
        video.style.display = "none";
        hider.style.display = "block";
        icon.src = "./images/loading.gif";
    })
    video.addEventListener('canplay', function () {
        video.style.display = "block";
        hider.style.display = "none";
        icon.src = "./images/play.png";
    })
    hider.addEventListener('click', function () {
        video.play();
    })
*/