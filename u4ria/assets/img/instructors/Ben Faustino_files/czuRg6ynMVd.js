/*!CK:87955642!*//*1379443675,168626749*/

if (self.CavalryLogger) { CavalryLogger.start_js(["3Z5MX"]); }

__d("FacebarTypeaheadHighlightedText.react",["BrowseFacebarHighlighter","React","ReactPropTypes"],function(a,b,c,d,e,f){var g=b('BrowseFacebarHighlighter'),h=b('React'),i=b('ReactPropTypes'),j=h.createClass({displayName:'FacebarTypeaheadHighlightedText',propTypes:{text:i.string,tokens:i.array},renderHighlight:function(k,l){if((l+1)%3===0){return h.DOM.span({className:"highlightNode"},k);}else if(k)return k;},renderParts:function(){var k=this.props.text,l=this.props.tokens;if(l&&k){var m=g.createRegex(l),n=k.split(m);return n.map(this.renderHighlight);}else return k;},render:function(){return this.transferPropsTo(h.DOM.span(null,this.renderParts()));}});e.exports=j;});