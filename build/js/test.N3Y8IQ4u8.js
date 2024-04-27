/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************!*\
  !*** ./asset/js/test.js ***!
  \**************************/
(function () {


    PRHelper.getHook().on('click', (event) => {

        const HTMLHelper = PRHelper.getHTML();

        event.preventDefault();

        let element = HTMLHelper.getTarget(event, 'button'),
            data    = HTMLHelper.serializeForm(HTMLHelper.getParent(element, '.pr-section-fieldset')),
            action  = PRHelper.getSetting().getOption('ajax.send_email');

        HTMLHelper.setElementActivity(element, false, true);

        PRHelper.getRequest()
                .ajax(action)
                .addNonce()
                .onSuccess((response) => {
                    PRBackendHelper.getModal().show({
                        content: response,
                        type: 'sucsess'
                    });
                })
                .onError((error) => {
                    PRBackendHelper.getModal().show({
                        content: PRHelper.getFormat().error2string(error),
                        type: 'warning'
                    });
                })
                .onFinally(() => {
                    HTMLHelper.setElementActivity(element, true, true);
                })
                .send(data)

    }, '#send_email');
})()
// import $ from 'jquery';

// $(document).ready(function () {
//
//     $('#send_email').on('click', function (e) {
//
//         e.preventDefault();
//         let $this   = $(this),
//             $fields = $this.closest('.pr-section-fieldset').find(':input'),
//             $data   = PMPRUtil.serializeForm($fields),
//             $action = PMPRUtil.getSettingByPath('ajax.send_email');
//
//         PMPRRequest.post($action, $data)
//                    .setElement($this)
//                    .addNonce().send();
//     });
// });

/******/ })()
;