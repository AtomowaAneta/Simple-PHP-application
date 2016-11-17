 $(function() {
        $(".draggable").draggable({
          appendTo: 'app_wrapper',
          revert: "invalid",
          start: function(e,ui){ui.helper.width($(this).width());}
        });
        $(".droppable").droppable({
          hoverClass: "hover_on_app_wrapper",
          drop: function(e,ui) {
            var item = ui.draggable;
            this.innerHTML = '';
            item.css({top:0, left:0}).appendTo(this);
          }, 
      });
      });
