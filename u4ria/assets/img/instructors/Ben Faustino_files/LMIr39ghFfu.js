/*!CK:414095912!*//*1379654486,172006714*/

if (self.CavalryLogger) { CavalryLogger.start_js(["KTvjC"]); }

__d("FacebarTypeaheadNodeItem.react",["React","DOM"],function(a,b,c,d,e,f){var g=b('React'),h=b('DOM'),i=g.createClass({displayName:'FacebarTypeaheadNodeItem',render:function(){return g.DOM.li(null);},attachNode:function(j){if(this.props.result.node)h.setContent(j,this.props.result.node);},componentDidMount:function(j){this.attachNode(j);},componentDidUpdate:function(j,k,l){this.attachNode(l);}});e.exports=i;});