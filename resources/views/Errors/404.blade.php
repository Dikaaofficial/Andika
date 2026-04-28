<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>404 - Kicaw</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    width: 100%;
    height: 100%;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
}

#bgVideo {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    object-fit: cover; /* WAJIB */
    z-index: -2;
}

.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.4);
    z-index: -1;
}

.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    color: white;
}

h1 {
    font-size: 120px;
    font-weight: bold;
    color: yellow;
    animation: dance 0.4s infinite;
}

h2 {
    margin-top: 10px;
    animation: bounce 1s infinite;
}

p {
    margin-top: 10px;
    color: #ddd;
}

a {
    display: inline-block;
    margin-top: 20px;
    padding: 12px 25px;
    background: linear-gradient(90deg, yellow, orange);
    color: black;
    text-decoration: none;
    border-radius: 30px;
    font-weight: bold;
    transition: 0.3s;
}

a:hover {
    transform: scale(1.1);
}

@keyframes dance {
    0% { transform: translate(0,0) rotate(0deg); }
    25% { transform: translate(-5px,5px) rotate(-5deg); }
    50% { transform: translate(5px,-5px) rotate(5deg); }
    75% { transform: translate(-5px,-5px) rotate(-5deg); }
    100% { transform: translate(5px,5px) rotate(5deg); }
}

@keyframes bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.flash {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.05);
    animation: flash 1s infinite;
}

@keyframes flash {
    0% { opacity: 0.05; }
    50% { opacity: 0.15; }
    100% { opacity: 0.05; }
}
</style>
</head>

<body>

<video autoplay muted loop playsinline id="bgVideo">
    <source src="{{ asset('video/kicaw.mp4') }}" type="video/mp4">
</video>

<div class="overlay"></div>
<div class="flash"></div>

<div class="container">
    <h1>404</h1>
    <h2>Kicaw 😹 kamu nyasar!</h2>
    <p>Halaman ini lagi joget, jadi nggak bisa kamu temuin 🎶</p>
    <a href="/">Balik dulu 😭</a>
</div>

</body>
</html>