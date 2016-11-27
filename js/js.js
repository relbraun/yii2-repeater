/**
 * Created by Arielb on 11/24/2016.
 */
jQuery(function($){

    var Repeater = function(url){
        var appendUrl = url.append,
            deleteUrl = url.remove;
        var self = this;
        this.id = 1;
        this.archive = [];
        var $wrap = $('.ab-repeater .list-area'),
            $recover = $('.ab-repeater .recover-btn');
        this.recover = function(){
            $wrap.append(this.archive.pop());
            if(this.archive.length === 0){
                $recover.prop('disabled', true);
            }
        };
        $(document).on('click', '.repeater-item .remove', function(){

            if(confirm('Do you really want to delete this item?')){
                self.archive.push($(this).parents('.repeater-item').clone());
                var $item = $(this).parents('.repeater-item');
                var data ={id:$item.data('id')};
                $.post(deleteUrl,data, function(data){
                    $item.remove();
                    $recover.prop('disabled', false);
                });
            }
        });

        $('.new-repeater').click(function(){
            var data ={id:self.id};
            data[yii.getCsrfParam()]=yii.getCsrfToken();
            data.additionalData = $('.repeater-item').find('input,select,textarea').serialize();
            $.post(appendUrl,data, function(data){
                $wrap.append($(data));
            });
            self.id++;
        });
        $recover.click(function(){
            self.recover();
        })
    };

    window.repeater = Repeater;
});