
 function outputMoney(number) 
{ 
  if(number<0) 
  return '-'+outputDollars(Math.floor(Math.abs(number)-0) + '') + outputCents(Math.abs(number) - 0); 
  else 
  return outputDollars(Math.floor(number-0) + '') + outputCents(number - 0); 
} 
function outputDollars(number) 
{ 
  if (number.length<= 3) 
  {
  		return (number == '' ? '0' : number); 
  }
  else 
  { 
		var mod = number.length%3; 
		var output = (mod == 0 ? '' : (number.substring(0,mod))); 
		for (ik=0 ; ik< Math.floor(number.length/3) ; ik++) 
		{ 
		  if ((mod ==0) && (ik ==0)) 
		  output+= number.substring(mod+3*ik,mod+3*ik+3); 
		  else 
		  output+= ',' + number.substring(mod+3*ik,mod+3*ik+3); 
		} 
		return (output); 
  } 
} 
function outputCents(amount) 
{ 
  amount = Math.round( ( (amount) - Math.floor(amount) ) *100); 
  return (amount<10 ? '.0' + amount : '.' + amount); 
}

//cryptographic strength
	function CharMode(iN) {    
		if (iN>=48 && iN <=57)      
			return 1;    
		if (iN>=65 && iN <=90)     
			return 2;    
		if (iN>=97 && iN <=122)  
 			return 4;    
 		else     
 			return 8;
	}

	function bitTotal(num) {   
		modes=0;    
		for (i=0;i<4;i++) {     
			if (num & 1) modes++;      
				num>>>=1;     
			}    
		return modes; 
	}

	function checkStrong(sPW) {    
		if (sPW.length<=8)     
			return 0;      
			Modes=0;     
			for (i=0;i<sPW.length;i++) {         
				Modes|=CharMode(sPW.charCodeAt(i));    
			}   
		return bitTotal(Modes); 
	}

	function pwStrength(pwd) {    
		O_color="#eeeeee";    
		L_color="#FF0000";    
		M_color="#33CC00";    
		H_color="#6170FF";    
		if (pwd==null||pwd==''){     
			Lcolor=Mcolor=Hcolor=O_color;    
		}else {     
			S_level=checkStrong(pwd);     
			switch(S_level) {     
			case 0:	Lcolor=Mcolor=Hcolor=O_color;     
			case 1:	Lcolor=L_color;
					Mcolor=Hcolor=O_color;break;     
			case 2:	Lcolor=O_color;
					Mcolor=M_color;
					Hcolor=O_color;break;     
			default:Lcolor=Mcolor=O_color;Hcolor=H_color;     
			}    
		}    
		document.getElementById("strength_L").style.background=Lcolor;    
		document.getElementById("strength_M").style.background=Mcolor;    
		document.getElementById("strength_H").style.background=Hcolor; 
		return; 
	}
//cryptographic_strength end//