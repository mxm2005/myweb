/**
 * Created with JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-4
 * Time: 下午4:43
 * To change this template use File | Settings | File Templates.
 */
var Main = (function(){
    var className = "Main";
    var body = {}
    body.className = className;
    body.constructor = null;
    body.addMsg=function(){
        var name=$("#author").val();
        var email=$("#email").val();
        var subject=$("#subject").val();
        var text=$("#text").val();
        $.post("/ajax/msg_add.php",
            {"name":name,"email":email,"title":subject,"text":text,"d":new Date()},
            function(data){
                if(data=="True"){
                    alert("你的留言已成功提交。");
                }else{
                    alert("提交发生异常。");
                }
            }
        );
    },
    body.show=function(){
        alert("HHHHHHHHHHHHHHHHHH");
    }
    return body;
})();