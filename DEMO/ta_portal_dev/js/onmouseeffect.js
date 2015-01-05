// JavaScript Document
/** A bidirectional Object Oriented text, background, & border color fader
 * As first seen in http://www.dynamicdrive.com/forums/ */

function fadeColor(id, init, targ, speed, b){
////////////////// No Editing Required //////////////////
if(!document.getElementById||(!id&&!document.getElementById(id))) return;
var f=fadeColor; id=f.verifyId(id); if(!id) return;
if(init[0]&&init.length==2){ // whip init into expected format
var tinit=f.decAr(init[0]);
tinit.push(init[1]); init=tinit;
}else if(init[0]&&init.length==3&&typeof init[1]=='function'){
var tinit=f.decAr(init[0]); tinit.push(init[1]);
tinit.push(init[2]); init=tinit;
}else if(typeof init=='string')
init=f.decAr(init); targ=f.decAr(targ); b=b||'color'; // likewise targ and b
id=f.extId(id, b); // extend the id to the fading property(ies)
if(f[id]&&f[id].t) // cancel any exisiting timeout for this element's current fade & style
clearTimeout(f[id].t)
if(f[id]&&f[id].kill){ // if this execution should be halted and wiped from the collection of executions
f[id]=null;
return;
}
if(init){ // if begining a new transition or changing the target color - skipped if running an uninterrupted current transition
if(!f[id]||(f[id].run&&typeof arguments[5]=='number')){ // if this style hasn't transitioned or is part of a stringer
f[id]={}; // create an object for this element
f[id].r=init[0],f[id].g=init[1],f[id].b=init[2]; // set initial colors to init
}
else // if in transition or has transitioned, work from latest color values
init[0]=f[id].r,init[1]=f[id].g,init[2]=f[id].b; // set init to current colors

if(init[4]) // if there is a timer for the callBack
f.callBack[id]=[init[3], init[4]]; // set it and the callBack - there will be an error later if a timer but no callBack exists
else if(init[3]) // if there is (and is just) a callBack
f.callBack[id]=init[3]; // set it

f[id].re=new RegExp(typeof b=='string'? b+'$' : b.join()+'$'); // prepare to retrieve the raw id

var t=255; f[id].m=[] // set direction of each color's current transition
f[id].m[0]=f[id].r<targ[0]? -1 : f[id].r>targ[0]? 1 : 0;
f[id].m[1]=f[id].g<targ[1]? -1 : f[id].g>targ[1]? 1 : 0;
f[id].m[2]=f[id].b<targ[2]? -1 : f[id].g>targ[2]? 1 : 0;
for (var i = 0; i < 3; i++) // find minimum number of steps for this transition
if(init[i]-targ[i]) // avoid future division by 0 when determining the proportional steps
t=Math.min(t,Math.abs(init[i]-targ[i]));
t=t/6; // reduce steps to prepare to calculate individual proportional steps (adds some speed)
f[id].rt=Math[f[id].m[0]>0?'floor':'ceil']((f[id].r-targ[0])/t);
f[id].gt=Math[f[id].m[1]>0?'floor':'ceil']((f[id].g-targ[1])/t);
f[id].bt=Math[f[id].m[2]>0?'floor':'ceil']((f[id].b-targ[2])/t);
} // end init

if(f[id].r==targ[0]&&f[id].g==targ[1]&&f[id].b==targ[2]){ // if target achieved
if(f.callBack&&f.callBack[id]){ // if this transition has a callBack
if(f.callBack[id][0]) // if the callBack is on a timer, set it - will throw an error if the timer isn't a number
setTimeout(function(){f.callBack[id][0](id.replace(f[id].re,''), f[id].r, f[id].g, f[id].b, speed);},f.callBack[id][1]);
else // do it
f.callBack[id](id.replace(f[id].re,''), f[id].r, f[id].g, f[id].b, speed); // execute it
}
f[id].run=1; // set 'run' flag for this id for possible later use
return; // exit
}

for (var i = 0; i < 3; i++){ // increase/decrease color values - if we've got this far, we are not done
var c=i<1? 'r' : i<2? 'g' : 'b';
if(f[id].m[i]&&f[id][c]>targ[i]*f[id].m[i]) // if target not reached, continue to approach it
f[id][c]=Math[f[id].m[i]>0?'max':'min'](f[id][c]-f[id][c+'t'],targ[i]);
if(f[id][c]<targ[i]*f[id].m[i]) // if target overshot, set value to target value
f[id][c]=targ[i];
}

f.setColor(document.getElementById(id.replace(f[id].re,'')), b, 'rgb('+f[id].r+','+f[id].g+','+f[id].b+')'); // set el color

f[id].t=setTimeout(function(){fadeColor(id.replace(f[id].re,''), false, targ, speed, b);},speed); // rerun with no new init

} // END Main function

fadeColor.callBack={}; // object to hold callBack functions and/or timeouts if either get set

fadeColor.verifyId=function(id){
if(typeof id=='object'){ // allows id to be the element itself
var f=fadeColor; if(!f.ids) f.ids=[]; var idc=f.ids.length;
var id=id.id || (id.id=f.ids[idc]='fadeColor_$_'+idc); // create an id for it if it has none
if(!document.getElementById(id).tagName) return null; // if created id is somehow not for a tag, exit with null value
}
return id; // returns either the original id, the element's id, or the id assigned to the element
}

fadeColor.decAr=function(h){ // converts #xxx, xxx, #xxxxxx, and xxxxxx hexadecimal string color values to an array of their rgb decimal values
if(typeof h=='string'){var d, m=h.length<5? 16 : 0;
h=m? h.match(/[^#]{1}/g) : h.match(/[^#]{2}/g);
for(var i=0;i<h.length;++i) h[i]=(d=parseInt(h[i],16))+d*m;
}
return h; // return converted value or original if it was already in the expected rgb array format or boolean
}

fadeColor.setColor=function(el,b,v){ // sets style property(ies) color for the element
if(typeof b=='string'||!b){
var p=/[cC]olor$/.test(b)? b : b? b+'Color' : 'color';
el.style[p]=v;
}else if(b[0])
for (var i = 0; i < b.length; i++){
var p=/[cC]olor$/.test(b[i])? b[i] : b[i]+'Color'; 
el.style[p]=v;
}
}

fadeColor.extId=function(id, b){ // extends the id of an element to be its fadeColor id for an instance of execution(s)
if (typeof b!='object')
b=b||'color', id+=b; // extend the id to the fading property
else if (b[0])
id+=b.join(); // extend the id to the fading properties
return id;
}

fadeColor.tar=[];
if(!fadeColor.tar.push)
Array.prototype.push=function(item){
this[this.length]=item;
};

// END required basic fade color functions and objects

fadeColor.allTags=function(id, tag){
if(document.all&&document.all.tags)
return tag&&tag!='*'? document.all[id].all.tags(tag) : document.all[id].all;
return document.getElementById(id).getElementsByTagName(tag||'*');
}

fadeColor.stringer=function(timer, id, init, targ, speed, b, tag, loop, id2){ // unit to sequentially fade in elements in a container or in an array
if(!id||!document.getElementById||(typeof id=='string'&&!document.getElementById(id).parentNode)||(typeof id=='object'&&!id.parentNode))return;
var f=fadeColor, s=f.stringer, n; if(!s.ids) s.ids=[]; s.ids.push(n=s.ids.length); s.ids[n]=[];
if(typeof id=='string')
id=f.allTags(id, tag);
var sb=typeof b=='string'? ", '"+b+"'" : b? ", ['"+b.join('\',\'')+"']" : "";
init=f.decAr(init); targ=f.decAr(targ);
f.verifyId(id[0]);
id2=f.verifyId(id2);
if(s.instance[id[0].id]&&!loop){
if(document.getElementById(id2))
document.getElementById(id2).disabled=0;
return;
}
s.instance[id[0].id]=true;
if(document.getElementById(id2))
document.getElementById(id2).disabled=1;
for(var i=0;i<id.length;++i)
f.setColor(id[i],b,'rgb('+init+')');
for(var i=0;i<id.length;++i)
if(id[i+2]||(id[i+1]&&loop)) // setup some callBack functions to run the stringer
s.ids[n][i]=new Function("fadeColor('"+f.verifyId(id[i+1])+"', ["+init+",fadeColor.stringer.ids["+n+"]["+(i+1)+"]"+(timer? ','+timer : '')+"], ["+targ+"], "+speed+(sb||', 0')+", 1);");
else if(id[i+1])
s.ids[n][i]=new Function("fadeColor('"+f.verifyId(id[i+1])+"', ["+init+"], ["+targ+"], "+speed+(sb||', 0')+", 1);");
else if(loop)
s.ids[n][i]=new Function("fadeColor.stringer("+timer+", '"+id[0].parentNode.id+"', ["+init+"], ["+targ+"], "+speed+(sb||', 0')+", "+(tag? '\''+tag+'\'' : 0)+", "+(loop-1)+", '"+id2+"')");
if(!loop) // cancel any repeating callBack if loop existed and has now run out
f.callBack[id[id.length-1].id+(b&&typeof b=='string'? b : b&&b[0]? b.join() : 'color')]=function(){s.instance[id[0].id]=false;if(document.getElementById(id2))
document.getElementById(id2).disabled=0;};
init.push(s.ids[n][0]);
if(timer)
init.push(timer);
f(id[0], init, targ, speed, b, 1);
}

fadeColor.stringer.instance={}; // object to hold stringer instances

fadeColor.looper=function(id, init, targ, speed, b){ // unit to loop the fading in and out of an element
if(!document.getElementById||(!id&&!document.getElementById(id))) return;
var f=fadeColor; id=f.verifyId(id); if(!id) return;
init=f.decAr(init); targ=f.decAr(targ);
var l=fadeColor.looper; if(!l[id])l[id]={};
if(l[id].s) // already running, exit
return;
var c1=function(){if(l[id].t=='i'){l[id].s=null;return;}l[id].s='t';f(id, init, targ, speed, b);};
var c2=function(){if(l[id].t=='t'){l[id].s=null;return;}l[id].s='i';f(id, targ, init, speed, b);};
targ.push(c1);
init.push(c2);
if(l[id].t&&l[id].t=='t') // if stopped in the target state
l[id].t=null, c2(); // begin running toward init values
else
l[id].t=null, c1(); // begin running to target values
if(!l.stop[id]) // create a stopping function for this looper if none exists
l.stop[id]=function(m, k){ // m - optional mode of stop to (i)nit or (t)arg values; k - optional see below
var fid=f.extId(id);
if(!l[id].t){ // if this looper isn't already in its stopped state
l[id].t=typeof m!='string'?l[id].s:m; // come to rest at the init or target state or whichever is closest
l[id].s=''; // signify that this looper is no longer in the running state
if (k){ // if a rapid exit and assumption of init or target color is desired
f[fid].kill=true;
init.length=targ.length=3;
f.setColor(document.getElementById(id), b||'color', 'rgb('+(l[id].t=='i'?init:targ)+')')
}
}
};
}

fadeColor.looper.stop={}; // object to hold the looper stop functions

fadeColor.stopLooper=function(id, s, k){ // function to execute a looper stop function if present
var f=fadeColor; id=f.verifyId(id);
if(f.looper.stop[id])
f.looper.stop[id](s, k);
}