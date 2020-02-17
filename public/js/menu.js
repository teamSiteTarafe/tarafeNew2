const menu = () => {

    const trait = document.querySelector('.trois_traits');
    const boutonmenu =  document.querySelector('.barre_bouton');

    trait.addEventListener('click', ()=>{
        boutonmenu.classList.toggle('afficher');
    });
}
menu();