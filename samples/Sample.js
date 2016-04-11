
// Cross-browser xml parsing
var parseXML = function ( data ) {
    var xml, tmp;
    if(!data || typeof data !== "string") {
        return null;
    }

    try {
        if(window.DOMParser) {
            tmp = new DOMParser();
            xml = tmp.parserFromString(data, "text/xml");
        } else {
            xml = new ActiveXObject("Microsoft.XMLDOM");
            xml.async = false;
            xml.loadXML(data);
        }
    } catch (e) {
        xml = undefined;
    }

    if(!xml.documentElement || xml.getElementsByTagName("parsererror").length > 0) {
        jQuery.error("Invalid XML: " + data);
    }
}
