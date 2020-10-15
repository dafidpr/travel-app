!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror"),require("../fold/xml-fold")):"function"==typeof define&&define.amd?define(["../../lib/codemirror","../fold/xml-fold"],e):e(CodeMirror)}(function(e){e.defineOption("autoCloseTags",!1,function(i,s,l){if(l!=e.Init&&l&&i.removeKeyMap("autoCloseTags"),s){var c={name:"autoCloseTags"};("object"!=typeof s||s.whenClosing)&&(c["'/'"]=function(t){return function(t){return t.getOption("disableInput")?e.Pass:o(t,!0)}(t)}),("object"!=typeof s||s.whenOpening)&&(c["'>'"]=function(o){return function(o){if(o.getOption("disableInput"))return e.Pass;for(var i=o.listSelections(),s=[],l=o.getOption("autoCloseTags"),c=0;c<i.length;c++){if(!i[c].empty())return e.Pass;var d=i[c].head,f=o.getTokenAt(d),g=e.innerMode(o.getMode(),f.state),u=g.state;if("xml"!=g.mode.name||!u.tagName)return e.Pass;var m="html"==g.mode.configuration,h="object"==typeof l&&l.dontCloseTags||m&&t,p="object"==typeof l&&l.indentTags||m&&n,y=u.tagName;f.end>d.ch&&(y=y.slice(0,y.length-f.end+d.ch));var b=y.toLowerCase();if(!y||"string"==f.type&&(f.end!=d.ch||!/[\"\']/.test(f.string.charAt(f.string.length-1))||1==f.string.length)||"tag"==f.type&&"closeTag"==u.type||f.string.indexOf("/")==f.string.length-1||h&&a(h,b)>-1||r(o,y,d,u,!0))return e.Pass;var v="object"==typeof l&&l.emptyTags;if(v&&a(v,y)>-1)s[c]={text:"/>",newPos:e.Pos(d.line,d.ch+2)};else{var x=p&&a(p,b)>-1;s[c]={indent:x,text:">"+(x?"\n\n":"")+"</"+y+">",newPos:x?e.Pos(d.line+1,0):e.Pos(d.line,d.ch+1)}}}for(var P="object"==typeof l&&l.dontIndentOnAutoClose,c=i.length-1;c>=0;c--){var T=s[c];o.replaceRange(T.text,i[c].head,i[c].anchor,"+insert");var C=o.listSelections().slice(0);C[c]={head:T.newPos,anchor:T.newPos},o.setSelections(C),!P&&T.indent&&(o.indentLine(T.newPos.line,null,!0),o.indentLine(T.newPos.line+1,null,!0))}}(o)}),i.addKeyMap(c)}});var t=["area","base","br","col","command","embed","hr","img","input","keygen","link","meta","param","source","track","wbr"],n=["applet","blockquote","body","button","div","dl","fieldset","form","frameset","h1","h2","h3","h4","h5","h6","head","html","iframe","layer","legend","object","ol","p","select","table","ul"];function o(t,n){for(var o=t.listSelections(),a=[],i=n?"/":"</",s=t.getOption("autoCloseTags"),l="object"==typeof s&&s.dontIndentOnSlash,c=0;c<o.length;c++){if(!o[c].empty())return e.Pass;var d,f=o[c].head,g=t.getTokenAt(f),u=e.innerMode(t.getMode(),g.state),m=u.state;if(n&&("string"==g.type||"<"!=g.string.charAt(0)||g.start!=f.ch-1))return e.Pass;if("xml"!=u.mode.name)if("htmlmixed"==t.getMode().name&&"javascript"==u.mode.name)d=i+"script";else{if("htmlmixed"!=t.getMode().name||"css"!=u.mode.name)return e.Pass;d=i+"style"}else{if(!m.context||!m.context.tagName||r(t,m.context.tagName,f,m))return e.Pass;d=i+m.context.tagName}">"!=t.getLine(f.line).charAt(g.end)&&(d+=">"),a[c]=d}if(t.replaceSelections(a),o=t.listSelections(),!l)for(c=0;c<o.length;c++)(c==o.length-1||o[c].head.line<o[c+1].head.line)&&t.indentLine(o[c].head.line)}function a(e,t){if(e.indexOf)return e.indexOf(t);for(var n=0,o=e.length;n<o;++n)if(e[n]==t)return n;return-1}function r(t,n,o,a,r){if(!e.scanForClosingTag)return!1;var i=Math.min(t.lastLine()+1,o.line+500),s=e.scanForClosingTag(t,o,null,i);if(!s||s.tag!=n)return!1;for(var l=a.context,c=r?1:0;l&&l.tagName==n;l=l.prev)++c;o=s.to;for(var d=1;d<c;d++){var f=e.scanForClosingTag(t,o,null,i);if(!f||f.tag!=n)return!1;o=f.to}return!0}e.commands.closeTag=function(e){return o(e)}});