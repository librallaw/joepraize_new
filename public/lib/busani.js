$(document).ready(function(){

    /*
     * Instance CirclePlayer inside jQuery doc ready
     *
     * CirclePlayer(jPlayerSelector, media, options)
     *   jPlayerSelector: String - The css selector of the jPlayer div.
     *   media: Object - The media object used in jPlayer("setMedia",media).
     *   options: Object - The jPlayer options.
     *
     * Multiple instances must set the cssSelectorAncestor in the jPlayer options. Defaults to "#cp_container_1" in CirclePlayer.
     *
     * The CirclePlayer uses the default supplied:"m4a, oga" if not given, which is different from the jPlayer default of supplied:"mp3"
     * Note that the {wmode:"window"} option is set to ensure playback in Firefox 3.6 with the Flash solution.
     * However, the OGA format would be used in this case with the HTML solution.
     */

    var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
        {
            m4a: "http://joepraize.com/songs/everwhere.mp3",


        }, {
            cssSelectorAncestor: "#cp_container_1",
            swfPath: "/dist/jplayer",
            wmode: "window",
            keyEnabled: true
        });
});