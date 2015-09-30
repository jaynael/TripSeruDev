window.onload = function() {
    var $sidenav = $('#sidenav');
    var globalLeft = $('#global').offset().left;
    var sidenavWidth = $sidenav.outerWidth();
    
    if (globalLeft > sidenavWidth + 10) {
        var indexElem = [];
        
        $sidenav.css('left', globalLeft - sidenavWidth - 10);
        
        $('#global [data-textmenu]').each(function(i) {
            $(this).attr('id', 'section-' + i);
            indexElem.push([$(this).offset().top, this.id]);
            
            $('<li><a href="#section-'+ i +'">' + (this.getAttribute('data-textmenu') ? this.getAttribute('data-textmenu')  : this.textContent) + '</a></li>').appendTo('#sidenav ul');
        });
        
        var timer;
        
        $('#sidenav').on('click', 'a', function() {
            var offsetTop = $($(this).attr('href')).offset().top;
            $('html, body').animate({
                scrollTop: offsetTop
            }, 500);
            
            $('#sidenav .selected').removeClass('selected');
            $(this).addClass('selected');
            
            return false;
        });
                    
        $(window).scroll(function() {
            timer = setTimeout(function() {
                if (indexElem.length < 1) return;
                
                var domTop = $(document).scrollTop();
                
                if (domTop >= indexElem[0][0]) {
                    $('#sidenav').fadeIn();
                }
                else {
                    $('#sidenav').fadeOut();
                }
                
                var id;
                
                for (var i = 0; i < indexElem.length; i++) {
                    if (domTop + 15 >= indexElem[i][0]) {
                        id = indexElem[i][1];
                    }
                }
                
                $('#sidenav a.selected').removeClass('selected');
                $('#sidenav a[href="#' + id +'"]').addClass('selected');
                
            }, 1000);
        });
    }
    
    $(".fancybox").fancybox({
        width: "90%",
        height: "90%"
    });
    
    $("#share-facebook").click(function() {
        FB.ui({
            method: 'share',
            href: $(this).data('url')
        }, function(response){
            if (response && !response.error_code) {
                var kupon = $('#kupon-beneran').text();
                var cku = '';
                
                for (var i = 0; i < kupon.length; i+=2) {
                     var char = (kupon[i] + kupon[i+1]) ^ 23;
                    cku += String.fromCharCode(char);
                }
                
                $('#kupon-beneran').text(cku);
                
                $('#kupon').show();
                
                var offsetTop = $('#kupon-result').offset().top;
                $('html, body').animate({
                    scrollTop: offsetTop
                }, 500);
            }
        });
    })
};
