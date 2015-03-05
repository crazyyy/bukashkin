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


function DelayHiddenLayer(layername,button_){
	aVis=layername;
	buttona=button_;
	tim=setTimeout('HiddenLayer()',TimeToShow);
}


function HiddenLayer(){
	if (NewVersion)
	{
		if (aVis!=0)
		{
			document.getElementById(aVis).style.display ='none';
			if(buttona!=0 && buttona!=menu_a){
				document.getElementById(buttona).className='menu';
			}
			
		}
			clearTimeout(tim);
	}
}


function VisibleLayer(layername,button_){
	HiddenLayer();
	document.getElementById(button_).className="menua";
	if (NewVersion)
	{
		document.getElementById(layername).style.display ='block';			
	}
}
