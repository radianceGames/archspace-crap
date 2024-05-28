/***********************************
 jsLib.js
 by TheDAZ
***********************************/


/******************************************************
 open new window
******************************************************/
function newWindow(Filename, width, height)
{
  window.open(Filename,'preview','toolbar=no,status=no,width='+width+',height='+height+',directories=no,scrollbars=no,location=no,resizable=no,menubar=no');
}

/******************************************************
 all pages common code
******************************************************/
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

/******************************************************
 right mouse button prohibition
******************************************************/
function hidden()
{
  if (document.layers)
  {
    n = 1;
    ie = 0;
  }

  if (document.all)
  {
    n = 0;
    ie = 1;
  }

  /* for NS */
  /* 1:left, 2:middle, 3:right */
  function clickEvent(e)
  {
    if (e.which == 3) 
    return false; 
  } 

  /* for IE */
  /* 0:no button, 1:left, 2:right, 3:left+right, 4:middle, 5:left+middle, 6:right+middle, 7:left+middle+right */
  function click()
  {
    if (event.button == 2) 
    return false;
  }

  if (n)
  {
    document.onmousedown = clickEvent;
  }

  if (ie)
  {
    document.onmousedown = click;
  }
}

/******************************************************
 - for Form a New Fleet
 - insert Fleet name to text box
******************************************************/
function insert(msg)
{
  if(document.FfleetNumber.NEW_FLEET_NAME.value != "")
  {
    exist = document.FfleetNumber.NEW_FLEET_NAME.value;
    document.FfleetNumber.NEW_FLEET_NAME.value = exist + "-" + msg;
  }
  else
  {
    document.FfleetNumber.NEW_FLEET_NAME.value = msg;
  }
}

/******************************************************
 - for Defense Plan description
 - display Plan description to text box
******************************************************/
function update(msg)
{
  document.Fdescription.description.value = msg;
}

/******************************************************
 - for Defense Plan description
 - Description variable definition
******************************************************/
var BLANK = "";

var NORMAL = "The fleet will move forward until there is an enemy in range, and will then engage the enemy. The flight path of a normal fleet is considered 1500 wide with the fleet in the center.";

var FORMATION = "The fleets in this group will retain the same formation they are originally placed in. They entire formation will then move forward via the Normal command. They move at the speed of the slowest fleet in the formation.  There is a chance that they will break formation.";

var PENETRATE = "The fleet assigned this will attempt to pass through enemy lines and turn and hit them from behind. They will penetrate until they are behind the entire enemy force, and then they will turn and attack from behind.";

var PROCEDURE = "Penetrating fleets will advance forward. They will attempt to avoid any fleets in their flight path. If forced to engage, the penetrating fleet will fight until there is a victor. After this, the fleet will again attempt to advance forward. Once the fleet is behind 100% of the enemy forces, it will turn around and will attempt to seek out an enemy fleet to engage.";

var FLANK = "When the player chooses flank, they must place their fleets carefully.  Fleets placed on the upper half of the screen will flank up, and fleets on the lower half will flank down.  When flanking, the fleets will move from their placed position to the edge they were ordered to (top or bottom) and then will move along this edge until they are behind the enemy forces.  They will then turn around and attempt to destroy the enemy from behind.";

var RESERVE = "Reserve fleets will advance at 3/4 the speed of the rest of the armada. They will engage any enemies that they encounter and will replace any destroyed/retreated fleets that were under formation command.";

var FREE = "Find nearest target and attack. They will also seek out any target with a high danger rating. The flight path of free fleets is considered to be 1500 wide.";

var STANDGROUND = "This command is available only to the defender. This fleet will wait for attackers to come to them and then engage. There is a chance that fleets will break from this stance. If a fleet breaks this stance, they will advance as per the Normal command. When there are more than one enemies in range, they will attack the enemy fleet with the highest danger rating.";

var ASSAULT = "Fleets assigned assault will move forward thru enemy fleets until they have made it 50% behind enemy lines. They will then attempt to engage enemy fleets that are in front of them. Fleets assigned assault will not engage until they have penetrated a minimum of 50% or they are forced to engage.";

var STAND_GROUND = "This command is available only to the defender. This fleet will wait for attackers to come to them and then engage. There is a chance that fleets will break from this stance. If a fleet breaks this stance, they will advance as per the Normal command. When there are more than one enemies in range, they will attack the enemy fleet with the highest danger rating.";

/******************************************************
 - for Form a New Fleet
 - Dynamic pulldown
******************************************************/
function shipClass()
{
  var sel = document.FfleetNumber.shipClass.options[shipClass.selectedIndex].value;
  alert (sel);
/*
  if(sel == "X")
  {
    document.FfleetNumber.shipClassMax.value = "";
  }
  else if(sel == "A")
  {
    document.FfleetNumber.shipClassMax.value = "1";
  }
  else if(sel == "B")
  {
    document.FfleetNumber.shipClassMax.value = "2";
  }
  else if(sel == "C")
  {
    document.FfleetNumber.shipClassMax.value = "3";
  }
  else if(sel == "D")
  {
    document.FfleetNumber.shipClassMax.value = "4";
  }
*/
}

function focus()
{
  document.all.CLASS_NAME.focus();
}


/******************************************************
 - for Concentration Mode
 - Dynamic pulldown
******************************************************/
function CM()
{
  var sel = document.concentrationMode.CONCENTRATION_MODE.options[document.concentrationMode.CONCENTRATION_MODE.selectedIndex].value;
  var mode = document.concentrationMode.MODE.value;

  var currentPro = parseFloat(document.concentrationMode.CURRENT_PRODUCTION_CM.value);
  var currentMil = parseFloat(document.concentrationMode.CURRENT_MILITARY_CM.value);
  var currentRes = parseFloat(document.concentrationMode.CURRENT_RESEARCH_CM.value);

  if (mode == 0) // if current mode is Balanced
  {
    if(sel == 0)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 0;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 0;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 0;
    }
    else if(sel == 1)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 3;
      document.concentrationMode.CHANGE_MILITARY_CM.value = -2;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = -1;
    }
    else if(sel == 2)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = -2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 5;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = -2;
    }
    else if(sel == 3)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = -2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = -2;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 3;
    }
  }
  else if(mode == 1) // if current mode is Industry
  {
    if(sel == 0)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = -3;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 2;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 1;
    }
    else if(sel == 1)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 0;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 0;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 0;
    }
    else if(sel == 2)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = -3-2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 2+5;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 1-2;
    }
    else if(sel == 3)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = -3-2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 0;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 1+3;
    }
  }
  else if(mode == 2) // if current mode is Military
  {
    if(sel == 0)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = -5;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 2;
    }
    else if(sel == 1)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 2+3;
      document.concentrationMode.CHANGE_MILITARY_CM.value = -5-2;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 2-1;
    }
    else if(sel == 2)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 0;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 0;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 0;
    }
    else if(sel == 3)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 0;
      document.concentrationMode.CHANGE_MILITARY_CM.value = -5-2;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 2+3;
    }
  }
  else if(mode == 3) // if current mode is Research
  {
    if(sel == 0)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 2;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = -3;
    }
    else if(sel == 1)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 2+3;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 0;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = -3-1;
    }
    else if(sel == 2)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 2-2;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 2+5;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = -3-2;
    }
    else if(sel == 3)
    {
      document.concentrationMode.CHANGE_PRODUCTION_CM.value = 0;
      document.concentrationMode.CHANGE_MILITARY_CM.value = 0;
      document.concentrationMode.CHANGE_RESEARCH_CM.value = 0;
    }
  }

  var changePro = parseFloat(document.concentrationMode.CHANGE_PRODUCTION_CM.value);
  var changeMil = parseFloat(document.concentrationMode.CHANGE_MILITARY_CM.value);
  var changeRes = parseFloat(document.concentrationMode.CHANGE_RESEARCH_CM.value);

  document.concentrationMode.RESULT_PRODUCTION_CM.value = currentPro + changePro;
  document.concentrationMode.RESULT_MILITARY_CM.value = currentMil + changeMil;
  document.concentrationMode.RESULT_RESEARCH_CM.value = currentRes + changeRes;
}
