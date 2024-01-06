<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pernyataan</title>
</head>

<body>

@foreach ($students as $item)


        <!DOCTYPE html>
        <!-- Created by pdf2htmlEX (https://github.com/pdf2htmlEX/pdf2htmlEX) -->
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta charset="utf-8" />
            <meta name="generator" content="pdf2htmlEX" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <style type="text/css">
                #sidebar {
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    width: 250px;
                    padding: 0;
                    margin: 0;
                    overflow: auto
                }

                #page-container {
                    position: absolute;
                    top: 0;
                    left: 0;
                    margin: 0;
                    padding: 0;
                    border: 0
                }

                @media screen {
                    #sidebar.opened+#page-container {
                        left: 250px
                    }

                    #page-container {
                        bottom: 0;
                        right: 0;
                        overflow: auto
                    }

                    .loading-indicator {
                        display: none
                    }

                    .loading-indicator.active {
                        display: block;
                        position: absolute;
                        width: 64px;
                        height: 64px;
                        top: 50%;
                        left: 50%;
                        margin-top: -32px;
                        margin-left: -32px
                    }

                    .loading-indicator img {
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        right: 0
                    }
                }

                @media print {
                    @page {
                        margin: 0
                    }

                    html {
                        margin: 0
                    }

                    body {
                        margin: 0;
                        -webkit-print-color-adjust: exact
                    }

                    #sidebar {
                        display: none
                    }

                    #page-container {
                        width: auto;
                        height: auto;
                        overflow: visible;
                        background-color: transparent
                    }

                    .d {
                        display: none
                    }
                }

                .pf {
                    position: relative;
                    background-color: white;
                    overflow: hidden;
                    margin: 0;
                    border: 0
                }

                .pc {
                    position: absolute;
                    border: 0;
                    padding: 0;
                    margin: 0;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    display: block;
                    transform-origin: 0 0;
                    -ms-transform-origin: 0 0;
                    -webkit-transform-origin: 0 0
                }

                .pc.opened {
                    display: block
                }

                .bf {
                    position: absolute;
                    border: 0;
                    margin: 0;
                    top: 0;
                    bottom: 0;
                    width: 100%;
                    height: 100%;
                    -ms-user-select: none;
                    -moz-user-select: none;
                    -webkit-user-select: none;
                    user-select: none
                }

                .bi {
                    position: absolute;
                    border: 0;
                    margin: 0;
                    -ms-user-select: none;
                    -moz-user-select: none;
                    -webkit-user-select: none;
                    user-select: none
                }

                @media print {
                    .pf {
                        margin: 0;
                        box-shadow: none;
                        page-break-after: always;
                        page-break-inside: avoid
                    }

                    @-moz-document url-prefix() {
                        .pf {
                            overflow: visible;
                            border: 1px solid #fff
                        }

                        .pc {
                            overflow: visible
                        }
                    }
                }

                .c {
                    position: absolute;
                    border: 0;
                    padding: 0;
                    margin: 0;
                    overflow: hidden;
                    display: block
                }

                .t {
                    position: absolute;
                    white-space: pre;
                    font-size: 1px;
                    transform-origin: 0 100%;
                    -ms-transform-origin: 0 100%;
                    -webkit-transform-origin: 0 100%;
                    unicode-bidi: bidi-override;
                    -moz-font-feature-settings: "liga" 0
                }

                .t:after {
                    content: ''
                }

                .t:before {
                    content: '';
                    display: inline-block
                }

                .t span {
                    position: relative;
                    unicode-bidi: bidi-override
                }

                ._ {
                    display: inline-block;
                    color: transparent;
                    z-index: -1
                }

                ::selection {
                    background: rgba(127, 255, 255, 0.4)
                }

                ::-moz-selection {
                    background: rgba(127, 255, 255, 0.4)
                }

                .pi {
                    display: none
                }

                .d {
                    position: absolute;
                    transform-origin: 0 100%;
                    -ms-transform-origin: 0 100%;
                    -webkit-transform-origin: 0 100%
                }

                .it {
                    border: 0;
                    background-color: rgba(255, 255, 255, 0.0)
                }

                .ir:hover {
                    cursor: pointer
                }
            </style>
            <style type="text/css">
                /*!
                         * Fancy styles for pdf2htmlEX
                         * Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com>
                         * https://github.com/pdf2htmlEX/pdf2htmlEX/blob/master/share/LICENSE
                         */
                @keyframes fadein {
                    from {
                        opacity: 0
                    }

                    to {
                        opacity: 1
                    }
                }

                @-webkit-keyframes fadein {
                    from {
                        opacity: 0
                    }

                    to {
                        opacity: 1
                    }
                }

                @keyframes swing {
                    0 {
                        transform: rotate(0)
                    }

                    10% {
                        transform: rotate(0)
                    }

                    90% {
                        transform: rotate(720deg)
                    }

                    100% {
                        transform: rotate(720deg)
                    }
                }

                @-webkit-keyframes swing {
                    0 {
                        -webkit-transform: rotate(0)
                    }

                    10% {
                        -webkit-transform: rotate(0)
                    }

                    90% {
                        -webkit-transform: rotate(720deg)
                    }

                    100% {
                        -webkit-transform: rotate(720deg)
                    }
                }

                @media screen {
                    #sidebar {
                        background-color: #2f3236;
                        background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjNDAzYzNmIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDBMNCA0Wk00IDBMMCA0WiIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2U9IiMxZTI5MmQiPjwvcGF0aD4KPC9zdmc+")
                    }

                    #outline {
                        font-family: Georgia, Times, "Times New Roman", serif;
                        font-size: 13px;
                        margin: 2em 1em
                    }

                    #outline ul {
                        padding: 0
                    }

                    #outline li {
                        list-style-type: none;
                        margin: 1em 0
                    }

                    #outline li>ul {
                        margin-left: 1em
                    }

                    #outline a,
                    #outline a:visited,
                    #outline a:hover,
                    #outline a:active {
                        line-height: 1.2;
                        color: #e8e8e8;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                        text-decoration: none;
                        display: block;
                        overflow: hidden;
                        outline: 0
                    }

                    #outline a:hover {
                        color: #0cf
                    }

                    #page-container {
                        background-color: #9e9e9e;
                        background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjOWU5ZTllIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiM4ODgiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=");
                        -webkit-transition: left 500ms;
                        transition: left 500ms
                    }

                    .pf {
                        margin: 13px auto;
                        box-shadow: 1px 1px 3px 1px #333;
                        border-collapse: separate
                    }

                    .pc.opened {
                        -webkit-animation: fadein 100ms;
                        animation: fadein 100ms
                    }

                    .loading-indicator.active {
                        -webkit-animation: swing 1.5s ease-in-out .01s infinite alternate none;
                        animation: swing 1.5s ease-in-out .01s infinite alternate none
                    }

                    .checked {
                        background: no-repeat url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3goQDSYgDiGofgAAAslJREFUOMvtlM9LFGEYx7/vvOPM6ywuuyPFihWFBUsdNnA6KLIh+QPx4KWExULdHQ/9A9EfUodYmATDYg/iRewQzklFWxcEBcGgEplDkDtI6sw4PzrIbrOuedBb9MALD7zv+3m+z4/3Bf7bZS2bzQIAcrmcMDExcTeXy10DAFVVAQDksgFUVZ1ljD3yfd+0LOuFpmnvVVW9GHhkZAQcxwkNDQ2FSCQyRMgJxnVdy7KstKZpn7nwha6urqqfTqfPBAJAuVymlNLXoigOhfd5nmeiKL5TVTV+lmIKwAOA7u5u6Lped2BsbOwjY6yf4zgQQkAIAcedaPR9H67r3uYBQFEUFItFtLe332lpaVkUBOHK3t5eRtf1DwAwODiIubk5DA8PM8bYW1EU+wEgCIJqsCAIQAiB7/u253k2BQDDMJBKpa4mEon5eDx+UxAESJL0uK2t7XosFlvSdf0QAEmlUnlRFJ9Waho2Qghc1/U9z3uWz+eX+Wr+lL6SZfleEAQIggA8z6OpqSknimIvYyybSCReMsZ6TislhCAIAti2Dc/zejVNWwCAavN8339j27YbTg0AGGM3WltbP4WhlRWq6Q/btrs1TVsYHx+vNgqKoqBUKn2NRqPFxsbGJzzP05puUlpt0ukyOI6z7zjOwNTU1OLo6CgmJyf/gA3DgKIoWF1d/cIY24/FYgOU0pp0z/Ityzo8Pj5OTk9PbwHA+vp6zWghDC+VSiuRSOQgGo32UErJ38CO42wdHR09LBQK3zKZDDY2NupmFmF4R0cHVlZWlmRZ/iVJUn9FeWWcCCE4ODjYtG27Z2Zm5juAOmgdGAB2d3cBADs7O8uSJN2SZfl+WKlpmpumaT6Yn58vn/fs6XmbhmHMNjc3tzDGFI7jYJrm5vb29sDa2trPC/9aiqJUy5pOp4f6+vqeJ5PJBAB0dnZe/t8NBajx/z37Df5OGX8d13xzAAAAAElFTkSuQmCC)
                    }
                }
            </style>
            <style type="text/css">
                .ff0 {
                    font-family: sans-serif;
                    visibility: hidden;
                }

                @font-face {
                    font-family: ff1;
                    src: url('data:application/font-woff;base64,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')format("woff");
                }

                .ff1 {
                    font-family: ff1;
                    line-height: 1.089000;
                    font-style: normal;
                    font-weight: normal;
                    visibility: visible;
                }

                .m0 {
                    transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
                    -ms-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
                    -webkit-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
                }

                .v0 {
                    vertical-align: 0.000000px;
                }

                .ls0 {
                    letter-spacing: 0.000000px;
                }

                .sc_ {
                    text-shadow: none;
                }

                .sc0 {
                    text-shadow: -0.015em 0 transparent, 0 0.015em transparent, 0.015em 0 transparent, 0 -0.015em transparent;
                }

                @media screen and (-webkit-min-device-pixel-ratio:0) {
                    .sc_ {
                        -webkit-text-stroke: 0px transparent;
                    }

                    .sc0 {
                        -webkit-text-stroke: 0.015em transparent;
                        text-shadow: none;
                    }
                }

                .ws0 {
                    word-spacing: 0.000000px;
                }

                .fc0 {
                    color: rgb(0, 0, 0);
                }

                .fs0 {
                    font-size: 48.000000px;
                }

                .y0 {
                    bottom: -0.500000px;
                }

                .y15 {
                    bottom: 68.030000px;
                }

                .y13 {
                    bottom: 70.100000px;
                }

                .y12 {
                    bottom: 172.910000px;
                }

                .y14 {
                    bottom: 209.760000px;
                }

                .y11 {
                    bottom: 211.830000px;
                }

                .yf {
                    bottom: 302.540000px;
                }

                .y10 {
                    bottom: 303.310000px;
                }

                .ye {
                    bottom: 323.150000px;
                }

                .yd {
                    bottom: 365.670000px;
                }

                .yc {
                    bottom: 428.030000px;
                }

                .yb {
                    bottom: 450.710000px;
                }

                .ya {
                    bottom: 473.390000px;
                }

                .y9 {
                    bottom: 493.230000px;
                }

                .y8 {
                    bottom: 513.070000px;
                }

                .y7 {
                    bottom: 592.440000px;
                }

                .y6 {
                    bottom: 615.120000px;
                }

                .y5 {
                    bottom: 640.630000px;
                }

                .y4 {
                    bottom: 663.310000px;
                }

                .y3 {
                    bottom: 702.990000px;
                }

                .y2 {
                    bottom: 779.530000px;
                }

                .y1 {
                    bottom: 799.370000px;
                }

                .h2 {
                    height: 41.520000px;
                }

                .h0 {
                    height: 841.890000px;
                }

                .h1 {
                    height: 842.500000px;
                }

                .w0 {
                    width: 595.280000px;
                }

                .w1 {
                    width: 596.000000px;
                }

                .x0 {
                    left: 0.000000px;
                }

                .x3 {
                    left: 45.350000px;
                }

                .x4 {
                    left: 76.540000px;
                }

                .x9 {
                    left: 104.880000px;
                }

                .x7 {
                    left: 119.060000px;
                }

                .x8 {
                    left: 144.570000px;
                }

                .x2 {
                    left: 150.240000px;
                }

                .x1 {
                    left: 238.110000px;
                }

                .x6 {
                    left: 382.680000px;
                }

                .x5 {
                    left: 388.350000px;
                }

                .xa {
                    left: 411.020000px;
                }

                .xb {
                    left: 422.360000px;
                }

                @media print {
                    .v0 {
                        vertical-align: 0.000000pt;
                    }

                    .ls0 {
                        letter-spacing: 0.000000pt;
                    }

                    .ws0 {
                        word-spacing: 0.000000pt;
                    }

                    .fs0 {
                        font-size: 64.000000pt;
                    }

                    .y0 {
                        bottom: -0.666667pt;
                    }

                    .y15 {
                        bottom: 90.706667pt;
                    }

                    .y13 {
                        bottom: 93.466667pt;
                    }

                    .y12 {
                        bottom: 230.546667pt;
                    }

                    .y14 {
                        bottom: 279.680000pt;
                    }

                    .y11 {
                        bottom: 282.440000pt;
                    }

                    .yf {
                        bottom: 403.386667pt;
                    }

                    .y10 {
                        bottom: 404.413333pt;
                    }

                    .ye {
                        bottom: 430.866667pt;
                    }

                    .yd {
                        bottom: 487.560000pt;
                    }

                    .yc {
                        bottom: 570.706667pt;
                    }

                    .yb {
                        bottom: 600.946667pt;
                    }

                    .ya {
                        bottom: 631.186667pt;
                    }

                    .y9 {
                        bottom: 657.640000pt;
                    }

                    .y8 {
                        bottom: 684.093333pt;
                    }

                    .y7 {
                        bottom: 789.920000pt;
                    }

                    .y6 {
                        bottom: 820.160000pt;
                    }

                    .y5 {
                        bottom: 854.173333pt;
                    }

                    .y4 {
                        bottom: 884.413333pt;
                    }

                    .y3 {
                        bottom: 937.320000pt;
                    }

                    .y2 {
                        bottom: 1039.373333pt;
                    }

                    .y1 {
                        bottom: 1065.826667pt;
                    }

                    .h2 {
                        height: 55.360000pt;
                    }

                    .h0 {
                        height: 1122.520000pt;
                    }

                    .h1 {
                        height: 1123.333333pt;
                    }

                    .w0 {
                        width: 793.706667pt;
                    }

                    .w1 {
                        width: 794.666667pt;
                    }

                    .x0 {
                        left: 0.000000pt;
                    }

                    .x3 {
                        left: 60.466667pt;
                    }

                    .x4 {
                        left: 102.053333pt;
                    }

                    .x9 {
                        left: 139.840000pt;
                    }

                    .x7 {
                        left: 158.746667pt;
                    }

                    .x8 {
                        left: 192.760000pt;
                    }

                    .x2 {
                        left: 200.320000pt;
                    }

                    .x1 {
                        left: 317.480000pt;
                    }

                    .x6 {
                        left: 510.240000pt;
                    }

                    .x5 {
                        left: 517.800000pt;
                    }

                    .xa {
                        left: 548.026667pt;
                    }

                    .xb {
                        left: 563.146667pt;
                    }
                }
            </style>
            <script>
                /*
                                     Copyright 2012 Mozilla Foundation
                                     Copyright 2013 Lu Wang <coolwanglu@gmail.com>
                                     Apachine License Version 2.0
                                    */
                (function() {
                    function b(a, b, e, f) {
                        var c = (a.className || "").split(/\s+/g);
                        "" === c[0] && c.shift();
                        var d = c.indexOf(b);
                        0 > d && e && c.push(b);
                        0 <= d && f && c.splice(d, 1);
                        a.className = c.join(" ");
                        return 0 <= d
                    }
                    if (!("classList" in document.createElement("div"))) {
                        var e = {
                            add: function(a) {
                                b(this.element, a, !0, !1)
                            },
                            contains: function(a) {
                                return b(this.element, a, !1, !1)
                            },
                            remove: function(a) {
                                b(this.element, a, !1, !0)
                            },
                            toggle: function(a) {
                                b(this.element, a, !0, !0)
                            }
                        };
                        Object.defineProperty(HTMLElement.prototype, "classList", {
                            get: function() {
                                if (this._classList) return this._classList;
                                var a = Object.create(e, {
                                    element: {
                                        value: this,
                                        writable: !1,
                                        enumerable: !0
                                    }
                                });
                                Object.defineProperty(this, "_classList", {
                                    value: a,
                                    writable: !1,
                                    enumerable: !1
                                });
                                return a
                            },
                            enumerable: !0
                        })
                    }
                })
                ();
            </script>
            <script>
                (function() {
                    /*
                                             pdf2htmlEX.js: Core UI functions for pdf2htmlEX
                                             Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> and other contributors
                                             https://github.com/pdf2htmlEX/pdf2htmlEX/blob/master/share/LICENSE
                                            */
                    var pdf2htmlEX = window.pdf2htmlEX = window.pdf2htmlEX || {},
                        CSS_CLASS_NAMES = {
                            page_frame: "pf",
                            page_content_box: "pc",
                            page_data: "pi",
                            background_image: "bi",
                            link: "l",
                            input_radio: "ir",
                            __dummy__: "no comma"
                        },
                        DEFAULT_CONFIG = {
                            container_id: "page-container",
                            sidebar_id: "sidebar",
                            outline_id: "outline",
                            loading_indicator_cls: "loading-indicator",
                            preload_pages: 3,
                            render_timeout: 100,
                            scale_step: 0.9,
                            key_handler: !0,
                            hashchange_handler: !0,
                            view_history_handler: !0,
                            __dummy__: "no comma"
                        },
                        EPS = 1E-6;

                    function invert(a) {
                        var b = a[0] * a[3] - a[1] * a[2];
                        return [a[3] / b, -a[1] / b, -a[2] / b, a[0] / b, (a[2] * a[5] - a[3] * a[4]) / b, (a[1] * a[4] - a[0] *
                            a[5]) / b]
                    }

                    function transform(a, b) {
                        return [a[0] * b[0] + a[2] * b[1] + a[4], a[1] * b[0] + a[3] * b[1] + a[5]]
                    }

                    function get_page_number(a) {
                        return parseInt(a.getAttribute("data-page-no"), 16)
                    }

                    function disable_dragstart(a) {
                        for (var b = 0, c = a.length; b < c; ++b) a[b].addEventListener("dragstart", function() {
                            return !1
                        }, !1)
                    }

                    function clone_and_extend_objs(a) {
                        for (var b = {}, c = 0, e = arguments.length; c < e; ++c) {
                            var h = arguments[c],
                                d;
                            for (d in h) h.hasOwnProperty(d) && (b[d] = h[d])
                        }
                        return b
                    }

                    function Page(a) {
                        if (a) {
                            this.shown = this.loaded = !1;
                            this.page = a;
                            this.num = get_page_number(a);
                            this.original_height = a.clientHeight;
                            this.original_width = a.clientWidth;
                            var b = a.getElementsByClassName(CSS_CLASS_NAMES.page_content_box)[0];
                            b && (this.content_box = b, this.original_scale = this.cur_scale = this.original_height / b
                                .clientHeight, this.page_data = JSON.parse(a.getElementsByClassName(CSS_CLASS_NAMES
                                    .page_data)[0].getAttribute("data-data")), this.ctm = this.page_data.ctm, this.ictm =
                                invert(this.ctm), this.loaded = !0)
                        }
                    }
                    Page.prototype = {
                        hide: function() {
                            this.loaded && this.shown && (this.content_box.classList.remove("opened"), this.shown = !1)
                        },
                        show: function() {
                            this.loaded && !this.shown && (this.content_box.classList.add("opened"), this.shown = !0)
                        },
                        rescale: function(a) {
                            this.cur_scale = 0 === a ? this.original_scale : a;
                            this.loaded && (a = this.content_box.style, a.msTransform = a.webkitTransform = a
                                .transform = "scale(" + this.cur_scale.toFixed(3) + ")");
                            a = this.page.style;
                            a.height = this.original_height * this.cur_scale + "px";
                            a.width = this.original_width * this.cur_scale +
                                "px"
                        },
                        view_position: function() {
                            var a = this.page,
                                b = a.parentNode;
                            return [b.scrollLeft - a.offsetLeft - a.clientLeft, b.scrollTop - a.offsetTop - a.clientTop]
                        },
                        height: function() {
                            return this.page.clientHeight
                        },
                        width: function() {
                            return this.page.clientWidth
                        }
                    };

                    function Viewer(a) {
                        this.config = clone_and_extend_objs(DEFAULT_CONFIG, 0 < arguments.length ? a : {});
                        this.pages_loading = [];
                        this.init_before_loading_content();
                        var b = this;
                        document.addEventListener("DOMContentLoaded", function() {
                            b.init_after_loading_content()
                        }, !1)
                    }
                    Viewer.prototype = {
                        scale: 1,
                        cur_page_idx: 0,
                        first_page_idx: 0,
                        init_before_loading_content: function() {
                            this.pre_hide_pages()
                        },
                        initialize_radio_button: function() {
                            for (var a = document.getElementsByClassName(CSS_CLASS_NAMES.input_radio), b = 0; b < a
                                .length; b++) a[b].addEventListener("click", function() {
                                this.classList.toggle("checked")
                            })
                        },
                        init_after_loading_content: function() {
                            this.sidebar = document.getElementById(this.config.sidebar_id);
                            this.outline = document.getElementById(this.config.outline_id);
                            this.container = document.getElementById(this.config.container_id);
                            this.loading_indicator = document.getElementsByClassName(this.config.loading_indicator_cls)[
                                0];
                            for (var a = !0, b = this.outline.childNodes, c = 0, e = b.length; c < e; ++c)
                                if ("ul" === b[c].nodeName.toLowerCase()) {
                                    a = !1;
                                    break
                                } a || this.sidebar.classList.add("opened");
                            this.find_pages();
                            if (0 != this.pages.length) {
                                disable_dragstart(document.getElementsByClassName(CSS_CLASS_NAMES.background_image));
                                this.config.key_handler && this.register_key_handler();
                                var h = this;
                                this.config.hashchange_handler && window.addEventListener("hashchange",
                                    function(a) {
                                        h.navigate_to_dest(document.location.hash.substring(1))
                                    }, !1);
                                this.config.view_history_handler && window.addEventListener("popstate", function(a) {
                                    a.state && h.navigate_to_dest(a.state)
                                }, !1);
                                this.container.addEventListener("scroll", function() {
                                    h.update_page_idx();
                                    h.schedule_render(!0)
                                }, !1);
                                [this.container, this.outline].forEach(function(a) {
                                    a.addEventListener("click", h.link_handler.bind(h), !1)
                                });
                                this.initialize_radio_button();
                                this.render()
                            }
                        },
                        find_pages: function() {
                            for (var a = [], b = {}, c = this.container.childNodes,
                                    e = 0, h = c.length; e < h; ++e) {
                                var d = c[e];
                                d.nodeType === Node.ELEMENT_NODE && d.classList.contains(CSS_CLASS_NAMES.page_frame) &&
                                    (d = new Page(d), a.push(d), b[d.num] = a.length - 1)
                            }
                            this.pages = a;
                            this.page_map = b
                        },
                        load_page: function(a, b, c) {
                            var e = this.pages;
                            if (!(a >= e.length || (e = e[a], e.loaded || this.pages_loading[a]))) {
                                var e = e.page,
                                    h = e.getAttribute("data-page-url");
                                if (h) {
                                    this.pages_loading[a] = !0;
                                    var d = e.getElementsByClassName(this.config.loading_indicator_cls)[0];
                                    "undefined" === typeof d && (d = this.loading_indicator.cloneNode(!0),
                                        d.classList.add("active"), e.appendChild(d));
                                    var f = this,
                                        g = new XMLHttpRequest;
                                    g.open("GET", h, !0);
                                    g.onload = function() {
                                        if (200 === g.status || 0 === g.status) {
                                            var b = document.createElement("div");
                                            b.innerHTML = g.responseText;
                                            for (var d = null, b = b.childNodes, e = 0, h = b.length; e < h; ++e) {
                                                var p = b[e];
                                                if (p.nodeType === Node.ELEMENT_NODE && p.classList.contains(
                                                        CSS_CLASS_NAMES.page_frame)) {
                                                    d = p;
                                                    break
                                                }
                                            }
                                            b = f.pages[a];
                                            f.container.replaceChild(d, b.page);
                                            b = new Page(d);
                                            f.pages[a] = b;
                                            b.hide();
                                            b.rescale(f.scale);
                                            disable_dragstart(d.getElementsByClassName(CSS_CLASS_NAMES
                                                .background_image));
                                            f.schedule_render(!1);
                                            c && c(b)
                                        }
                                        delete f.pages_loading[a]
                                    };
                                    g.send(null)
                                }
                                void 0 === b && (b = this.config.preload_pages);
                                0 < --b && (f = this, setTimeout(function() {
                                    f.load_page(a + 1, b)
                                }, 0))
                            }
                        },
                        pre_hide_pages: function() {
                            var a = "@media screen{." + CSS_CLASS_NAMES.page_content_box + "{display:none;}}",
                                b = document.createElement("style");
                            b.styleSheet ? b.styleSheet.cssText = a : b.appendChild(document.createTextNode(a));
                            document.head.appendChild(b)
                        },
                        render: function() {
                            for (var a = this.container, b = a.scrollTop, c = a.clientHeight, a = b - c, b =
                                    b + c + c, c = this.pages, e = 0, h = c.length; e < h; ++e) {
                                var d = c[e],
                                    f = d.page,
                                    g = f.offsetTop + f.clientTop,
                                    f = g + f.clientHeight;
                                g <= b && f >= a ? d.loaded ? d.show() : this.load_page(e) : d.hide()
                            }
                        },
                        update_page_idx: function() {
                            var a = this.pages,
                                b = a.length;
                            if (!(2 > b)) {
                                for (var c = this.container, e = c.scrollTop, c = e + c.clientHeight, h = -1, d = b, f =
                                        d - h; 1 < f;) {
                                    var g = h + Math.floor(f / 2),
                                        f = a[g].page;
                                    f.offsetTop + f.clientTop + f.clientHeight >= e ? d = g : h = g;
                                    f = d - h
                                }
                                this.first_page_idx = d;
                                for (var g = h = this.cur_page_idx, k = 0; d < b; ++d) {
                                    var f = a[d].page,
                                        l = f.offsetTop + f.clientTop,
                                        f = f.clientHeight;
                                    if (l > c) break;
                                    f = (Math.min(c, l + f) - Math.max(e, l)) / f;
                                    if (d === h && Math.abs(f - 1) <= EPS) {
                                        g = h;
                                        break
                                    }
                                    f > k && (k = f, g = d)
                                }
                                this.cur_page_idx = g
                            }
                        },
                        schedule_render: function(a) {
                            if (void 0 !== this.render_timer) {
                                if (!a) return;
                                clearTimeout(this.render_timer)
                            }
                            var b = this;
                            this.render_timer = setTimeout(function() {
                                delete b.render_timer;
                                b.render()
                            }, this.config.render_timeout)
                        },
                        register_key_handler: function() {
                            var a = this;
                            window.addEventListener("DOMMouseScroll", function(b) {
                                if (b.ctrlKey) {
                                    b.preventDefault();
                                    var c = a.container,
                                        e = c.getBoundingClientRect(),
                                        c = [b.clientX - e.left - c.clientLeft, b.clientY - e.top - c
                                        .clientTop];
                                    a.rescale(Math.pow(a.config.scale_step, b.detail), !0, c)
                                }
                            }, !1);
                            window.addEventListener("keydown", function(b) {
                                var c = !1,
                                    e = b.ctrlKey || b.metaKey,
                                    h = b.altKey;
                                switch (b.keyCode) {
                                    case 61:
                                    case 107:
                                    case 187:
                                        e && (a.rescale(1 / a.config.scale_step, !0), c = !0);
                                        break;
                                    case 173:
                                    case 109:
                                    case 189:
                                        e && (a.rescale(a.config.scale_step, !0), c = !0);
                                        break;
                                    case 48:
                                        e && (a.rescale(0, !1), c = !0);
                                        break;
                                    case 33:
                                        h ? a.scroll_to(a.cur_page_idx - 1) : a.container.scrollTop -=
                                            a.container.clientHeight;
                                        c = !0;
                                        break;
                                    case 34:
                                        h ? a.scroll_to(a.cur_page_idx + 1) : a.container.scrollTop += a
                                            .container.clientHeight;
                                        c = !0;
                                        break;
                                    case 35:
                                        a.container.scrollTop = a.container.scrollHeight;
                                        c = !0;
                                        break;
                                    case 36:
                                        a.container.scrollTop = 0, c = !0
                                }
                                c && b.preventDefault()
                            }, !1)
                        },
                        rescale: function(a, b, c) {
                            var e = this.scale;
                            this.scale = a = 0 === a ? 1 : b ? e * a : a;
                            c || (c = [0, 0]);
                            b = this.container;
                            c[0] += b.scrollLeft;
                            c[1] += b.scrollTop;
                            for (var h = this.pages, d = h.length, f = this.first_page_idx; f < d; ++f) {
                                var g = h[f].page;
                                if (g.offsetTop + g.clientTop >=
                                    c[1]) break
                            }
                            g = f - 1;
                            0 > g && (g = 0);
                            var g = h[g].page,
                                k = g.clientWidth,
                                f = g.clientHeight,
                                l = g.offsetLeft + g.clientLeft,
                                m = c[0] - l;
                            0 > m ? m = 0 : m > k && (m = k);
                            k = g.offsetTop + g.clientTop;
                            c = c[1] - k;
                            0 > c ? c = 0 : c > f && (c = f);
                            for (f = 0; f < d; ++f) h[f].rescale(a);
                            b.scrollLeft += m / e * a + g.offsetLeft + g.clientLeft - m - l;
                            b.scrollTop += c / e * a + g.offsetTop + g.clientTop - c - k;
                            this.schedule_render(!0)
                        },
                        fit_width: function() {
                            var a = this.cur_page_idx;
                            this.rescale(this.container.clientWidth / this.pages[a].width(), !0);
                            this.scroll_to(a)
                        },
                        fit_height: function() {
                            var a = this.cur_page_idx;
                            this.rescale(this.container.clientHeight / this.pages[a].height(), !0);
                            this.scroll_to(a)
                        },
                        get_containing_page: function(a) {
                            for (; a;) {
                                if (a.nodeType === Node.ELEMENT_NODE && a.classList.contains(CSS_CLASS_NAMES
                                    .page_frame)) {
                                    a = get_page_number(a);
                                    var b = this.page_map;
                                    return a in b ? this.pages[b[a]] : null
                                }
                                a = a.parentNode
                            }
                            return null
                        },
                        link_handler: function(a) {
                            var b = a.target,
                                c = b.getAttribute("data-dest-detail");
                            if (c) {
                                if (this.config.view_history_handler) try {
                                    var e = this.get_current_view_hash();
                                    window.history.replaceState(e,
                                        "", "#" + e);
                                    window.history.pushState(c, "", "#" + c)
                                } catch (h) {}
                                this.navigate_to_dest(c, this.get_containing_page(b));
                                a.preventDefault()
                            }
                        },
                        navigate_to_dest: function(a, b) {
                            try {
                                var c = JSON.parse(a)
                            } catch (e) {
                                return
                            }
                            if (c instanceof Array) {
                                var h = c[0],
                                    d = this.page_map;
                                if (h in d) {
                                    for (var f = d[h], h = this.pages[f], d = 2, g = c.length; d < g; ++d) {
                                        var k = c[d];
                                        if (null !== k && "number" !== typeof k) return
                                    }
                                    for (; 6 > c.length;) c.push(null);
                                    var g = b || this.pages[this.cur_page_idx],
                                        d = g.view_position(),
                                        d = transform(g.ictm, [d[0], g.height() - d[1]]),
                                        g = this.scale,
                                        l = [0, 0],
                                        m = !0,
                                        k = !1,
                                        n = this.scale;
                                    switch (c[1]) {
                                        case "XYZ":
                                            l = [null === c[2] ? d[0] : c[2] * n, null === c[3] ? d[1] : c[3] * n];
                                            g = c[4];
                                            if (null === g || 0 === g) g = this.scale;
                                            k = !0;
                                            break;
                                        case "Fit":
                                        case "FitB":
                                            l = [0, 0];
                                            k = !0;
                                            break;
                                        case "FitH":
                                        case "FitBH":
                                            l = [0, null === c[2] ? d[1] : c[2] * n];
                                            k = !0;
                                            break;
                                        case "FitV":
                                        case "FitBV":
                                            l = [null === c[2] ? d[0] : c[2] * n, 0];
                                            k = !0;
                                            break;
                                        case "FitR":
                                            l = [c[2] * n, c[5] * n], m = !1, k = !0
                                    }
                                    if (k) {
                                        this.rescale(g, !1);
                                        var p = this,
                                            c = function(a) {
                                                l = transform(a.ctm, l);
                                                m && (l[1] = a.height() - l[1]);
                                                p.scroll_to(f, l)
                                            };
                                        h.loaded ?
                                            c(h) : (this.load_page(f, void 0, c), this.scroll_to(f))
                                    }
                                }
                            }
                        },
                        scroll_to: function(a, b) {
                            var c = this.pages;
                            if (!(0 > a || a >= c.length)) {
                                c = c[a].view_position();
                                void 0 === b && (b = [0, 0]);
                                var e = this.container;
                                e.scrollLeft += b[0] - c[0];
                                e.scrollTop += b[1] - c[1]
                            }
                        },
                        get_current_view_hash: function() {
                            var a = [],
                                b = this.pages[this.cur_page_idx];
                            a.push(b.num);
                            a.push("XYZ");
                            var c = b.view_position(),
                                c = transform(b.ictm, [c[0], b.height() - c[1]]);
                            a.push(c[0] / this.scale);
                            a.push(c[1] / this.scale);
                            a.push(this.scale);
                            return JSON.stringify(a)
                        }
                    };
                    pdf2htmlEX.Viewer = Viewer;
                })();
            </script>
            <script>
                try {
                    pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
                } catch (e) {}
            </script>
            <title></title>
        </head>

        <body>
            <div id="sidebar">
                <div id="outline">
                </div>
            </div>
            <div id="page-container">
                <div id="pf1" class="pf w0 h0" data-page-no="1">
                    <div class="pc pc1 w0 h0">
                    <div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">SURAT PERNYATAAN</div>
                        <div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">TIDAK AKAN DATANG TERLAMBAT KESEKOLAH</div>
                        <div class="t m0 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">Yang bertanda tangan dibawah ini:</div>
                        <div class="t m0 x3 h2 y4 ff1 fs0 fc0 sc0 ls0">NIS: {{$item['nis']}}</div>
                        <div class="t m0 x3 h2 y5 ff1 fs0 fc0 sc0 ls0">NAMA:</div>
                        <div class="t m0 x3 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0">ROMBEL :</div>
                        <div class="t m0 x3 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0">RAYON :</div>
                        {{-- <div class="t m0 x4 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0"> Dengan ini menyatakan bahwa saya telah
                            melakukan pelanggaran tata tertib sekolah,</div>
                        <div class="t m0 x3 h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">yaitu terlambat datang ke sekolah sebanyak
                            kali yang mana hal tersebut termasuk kedalam </div>
                        <div class="t m0 x3 h2 ya ff1 fs0 fc0 sc0 ls0 ws0">pelanggaran kedisiplinan. Saya berjanji tidak
                            akan terlambat datang ke sekolah lagi. Apabila</div>
                        <div class="t m0 x3 h2 yb ff1 fs0 fc0 sc0 ls0 ws0">saya terlambat datang ke sekolah lagi saya
                            siap diberikan sanksi yang sesuai dengan </div>
                        <div class="t m0 x3 h2 yc ff1 fs0 fc0 sc0 ls0 ws0">peraturan sekolah.</div>
                        <div class="t m0 x3 h2 yd ff1 fs0 fc0 sc0 ls0 ws0">Demikian surat pernyataan terlambat ini saya
                            buat dengan penuh penyesalan.</div> --}}
                        <div class="t m0 x5 h2 ye ff1 fs0 fc0 sc0 ls0 ws0">Bogor, 24 November 2023</div>
                        <div class="t m0 x6 h2 yf ff1 fs0 fc0 sc0 ls0 ws0">Orang tua/Wali Peserta Didik,</div>
                        <div class="t m0 x7 h2 y10 ff1 fs0 fc0 sc0 ls0 ws0">Peserta Didik,</div>
                        <div class="t m0 x8 h2 y11 ff1 fs0 fc0 sc0 ls0 ws0">( )</div>
                        <div class="t m0 x9 h2 y12 ff1 fs0 fc0 sc0 ls0 ws0">Pembimbing Siswa</div>
                        <div class="t m0 x8 h2 y13 ff1 fs0 fc0 sc0 ls0 ws0">(  )</div>
                        <div class="t m0 xa h2 y14 ff1 fs0 fc0 sc0 ls0">(......................)</div>
                        <div class="t m0 xb h2 y12 ff1 fs0 fc0 sc0 ls0">Kesiswaan</div>
                        <div class="t m0 xa h2 y15 ff1 fs0 fc0 sc0 ls0">(......................)</div>
                    </div>
                    <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'>
                    </div>
                </div>
            </div>
            <!-- Base -->
            <div class="loading-indicator">
                <img alt=""
                src="data:image/png;base64,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" />
            </div>
        </body>

        </html>

    @endforeach
