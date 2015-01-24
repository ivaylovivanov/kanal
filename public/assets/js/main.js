
jQuery(document).ready(function ($) {
    jssor_slider1_starter = function (containerId) {

        var _CaptionTransitions = ['cdsad', 'dsadsa', 'sdsd', 'rrrr'];


        var options = {
            $AutoPlay: true,
            $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $BulletNavigatorOptions: {//[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $CaptionTransitions: _CaptionTransitions,
                $PlayInMode: 1,
                $PlayOutMode: 3
            }
        };
        var jssor_slider1 = new $JssorSlider$(containerId, options);
    };
    jssor_slider1_starter('slider1_container');
});