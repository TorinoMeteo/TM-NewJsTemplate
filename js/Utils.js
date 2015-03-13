
// tracking div with fade
(function($) {
    $.fn.TrackingEl = function(Elem,X,Y,func) {
        var tcEl = this;
        $('body').append('<div id="'+Elem+'"/>');
        $(document).mousemove(function(mTC){
            $(Elem).css({top:(mTC.pageY+Y)+"px",left:(mTC.pageX+X)+"px"});
        });
        tcEl.each(function(){
           var el = $(this);
           var ti = el.attr('title');
           el.hover(function(){
                $(Elem).fadeTo(300, 1).html( ti );
                el.attr('title', '');
            },function(){
                $(Elem).hide(); //.html('');
                el.attr('title', ti);
            });
        });
    };
})(jQuery);

//rotate Image Function
function RotateTo(Elem,Target)
{
$(Elem).rotate({ animateTo:Target,duration:8000 ,easing: $.easing.easeInOut });
}

//Thermometer
function SetThermometerValue(Elem,target)
{
	$(Elem).jqxProgressBar({animationDuration:5000, layout: "reverse", orientation: 'vertical', value: ((target+40.0)*0.818+19.5), width: 50, height: 240 });

}

function SetSegmentValue(id,value,digitnum){

  $(id).sevenSeg({
    digits: digitnum,
    value: value,
    colorBackground: 'white',
    colorOn: '#000000',
    decimalPlaces:-1,
    colorOff: '#E9E9E9'
     });
}

function GetNumLen(num){
  var str = num.toString();
  if(str.indexOf('.')>0){
    return parseInt(str.length)-1;
  }
  else{
    return parseInt(str.length);
  }
}
