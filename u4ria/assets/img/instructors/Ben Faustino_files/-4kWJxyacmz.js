/*!CK:2023730675!*//*1379443675,168563735*/

if (self.CavalryLogger) { CavalryLogger.start_js(["bsPsT"]); }

__d("FacebarTypeaheadToken.react",["FacebarTypeaheadHighlightedText.react","ReactPropTypes","React","cx"],function(a,b,c,d,e,f){var g=b('FacebarTypeaheadHighlightedText.react'),h=b('ReactPropTypes'),i=b('React'),j=b('cx'),k=' \u00B7 ',l=i.createClass({displayName:'FacebarTypeaheadToken',propTypes:{text:h.array.isRequired,highlight:h.array,limit:h.number,innerClass:h.string,leadingMiddot:h.bool},render:function(){var m=this.props.text;if(this.props.limit)m.splice(this.props.limit);m.forEach(function(q,r){if(r!==0||this.props.leadingMiddot)m[r]=k+q;}.bind(this));var n=g({tokens:this.props.highlight,text:m.shift()}),o=m.length?g({tokens:this.props.highlight,className:"_53ab",text:m.join('')}):null,p=this.props.innerClass||"_53aa";return (i.DOM.span({className:"_53a9"},i.DOM.span({className:p},n,o)));}});e.exports=l;});