<?php
class LoadJS {
    
    function setup($wgOut)
    {
        global $wgJobSchEdDir, $wgJobSchEdScriptDir, $wgJobSchEdtScriptVersion;
        $wgJobSchEdDir= rtrim(dirname(__FILE__), "/\ ");
        $wgJobSchEdScriptDir = "/mediawiki/extensions/JSWikiGanttFrontEnd";
        $wgJobSchEdtScriptVersion = 1;
        
        global $wgJobSchEdDir;
        
        #$outputPage->addModules( 'ext.JobSchEd.foo' );
        $wgOut->addScriptFile(LoadJS::getCSSJSLink("lib/sftJSmsg.js"));
        $wgOut->addScriptFile(LoadJS::getCSSJSLink("lib/node_modules/moment/moment.js"));
        $wgOut->addScriptFile(LoadJS::getCSSJSLink("lib/node_modules/moment-business-days/index.js"));
        $wgOut->addScriptFile(LoadJS::getCSSJSLink("lib/jscolor.js"));
        // Note! This name should be the same as in JSWikiGantt extension
        $wgOut->addScriptFile(LoadJS::getCSSJSLink("date-functions.js"));
        $wgOut->addScriptFile(LoadJS::getCSSJSLink("JSWikiGanttFrontEnd.js"));
        return true;
    }

    function getCSSJSLink($strFileName)
    {
        global $wgJobSchEdtScriptVersion, $wgJobSchEdScriptDir;
        return "{$wgJobSchEdScriptDir}/{$strFileName}?{$wgJobSchEdtScriptVersion}";
    }
}