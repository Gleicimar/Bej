//Menu

const btnMobile =  document.getElementById('btn');

function toggleMenu(event ){
if(event ==='touchstart') event.preventDefault( );
    const nav  =  document.getElementById( 'nav' );
    nav.classList.toggle( 'active' );
    event.currentTarget.setAttribute('aria-expanded' , 'active');
    const active = nav.classList.contains('active');
    if(active){
        event.currentTarget.setAttribute('aria-label','Fechar Menu');
    }else{
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
}
    btnMobile.addEventListener('click', toggleMenu);
    btnMobile.addEventListener('touchstart', toggleMenu);
