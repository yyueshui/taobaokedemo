$(document).ready(function(){

    $('#submit').on('click',function(){
        $('#msg').removeClass('clr-red').text('数据提交中...');
        $.ajax({
            type: "POST",
            url: AJAX_URL.init,
            data: {
                itemUrl : $('#itemUrl').val(),
                appKey : $('#appKey').val(),
                appSecret : $('#appSecret').val()
            },
            dataType: 'json'
        }).done(function(data){
            if(data.code<0){
                if(data.msg=='isv.permission-api-package-limit'){
                    $('#msg').html('缺少权限包,请访问 <a href="http://baichuan.taobao.com/portal/doc?articleId=247#ss2" target="_blank">权限申请帮助文档</a> 申请权限后即可正常使用本Demo.').addClass('clr-red');
                }else{
                    $('#msg').text(data.msg).addClass('clr-red');
                }
            }else{
                $('#msg').text('入库完成.');
                loadItems();
            }
        }).fail(function(data){
            console.log(data);
            $('#msg').text(data.status + ' ( ' + data.statusText +' )').addClass('clr-red');
        });
    });
    $('#appSecret').on('keypress',function(event){
        if ( event.which == 13 ) {
            $('#submit').trigger('click');
            event.preventDefault();
        }
    });

    loadItems();
    function loadItems(){
        $.ajax({
            type: "GET",
            url: AJAX_URL.api,
            data: {
            },
            dataType: 'json'
        }).done(function(data){
            var html = [];
            var linkPrefix = 'http://detail.taobao.com/item.htm?id=';
            if(data.data && data.data.length>0){
                $('.phone').show();
                data.data.map(function(d){
                    html.push('<li>',
                            '<div class="img">',
                                '<a target="_blank" href="'+linkPrefix+ d.iid+'" title="'+ d.name +'">',
                                    '<img src="'+ d.pic +'_150x150.jpg">',
                                '</a>',
                            '</div>',
                            '<div class="meta">',
                                '<p class="name">'+ d.name +'</p>',
                                '<p class="price">&yen; '+ d.price +' 元</p>',
                            '</div>',
                        '</li>');
                });
                $('.phone-list-view').html(html.join(''));
            }else{
                $('.phone').hide();
            }

        })
    }
});
