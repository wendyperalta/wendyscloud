/*!CK:2059742729!*//*1379297158,168639253*/

if (self.CavalryLogger) { CavalryLogger.start_js(["lAq1j"]); }

__d("FacebarTypeaheadTokenText",["DOM","HTML"],function(a,b,c,d,e,f){var g=b('DOM'),h=b('HTML'),i='\u00B7';function j(n){if(typeof n==='object'){return g.getText(h(n).getRootNode());}else return n||'';}function k(n){return j(n).split(i).map(function(o){return o.trim();});}function l(n){var o={};return n.filter(function(p){var q=!o[p];o[p]=true;return q&&p;});}var m={textForEntity:function(n,o){var p=n.category||o[n.type]||'',q=n.subtext||'',r=k(p).concat(k(q));return l(r);},text:function(n){return l(k(n));}};e.exports=m;});