  $(".doSomething").click(function(){
            $(".square")
                .animate({opacity:"0"},1000)
                .animate ({left: "+=25%", padding: "-=100px"}, 2000)
                .animate({opacity:"1"},1000)
                .animate ({top: "-=100", height: "100px", width: "100px"}, "slow")
                .animate({backgroundColor: "red"}, 100)
                .animate ({opacity: "0"}, "slow")
    return false;
  });





















