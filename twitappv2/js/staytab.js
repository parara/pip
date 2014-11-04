//initialize tabs plugin with listening on activate event
var tabs = $("#tabs").tabs({
    activate: function(event, ui){
        //get the active tab index
        var active = $("#tabs").tabs("option", "active");
        
        //save it to cookies
        $.cookie("activeTabIndex", active);
    }
});

//read the cookie
var activeTabIndex = $.cookie("activeTabIndex");

//make active needed tab
if(activeTabIndex !== undefined) {
    tabs.tabs("option", "active", activeTabIndex);
}