window.onerror = null;
TimeToShow=500;
var aVis=0;
var buttona=0;
var tim;
var menu_a=0;
if (document.getElementById)
{
	NewVersion=true;
}


function DelayHiddenLayer(layername,button){
	aVis=layername;
	buttona=button;
	tim=setTimeout('HiddenLayer()',TimeToShow);
}


function HiddenLayer(){
	if (NewVersion)
	{
		if (aVis!=0)
		{
			document.getElementById(aVis).style.display ='none';
			if(buttona!=0 && buttona!=menu_a){
				eval(buttona).className='menu';
			}
			
		}
			clearTimeout(tim);
	}
}


function VisibleLayer(layername,button){
	HiddenLayer();
	eval(button).className="menua";
	if (NewVersion)
	{
		document.getElementById(layername).style.display ='block';			
	}
}
