window.addEventListener('load', loader);

function loader(){ 

    const DEMARRAGE = gsap.timeline(); // Création d'une timeline pour gérer les animations et les transitions

    DEMARRAGE
    .to('.images-container', {height: 450, duration: 1.3, delay: 0.4, ease: 'power2.out'})   // Méthode de base (contenant les images de base) pour faire des animations (hauteu, durée, comportement...)
    .to('.bloc-txt', {height: 'auto', duration: 0.6, ease: 'power2.out'}, '-=0.8')   // Méthode permettant d'afficher du texte en dessous de la fenêtre des images animées ("Dr Alain Nganko Nkwilang" (sur l'écran de démarrage)) | On le fait démarrer lorsque l'image de base est déja entrain de monter
    .to('.bloc-txt h2', {y: 0, ease: 'power2.out'}, '-=0.6')

    .to('.f2', {y: 0, duration: 0.6, ease: 'power2.out'})   // On fait passer le rideau rouge devant l'image de départ
    .add(() => {
        document.querySelector('.flip-img1').style.backgroundImage = "url('ressources/image1.jpg')";   // On prépare le changement d'image après le passage du rideau rouge
    })
    .to('.f2', {y: '-100%'})   // On fait disparaitre le rideau rouge (pour laisser place à l'image préparée plus haut)

    .to('.load-container', {opacity: 0, duration: 0.8, delay: 0.7})   // On fait disparaitre la SplashScreen (pour afficher la page d'accueil)
    .add(() => {
        document.querySelector('.load-container').style.display = "none"; 
    })
    .add(() => {
        document.querySelector('video').play()   // On lance la vidéo pour qu'elle soit déja entrain de tourner lorsque la page d'accueil s'affiche
    }, '-=0.8')

} /* Tout le code JavaScript ci-dessus sert simplement pour l'animation de la SplashSreen 
           (animation au démarrage) et la liaison avec la page d'accueil */




/* Configuration du Click / interaction sur la barre de menu */

     function onClickMenu(){
        document.getElementById("menu").classList.toggle("change");
        document.getElementById("nav").classList.toggle("change");
        
        document.getElementById("menu-bg").classList.toggle("change-bg");
    }


    /* Configuration du Click de la flèche de remontée*/
     
    const btn = document.querySelector('.btn');

    btn.addEventListener('click', () => {
    
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        })
    })




    
