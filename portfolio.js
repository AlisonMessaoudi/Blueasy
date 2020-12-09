jQuery(document).ready(function($){
    // quand le document est prêt et a fini de charger
        
    $('a.lien_menu').click(function(e) {
    // au click du lien de class nav-link
        
        e.preventDefault();
        // on stoppe les autres évènements
        
        var id = $(this).attr('href');
        // on récupère l'attribut href de l'élément qui a déclenché l'évènement

        $('.slide img:not('+id+')').fadeOut('slow', 'linear');
        // on prend les img mais qui n'ont pas l'id du lien
        
        $(id).fadeIn('slow', 'linear');
        // on affiche la slide qui correspond à l'Id

        $('.nav a.lien_menu').removeClass('active');
        // on enlève la classe active partout
        
        $(this).addClass('active');
        // on l'ajoute au lien selectionné

    });

})