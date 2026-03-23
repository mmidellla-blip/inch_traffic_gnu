/**
 * 푸터(.footer-online)·메인 등 _ok.php 상담신청 및 자가진단(.self-wrap 등) 폼의 이중 클릭·중복 전송 방지
 */
(function () {
    'use strict';

    if (window.__trafficDoubleSubmitGuard) {
        return;
    }
    window.__trafficDoubleSubmitGuard = true;

    function isInsideSelfWrap(form) {
        var p = form.parentElement;
        while (p) {
            if (p.classList && p.classList.contains('self-wrap')) {
                return true;
            }
            p = p.parentElement;
        }
        return false;
    }

    function isSelfDiagnosisForm(form) {
        if (!form || form.nodeName !== 'FORM') {
            return false;
        }
        if (form.classList && form.classList.contains('self-diagnosis-form')) {
            return true;
        }
        return isInsideSelfWrap(form);
    }

    function isConsultOkForm(form) {
        var action = form.getAttribute('action') || '';
        return action.indexOf('_ok.php') !== -1;
    }

    function lockFormButtons(form) {
        var i, len, el, t;
        var inputs = form.querySelectorAll('input[type="submit"], input[type="image"]');
        for (i = 0, len = inputs.length; i < len; i++) {
            inputs[i].disabled = true;
        }
        var buttons = form.querySelectorAll('button');
        for (i = 0, len = buttons.length; i < len; i++) {
            el = buttons[i];
            t = (el.getAttribute('type') || 'submit').toLowerCase();
            if (t === 'submit') {
                el.disabled = true;
            }
        }
    }

    document.addEventListener(
        'submit',
        function (e) {
            var form = e.target;
            if (!form || form.nodeName !== 'FORM') {
                return;
            }
            if (!isConsultOkForm(form) && !isSelfDiagnosisForm(form)) {
                return;
            }
            if (form.getAttribute('data-submit-locked') === '1') {
                e.preventDefault();
                e.stopPropagation();
                return false;
            }
            form.setAttribute('data-submit-locked', '1');
            lockFormButtons(form);
        },
        true
    );
})();
