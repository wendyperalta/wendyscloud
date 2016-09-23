/*!CK:1941875801!*//*1379297158,168601401*/

if (self.CavalryLogger) { CavalryLogger.start_js(["eg+yb"]); }

__d("TypeaheadFacepileX.react",["React"],function(a,b,c,d,e,f){var g=b('React'),h=g.createClass({displayName:'TypeaheadFacepile',renderPic:function(i,j){return (g.DOM.span({className:'splitpic '+j},g.DOM.img({alt:"",src:i})));},renderPics:function(){var i=this.props.photos;if(i.length>=3){return [this.renderPic(i[0],'leftpic'),this.renderPic(i[1],'toppic'),this.renderPic(i[2],'bottompic')];}else return [this.renderPic(i[0],'leftpic'),this.renderPic(i[1],'')];},render:function(){return this.transferPropsTo(g.DOM.span({className:"splitpics clearfix"},this.renderPics()));}});e.exports=h;});