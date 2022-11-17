<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Test</title>

        <style type="text/css">
            
            body{
                margin-top:20px;
                color: #484b51;
            }
            .text-secondary-d1 {
                color: #728299!important;
            }
            .page-header {
                margin: 0 0 1rem;
                padding-bottom: 1rem;
                padding-top: .5rem;
                border-bottom: 1px dotted #e2e2e2;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -ms-flex-align: center;
                align-items: center;
            }
            .page-title {
                padding: 0;
                margin: 0;
                font-size: 1.75rem;
                font-weight: 300;
            }
            .brc-default-l1 {
                border-color: #dce9f0!important;
            }

            .ml-n1, .mx-n1 {
                margin-left: -.25rem!important;
            }
            .mr-n1, .mx-n1 {
                margin-right: -.25rem!important;
            }
            .mb-4, .my-4 {
                margin-bottom: 1.5rem!important;
            }

            hr {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgba(0,0,0,.1);
            }

            .text-grey-m2 {
                color: #888a8d!important;
            }

            .text-success-m2 {
                color: #86bd68!important;
            }

            .font-bolder, .text-600 {
                font-weight: 600!important;
            }

            .text-110 {
                font-size: 110%!important;
            }
            .text-blue {
                color: #478fcc!important;
            }
            .pb-25, .py-25 {
                padding-bottom: .75rem!important;
            }

            .pt-25, .py-25 {
                padding-top: .75rem!important;
            }
            .bgc-default-tp1 {
                background-color: rgba(121,169,197,.92)!important;
            }
            .bgc-default-l4, .bgc-h-default-l4:hover {
                background-color: #f3f8fa!important;
            }
            .page-header .page-tools {
                -ms-flex-item-align: end;
                align-self: flex-end;
            }

            .btn-light {
                color: #757984;
                background-color: #f5f6f9;
                border-color: #dddfe4;
            }
            .w-2 {
                width: 1rem;
            }

            .text-120 {
                font-size: 120%!important;
            }
            .text-primary-m1 {
                color: #4087d4!important;
            }

            .text-danger-m1 {
                color: #dd4949!important;
            }
            .text-blue-m2 {
                color: #68a3d5!important;
            }
            .text-150 {
                font-size: 150%!important;
            }
            .text-60 {
                font-size: 60%!important;
            }
            .text-grey-m1 {
                color: #7b7d81!important;
            }
            .align-bottom {
                vertical-align: bottom!important;
            }
        </style>    

        {{--  --}}
	</head>
	
	<body>

        <div class="page-content container">
            <div class="page-header text-blue-d2">
                <h1 class="page-title text-secondary-d1">
                    Invoice
                    <small class="page-info">
                        <i class="fa fa-angle-double-right text-80"></i>
                        ID: #111-222
                    </small>
                </h1>

                <div class="page-tools">
                    <div class="action-buttons">
                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                            <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                            Print
                        </a>
                        <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                            <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                            Export
                        </a>
                    </div>
                </div>
            </div>

            <div class="container px-0">
                <div class="row mt-4">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center text-150">
                                    <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                                    <span class="text-default-d3">Bootdey.com</span>
                                </div>
                            </div>
                        </div>
                        <!-- .row -->

                        <hr class="row brc-default-l1 mx-n1 mb-4" />

                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <span class="text-sm text-grey-m2 align-middle">To:</span>
                                    <span class="text-600 text-110 text-blue align-middle">Alex Doe</span>
                                </div>
                                <div class="text-grey-m2">
                                    <div class="my-1">
                                        Street, City
                                    </div>
                                    <div class="my-1">
                                        State, Country
                                    </div>
                                    <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">111-111-111</b></div>
                                </div>
                            </div>
                            <!-- /.col -->

                            <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                <hr class="d-sm-none" />
                                <div class="text-grey-m2">
                                    <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                        Invoice
                                    </div>

                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #111-222</div>

                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Oct 12, 2019</div>

                                    <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">Unpaid</span></div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                                <thead class="bg-none bgc-default-tp1">
                                    <tr class="text-white">
                                        <th class="opacity-2">#</th>
                                        <th>Description</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th width="140">Amount</th>
                                    </tr>
                                </thead>

                                <tbody class="text-95 text-secondary-d3">
                                    <tr></tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Domain registration</td>
                                        <td>2</td>
                                        <td class="text-95">$10</td>
                                        <td class="text-secondary-d2">$20</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>

                            <div class="row mt-3">
                                <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                    Extra note such as company or payment information...
                                </div>

                                <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                    <div class="row my-2">
                                        <div class="col-7 text-right">
                                            SubTotal
                                        </div>
                                        <div class="col-5">
                                            <span class="text-120 text-secondary-d1">$2,250</span>
                                        </div>
                                    </div>

                                    <div class="row my-2">
                                        <div class="col-7 text-right">
                                            Tax (10%)
                                        </div>
                                        <div class="col-5">
                                            <span class="text-110 text-secondary-d1">$225</span>
                                        </div>
                                    </div>

                                    <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                        <div class="col-7 text-right">
                                            Total Amount
                                        </div>
                                        <div class="col-5">
                                            <span class="text-150 text-success-d3 opacity-2">$2,475</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div>
                                <span class="text-secondary-d1 text-105">Thank you for your business</span>
                                <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--  --}}
	</body>






















































<style type="text/css">
    
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-handshake-o:before {
  content: "\f2b5";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-o:before {
  content: "\f2b7";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-book-o:before {
  content: "\f2ba";
}
.fa-vcard:before,
.fa-address-card:before {
  content: "\f2bb";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: "\f2bc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-circle-o:before {
  content: "\f2be";
}
.fa-user-o:before {
  content: "\f2c0";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: "\f2c3";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: "\f2cd";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f2d3";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: "\f2d4";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-eercast:before {
  content: "\f2da";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-snowflake-o:before {
  content: "\f2dc";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-meetup:before {
  content: "\f2e0";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}

@charset "UTF-8";
/* ###### bootstrap ####### */
/*Color variables*/
/*white variables*/
/*black variables*/
/*Color variables*/
/*
//---------- TABLE OF CONTENTS ----------//
    * Bootstrap Framework
    * Alignments
    * Widths, Margins & Paddings
    * Alignments & values
    * Tables
    * Forms
    * Buttons
    * Drop Downs
    * Loader
    * Custom control
    * Navigation
    * Card
    * Email services
    * Range slider
    * Pricing tables
    * Pricing Styles
    * Tooptip &popover
    * Typography
    * Charts styles
    * Media object
    * Breadcrumb
    * Accordion
    * List Of Dropdwons
    * Badges
    * Jumbotron
    * Alerts
    * Progress
    * Lists
    * Modal
    * Carousel
    * Headers
    * Background colors
    * Btn styles
    * Panel
    * Thumbnails
    * Default Card Values
    * Avatars
    * progress sizes
    * Email
    * Loaders
    * Profile
    * Icon input
    * Tags
    * Date Picker
    * Back to Top
    * Time line
    * Icons List
    * selectize
    * Gallery
    * Feather icons
    
*/
/*-------- Bootstrap Framework -------*/
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap");

* {
    box-sizing: border-box;
}

*::before,
*::after {
    box-sizing: border-box;
}

html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent;
}

@-ms-viewport {
    width: device-width;
}

article,
aside,
dialog,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
    display: block;
}

body {
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #121029;
    text-align: left;
    background-color: #f9f7fd;
}

[tabindex="-1"]:focus {
    outline: 0 !important;
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin-top: 0;
    margin-bottom: 0.66em;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit;
}

ol,
ul,
dl {
    margin-top: 0;
    margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
    margin-bottom: 0;
}

dt {
    font-weight: 700;
}

dd {
    margin-bottom: .5rem;
    margin-left: 0;
}

blockquote {
    margin: 0 0 1rem;
}

dfn {
    font-style: italic;
}

b,
strong {
    font-weight: bolder;
}

small {
    font-size: 80%;
}

sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}

sub {
    bottom: -.25em;
}

sup {
    top: -.5em;
}

/*PMboYSIqMee+p4uAjskftSrErYaF9PDNDn+EGSzR9N2BspYI8=
feCz66HNQhyoUIndT6pXQpWta+PA3e1h3yExMyH1EsOo6f8PXnNPyHGLRfchOSF9WSX7exs=*/
a {
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

a:hover {
    text-decoration: underline;
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none;
    outline: 0;
}

pre,
code,
kbd,
samp {
    font-family: monospace, monospace;
    font-size: 1em;
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    -ms-overflow-style: scrollbar;
}

figure {
    margin: 0 0 1rem;
}

.image {
    position: relative;
}

img {
    vertical-align: middle;
    border-style: none;
}

.img-1 {
    vertical-align: middle;
    position: absolute;
    text-align: center;
    left: 0;
    right: 0;
    bottom: -62px;
}

.img-1 img {
    border-radius: 100%;
    border: 6px solid rgba(225, 225, 225, 0.5);
}

.img-2 img {
    border-radius: 5px;
}

svg:not(:root) {
    overflow: hidden;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    color: #505662;
    text-align: left;
    caption-side: bottom;
}

th {
    text-align: inherit;
}

label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button,
input {
    overflow: visible;
}

button,
select {
    text-transform: none;
}

button,
html [type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
    box-sizing: border-box;
    padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
    -webkit-appearance: listbox;
}

textarea {
    overflow: auto;
    resize: vertical;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

progress {
    vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

[type="search"] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

output {
    display: inline-block;
}

summary {
    display: list-item;
    cursor: pointer;
}

template {
    display: none;
}

[hidden] {
    display: none !important;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
    margin-bottom: 0.66em;
    font-weight: 600;
    line-height: 1.1;
}

h1,
.h1 {
    font-size: 2rem;
}

h2,
.h2 {
    font-size: 1.75rem;
}

h3,
.h3 {
    font-size: 1.2rem;
}

h4,
.h4 {
    font-size: 1.125rem;
}

h5,
.h5 {
    font-size: 1rem;
}

h6,
.h6 {
    font-size: 0.875rem;
}

.lead {
    font-size: 1.171875rem;
    font-weight: 300;
}

.display-1 {
    font-size: 10.5rem;
    font-weight: 500;
    line-height: 1.1;
}

.display-2 {
    font-size: 4rem;
    font-weight: 300;
    line-height: 1.1;
}

.display-3 {
    font-size: 3rem;
    font-weight: 300;
    line-height: 1.1;
}

.display-4 {
    font-size: 2.2rem;
    font-weight: 300;
    line-height: 1.1;
}

.display-5 {
    font-size: 2rem;
    font-weight: 300;
    line-height: 1.1;
}

.display-6 {
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.1;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid #e1e0ea;
}

small,
.small {
    font-size: 87.5%;
    font-weight: 400;
}

mark,
.mark {
    padding: 0.2em;
    background-color: #fcf8e3;
}

.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.list-unstyled li {
    border-bottom: 1px solid #e1e0ea;
}

.nav-sidebar .list-unstyled li:last-child {
    border-bottom: 0px;
}

.list-inline {
    padding-left: 0;
    list-style: none;
}

.list-inline-item {
    display: inline-block;
}

.list-inline-item:not(:last-child) {
    margin-right: 0.5rem;
}

.initialism {
    font-size: 90%;
    text-transform: uppercase;
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.171875rem;
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #868e96;
}

.blockquote-footer::before {
    content: "\2014 \00A0";
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.item-card img:hover {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
}

.img-thumbnail {
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    max-width: 100%;
    height: auto;
}

.figure {
    display: inline-block;
}

.figure-img {
    margin-bottom: 0.5rem;
    line-height: 1;
}

.figure-caption {
    font-size: 90%;
    color: #868e96;
}

.fs-10 {
    font-size: 10px !important;
}

.fs-11 {
    font-size: 11px !important;
}

.fs-12 {
    font-size: 12px !important;
}

.fs-13 {
    font-size: 13px !important;
}

.fs-15 {
    font-size: 15px;
}

.fs-17 {
    font-size: 17px;
}

.fs-20 {
    font-size: 20px !important;
}

.fs-23 {
    font-size: 23px !important;
}

.fs-25 {
    font-size: 25px !important;
}

.fs-30 {
    font-size: 30px !important;
}

.fs-40 {
    font-size: 40px;
}

.fs-50 {
    font-size: 50px;
}

code,
kbd,
pre,
samp {
    font-family: Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

code {
    font-size: 85%;
    color: inherit;
    word-break: break-word;
}

a>code {
    color: inherit;
}

kbd {
    padding: 0.2rem 0.4rem;
    font-size: 85%;
    color: #fff;
    background-color: #343a40;
    border-radius: 3px;
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700;
}

pre {
    display: block;
    font-size: 85%;
    color: #212529;
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal;
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}

.users img {
    max-width: none !important;
}

@media print {
    * {
        text-shadow: none !important;
        box-shadow: none !important;
    }

    *::before,
    *::after {
        text-shadow: none !important;
        box-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    abbr[title]::after {
        content: " ("attr(title) ")";
    }

    pre {
        white-space: pre-wrap !important;
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }

    blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }

    @page {
        size: a3;
    }

    body,
    .container {
        min-width: 992px !important;
    }

    .navbar {
        display: none;
    }

    .badge {
        border: 1px solid #000;
    }

    .table,
    .text-wrap table {
        border-collapse: collapse !important;
    }

    .table td,
    .text-wrap table td,
    .table th,
    .text-wrap table th {
        background-color: #fff !important;
    }

    .table-bordered th,
    .text-wrap table th,
    .table-bordered td,
    .text-wrap table td {
        border: 1px solid #e1e0ea !important;
    }
}

html {
    font-size: 16px;
    height: 100%;
    direction: ltr;
}

body {
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-tap-highlight-color: transparent;
    -webkit-text-size-adjust: none;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    -webkit-font-feature-settings: "liga"0;
    font-feature-settings: "liga"0;
    height: 100%;
    overflow-y: scroll;
    position: relative;
}

body *::-webkit-scrollbar {
    width: 6px;
    height: 6px;
    transition: .3s background;
}

body *::-webkit-scrollbar-thumb,
body *:hover::-webkit-scrollbar-thumb {
    background: #fff;
}

@media print {
    body {
        background: none;
    }
}

.lead {
    line-height: 1.4;
}

a {
    -webkit-text-decoration-skip: ink;
    text-decoration-skip: ink;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a,
.h1 a,
.h2 a,
.h3 a,
.h4 a,
.h5 a,
.h6 a {
    color: inherit;
}

strong,
b {
    font-weight: 600;
}

p,
ul,
ol {
    margin-bottom: 1em;
}

blockquote {
    margin-bottom: 1em;
    font-style: italic;
    color: #6e7687;
    padding-left: 2rem;
    border-left: 2px solid #e1e0ea;
}

blockquote p {
    margin-bottom: 1rem;
}

blockquote cite {
    display: block;
    text-align: right;
}

blockquote cite:before {
    content: '— ';
}

code {
    background: #f4f3f9;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    padding: 3px;
}

pre code {
    padding: 0;
    border-radius: 0;
    border: none;
    background: none;
}

hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

pre {
    color: #343a40;
    padding: 1rem;
    overflow: auto;
    font-size: 85%;
    line-height: 1.45;
    background-color: #e2e1ea;
    border-radius: 3px;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
}

img {
    max-width: 100%;
}

.max-width-auto {
    max-width: inherit;
}

.text-wrap {
    font-size: 14px;
    line-height: 1.66;
}

.text-wrap> :first-child {
    margin-top: 0;
}

.text-wrap> :last-child {
    margin-bottom: 0;
}

.text-wrap>h1,
.text-wrap>h2,
.text-wrap>h3,
.text-wrap>h4,
.text-wrap>h5,
.text-wrap>h6 {
    margin-top: 1em;
}

/*------ Accordion -------*/
.accordion .card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0;
}

.accordion .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0;
}

.accordion .card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.accordion .card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

ul li ul:hover {
    visibility: visible;
    opacity: 1;
    display: block;
}

.example .pagination {
    margin-bottom: 0;
}

/*-------Accordion-----------*/
.panel-group .panel {
    border-radius: 0;
    box-shadow: none;
    border-color: #e1e0ea;
}

.panel-default>.panel-heading {
    padding: 0;
    border-radius: 0;
    background-color: #f4f3f9;
    border-color: #e1e0ea;
}

.panel-title {
    font-size: 14px;
    margin-bottom: 0;
}

.panel-title>a {
    display: block;
    padding: 15px;
    text-decoration: none;
}

.more-less {
    float: right;
    color: #212121;
}

.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border: 1px solid #e1e0ea;
}

/* ----- v CAN BE DELETED v ----- */
.wrap {
    box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    border-radius: 4px;
}

a:focus,
a:hover,
a:active {
    outline: 0;
    text-decoration: none;
}

.panel1 {
    border-width: 0 0 1px 0;
    border-style: solid;
    border-color: #fff;
    background: none;
    box-shadow: none;
}

.panel1:last-child {
    border-bottom: none;
}

.panel-group1>.panel1:first-child .panel-heading1 {
    border-radius: 4px 4px 0 0;
}

.panel-group1 .panel1 {
    border-radius: 0;
}

.panel-body1 {
    padding: 10px;
}

.panel-title1 {
    font-size: 14px;
    margin-bottom: 0;
}

.panel-group1 .panel1+.panel1 {
    margin-top: 0;
}

.panel-heading1 {
    background-color: #5797fc;
    border-radius: 0;
    border: none;
    color: #fff;
    padding: 0;
}

.panel-group1 .panel-body {
    border: 1px solid #e1e0ea;
}

.panel-title1 a {
    display: block;
    color: #fff;
    padding: 10px;
    position: relative;
    font-size: 16px;
    background: #564fc1;
    font-weight: 400;
}

.panel-title1 a:hover {
    color: #fff;
}

.panel-body1 {
    background: #fff;
}

.panel1:last-child .panel-body1 {
    border-radius: 0 0 4px 4px;
}

.panel1:last-child .panel-heading1 {
    border-radius: 0 0 4px 4px;
    transition: border-radius 0.3s linear 0.2s;
}

.panel1:last-child .panel-heading1.active {
    border-radius: 0;
    transition: border-radius linear 0s;
}

/* #bs-collapse icon scale option */
.panel-title a.accordion-toggle:before {
    content: "\f068";
    padding: 0 10px 0 0;
    color: #fff;
    font-family: FontAwesome;
    float: right;
}

.panel-title a.accordion-toggle.collapsed:before {
    content: "\f067";
    padding: 0 10px 0 0;
    color: #fff;
    font-family: FontAwesome;
    float: right;
}

.panel-heading1 a.collapsed:before {
    content: "\e9af";
    position: absolute;
    font-family: 'feather' !important;
    right: 10px;
    top: 7px;
    font-size: 20px;
    transition: all 0.5s;
    transform: scale(1);
}

.panel-heading1 a:before {
    content: "\e994";
    position: absolute;
    font-family: 'feather' !important;
    right: 10px;
    top: 7px;
    font-size: 20px;
    transition: all 0.5s;
    transform: scale(1);
}

.panel-heading1.active a:before {
    content: ' ';
    transition: all 0.5s;
    transform: scale(0);
}

.demo-accordion p:last-child,
.panel-group1 p:last-child {
    margin-bottom: 0;
}

#bs-collapse .panel-heading1 a:after {
    content: "\f01a";
    font-size: 24px;
    position: absolute;
    font-family: 'FontAwesome';
    right: 5px;
    top: 10px;
    transform: scale(0);
    transition: all 0.5s;
}

#bs-collapse .panel-heading1.active a:after {
    content: "\f01a";
    transform: scale(1);
    transition: all 0.5s;
}

/* #accordion rotate icon option */
#accordion .panel-heading1 a:before {
    content: "\f01a";
    font-size: 24px;
    position: absolute;
    font-family: 'FontAwesome';
    right: 5px;
    top: 10px;
    transform: rotate(180deg);
    transition: all 0.5s;
}

#accordion .panel-heading1.active a:before {
    transform: rotate(0deg);
    transition: all 0.5s;
}

/*-----Alerts-----*/
.alert {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
}

.alert:first-child {
    margin-bottom: 1rem !important;
}

.alert:last-child {
    margin-bottom: 0;
}

.alert-heading {
    color: inherit;
}

.alert-link {
    font-weight: 500;
}

.alert-link:hover,
.alert-link a:hover {
    text-decoration: underline;
}

.alert-dismissible {
    padding-right: 3.90625rem;
}

hr.message-inner-separator {
    clear: both;
    margin-top: 10px;
    margin-bottom: 13px;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
    background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
    background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit;
}

.alert-primary {
    color: #564fc1;
    background-color: #edfbef;
    border-color: #def9e3;
}

.alert-primary hr {
    border-top-color: #e4fbe8;
}

.alert-primary .alert-link {
    color: #172b46;
}

.alert-secondary {
    color: #04cad0;
    background-color: #fff6e5;
    border-color: #fff645;
}

.alert-secondary hr {
    border-top-color: #fdefd5;
}

.alert-secondary .alert-link {
    color: #2e3133;
}

.alert-success {
    color: #316100;
    background-color: #dff1cc;
    border-color: #d2ecb8;
}

.alert-success hr {
    border-top-color: #c5e7a4;
}

.alert-success .alert-link {
    color: #172e00;
}

.alert-info {
    color: #24587e;
    background-color: #daeefc;
    border-color: #cbe7fb;
}

.alert-info hr {
    border-top-color: #b3dcf9;
}

.alert-info .alert-link {
    color: #193c56;
}

.alert-warning {
    color: #7d6608;
    background-color: #fcf3cf;
    border-color: #fbeebc;
}

.alert-warning hr {
    border-top-color: #fae8a4;
}

.alert-warning .alert-link {
    color: #4d3f05;
}

.alert-danger {
    color: #6b1110;
    background-color: #f5d2d2;
    border-color: #f1c1c0;
}

.alert-danger hr {
    border-top-color: #ecacab;
}

.alert-danger .alert-link {
    color: #3f0a09;
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe;
}

.alert-light hr {
    border-top-color: #ececf6;
}

.alert-light .alert-link {
    color: #686868;
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca;
}

.alert-dark hr {
    border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
    color: #040505;
}

/*------ Alignments -------*/
.align-baseline {
    vertical-align: baseline !important;
}

.align-top {
    vertical-align: top !important;
}

.align-middle {
    vertical-align: middle !important;
}

.align-bottom {
    vertical-align: bottom !important;
}

.align-text-bottom {
    vertical-align: text-bottom !important;
}

.align-text-top {
    vertical-align: text-top !important;
}

.bg-success {
    background: #21c44c !important;
}

a.bg-success:hover,
a.bg-success:focus {
    background-color: #15bf42 !important;
}

button.bg-success:hover,
button.bg-success:focus {
    background-color: #15bf42 !important;
}

.bg-info {
    background: #26c2f7 !important;
}

a.bg-info:hover,
a.bg-info:focus {
    background-color: #1eb0e2 !important;
}

button.bg-info:hover,
button.bg-info:focus {
    background-color: #1eb0e2 !important;
}

.bg-warning {
    background: #f7b731 !important;
}

a.bg-warning:hover,
a.bg-warning:focus {
    background-color: #e0a325 !important;
}

button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #e0a325 !important;
}

.bg-danger {
    background: #f5334f !important;
}

a.bg-danger:hover,
a.bg-danger:focus {
    background-color: #de223d !important;
}

button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #de223d !important;
}

.bg-light {
    background-color: #f8f9fa !important;
}

a.bg-light:hover,
a.bg-light:focus {
    background-color: #f4f3f9 !important;
}

button.bg-light:hover,
button.bg-light:focus {
    background-color: #f4f3f9 !important;
}

.bg-dark {
    background-color: #343a40 !important;
}

a.bg-dark:hover,
a.bg-dark:focus {
    background-color: #1d2124 !important;
}

button.bg-dark:hover,
button.bg-dark:focus {
    background-color: #1d2124 !important;
}

.bg-facebook {
    background: #2b4170 !important;
}

.bg-twitter {
    background: #1da1f2 !important;
}

.bg-google {
    background: #dc4e41 !important;
}

.bg-instagram {
    background: #e4405f !important;
}

.bg-pinterest {
    background: #bd081c !important;
}

.bg-dribbble {
    background: #ea4c89 !important;
}

.bg-vimeo {
    background: #1ab7ea !important;
}

/*--- gradient-backgrounds --*/
.bg-success-gradient {
    background: linear-gradient(to bottom right, #21a544 0%, #62fb62 100%) !important;
}

a.bg-success-gradient:hover,
a.bg-success-gradient:focus {
    background-color: #448700 !important;
}

button.bg-success-gradient:hover,
button.bg-success-gradient:focus {
    background-color: #448700 !important;
}

.bg-info-gradient {
    background: linear-gradient(to bottom right, #1e63c3 0%, #00f2fe 100%) !important;
}

a.bg-info-gradient:hover,
a.bg-info-gradient:focus {
    background-color: #1594ef !important;
}

button.bg-info-gradient:hover,
button.bg-info-gradient:focus {
    background-color: #1594ef !important;
}

.bg-warning-gradient {
    background: linear-gradient(to bottom right, #f66b4e 0%, #fbc434 100%) !important;
}

a.bg-warning-gradient:hover,
a.bg-warning-gradient:focus {
    background-color: #FBB034 !important;
}

button.bg-warning-gradient:hover,
button.bg-warning-gradient:focus {
    background-color: #FBB034 !important;
}

.bg-danger-gradient {
    background-image: linear-gradient(to bottom right, #bf4658 0%, #FF4B2B 100%) !important;
}

a.bg-danger-gradient:hover,
a.bg-danger-gradient:focus {
    background-color: #a11918 !important;
}

button.bg-danger-gradient:hover,
button.bg-danger-gradient:focus {
    background-color: #a11918 !important;
}

.bg-light-gradient {
    background-color: #f8f9fa !important;
}

a.bg-light-gradient:hover,
a.bg-light-gradient:focus {
    background-color: #dae0e5 !important;
}

button.bg-light-gradient:hover,
button.bg-light-gradient:focus {
    background-color: #dae0e5 !important;
}

.bg-dark-gradient {
    background-color: #343a40 !important;
}

a.bg-dark-gradient:hover,
a.bg-dark-gradient:focus {
    background-color: #1d2124 !important;
}

button.bg-dark-gradient:hover,
button.bg-dark-gradient:focus {
    background-color: #1d2124 !important;
}

.bg-facebook-gradient {
    background: linear-gradient(to bottom right, #3b5998, #2b4170) !important;
}

.bg-white {
    background-color: #fff !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.border {
    border: 1px solid #e1e0ea !important;
}

.border-top {
    border-top: 1px solid #e1e0ea !important;
}

.border-right {
    border-right: 1px solid #e1e0ea !important;
}

.border-bottom {
    border-bottom: 1px solid #e1e0ea !important;
}

.border-left {
    border-left: 1px solid #e1e0ea !important;
}

.border-0 {
    border: 0 !important;
}

.border-top-0 {
    border-top: 0 !important;
}

.border-right-0 {
    border-right: 0 !important;
}

.border-bottom-0 {
    border-bottom: 0 !important;
}

.border-left-0 {
    border-left: 0 !important;
}

.border-secondary {
    border-color: #868e96 !important;
}

.border-success {
    border-color: #4ecc48 !important;
}

.border-info {
    border-color: #45aaf2 !important;
}

.border-warning {
    border-color: #ecb403 !important;
}

.border-danger {
    border-color: #c21a1a !important;
}

.border-light {
    border-color: #f8f9fa !important;
}

.border-dark {
    border-color: #343a40 !important;
}

.border-white {
    border-color: #fff !important;
}

.rounded {
    border-radius: 0px !important;
}

.rounded-top {
    border-top-left-radius: 3px !important;
    border-top-right-radius: 3px !important;
}

.rounded-right {
    border-top-right-radius: 3px !important;
    border-bottom-right-radius: 3px !important;
}

.rounded-bottom {
    border-bottom-right-radius: 3px !important;
    border-bottom-left-radius: 3px !important;
}

.rounded-left {
    border-top-left-radius: 3px !important;
    border-bottom-left-radius: 3px !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.rounded-0 {
    border-radius: 0 !important;
}

.clearfix::after {
    display: block;
    clear: both;
    content: "";
}

.d-none {
    display: none !important;
}

.d-inline {
    display: inline !important;
}

.d-inline-block {
    display: inline-block !important;
}

.d-block {
    display: block !important;
}

.d-table {
    display: table !important;
}

.d-table-row {
    display: table-row !important;
}

.d-table-cell {
    display: table-cell !important;
}

.d-flex {
    display: -ms-flexbox !important;
    display: flex !important;
}

.d-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
}

@media (min-width: 576px) {
    .d-sm-none {
        display: none !important;
    }

    .d-sm-inline {
        display: inline !important;
    }

    .d-sm-inline-block {
        display: inline-block !important;
    }

    .d-sm-block {
        display: block !important;
    }

    .d-sm-table {
        display: table !important;
    }

    .d-sm-table-row {
        display: table-row !important;
    }

    .d-sm-table-cell {
        display: table-cell !important;
    }

    .d-sm-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-sm-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display: none !important;
    }

    .d-md-inline {
        display: inline !important;
    }

    .d-md-inline-block {
        display: inline-block !important;
    }

    .d-md-block {
        display: block !important;
    }

    .d-md-table {
        display: table !important;
    }

    .d-md-table-row {
        display: table-row !important;
    }

    .d-md-table-cell {
        display: table-cell !important;
    }

    .d-md-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-md-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display: none !important;
    }

    .d-lg-inline {
        display: inline !important;
    }

    .d-lg-inline-block {
        display: inline-block !important;
    }

    .d-lg-block {
        display: block !important;
    }

    .d-lg-table {
        display: table !important;
    }

    .d-lg-table-row {
        display: table-row !important;
    }

    .d-lg-table-cell {
        display: table-cell !important;
    }

    .d-lg-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-lg-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}

@media (min-width: 1280px) {
    .d-xl-none {
        display: none !important;
    }

    .d-xl-inline {
        display: inline !important;
    }

    .d-xl-inline-block {
        display: inline-block !important;
    }

    .d-xl-block {
        display: block !important;
    }

    .d-xl-table {
        display: table !important;
    }

    .d-xl-table-row {
        display: table-row !important;
    }

    .d-xl-table-cell {
        display: table-cell !important;
    }

    .d-xl-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-xl-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}

@media print {
    .d-print-none {
        display: none !important;
    }

    .d-print-inline {
        display: inline !important;
    }

    .d-print-inline-block {
        display: inline-block !important;
    }

    .d-print-block {
        display: block !important;
    }

    .d-print-table {
        display: table !important;
    }

    .d-print-table-row {
        display: table-row !important;
    }

    .d-print-table-cell {
        display: table-cell !important;
    }

    .d-print-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    .d-print-inline-flex {
        display: -ms-inline-flexbox !important;
        display: inline-flex !important;
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}

.embed-responsive::before {
    display: block;
    content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.embed-responsive-21by9::before {
    padding-top: 42.85714286%;
}

.embed-responsive-16by9::before {
    padding-top: 56.25%;
}

.embed-responsive-4by3::before {
    padding-top: 75%;
}

.embed-responsive-1by1::before {
    padding-top: 100%;
}

.flex-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
}

.flex-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
}

.flex-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
}

.flex-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
}

.flex-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
}

.flex-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
}

.flex-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
}

.flex-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
}

.flex-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
}

.flex-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
}

.flex-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
}

.justify-content-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
}

.justify-content-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
}

.justify-content-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
}

.justify-content-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
}

.justify-content-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
}

.align-items-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
}

.align-items-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
}

.align-items-center {
    -ms-flex-align: center !important;
    align-items: center !important;
}

.align-items-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
}

.align-items-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
}

.align-content-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
}

.align-content-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
}

.align-content-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
}

.align-content-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
}

.align-content-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
}

.align-content-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
}

.align-self-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
}

.align-self-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
}

.align-self-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
}

.align-self-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
}

.align-self-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
}

.align-self-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
}

@media (min-width: 576px) {
    .flex-sm-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-sm-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-sm-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-sm-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-sm-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }

    .flex-sm-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }

    .flex-sm-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }

    .flex-sm-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }

    .flex-sm-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-sm-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-sm-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }

    .flex-sm-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }

    .justify-content-sm-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-sm-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-sm-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-sm-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-sm-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }

    .align-items-sm-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-sm-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-sm-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .align-items-sm-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-sm-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-sm-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }

    .align-content-sm-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }

    .align-content-sm-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }

    .align-content-sm-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }

    .align-content-sm-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }

    .align-content-sm-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }

    .align-self-sm-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }

    .align-self-sm-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }

    .align-self-sm-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }

    .align-self-sm-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .align-self-sm-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }

    .align-self-sm-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-md-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-md-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-md-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-md-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }

    .flex-md-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }

    .flex-md-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }

    .flex-md-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }

    .flex-md-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-md-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-md-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }

    .flex-md-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }

    .justify-content-md-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-md-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-md-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-md-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-md-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }

    .align-items-md-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-md-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-md-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .align-items-md-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-md-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-md-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }

    .align-content-md-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }

    .align-content-md-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }

    .align-content-md-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }

    .align-content-md-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }

    .align-content-md-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }

    .align-self-md-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }

    .align-self-md-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }

    .align-self-md-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }

    .align-self-md-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .align-self-md-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }

    .align-self-md-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-lg-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-lg-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-lg-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-lg-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }

    .flex-lg-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }

    .flex-lg-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }

    .flex-lg-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }

    .flex-lg-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-lg-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-lg-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }

    .flex-lg-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }

    .justify-content-lg-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-lg-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-lg-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-lg-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-lg-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }

    .align-items-lg-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-lg-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-lg-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .align-items-lg-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-lg-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-lg-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }

    .align-content-lg-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }

    .align-content-lg-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }

    .align-content-lg-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }

    .align-content-lg-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }

    .align-content-lg-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }

    .align-self-lg-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }

    .align-self-lg-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }

    .align-self-lg-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }

    .align-self-lg-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .align-self-lg-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }

    .align-self-lg-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}

@media (min-width: 1280px) {
    .flex-xl-row {
        -ms-flex-direction: row !important;
        flex-direction: row !important;
    }

    .flex-xl-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    .flex-xl-row-reverse {
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
    }

    .flex-xl-column-reverse {
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
    }

    .flex-xl-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }

    .flex-xl-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
    }

    .flex-xl-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
    }

    .flex-xl-fill {
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
    }

    .flex-xl-grow-0 {
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
    }

    .flex-xl-grow-1 {
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
    }

    .flex-xl-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
    }

    .flex-xl-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
    }

    .justify-content-xl-start {
        -ms-flex-pack: start !important;
        justify-content: flex-start !important;
    }

    .justify-content-xl-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important;
    }

    .justify-content-xl-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .justify-content-xl-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
    }

    .justify-content-xl-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
    }

    .align-items-xl-start {
        -ms-flex-align: start !important;
        align-items: flex-start !important;
    }

    .align-items-xl-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important;
    }

    .align-items-xl-center {
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .align-items-xl-baseline {
        -ms-flex-align: baseline !important;
        align-items: baseline !important;
    }

    .align-items-xl-stretch {
        -ms-flex-align: stretch !important;
        align-items: stretch !important;
    }

    .align-content-xl-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
    }

    .align-content-xl-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
    }

    .align-content-xl-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important;
    }

    .align-content-xl-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
    }

    .align-content-xl-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
    }

    .align-content-xl-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
    }

    .align-self-xl-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important;
    }

    .align-self-xl-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important;
    }

    .align-self-xl-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important;
    }

    .align-self-xl-center {
        -ms-flex-item-align: center !important;
        align-self: center !important;
    }

    .align-self-xl-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
    }

    .align-self-xl-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
    }
}

.float-left {
    float: left !important;
}

.float-right {
    float: right !important;
}

.float-none {
    float: none !important;
}

@media (min-width: 576px) {
    .float-sm-left {
        float: left !important;
    }

    .float-sm-right {
        float: right !important;
    }

    .float-sm-none {
        float: none !important;
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float: left !important;
    }

    .float-md-right {
        float: right !important;
    }

    .float-md-none {
        float: none !important;
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float: left !important;
    }

    .float-lg-right {
        float: right !important;
    }

    .float-lg-none {
        float: none !important;
    }
}

@media (min-width: 1280px) {
    .float-xl-left {
        float: left !important;
    }

    .float-xl-right {
        float: right !important;
    }

    .float-xl-none {
        float: none !important;
    }
}

.position-static {
    position: static !important;
}

.position-relative {
    position: relative !important;
}

.position-absolute {
    position: absolute !important;
}

.position-fixed {
    position: fixed !important;
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030;
}

@supports (position: -webkit-sticky) or (position: sticky) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020;
    }
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
    box-shadow: none !important;
}

/*------ Widths, Margins & Paddings -------*/
.w-1 {
    width: 10% !important;
}

.w-5 {
    width: 5% !important;
}

.w-10 {
    width: 10% !important;
}

.w-15 {
    width: 15% !important;
}

.w-20 {
    width: 20% !important;
}

.w-25 {
    width: 25% !important;
}

.w-30 {
    width: 30% !important;
}

.w-40 {
    width: 40% !important;
}

.w-45 {
    width: 45% !important;
}

.w-60 {
    width: 60% !important;
}

.w-45 {
    width: 45% !important;
}

.w-50 {
    width: 50% !important;
}

.w-65 {
    width: 65% !important;
}

.w-70 {
    width: 70% !important;
}

.w-75 {
    width: 75% !important;
}

.w-80 {
    width: 80% !important;
}

.w-100 {
    width: 100% !important;
}

.w-260 {
    width: 260px !important;
}

.w-337 {
    width: 337px !important;
}

.w-auto {
    width: auto !important;
}

.w-0 {
    width: 0 !important;
}

.w-1 {
    width: 0.25rem !important;
}

.w-2 {
    width: 0.5rem !important;
}

.w-3 {
    width: 0.75rem !important;
}

.w-4 {
    width: 1rem !important;
}

.w-5 {
    width: 1.5rem !important;
}

.w-6 {
    width: 2rem !important;
}

.w-7 {
    width: 3rem !important;
}

.w-8 {
    width: 4rem !important;
}

.w-9 {
    width: 6rem !important;
}

.h-25 {
    height: 25% !important;
}

.h-50 {
    height: 50% !important;
}

.h-75 {
    height: 75% !important;
}

.h-90 {
    height: 90px !important;
}

.h-60 {
    height: 60px !important;
}

.h-100 {
    height: 100% !important;
}

.h-150 {
    height: 150px !important;
}

.h-180 {
    height: 180px !important;
}

.h-400 {
    height: 400px !important;
}

.h-200 {
    height: 200px !important;
}

.h-230 {
    height: 230px !important;
}

.h-270 {
    height: 270px !important;
}

.h-600 {
    height: 600px !important;
}

.h-auto {
    height: auto !important;
}

.h-0 {
    height: 0 !important;
}

.h-1 {
    height: 0.25rem !important;
}

.h-2 {
    height: 0.5rem !important;
}

.h-3 {
    height: 0.75rem !important;
}

.h-4 {
    height: 1rem !important;
}

.h-5 {
    height: 1.5rem !important;
}

.h-6 {
    height: 2rem !important;
}

.h-7 {
    height: 3rem !important;
}

.h-8 {
    height: 4rem !important;
}

.h-9 {
    height: 6rem !important;
}

.h-97 {
    height: 97px !important;
}

.h-240 {
    height: 240px !important;
}

.h-260 {
    height: 260px !important;
}

.h-280 {
    height: 280px !important;
}

.h-300 {
    height: 300px !important;
}

.h-340 {
    height: 340px !important;
}

.w-90 {
    width: 90% !important;
}

.mw-100 {
    max-width: 100% !important;
}

.mh-100 {
    max-height: 100% !important;
}

.m-0 {
    margin: 0 !important;
}

.mt-0,
.my-0 {
    margin-top: 0 !important;
}

.mr-0,
.mx-0 {
    margin-right: 0 !important;
}

.mb-0,
.my-0 {
    margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
    margin-left: 0 !important;
}

.m-1 {
    margin: 0.25rem !important;
}

.mt-1,
.my-1 {
    margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
    margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
    margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
    margin-left: 0.25rem !important;
}

.m-2 {
    margin: 0.5rem !important;
}

.mt-2,
.my-2 {
    margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
    margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
    margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
    margin-left: 0.5rem !important;
}

.m-3 {
    margin: 0.75rem !important;
}

.mt-3,
.my-3 {
    margin-top: 0.75rem !important;
}

.mr-3,
.mx-3 {
    margin-right: 0.75rem !important;
}

.mb-3,
.my-3 {
    margin-bottom: 0.75rem !important;
}

.ml-3,
.mx-3 {
    margin-left: 0.75rem !important;
}

.m-4 {
    margin: 1rem !important;
}

.mt-4,
.my-4 {
    margin-top: 1rem !important;
}

.mr-4,
.mx-4 {
    margin-right: 1rem !important;
}

.mb-4,
.my-4 {
    margin-bottom: 1rem !important;
}

.ml-4,
.mx-4 {
    margin-left: 1rem !important;
}

.m-5 {
    margin: 1.5rem !important;
}

.mt-5,
.my-5 {
    margin-top: 1.5rem !important;
}

.mr-5,
.mx-5 {
    margin-right: 1.5rem !important;
}

.mb-5,
.my-5 {
    margin-bottom: 1.5rem !important;
}

.ml-5,
.mx-5 {
    margin-left: 1.5rem !important;
}

.m-6 {
    margin: 2rem !important;
}

.mt-6,
.my-6 {
    margin-top: 2rem !important;
}

.mr-6,
.mx-6 {
    margin-right: 2rem !important;
}

.mb-6,
.my-6 {
    margin-bottom: 2rem !important;
}

.ml-6,
.mx-6 {
    margin-left: 2rem !important;
}

.m-7 {
    margin: 3rem !important;
}

.mt-7,
.my-7 {
    margin-top: 3rem !important;
}

.mr-7,
.mx-7 {
    margin-right: 3rem !important;
}

.mb-7,
.my-7 {
    margin-bottom: 3rem !important;
}

.ml-7,
.mx-7 {
    margin-left: 3rem !important;
}

.m-8 {
    margin: 4rem !important;
}

.mt-8,
.my-8 {
    margin-top: 4rem !important;
}

mt-10 {
    margin-top: 11rem !important;
}

.mr-8,
.mx-8 {
    margin-right: 4rem !important;
}

.mb-8,
.my-8 {
    margin-bottom: 4rem !important;
}

.ml-8,
.mx-8 {
    margin-left: 4rem !important;
}

.m-9 {
    margin: 6rem !important;
}

.mt-9,
.my-9 {
    margin-top: 6rem !important;
}

.mr-9,
.mx-9 {
    margin-right: 6rem !important;
}

.mb-9,
.my-9 {
    margin-bottom: 6rem !important;
}

.ml-9,
.mx-9 {
    margin-left: 6rem !important;
}

.p-0 {
    padding: 0 !important;
}

.pt-0,
.py-0 {
    padding-top: 0 !important;
}

.pr-0,
.px-0 {
    padding-right: 0 !important;
}

.pb-0,
.py-0 {
    padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
    padding-left: 0 !important;
}

.p-1 {
    padding: 0.25rem !important;
}

.pt-1,
.py-1 {
    padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
    padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
    padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
    padding-left: 0.25rem !important;
}

.p-2 {
    padding: 0.5rem !important;
}

.pt-2,
.py-2 {
    padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
    padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
    padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
    padding-left: 0.5rem !important;
}

.p-3 {
    padding: 0.75rem !important;
}

.pt-3,
.py-3 {
    padding-top: 0.75rem !important;
}

.pr-3,
.px-3 {
    padding-right: 0.75rem !important;
}

.pb-3,
.py-3 {
    padding-bottom: 0.75rem !important;
}

.pl-3,
.px-3 {
    padding-left: 0.75rem !important;
}

.p-4 {
    padding: 1rem !important;
}

.pt-4,
.py-4 {
    padding-top: 1rem !important;
}

.pr-4,
.px-4 {
    padding-right: 1rem !important;
}

.pb-4,
.py-4 {
    padding-bottom: 1rem !important;
}

.pl-4,
.px-4 {
    padding-left: 1rem !important;
}

.p-5 {
    padding: 1.5rem !important;
}

.pt-5,
.py-5 {
    padding-top: 1.5rem !important;
}

.pr-5,
.px-5 {
    padding-right: 1.5rem !important;
}

.pb-5,
.py-5 {
    padding-bottom: 1.5rem !important;
}

.pl-5,
.px-5 {
    padding-left: 1.5rem !important;
}

.p-6 {
    padding: 2rem !important;
}

.pt-6,
.py-6 {
    padding-top: 2rem !important;
}

.pr-6,
.px-6 {
    padding-right: 2rem !important;
}

.pb-6,
.py-6 {
    padding-bottom: 2rem !important;
}

.pl-6,
.px-6 {
    padding-left: 2rem !important;
}

.p-7 {
    padding: 3rem !important;
}

.pt-7,
.py-7 {
    padding-top: 3rem !important;
}

.pr-7,
.px-7 {
    padding-right: 3rem !important;
}

.pb-7,
.py-7 {
    padding-bottom: 3rem !important;
}

.pl-7,
.px-7 {
    padding-left: 3rem !important;
}

.p-8 {
    padding: 4rem !important;
}

.pt-8,
.py-8 {
    padding-top: 4rem !important;
}

.pr-8,
.px-8 {
    padding-right: 4rem !important;
}

.pb-8,
.py-8 {
    padding-bottom: 4rem !important;
}

.pl-8,
.px-8 {
    padding-left: 4rem !important;
}

.p-9 {
    padding: 6rem !important;
}

.pt-9,
.py-9 {
    padding-top: 6rem !important;
}

.pr-9,
.px-9 {
    padding-right: 6rem !important;
}

.pb-9,
.py-9 {
    padding-bottom: 6rem !important;
}

.pl-9,
.px-9 {
    padding-left: 6rem !important;
}

.fw-600 {
    font-weight: 600;
}

.m-auto {
    margin: auto !important;
}

.mt-auto,
.my-auto {
    margin-top: auto !important;
}

.mr-auto,
.mx-auto {
    margin-right: auto !important;
}

.mb-auto,
.my-auto {
    margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
    margin-left: auto !important;
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important;
    }

    .mt-sm-0,
    .my-sm-0 {
        margin-top: 0 !important;
    }

    .mr-sm-0,
    .mx-sm-0 {
        margin-right: 0 !important;
    }

    .mb-sm-0,
    .my-sm-0 {
        margin-bottom: 0 !important;
    }

    .ml-sm-0,
    .mx-sm-0 {
        margin-left: 0 !important;
    }

    .m-sm-1 {
        margin: 0.25rem !important;
    }

    .mt-sm-1,
    .my-sm-1 {
        margin-top: 0.25rem !important;
    }

    .mr-sm-1,
    .mx-sm-1 {
        margin-right: 0.25rem !important;
    }

    .mb-sm-1,
    .my-sm-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-sm-1,
    .mx-sm-1 {
        margin-left: 0.25rem !important;
    }

    .m-sm-2 {
        margin: 0.5rem !important;
    }

    .mt-sm-2,
    .my-sm-2 {
        margin-top: 0.5rem !important;
    }

    .mr-sm-2,
    .mx-sm-2 {
        margin-right: 0.5rem !important;
    }

    .mb-sm-2,
    .my-sm-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-sm-2,
    .mx-sm-2 {
        margin-left: 0.5rem !important;
    }

    .m-sm-3 {
        margin: 0.75rem !important;
    }

    .mt-sm-3,
    .my-sm-3 {
        margin-top: 0.75rem !important;
    }

    .mr-sm-3,
    .mx-sm-3 {
        margin-right: 0.75rem !important;
    }

    .mb-sm-3,
    .my-sm-3 {
        margin-bottom: 0.75rem !important;
    }

    .ml-sm-3,
    .mx-sm-3 {
        margin-left: 0.75rem !important;
    }

    .m-sm-4 {
        margin: 1rem !important;
    }

    .mt-sm-4,
    .my-sm-4 {
        margin-top: 1rem !important;
    }

    .mr-sm-4,
    .mx-sm-4 {
        margin-right: 1rem !important;
    }

    .mb-sm-4,
    .my-sm-4 {
        margin-bottom: 1rem !important;
    }

    .ml-sm-4,
    .mx-sm-4 {
        margin-left: 1rem !important;
    }

    .m-sm-5 {
        margin: 1.5rem !important;
    }

    .mt-sm-5,
    .my-sm-5 {
        margin-top: 1.5rem !important;
    }

    .mr-sm-5,
    .mx-sm-5 {
        margin-right: 1.5rem !important;
    }

    .mb-sm-5,
    .my-sm-5 {
        margin-bottom: 1.5rem !important;
    }

    .ml-sm-5,
    .mx-sm-5 {
        margin-left: 1.5rem !important;
    }

    .m-sm-6 {
        margin: 2rem !important;
    }

    .mt-sm-6,
    .my-sm-6 {
        margin-top: 2rem !important;
    }

    .mr-sm-6,
    .mx-sm-6 {
        margin-right: 2rem !important;
    }

    .mb-sm-6,
    .my-sm-6 {
        margin-bottom: 2rem !important;
    }

    .ml-sm-6,
    .mx-sm-6 {
        margin-left: 2rem !important;
    }

    .m-sm-7 {
        margin: 3rem !important;
    }

    .mt-sm-7,
    .my-sm-7 {
        margin-top: 3rem !important;
    }

    .mr-sm-7,
    .mx-sm-7 {
        margin-right: 3rem !important;
    }

    .mb-sm-7,
    .my-sm-7 {
        margin-bottom: 3rem !important;
    }

    .ml-sm-7,
    .mx-sm-7 {
        margin-left: 3rem !important;
    }

    .m-sm-8 {
        margin: 4rem !important;
    }

    .mt-sm-8,
    .my-sm-8 {
        margin-top: 4rem !important;
    }

    .mr-sm-8,
    .mx-sm-8 {
        margin-right: 4rem !important;
    }

    .mb-sm-8,
    .my-sm-8 {
        margin-bottom: 4rem !important;
    }

    .ml-sm-8,
    .mx-sm-8 {
        margin-left: 4rem !important;
    }

    .m-sm-9 {
        margin: 6rem !important;
    }

    .mt-sm-9,
    .my-sm-9 {
        margin-top: 6rem !important;
    }

    .mr-sm-9,
    .mx-sm-9 {
        margin-right: 6rem !important;
    }

    .mb-sm-9,
    .my-sm-9 {
        margin-bottom: 6rem !important;
    }

    .ml-sm-9,
    .mx-sm-9 {
        margin-left: 6rem !important;
    }

    .p-sm-0 {
        padding: 0 !important;
    }

    .pt-sm-0,
    .py-sm-0 {
        padding-top: 0 !important;
    }

    .pr-sm-0,
    .px-sm-0 {
        padding-right: 0 !important;
    }

    .pb-sm-0,
    .py-sm-0 {
        padding-bottom: 0 !important;
    }

    .pl-sm-0,
    .px-sm-0 {
        padding-left: 0 !important;
    }

    .p-sm-1 {
        padding: 0.25rem !important;
    }

    .pt-sm-1,
    .py-sm-1 {
        padding-top: 0.25rem !important;
    }

    .pr-sm-1,
    .px-sm-1 {
        padding-right: 0.25rem !important;
    }

    .pb-sm-1,
    .py-sm-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-sm-1,
    .px-sm-1 {
        padding-left: 0.25rem !important;
    }

    .p-sm-2 {
        padding: 0.5rem !important;
    }

    .pt-sm-2,
    .py-sm-2 {
        padding-top: 0.5rem !important;
    }

    .pr-sm-2,
    .px-sm-2 {
        padding-right: 0.5rem !important;
    }

    .pb-sm-2,
    .py-sm-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-sm-2,
    .px-sm-2 {
        padding-left: 0.5rem !important;
    }

    .p-sm-3 {
        padding: 0.75rem !important;
    }

    .pt-sm-3,
    .py-sm-3 {
        padding-top: 0.75rem !important;
    }

    .pr-sm-3,
    .px-sm-3 {
        padding-right: 0.75rem !important;
    }

    .pb-sm-3,
    .py-sm-3 {
        padding-bottom: 0.75rem !important;
    }

    .pl-sm-3,
    .px-sm-3 {
        padding-left: 0.75rem !important;
    }

    .p-sm-4 {
        padding: 1rem !important;
    }

    .pt-sm-4,
    .py-sm-4 {
        padding-top: 1rem !important;
    }

    .pr-sm-4,
    .px-sm-4 {
        padding-right: 1rem !important;
    }

    .pb-sm-4,
    .py-sm-4 {
        padding-bottom: 1rem !important;
    }

    .pl-sm-4,
    .px-sm-4 {
        padding-left: 1rem !important;
    }

    .p-sm-5 {
        padding: 1.5rem !important;
    }

    .pt-sm-5,
    .py-sm-5 {
        padding-top: 1.5rem !important;
    }

    .pr-sm-5,
    .px-sm-5 {
        padding-right: 1.5rem !important;
    }

    .pb-sm-5,
    .py-sm-5 {
        padding-bottom: 1.5rem !important;
    }

    .pl-sm-5,
    .px-sm-5 {
        padding-left: 1.5rem !important;
    }

    .p-sm-6 {
        padding: 2rem !important;
    }

    .pt-sm-6,
    .py-sm-6 {
        padding-top: 2rem !important;
    }

    .pr-sm-6,
    .px-sm-6 {
        padding-right: 2rem !important;
    }

    .pb-sm-6,
    .py-sm-6 {
        padding-bottom: 2rem !important;
    }

    .pl-sm-6,
    .px-sm-6 {
        padding-left: 2rem !important;
    }

    .p-sm-7 {
        padding: 3rem !important;
    }

    .pt-sm-7,
    .py-sm-7 {
        padding-top: 3rem !important;
    }

    .pr-sm-7,
    .px-sm-7 {
        padding-right: 3rem !important;
    }

    .pb-sm-7,
    .py-sm-7 {
        padding-bottom: 3rem !important;
    }

    .pl-sm-7,
    .px-sm-7 {
        padding-left: 3rem !important;
    }

    .p-sm-8 {
        padding: 4rem !important;
    }

    .pt-sm-8,
    .py-sm-8 {
        padding-top: 4rem !important;
    }

    .pr-sm-8,
    .px-sm-8 {
        padding-right: 4rem !important;
    }

    .pb-sm-8,
    .py-sm-8 {
        padding-bottom: 4rem !important;
    }

    .pl-sm-8,
    .px-sm-8 {
        padding-left: 4rem !important;
    }

    .p-sm-9 {
        padding: 6rem !important;
    }

    .pt-sm-9,
    .py-sm-9 {
        padding-top: 6rem !important;
    }

    .pr-sm-9,
    .px-sm-9 {
        padding-right: 6rem !important;
    }

    .pb-sm-9,
    .py-sm-9 {
        padding-bottom: 6rem !important;
    }

    .pl-sm-9,
    .px-sm-9 {
        padding-left: 6rem !important;
    }

    .m-sm-auto {
        margin: auto !important;
    }

    .mt-sm-auto,
    .my-sm-auto {
        margin-top: auto !important;
    }

    .mr-sm-auto,
    .mx-sm-auto {
        margin-right: auto !important;
    }

    .mb-sm-auto,
    .my-sm-auto {
        margin-bottom: auto !important;
    }

    .ml-sm-auto,
    .mx-sm-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important;
    }

    .mt-md-0,
    .my-md-0 {
        margin-top: 0 !important;
    }

    .mr-md-0,
    .mx-md-0 {
        margin-right: 0 !important;
    }

    .mb-md-0,
    .my-md-0 {
        margin-bottom: 0 !important;
    }

    .ml-md-0,
    .mx-md-0 {
        margin-left: 0 !important;
    }

    .m-md-1 {
        margin: 0.25rem !important;
    }

    .mt-md-1,
    .my-md-1 {
        margin-top: 0.25rem !important;
    }

    .mr-md-1,
    .mx-md-1 {
        margin-right: 0.25rem !important;
    }

    .mb-md-1,
    .my-md-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-md-1,
    .mx-md-1 {
        margin-left: 0.25rem !important;
    }

    .m-md-2 {
        margin: 0.5rem !important;
    }

    .mt-md-2,
    .my-md-2 {
        margin-top: 0.5rem !important;
    }

    .mr-md-2,
    .mx-md-2 {
        margin-right: 0.5rem !important;
    }

    .mb-md-2,
    .my-md-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-md-2,
    .mx-md-2 {
        margin-left: 0.5rem !important;
    }

    .m-md-3 {
        margin: 0.75rem !important;
    }

    .mt-md-3,
    .my-md-3 {
        margin-top: 0.75rem !important;
    }

    .mr-md-3,
    .mx-md-3 {
        margin-right: 0.75rem !important;
    }

    .mb-md-3,
    .my-md-3 {
        margin-bottom: 0.75rem !important;
    }

    .ml-md-3,
    .mx-md-3 {
        margin-left: 0.75rem !important;
    }

    .m-md-4 {
        margin: 1rem !important;
    }

    .mt-md-4,
    .my-md-4 {
        margin-top: 1rem !important;
    }

    .mr-md-4,
    .mx-md-4 {
        margin-right: 1rem !important;
    }

    .mb-md-4,
    .my-md-4 {
        margin-bottom: 1rem !important;
    }

    .ml-md-4,
    .mx-md-4 {
        margin-left: 1rem !important;
    }

    .m-md-5 {
        margin: 1.5rem !important;
    }

    .mt-md-5,
    .my-md-5 {
        margin-top: 1.5rem !important;
    }

    .mr-md-5,
    .mx-md-5 {
        margin-right: 1.5rem !important;
    }

    .mb-md-5,
    .my-md-5 {
        margin-bottom: 1.5rem !important;
    }

    .ml-md-5,
    .mx-md-5 {
        margin-left: 1.5rem !important;
    }

    .m-md-6 {
        margin: 2rem !important;
    }

    .mt-md-6,
    .my-md-6 {
        margin-top: 2rem !important;
    }

    .mr-md-6,
    .mx-md-6 {
        margin-right: 2rem !important;
    }

    .mb-md-6,
    .my-md-6 {
        margin-bottom: 2rem !important;
    }

    .ml-md-6,
    .mx-md-6 {
        margin-left: 2rem !important;
    }

    .m-md-7 {
        margin: 3rem !important;
    }

    .mt-md-7,
    .my-md-7 {
        margin-top: 3rem !important;
    }

    .mr-md-7,
    .mx-md-7 {
        margin-right: 3rem !important;
    }

    .mb-md-7,
    .my-md-7 {
        margin-bottom: 3rem !important;
    }

    .ml-md-7,
    .mx-md-7 {
        margin-left: 3rem !important;
    }

    .m-md-8 {
        margin: 4rem !important;
    }

    .mt-md-8,
    .my-md-8 {
        margin-top: 4rem !important;
    }

    .mr-md-8,
    .mx-md-8 {
        margin-right: 4rem !important;
    }

    .mb-md-8,
    .my-md-8 {
        margin-bottom: 4rem !important;
    }

    .ml-md-8,
    .mx-md-8 {
        margin-left: 4rem !important;
    }

    .m-md-9 {
        margin: 6rem !important;
    }

    .mt-md-9,
    .my-md-9 {
        margin-top: 6rem !important;
    }

    .mr-md-9,
    .mx-md-9 {
        margin-right: 6rem !important;
    }

    .mb-md-9,
    .my-md-9 {
        margin-bottom: 6rem !important;
    }

    .ml-md-9,
    .mx-md-9 {
        margin-left: 6rem !important;
    }

    .p-md-0 {
        padding: 0 !important;
    }

    .pt-md-0,
    .py-md-0 {
        padding-top: 0 !important;
    }

    .pr-md-0,
    .px-md-0 {
        padding-right: 0 !important;
    }

    .pb-md-0,
    .py-md-0 {
        padding-bottom: 0 !important;
    }

    .pl-md-0,
    .px-md-0 {
        padding-left: 0 !important;
    }

    .p-md-1 {
        padding: 0.25rem !important;
    }

    .pt-md-1,
    .py-md-1 {
        padding-top: 0.25rem !important;
    }

    .pr-md-1,
    .px-md-1 {
        padding-right: 0.25rem !important;
    }

    .pb-md-1,
    .py-md-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-md-1,
    .px-md-1 {
        padding-left: 0.25rem !important;
    }

    .p-md-2 {
        padding: 0.5rem !important;
    }

    .pt-md-2,
    .py-md-2 {
        padding-top: 0.5rem !important;
    }

    .pr-md-2,
    .px-md-2 {
        padding-right: 0.5rem !important;
    }

    .pb-md-2,
    .py-md-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-md-2,
    .px-md-2 {
        padding-left: 0.5rem !important;
    }

    .p-md-3 {
        padding: 0.75rem !important;
    }

    .pt-md-3,
    .py-md-3 {
        padding-top: 0.75rem !important;
    }

    .pr-md-3,
    .px-md-3 {
        padding-right: 0.75rem !important;
    }

    .pb-md-3,
    .py-md-3 {
        padding-bottom: 0.75rem !important;
    }

    .pl-md-3,
    .px-md-3 {
        padding-left: 0.75rem !important;
    }

    .p-md-4 {
        padding: 1rem !important;
    }

    .pt-md-4,
    .py-md-4 {
        padding-top: 1rem !important;
    }

    .pr-md-4,
    .px-md-4 {
        padding-right: 1rem !important;
    }

    .pb-md-4,
    .py-md-4 {
        padding-bottom: 1rem !important;
    }

    .pl-md-4,
    .px-md-4 {
        padding-left: 1rem !important;
    }

    .p-md-5 {
        padding: 1.5rem !important;
    }

    .pt-md-5,
    .py-md-5 {
        padding-top: 1.5rem !important;
    }

    .pr-md-5,
    .px-md-5 {
        padding-right: 1.5rem !important;
    }

    .pb-md-5,
    .py-md-5 {
        padding-bottom: 1.5rem !important;
    }

    .pl-md-5,
    .px-md-5 {
        padding-left: 1.5rem !important;
    }

    .p-md-6 {
        padding: 2rem !important;
    }

    .pt-md-6,
    .py-md-6 {
        padding-top: 2rem !important;
    }

    .pr-md-6,
    .px-md-6 {
        padding-right: 2rem !important;
    }

    .pb-md-6,
    .py-md-6 {
        padding-bottom: 2rem !important;
    }

    .pl-md-6,
    .px-md-6 {
        padding-left: 2rem !important;
    }

    .p-md-7 {
        padding: 3rem !important;
    }

    .pt-md-7,
    .py-md-7 {
        padding-top: 3rem !important;
    }

    .pr-md-7,
    .px-md-7 {
        padding-right: 3rem !important;
    }

    .pb-md-7,
    .py-md-7 {
        padding-bottom: 3rem !important;
    }

    .pl-md-7,
    .px-md-7 {
        padding-left: 3rem !important;
    }

    .p-md-8 {
        padding: 4rem !important;
    }

    .pt-md-8,
    .py-md-8 {
        padding-top: 4rem !important;
    }

    .pr-md-8,
    .px-md-8 {
        padding-right: 4rem !important;
    }

    .pb-md-8,
    .py-md-8 {
        padding-bottom: 4rem !important;
    }

    .pl-md-8,
    .px-md-8 {
        padding-left: 4rem !important;
    }

    .p-md-9 {
        padding: 6rem !important;
    }

    .pt-md-9,
    .py-md-9 {
        padding-top: 6rem !important;
    }

    .pr-md-9,
    .px-md-9 {
        padding-right: 6rem !important;
    }

    .pb-md-9,
    .py-md-9 {
        padding-bottom: 6rem !important;
    }

    .pl-md-9,
    .px-md-9 {
        padding-left: 6rem !important;
    }

    .m-md-auto {
        margin: auto !important;
    }

    .mt-md-auto,
    .my-md-auto {
        margin-top: auto !important;
    }

    .mr-md-auto,
    .mx-md-auto {
        margin-right: auto !important;
    }

    .mb-md-auto,
    .my-md-auto {
        margin-bottom: auto !important;
    }

    .ml-md-auto,
    .mx-md-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important;
    }

    .mt-lg-0,
    .my-lg-0 {
        margin-top: 0 !important;
    }

    .mr-lg-0,
    .mx-lg-0 {
        margin-right: 0 !important;
    }

    .mb-lg-0,
    .my-lg-0 {
        margin-bottom: 0 !important;
    }

    .ml-lg-0,
    .mx-lg-0 {
        margin-left: 0 !important;
    }

    .m-lg-1 {
        margin: 0.25rem !important;
    }

    .mt-lg-1,
    .my-lg-1 {
        margin-top: 0.25rem !important;
    }

    .mr-lg-1,
    .mx-lg-1 {
        margin-right: 0.25rem !important;
    }

    .mb-lg-1,
    .my-lg-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-lg-1,
    .mx-lg-1 {
        margin-left: 0.25rem !important;
    }

    .m-lg-2 {
        margin: 0.5rem !important;
    }

    .mt-lg-2,
    .my-lg-2 {
        margin-top: 0.5rem !important;
    }

    .mr-lg-2,
    .mx-lg-2 {
        margin-right: 0.5rem !important;
    }

    .mb-lg-2,
    .my-lg-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-lg-2,
    .mx-lg-2 {
        margin-left: 0.5rem !important;
    }

    .m-lg-3 {
        margin: 0.75rem !important;
    }

    .mt-lg-3,
    .my-lg-3 {
        margin-top: 0.75rem !important;
    }

    .mr-lg-3,
    .mx-lg-3 {
        margin-right: 0.75rem !important;
    }

    .mb-lg-3,
    .my-lg-3 {
        margin-bottom: 0.75rem !important;
    }

    .ml-lg-3,
    .mx-lg-3 {
        margin-left: 0.75rem !important;
    }

    .m-lg-4 {
        margin: 1rem !important;
    }

    .mt-lg-4,
    .my-lg-4 {
        margin-top: 1rem !important;
    }

    .mr-lg-4,
    .mx-lg-4 {
        margin-right: 1rem !important;
    }

    .mb-lg-4,
    .my-lg-4 {
        margin-bottom: 1rem !important;
    }

    .ml-lg-4,
    .mx-lg-4 {
        margin-left: 1rem !important;
    }

    .m-lg-5 {
        margin: 1.5rem !important;
    }

    .mt-lg-5,
    .my-lg-5 {
        margin-top: 1.5rem !important;
    }

    .mr-lg-5,
    .mx-lg-5 {
        margin-right: 1.5rem !important;
    }

    .mb-lg-5,
    .my-lg-5 {
        margin-bottom: 1.5rem !important;
    }

    .ml-lg-5,
    .mx-lg-5 {
        margin-left: 1.5rem !important;
    }

    .m-lg-6 {
        margin: 2rem !important;
    }

    .mt-lg-6,
    .my-lg-6 {
        margin-top: 2rem !important;
    }

    .mr-lg-6,
    .mx-lg-6 {
        margin-right: 2rem !important;
    }

    .mb-lg-6,
    .my-lg-6 {
        margin-bottom: 2rem !important;
    }

    .ml-lg-6,
    .mx-lg-6 {
        margin-left: 2rem !important;
    }

    .m-lg-7 {
        margin: 3rem !important;
    }

    .mt-lg-7,
    .my-lg-7 {
        margin-top: 3rem !important;
    }

    .mr-lg-7,
    .mx-lg-7 {
        margin-right: 3rem !important;
    }

    .mb-lg-7,
    .my-lg-7 {
        margin-bottom: 3rem !important;
    }

    .ml-lg-7,
    .mx-lg-7 {
        margin-left: 3rem !important;
    }

    .m-lg-8 {
        margin: 4rem !important;
    }

    .mt-lg-8,
    .my-lg-8 {
        margin-top: 4rem !important;
    }

    .mr-lg-8,
    .mx-lg-8 {
        margin-right: 4rem !important;
    }

    .mb-lg-8,
    .my-lg-8 {
        margin-bottom: 4rem !important;
    }

    .ml-lg-8,
    .mx-lg-8 {
        margin-left: 4rem !important;
    }

    .m-lg-9 {
        margin: 6rem !important;
    }

    .mt-lg-9,
    .my-lg-9 {
        margin-top: 6rem !important;
    }

    .mr-lg-9,
    .mx-lg-9 {
        margin-right: 6rem !important;
    }

    .mb-lg-9,
    .my-lg-9 {
        margin-bottom: 6rem !important;
    }

    .ml-lg-9,
    .mx-lg-9 {
        margin-left: 6rem !important;
    }

    .p-lg-0 {
        padding: 0 !important;
    }

    .pt-lg-0,
    .py-lg-0 {
        padding-top: 0 !important;
    }

    .pr-lg-0,
    .px-lg-0 {
        padding-right: 0 !important;
    }

    .pb-lg-0,
    .py-lg-0 {
        padding-bottom: 0 !important;
    }

    .pl-lg-0,
    .px-lg-0 {
        padding-left: 0 !important;
    }

    .p-lg-1 {
        padding: 0.25rem !important;
    }

    .pt-lg-1,
    .py-lg-1 {
        padding-top: 0.25rem !important;
    }

    .pr-lg-1,
    .px-lg-1 {
        padding-right: 0.25rem !important;
    }

    .pb-lg-1,
    .py-lg-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-lg-1,
    .px-lg-1 {
        padding-left: 0.25rem !important;
    }

    .p-lg-2 {
        padding: 0.5rem !important;
    }

    .pt-lg-2,
    .py-lg-2 {
        padding-top: 0.5rem !important;
    }

    .pr-lg-2,
    .px-lg-2 {
        padding-right: 0.5rem !important;
    }

    .pb-lg-2,
    .py-lg-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-lg-2,
    .px-lg-2 {
        padding-left: 0.5rem !important;
    }

    .p-lg-3 {
        padding: 0.75rem !important;
    }

    .pt-lg-3,
    .py-lg-3 {
        padding-top: 0.75rem !important;
    }

    .pr-lg-3,
    .px-lg-3 {
        padding-right: 0.75rem !important;
    }

    .pb-lg-3,
    .py-lg-3 {
        padding-bottom: 0.75rem !important;
    }

    .pl-lg-3,
    .px-lg-3 {
        padding-left: 0.75rem !important;
    }

    .p-lg-4 {
        padding: 1rem !important;
    }

    .pt-lg-4,
    .py-lg-4 {
        padding-top: 1rem !important;
    }

    .pr-lg-4,
    .px-lg-4 {
        padding-right: 1rem !important;
    }

    .pb-lg-4,
    .py-lg-4 {
        padding-bottom: 1rem !important;
    }

    .pl-lg-4,
    .px-lg-4 {
        padding-left: 1rem !important;
    }

    .p-lg-5 {
        padding: 1.5rem !important;
    }

    .pt-lg-5,
    .py-lg-5 {
        padding-top: 1.5rem !important;
    }

    .pr-lg-5,
    .px-lg-5 {
        padding-right: 1.5rem !important;
    }

    .pb-lg-5,
    .py-lg-5 {
        padding-bottom: 1.5rem !important;
    }

    .pl-lg-5,
    .px-lg-5 {
        padding-left: 1.5rem !important;
    }

    .p-lg-6 {
        padding: 2rem !important;
    }

    .pt-lg-6,
    .py-lg-6 {
        padding-top: 2rem !important;
    }

    .pr-lg-6,
    .px-lg-6 {
        padding-right: 2rem !important;
    }

    .pb-lg-6,
    .py-lg-6 {
        padding-bottom: 2rem !important;
    }

    .pl-lg-6,
    .px-lg-6 {
        padding-left: 2rem !important;
    }

    .p-lg-7 {
        padding: 3rem !important;
    }

    .pt-lg-7,
    .py-lg-7 {
        padding-top: 3rem !important;
    }

    .pr-lg-7,
    .px-lg-7 {
        padding-right: 3rem !important;
    }

    .pb-lg-7,
    .py-lg-7 {
        padding-bottom: 3rem !important;
    }

    .pl-lg-7,
    .px-lg-7 {
        padding-left: 3rem !important;
    }

    .p-lg-8 {
        padding: 4rem !important;
    }

    .pt-lg-8,
    .py-lg-8 {
        padding-top: 4rem !important;
    }

    .pr-lg-8,
    .px-lg-8 {
        padding-right: 4rem !important;
    }

    .pb-lg-8,
    .py-lg-8 {
        padding-bottom: 4rem !important;
    }

    .pl-lg-8,
    .px-lg-8 {
        padding-left: 4rem !important;
    }

    .p-lg-9 {
        padding: 6rem !important;
    }

    .pt-lg-9,
    .py-lg-9 {
        padding-top: 6rem !important;
    }

    .pr-lg-9,
    .px-lg-9 {
        padding-right: 6rem !important;
    }

    .pb-lg-9,
    .py-lg-9 {
        padding-bottom: 6rem !important;
    }

    .pl-lg-9,
    .px-lg-9 {
        padding-left: 6rem !important;
    }

    .m-lg-auto {
        margin: auto !important;
    }

    .mt-lg-auto,
    .my-lg-auto {
        margin-top: auto !important;
    }

    .mr-lg-auto,
    .mx-lg-auto {
        margin-right: auto !important;
    }

    .mb-lg-auto,
    .my-lg-auto {
        margin-bottom: auto !important;
    }

    .ml-lg-auto,
    .mx-lg-auto {
        margin-left: auto !important;
    }
}

@media (min-width: 1280px) {
    .m-xl-0 {
        margin: 0 !important;
    }

    .mt-xl-0,
    .my-xl-0 {
        margin-top: 0 !important;
    }

    .mr-xl-0,
    .mx-xl-0 {
        margin-right: 0 !important;
    }

    .mb-xl-0,
    .my-xl-0 {
        margin-bottom: 0 !important;
    }

    .ml-xl-0,
    .mx-xl-0 {
        margin-left: 0 !important;
    }

    .m-xl-1 {
        margin: 0.25rem !important;
    }

    .mt-xl-1,
    .my-xl-1 {
        margin-top: 0.25rem !important;
    }

    .mr-xl-1,
    .mx-xl-1 {
        margin-right: 0.25rem !important;
    }

    .mb-xl-1,
    .my-xl-1 {
        margin-bottom: 0.25rem !important;
    }

    .ml-xl-1,
    .mx-xl-1 {
        margin-left: 0.25rem !important;
    }

    .m-xl-2 {
        margin: 0.5rem !important;
    }

    .mt-xl-2,
    .my-xl-2 {
        margin-top: 0.5rem !important;
    }

    .mr-xl-2,
    .mx-xl-2 {
        margin-right: 0.5rem !important;
    }

    .mb-xl-2,
    .my-xl-2 {
        margin-bottom: 0.5rem !important;
    }

    .ml-xl-2,
    .mx-xl-2 {
        margin-left: 0.5rem !important;
    }

    .m-xl-3 {
        margin: 0.75rem !important;
    }

    .mt-xl-3,
    .my-xl-3 {
        margin-top: 0.75rem !important;
    }

    .mr-xl-3,
    .mx-xl-3 {
        margin-right: 0.75rem !important;
    }

    .mb-xl-3,
    .my-xl-3 {
        margin-bottom: 0.75rem !important;
    }

    .ml-xl-3,
    .mx-xl-3 {
        margin-left: 0.75rem !important;
    }

    .m-xl-4 {
        margin: 1rem !important;
    }

    .mt-xl-4,
    .my-xl-4 {
        margin-top: 1rem !important;
    }

    .mr-xl-4,
    .mx-xl-4 {
        margin-right: 1rem !important;
    }

    .mb-xl-4,
    .my-xl-4 {
        margin-bottom: 1rem !important;
    }

    .ml-xl-4,
    .mx-xl-4 {
        margin-left: 1rem !important;
    }

    .m-xl-5 {
        margin: 1.5rem !important;
    }

    .mt-xl-5,
    .my-xl-5 {
        margin-top: 1.5rem !important;
    }

    .mr-xl-5,
    .mx-xl-5 {
        margin-right: 1.5rem !important;
    }

    .mb-xl-5,
    .my-xl-5 {
        margin-bottom: 1.5rem !important;
    }

    .ml-xl-5,
    .mx-xl-5 {
        margin-left: 1.5rem !important;
    }

    .m-xl-6 {
        margin: 2rem !important;
    }

    .mt-xl-6,
    .my-xl-6 {
        margin-top: 2rem !important;
    }

    .mr-xl-6,
    .mx-xl-6 {
        margin-right: 2rem !important;
    }

    .mb-xl-6,
    .my-xl-6 {
        margin-bottom: 2rem !important;
    }

    .ml-xl-6,
    .mx-xl-6 {
        margin-left: 2rem !important;
    }

    .m-xl-7 {
        margin: 3rem !important;
    }

    .mt-xl-7,
    .my-xl-7 {
        margin-top: 3rem !important;
    }

    .mr-xl-7,
    .mx-xl-7 {
        margin-right: 3rem !important;
    }

    .mb-xl-7,
    .my-xl-7 {
        margin-bottom: 3rem !important;
    }

    .ml-xl-7,
    .mx-xl-7 {
        margin-left: 3rem !important;
    }

    .m-xl-8 {
        margin: 4rem !important;
    }

    .mt-xl-8,
    .my-xl-8 {
        margin-top: 4rem !important;
    }

    .mr-xl-8,
    .mx-xl-8 {
        margin-right: 4rem !important;
    }

    .mb-xl-8,
    .my-xl-8 {
        margin-bottom: 4rem !important;
    }

    .ml-xl-8,
    .mx-xl-8 {
        margin-left: 4rem !important;
    }

    .m-xl-9 {
        margin: 6rem !important;
    }

    .mt-xl-9,
    .my-xl-9 {
        margin-top: 6rem !important;
    }

    .mr-xl-9,
    .mx-xl-9 {
        margin-right: 6rem !important;
    }

    .mb-xl-9,
    .my-xl-9 {
        margin-bottom: 6rem !important;
    }

    .ml-xl-9,
    .mx-xl-9 {
        margin-left: 6rem !important;
    }

    .p-xl-0 {
        padding: 0 !important;
    }

    .pt-xl-0,
    .py-xl-0 {
        padding-top: 0 !important;
    }

    .pr-xl-0,
    .px-xl-0 {
        padding-right: 0 !important;
    }

    .pb-xl-0,
    .py-xl-0 {
        padding-bottom: 0 !important;
    }

    .pl-xl-0,
    .px-xl-0 {
        padding-left: 0 !important;
    }

    .p-xl-1 {
        padding: 0.25rem !important;
    }

    .pt-xl-1,
    .py-xl-1 {
        padding-top: 0.25rem !important;
    }

    .pr-xl-1,
    .px-xl-1 {
        padding-right: 0.25rem !important;
    }

    .pb-xl-1,
    .py-xl-1 {
        padding-bottom: 0.25rem !important;
    }

    .pl-xl-1,
    .px-xl-1 {
        padding-left: 0.25rem !important;
    }

    .p-xl-2 {
        padding: 0.5rem !important;
    }

    .pt-xl-2,
    .py-xl-2 {
        padding-top: 0.5rem !important;
    }

    .pr-xl-2,
    .px-xl-2 {
        padding-right: 0.5rem !important;
    }

    .pb-xl-2,
    .py-xl-2 {
        padding-bottom: 0.5rem !important;
    }

    .pl-xl-2,
    .px-xl-2 {
        padding-left: 0.5rem !important;
    }

    .p-xl-3 {
        padding: 0.75rem !important;
    }

    .pt-xl-3,
    .py-xl-3 {
        padding-top: 0.75rem !important;
    }

    .pr-xl-3,
    .px-xl-3 {
        padding-right: 0.75rem !important;
    }

    .pb-xl-3,
    .py-xl-3 {
        padding-bottom: 0.75rem !important;
    }

    .pl-xl-3,
    .px-xl-3 {
        padding-left: 0.75rem !important;
    }

    .p-xl-4 {
        padding: 1rem !important;
    }

    .pt-xl-4,
    .py-xl-4 {
        padding-top: 1rem !important;
    }

    .pr-xl-4,
    .px-xl-4 {
        padding-right: 1rem !important;
    }

    .pb-xl-4,
    .py-xl-4 {
        padding-bottom: 1rem !important;
    }

    .pl-xl-4,
    .px-xl-4 {
        padding-left: 1rem !important;
    }

    .p-xl-5 {
        padding: 1.5rem !important;
    }

    .pt-xl-5,
    .py-xl-5 {
        padding-top: 1.5rem !important;
    }

    .pr-xl-5,
    .px-xl-5 {
        padding-right: 1.5rem !important;
    }

    .pb-xl-5,
    .py-xl-5 {
        padding-bottom: 1.5rem !important;
    }

    .pl-xl-5,
    .px-xl-5 {
        padding-left: 1.5rem !important;
    }

    .p-xl-6 {
        padding: 2rem !important;
    }

    .pt-xl-6,
    .py-xl-6 {
        padding-top: 2rem !important;
    }

    .pr-xl-6,
    .px-xl-6 {
        padding-right: 2rem !important;
    }

    .pb-xl-6,
    .py-xl-6 {
        padding-bottom: 2rem !important;
    }

    .pl-xl-6,
    .px-xl-6 {
        padding-left: 2rem !important;
    }

    .p-xl-7 {
        padding: 3rem !important;
    }

    .pt-xl-7,
    .py-xl-7 {
        padding-top: 3rem !important;
    }

    .pr-xl-7,
    .px-xl-7 {
        padding-right: 3rem !important;
    }

    .pb-xl-7,
    .py-xl-7 {
        padding-bottom: 3rem !important;
    }

    .pl-xl-7,
    .px-xl-7 {
        padding-left: 3rem !important;
    }

    .p-xl-8 {
        padding: 4rem !important;
    }

    .pt-xl-8,
    .py-xl-8 {
        padding-top: 4rem !important;
    }

    .pr-xl-8,
    .px-xl-8 {
        padding-right: 4rem !important;
    }

    .pb-xl-8,
    .py-xl-8 {
        padding-bottom: 4rem !important;
    }

    .pl-xl-8,
    .px-xl-8 {
        padding-left: 4rem !important;
    }

    .p-xl-9 {
        padding: 6rem !important;
    }

    .pt-xl-9,
    .py-xl-9 {
        padding-top: 6rem !important;
    }

    .pr-xl-9,
    .px-xl-9 {
        padding-right: 6rem !important;
    }

    .pb-xl-9,
    .py-xl-9 {
        padding-bottom: 6rem !important;
    }

    .pl-xl-9,
    .px-xl-9 {
        padding-left: 6rem !important;
    }

    .m-xl-auto {
        margin: auto !important;
    }

    .mt-xl-auto,
    .my-xl-auto {
        margin-top: auto !important;
    }

    .mr-xl-auto,
    .mx-xl-auto {
        margin-right: auto !important;
    }

    .mb-xl-auto,
    .my-xl-auto {
        margin-bottom: auto !important;
    }

    .ml-xl-auto,
    .mx-xl-auto {
        margin-left: auto !important;
    }
}

/*------- Alignments & values-------*/
.text-monospace {
    font-family: Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.text-justify {
    text-align: justify !important;
}

.text-nowrap {
    white-space: nowrap !important;
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.text-left {
    text-align: left !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important;
    }

    .text-sm-right {
        text-align: right !important;
    }

    .text-sm-center {
        text-align: center !important;
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important;
    }

    .text-md-right {
        text-align: right !important;
    }

    .text-md-center {
        text-align: center !important;
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important;
    }

    .text-lg-right {
        text-align: right !important;
    }

    .text-lg-center {
        text-align: center !important;
    }
}

@media (min-width: 1280px) {
    .text-xl-left {
        text-align: left !important;
    }

    .text-xl-right {
        text-align: right !important;
    }

    .text-xl-center {
        text-align: center !important;
    }
}

.text-lowercase {
    text-transform: lowercase !important;
}

.text-uppercase {
    text-transform: uppercase !important;
}

.text-capitalize {
    text-transform: capitalize !important;
}

.font-weight-light {
    font-weight: 300 !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.font-weight-semibold {
    font-weight: 600 !important;
}

.font-weight-bold {
    font-weight: 700 !important;
}

.font-italic {
    font-style: italic !important;
}

.text-white {
    color: #fff !important;
}

.text-white-transparent {
    color: #fff !important;
    opacity: 0.9;
}

.text-white-transparent-1 {
    color: #fff !important;
    opacity: 0.5;
}

.text-success {
    color: #21c44c !important;
}

a.text-success:hover,
a.text-success:focus {
    color: #448700 !important;
}

.text-info {
    color: #26c2f7 !important;
}

a.text-info:hover,
a.text-info:focus {
    color: #1594ef !important;
}

.text-warning {
    color: #f7b731 !important;
}

a.text-warning:hover,
a.text-warning:focus {
    color: #c29d0b !important;
}

.text-danger {
    color: #f5334f !important;
}

a.text-danger:hover,
a.text-danger:focus {
    color: #d22827 !important;
}

.text-light {
    color: #ebedef !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #dae0e5 !important;
}

.text-dark {
    color: #182d49 !important;
}

a.text-dark:hover,
a.text-dark:focus {
    color: #7b6fe0 !important;
}

.text-body {
    color: #495057 !important;
}

.text-default-body {
    color: #323c53 !important;
}

.text-muted {
    color: #92969a !important;
}

.text-black-50 {
    color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}

.visible {
    visibility: visible !important;
}

.invisible {
    visibility: hidden !important;
}

/*----- Avatars -----*/
.country-selector .avatar {
    width: 1.4rem;
    height: 1.2rem;
}

.avatar {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    display: inline-block;
    background: #04cad0 no-repeat center/cover;
    position: relative;
    text-align: center;
    color: #fff;
    font-weight: 400;
    vertical-align: bottom;
    font-size: .875rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.noborder {
    border-radius: 0;
}

.brround {
    border-radius: 50%;
}

.bradius {
    border-radius: 25%;
}

.avatar i {
    font-size: 125%;
    vertical-align: sub;
}

.avatar-status {
    position: absolute;
    right: -2px;
    bottom: -2px;
    width: .75rem;
    height: .75rem;
    border: 2px solid #fff;
    border-radius: 50%;
}

.avatar-sm {
    width: 1.6rem;
    height: 1.6rem;
    line-height: 1.6rem;
    font-size: .75rem;
}

.avatar-md {
    width: 2.5rem;
    height: 2.5rem;
    line-height: 2.5rem;
    font-size: 1rem;
}

.avatar-lg {
    width: 3rem;
    height: 3rem;
    line-height: 3rem;
    font-size: 1.25rem;
}

.avatar-xl {
    width: 4rem;
    height: 4rem;
    line-height: 4rem;
    font-size: 1.75rem;
}

.avatar-xxl {
    width: 5rem;
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
}

.avatar-placeholder {
    background: #ced4da url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134"><path fill="#868e96" d="M65.92 66.34h2.16c14.802.42 30.928 6.062 29.283 20.35l-1.618 13.32c-.844 6.815-5.208 7.828-13.972 7.866H52.23c-8.764-.038-13.13-1.05-13.973-7.865l-1.62-13.32C34.994 72.4 51.12 66.76 65.92 66.34zM49.432 43.934c0-9.82 7.99-17.81 17.807-17.81 9.82 0 17.81 7.99 17.81 17.81 0 9.82-7.99 17.807-17.81 17.807-9.82 0-17.808-7.987-17.808-17.806z"/></svg>') no-repeat center/80%;
}

.avatar-list {
    margin: 0 0 -.5rem;
    padding: 0;
    font-size: 0;
}

.avatar-list .avatar {
    margin-bottom: .5rem;
}

.avatar-list .avatar:not(:last-child) {
    margin-right: .5rem;
}

.avatar-list-stacked .avatar {
    margin-right: -.8em !important;
    box-shadow: 0 0 0 2px #fff;
}

.avatar-blue {
    background-color: #c8d9f1;
    color: #467fcf;
}

.avatar-indigo {
    background-color: #d1d5f0;
    color: #6574cd;
}

.avatar-purple {
    background-color: #e4cff9;
    color: #867efc;
}

.avatar-pink {
    background-color: #fcd3e1;
    color: #ec82ef;
}

.avatar-red {
    background-color: #f0bcbc;
    color: #c21a1a;
}

.avatar-orange {
    background-color: #fee0c7;
    color: #fc7303;
}

.avatar-yellow {
    background-color: #fbedb7;
    color: #ecb403;
}

.avatar-green {
    background-color: #cfeab3;
    color: #4ecc48;
}

.avatar-teal {
    background-color: #bfefea;
    color: #2bcbba;
}

.avatar-cyan {
    background-color: #b9e3ea;
    color: #17a2b8;
}

.avatar-white {
    background-color: white;
    color: #fff;
}

.avatar-gray {
    background-color: #dbdde0;
    color: #868e96;
}

.avatar-gray-dark {
    background-color: #c2c4c6;
    color: #343a40;
}

.avatar-azure {
    background-color: #c7e6fb;
    color: #45aaf2;
}

.avatar-lime {
    background-color: #d7f2c2;
    color: #7bd235;
}

.product-price {
    font-size: 1rem;
}

.product-price strong {
    font-size: 1.5rem;
}

@-webkit-keyframes indeterminate {
    0% {
        left: -35%;
        right: 100%;
    }

    100%,
    60% {
        left: 100%;
        right: -90%;
    }
}

@keyframes indeterminate {
    0% {
        left: -35%;
        right: 100%;
    }

    100%,
    60% {
        left: 100%;
        right: -90%;
    }
}

@-webkit-keyframes indeterminate-short {
    0% {
        left: -200%;
        right: 100%;
    }

    100%,
    60% {
        left: 107%;
        right: -8%;
    }
}

@keyframes indeterminate-short {
    0% {
        left: -200%;
        right: 100%;
    }

    100%,
    60% {
        left: 107%;
        right: -8%;
    }
}

/*------ Background colors -------*/
.bg-purple {
    background: #7F53AC !important;
    color: #fff !important;
}

a.bg-purple:hover,
a.bg-purple:focus {
    background-color: #8c31e4 !important;
}

button.bg-purple:hover,
button.bg-purple:focus {
    background-color: #8c31e4 !important;
}

.bg-blue-lightest {
    background-color: #edf2fa !important;
}

a.bg-blue-lightest:hover,
a.bg-blue-lightest:focus {
    background-color: #c5d5ef !important;
}

button.bg-blue-lightest:hover,
button.bg-blue-lightest:focus {
    background-color: #c5d5ef !important;
}

.bg-blue-lighter {
    background-color: #c8d9f1 !important;
}

a.bg-blue-lighter:hover,
a.bg-blue-lighter:focus {
    background-color: #9fbde7 !important;
}

button.bg-blue-lighter:hover,
button.bg-blue-lighter:focus {
    background-color: #9fbde7 !important;
}

.bg-blue-light {
    background-color: #7ea5dd !important;
}

a.bg-blue-light:hover,
a.bg-blue-light:focus {
    background-color: #5689d2 !important;
}

button.bg-blue-light:hover,
button.bg-blue-light:focus {
    background-color: #5689d2 !important;
}

.bg-blue-dark {
    background-color: #3866a6 !important;
}

a.bg-blue-dark:hover,
a.bg-blue-dark:focus {
    background-color: #2b4f80 !important;
}

button.bg-blue-dark:hover,
button.bg-blue-dark:focus {
    background-color: #2b4f80 !important;
}

.bg-blue-darker {
    background-color: #1c3353 !important;
}

a.bg-blue-darker:hover,
a.bg-blue-darker:focus {
    background-color: #0f1c2d !important;
}

button.bg-blue-darker:hover,
button.bg-blue-darker:focus {
    background-color: #0f1c2d !important;
}

.bg-blue-darkest {
    background-color: #0e1929 !important;
}

a.bg-blue-darkest:hover,
a.bg-blue-darkest:focus {
    background-color: #010203 !important;
}

button.bg-blue-darkest:hover,
button.bg-blue-darkest:focus {
    background-color: #010203 !important;
}

.bg-purssianblue {
    background-color: #362f71;
}

a.bg-purssianblue-lightest:hover,
a.bg-purssianblue-lightest:focus {
    background-color: #3f3688 !important;
}

button.bg-purssianblue-lightest:hover,
button.bg-purssianblue-lightest:focus {
    background-color: #3f3688 !important;
}

.bg-indigo-lightest {
    background-color: #f0f1fa !important;
}

a.bg-indigo-lightest:hover,
a.bg-indigo-lightest:focus {
    background-color: #cacded !important;
}

button.bg-indigo-lightest:hover,
button.bg-indigo-lightest:focus {
    background-color: #cacded !important;
}

.bg-indigo-lighter {
    background-color: #d1d5f0 !important;
}

a.bg-indigo-lighter:hover,
a.bg-indigo-lighter:focus {
    background-color: #abb2e3 !important;
}

button.bg-indigo-lighter:hover,
button.bg-indigo-lighter:focus {
    background-color: #abb2e3 !important;
}

.bg-indigo-light {
    background-color: #939edc !important;
}

a.bg-indigo-light:hover,
a.bg-indigo-light:focus {
    background-color: #6c7bd0 !important;
}

button.bg-indigo-light:hover,
button.bg-indigo-light:focus {
    background-color: #6c7bd0 !important;
}

.bg-indigo-dark {
    background-color: #515da4 !important;
}

a.bg-indigo-dark:hover,
a.bg-indigo-dark:focus {
    background-color: #404a82 !important;
}

button.bg-indigo-dark:hover,
button.bg-indigo-dark:focus {
    background-color: #404a82 !important;
}

.bg-indigo-darker {
    background-color: #282e52 !important;
}

a.bg-indigo-darker:hover,
a.bg-indigo-darker:focus {
    background-color: #171b30 !important;
}

button.bg-indigo-darker:hover,
button.bg-indigo-darker:focus {
    background-color: #171b30 !important;
}

.bg-indigo-darkest {
    background-color: #141729 !important;
}

a.bg-indigo-darkest:hover,
a.bg-indigo-darkest:focus {
    background-color: #030407 !important;
}

button.bg-indigo-darkest:hover,
button.bg-indigo-darkest:focus {
    background-color: #030407 !important;
}

.bg-purple-lightest {
    background-color: #f6effd !important;
}

a.bg-purple-lightest:hover,
a.bg-purple-lightest:focus {
    background-color: #ddc2f7 !important;
}

button.bg-purple-lightest:hover,
button.bg-purple-lightest:focus {
    background-color: #ddc2f7 !important;
}

.bg-purple-lighter {
    background-color: #e4cff9 !important;
}

a.bg-purple-lighter:hover,
a.bg-purple-lighter:focus {
    background-color: #cba2f3 !important;
}

button.bg-purple-lighter:hover,
button.bg-purple-lighter:focus {
    background-color: #cba2f3 !important;
}

.bg-purple-light {
    background-color: #c08ef0 !important;
}

a.bg-purple-light:hover,
a.bg-purple-light:focus {
    background-color: #a761ea !important;
}

button.bg-purple-light:hover,
button.bg-purple-light:focus {
    background-color: #a761ea !important;
}

.bg-purple-dark {
    background-color: #844bbb !important;
}

a.bg-purple-dark:hover,
a.bg-purple-dark:focus {
    background-color: #6a3a99 !important;
}

button.bg-purple-dark:hover,
button.bg-purple-dark:focus {
    background-color: #6a3a99 !important;
}

.bg-purple-darker {
    background-color: #42265e !important;
}

a.bg-purple-darker:hover,
a.bg-purple-darker:focus {
    background-color: #29173a !important;
}

button.bg-purple-darker:hover,
button.bg-purple-darker:focus {
    background-color: #29173a !important;
}

.bg-purple-darkest {
    background-color: #21132f !important;
}

a.bg-purple-darkest:hover,
a.bg-purple-darkest:focus {
    background-color: #08040b !important;
}

button.bg-purple-darkest:hover,
button.bg-purple-darkest:focus {
    background-color: #08040b !important;
}

.bg-pink-lightest {
    background-color: #fef0f5 !important;
}

a.bg-pink-lightest:hover,
a.bg-pink-lightest:focus {
    background-color: #fbc0d5 !important;
}

button.bg-pink-lightest:hover,
button.bg-pink-lightest:focus {
    background-color: #fbc0d5 !important;
}

.bg-pink-lighter {
    background-color: #fcd3e1 !important;
}

a.bg-pink-lighter:hover,
a.bg-pink-lighter:focus {
    background-color: #f9a3c0 !important;
}

button.bg-pink-lighter:hover,
button.bg-pink-lighter:focus {
    background-color: #f9a3c0 !important;
}

.bg-pink-light {
    background-color: #f999b9 !important;
}

a.bg-pink-light:hover,
a.bg-pink-light:focus {
    background-color: #f66998 !important;
}

button.bg-pink-light:hover,
button.bg-pink-light:focus {
    background-color: #f66998 !important;
}

.bg-pink-dark {
    background-color: #c5577c !important;
}

a.bg-pink-dark:hover,
a.bg-pink-dark:focus {
    background-color: #ad3c62 !important;
}

button.bg-pink-dark:hover,
button.bg-pink-dark:focus {
    background-color: #ad3c62 !important;
}

.bg-pink-darker {
    background-color: #622c3e !important;
}

a.bg-pink-darker:hover,
a.bg-pink-darker:focus {
    background-color: #3f1c28 !important;
}

button.bg-pink-darker:hover,
button.bg-pink-darker:focus {
    background-color: #3f1c28 !important;
}

.bg-pink-darkest {
    background-color: #31161f !important;
}

a.bg-pink-darkest:hover,
a.bg-pink-darkest:focus {
    background-color: #0e0609 !important;
}

button.bg-pink-darkest:hover,
button.bg-pink-darkest:focus {
    background-color: #0e0609 !important;
}

.bg-red-lightest {
    background-color: #fae9e9 !important;
}

a.bg-red-lightest:hover,
a.bg-red-lightest:focus {
    background-color: #f1bfbf !important;
}

button.bg-red-lightest:hover,
button.bg-red-lightest:focus {
    background-color: #f1bfbf !important;
}

.bg-red-lighter {
    background-color: #f0bcbc !important;
}

a.bg-red-lighter:hover,
a.bg-red-lighter:focus {
    background-color: #e79292 !important;
}

button.bg-red-lighter:hover,
button.bg-red-lighter:focus {
    background-color: #e79292 !important;
}

.bg-red-light {
    background-color: #dc6362 !important;
}

a.bg-red-light:hover,
a.bg-red-light:focus {
    background-color: #d33a38 !important;
}

button.bg-red-light:hover,
button.bg-red-light:focus {
    background-color: #d33a38 !important;
}

.bg-red-dark {
    background-color: #a41a19 !important;
}

a.bg-red-dark:hover,
a.bg-red-dark:focus {
    background-color: #781312 !important;
}

button.bg-red-dark:hover,
button.bg-red-dark:focus {
    background-color: #781312 !important;
}

.bg-red-darker {
    background-color: #520d0c !important;
}

a.bg-red-darker:hover,
a.bg-red-darker:focus {
    background-color: #260605 !important;
}

button.bg-red-darker:hover,
button.bg-red-darker:focus {
    background-color: #260605 !important;
}

.bg-red-darkest {
    background-color: #290606 !important;
}

a.bg-red-darkest:hover,
a.bg-red-darkest:focus {
    background-color: black !important;
}

button.bg-red-darkest:hover,
button.bg-red-darkest:focus {
    background-color: black !important;
}

.bg-orange-lightest {
    background-color: #fff5ec !important;
}

a.bg-orange-lightest:hover,
a.bg-orange-lightest:focus {
    background-color: peachpuff !important;
}

button.bg-orange-lightest:hover,
button.bg-orange-lightest:focus {
    background-color: peachpuff !important;
}

.bg-orange-lighter {
    background-color: #fee0c7 !important;
}

a.bg-orange-lighter:hover,
a.bg-orange-lighter:focus {
    background-color: #fdc495 !important;
}

button.bg-orange-lighter:hover,
button.bg-orange-lighter:focus {
    background-color: #fdc495 !important;
}

.bg-orange-light {
    background-color: #feb67c !important;
}

a.bg-orange-light:hover,
a.bg-orange-light:focus {
    background-color: #fe9a49 !important;
}

button.bg-orange-light:hover,
button.bg-orange-light:focus {
    background-color: #fe9a49 !important;
}

.bg-orange-dark {
    background-color: #ca7836 !important;
}

a.bg-orange-dark:hover,
a.bg-orange-dark:focus {
    background-color: #a2602b !important;
}

button.bg-orange-dark:hover,
button.bg-orange-dark:focus {
    background-color: #a2602b !important;
}

.bg-orange-darker {
    background-color: #653c1b !important;
}

a.bg-orange-darker:hover,
a.bg-orange-darker:focus {
    background-color: #3d2410 !important;
}

button.bg-orange-darker:hover,
button.bg-orange-darker:focus {
    background-color: #3d2410 !important;
}

.bg-orange-darkest {
    background-color: #331e0e !important;
}

a.bg-orange-darkest:hover,
a.bg-orange-darkest:focus {
    background-color: #0b0603 !important;
}

button.bg-orange-darkest:hover,
button.bg-orange-darkest:focus {
    background-color: #0b0603 !important;
}

.bg-yellow-lightest {
    background-color: #fef9e7 !important;
}

a.bg-yellow-lightest:hover,
a.bg-yellow-lightest:focus {
    background-color: #fcedb6 !important;
}

button.bg-yellow-lightest:hover,
button.bg-yellow-lightest:focus {
    background-color: #fcedb6 !important;
}

.bg-yellow-lighter {
    background-color: #fbedb7 !important;
}

a.bg-yellow-lighter:hover,
a.bg-yellow-lighter:focus {
    background-color: #f8e187 !important;
}

button.bg-yellow-lighter:hover,
button.bg-yellow-lighter:focus {
    background-color: #f8e187 !important;
}

.bg-yellow-light {
    background-color: #f5d657 !important;
}

a.bg-yellow-light:hover,
a.bg-yellow-light:focus {
    background-color: #f2ca27 !important;
}

button.bg-yellow-light:hover,
button.bg-yellow-light:focus {
    background-color: #f2ca27 !important;
}

.bg-yellow-dark {
    background-color: #c19d0c !important;
}

a.bg-yellow-dark:hover,
a.bg-yellow-dark:focus {
    background-color: #917609 !important;
}

button.bg-yellow-dark:hover,
button.bg-yellow-dark:focus {
    background-color: #917609 !important;
}

.bg-yellow-darker {
    background-color: #604e06 !important;
}

a.bg-yellow-darker:hover,
a.bg-yellow-darker:focus {
    background-color: #302703 !important;
}

button.bg-yellow-darker:hover,
button.bg-yellow-darker:focus {
    background-color: #302703 !important;
}

.bg-yellow-darkest {
    background-color: #302703 !important;
}

a.bg-yellow-darkest:hover,
a.bg-yellow-darkest:focus {
    background-color: black !important;
}

button.bg-yellow-darkest:hover,
button.bg-yellow-darkest:focus {
    background-color: black !important;
}

.bg-green-lightest {
    background-color: #eff8e6 !important;
}

a.bg-green-lightest:hover,
a.bg-green-lightest:focus {
    background-color: #d6edbe !important;
}

button.bg-green-lightest:hover,
button.bg-green-lightest:focus {
    background-color: #d6edbe !important;
}

.bg-green-lighter {
    background-color: #cfeab3 !important;
}

a.bg-green-lighter:hover,
a.bg-green-lighter:focus {
    background-color: #b6df8b !important;
}

button.bg-green-lighter:hover,
button.bg-green-lighter:focus {
    background-color: #b6df8b !important;
}

.bg-green-light {
    background-color: #8ecf4d !important;
}

a.bg-green-light:hover,
a.bg-green-light:focus {
    background-color: #75b831 !important;
}

button.bg-green-light:hover,
button.bg-green-light:focus {
    background-color: #75b831 !important;
}

.bg-green-dark {
    background-color: #4b9500 !important;
}

a.bg-green-dark:hover,
a.bg-green-dark:focus {
    background-color: #316200 !important;
}

button.bg-green-dark:hover,
button.bg-green-dark:focus {
    background-color: #316200 !important;
}

.bg-green-darker {
    background-color: #264a00 !important;
}

a.bg-green-darker:hover,
a.bg-green-darker:focus {
    background-color: #0c1700 !important;
}

button.bg-green-darker:hover,
button.bg-green-darker:focus {
    background-color: #0c1700 !important;
}

.bg-green-darkest {
    background-color: #132500 !important;
}

a.bg-green-darkest:hover,
a.bg-green-darkest:focus {
    background-color: black !important;
}

button.bg-green-darkest:hover,
button.bg-green-darkest:focus {
    background-color: black !important;
}

.bg-teal-lightest {
    background-color: #eafaf8 !important;
}

a.bg-teal-lightest:hover,
a.bg-teal-lightest:focus {
    background-color: #c1f0ea !important;
}

button.bg-teal-lightest:hover,
button.bg-teal-lightest:focus {
    background-color: #c1f0ea !important;
}

.bg-teal-lighter {
    background-color: #bfefea !important;
}

a.bg-teal-lighter:hover,
a.bg-teal-lighter:focus {
    background-color: #96e5dd !important;
}

button.bg-teal-lighter:hover,
button.bg-teal-lighter:focus {
    background-color: #96e5dd !important;
}

.bg-teal-light {
    background-color: #6bdbcf !important;
}

a.bg-teal-light:hover,
a.bg-teal-light:focus {
    background-color: #42d1c2 !important;
}

button.bg-teal-light:hover,
button.bg-teal-light:focus {
    background-color: #42d1c2 !important;
}

.bg-teal-dark {
    background-color: #22a295 !important;
}

a.bg-teal-dark:hover,
a.bg-teal-dark:focus {
    background-color: #19786e !important;
}

button.bg-teal-dark:hover,
button.bg-teal-dark:focus {
    background-color: #19786e !important;
}

.bg-teal-darker {
    background-color: #11514a !important;
}

a.bg-teal-darker:hover,
a.bg-teal-darker:focus {
    background-color: #082723 !important;
}

button.bg-teal-darker:hover,
button.bg-teal-darker:focus {
    background-color: #082723 !important;
}

.bg-teal-darkest {
    background-color: #092925 !important;
}

a.bg-teal-darkest:hover,
a.bg-teal-darkest:focus {
    background-color: black !important;
}

button.bg-teal-darkest:hover,
button.bg-teal-darkest:focus {
    background-color: black !important;
}

.bg-cyan-lightest {
    background-color: #e8f6f8 !important;
}

a.bg-cyan-lightest:hover,
a.bg-cyan-lightest:focus {
    background-color: #c1e7ec !important;
}

button.bg-cyan-lightest:hover,
button.bg-cyan-lightest:focus {
    background-color: #c1e7ec !important;
}

.bg-cyan-lighter {
    background-color: #b9e3ea !important;
}

a.bg-cyan-lighter:hover,
a.bg-cyan-lighter:focus {
    background-color: #92d3de !important;
}

button.bg-cyan-lighter:hover,
button.bg-cyan-lighter:focus {
    background-color: #92d3de !important;
}

.bg-cyan-light {
    background-color: #5dbecd !important;
}

a.bg-cyan-light:hover,
a.bg-cyan-light:focus {
    background-color: #3aabbd !important;
}

button.bg-cyan-light:hover,
button.bg-cyan-light:focus {
    background-color: #3aabbd !important;
}

.bg-cyan-dark {
    background-color: #128293 !important;
}

a.bg-cyan-dark:hover,
a.bg-cyan-dark:focus {
    background-color: #0c5a66 !important;
}

button.bg-cyan-dark:hover,
button.bg-cyan-dark:focus {
    background-color: #0c5a66 !important;
}

.bg-cyan-darker {
    background-color: #09414a !important;
}

a.bg-cyan-darker:hover,
a.bg-cyan-darker:focus {
    background-color: #03191d !important;
}

button.bg-cyan-darker:hover,
button.bg-cyan-darker:focus {
    background-color: #03191d !important;
}

.bg-cyan-darkest {
    background-color: #052025 !important;
}

a.bg-cyan-darkest:hover,
a.bg-cyan-darkest:focus {
    background-color: black !important;
}

button.bg-cyan-darkest:hover,
button.bg-cyan-darkest:focus {
    background-color: black !important;
}

.bg-white-lightest {
    background-color: white !important;
}

a.bg-white-lightest:hover,
a.bg-white-lightest:focus {
    background-color: #e6e5e5 !important;
}

button.bg-white-lightest:hover,
button.bg-white-lightest:focus {
    background-color: #e6e5e5 !important;
}

.bg-white-lighter {
    background-color: white !important;
}

a.bg-white-lighter:hover,
a.bg-white-lighter:focus {
    background-color: #e6e5e5 !important;
}

button.bg-white-lighter:hover,
button.bg-white-lighter:focus {
    background-color: #e6e5e5 !important;
}

.bg-white-light {
    background-color: white !important;
}

a.bg-white-light:hover,
a.bg-white-light:focus {
    background-color: #e6e5e5 !important;
}

button.bg-white-light:hover,
button.bg-white-light:focus {
    background-color: #e6e5e5 !important;
}

.bg-white-dark {
    background-color: #cccccc !important;
}

a.bg-white-dark:hover,
a.bg-white-dark:focus {
    background-color: #b3b2b2 !important;
}

button.bg-white-dark:hover,
button.bg-white-dark:focus {
    background-color: #b3b2b2 !important;
}

.bg-white-darker {
    background-color: #666666 !important;
}

a.bg-white-darker:hover,
a.bg-white-darker:focus {
    background-color: #4d4c4c !important;
}

button.bg-white-darker:hover,
button.bg-white-darker:focus {
    background-color: #4d4c4c !important;
}

.bg-white-darkest {
    background-color: #333333 !important;
}

a.bg-white-darkest:hover,
a.bg-white-darkest:focus {
    background-color: #1a1919 !important;
}

button.bg-white-darkest:hover,
button.bg-white-darkest:focus {
    background-color: #1a1919 !important;
}

.bg-gray-lightest {
    background-color: #f3f4f5 !important;
}

a.bg-gray-lightest:hover,
a.bg-gray-lightest:focus {
    background-color: #d7dbde !important;
}

button.bg-gray-lightest:hover,
button.bg-gray-lightest:focus {
    background-color: #d7dbde !important;
}

.bg-gray-lighter {
    background-color: #dbdde0 !important;
}

a.bg-gray-lighter:hover,
a.bg-gray-lighter:focus {
    background-color: #c0c3c8 !important;
}

button.bg-gray-lighter:hover,
button.bg-gray-lighter:focus {
    background-color: #c0c3c8 !important;
}

.bg-gray-light {
    background-color: #aab0b6 !important;
}

a.bg-gray-light:hover,
a.bg-gray-light:focus {
    background-color: #8f979e !important;
}

button.bg-gray-light:hover,
button.bg-gray-light:focus {
    background-color: #8f979e !important;
}

.bg-gray-dark {
    background-color: #6b7278 !important;
}

a.bg-gray-dark:hover,
a.bg-gray-dark:focus {
    background-color: #53585d !important;
}

button.bg-gray-dark:hover,
button.bg-gray-dark:focus {
    background-color: #53585d !important;
}

.bg-gray-darker {
    background-color: #36393c !important;
}

a.bg-gray-darker:hover,
a.bg-gray-darker:focus {
    background-color: #1e2021 !important;
}

button.bg-gray-darker:hover,
button.bg-gray-darker:focus {
    background-color: #1e2021 !important;
}

.bg-gray-darkest {
    background-color: #1b1c1e !important;
}

a.bg-gray-darkest:hover,
a.bg-gray-darkest:focus {
    background-color: #030303 !important;
}

button.bg-gray-darkest:hover,
button.bg-gray-darkest:focus {
    background-color: #030303 !important;
}

.bg-gray-dark-lightest {
    background-color: #ebebec !important;
}

a.bg-gray-dark-lightest:hover,
a.bg-gray-dark-lightest:focus {
    background-color: #d1d1d3 !important;
}

button.bg-gray-dark-lightest:hover,
button.bg-gray-dark-lightest:focus {
    background-color: #d1d1d3 !important;
}

.bg-gray-dark-lighter {
    background-color: #c2c4c6 !important;
}

a.bg-gray-dark-lighter:hover,
a.bg-gray-dark-lighter:focus {
    background-color: #a8abad !important;
}

button.bg-gray-dark-lighter:hover,
button.bg-gray-dark-lighter:focus {
    background-color: #a8abad !important;
}

.bg-gray-dark-light {
    background-color: #717579 !important;
}

a.bg-gray-dark-light:hover,
a.bg-gray-dark-light:focus {
    background-color: #585c5f !important;
}

button.bg-gray-dark-light:hover,
button.bg-gray-dark-light:focus {
    background-color: #585c5f !important;
}

.bg-gray-dark-dark {
    background-color: #2a2e33 !important;
}

a.bg-gray-dark-dark:hover,
a.bg-gray-dark-dark:focus {
    background-color: #131517 !important;
}

button.bg-gray-dark-dark:hover,
button.bg-gray-dark-dark:focus {
    background-color: #131517 !important;
}

.bg-gray-dark-darker {
    background-color: #15171a !important;
}

a.bg-gray-dark-darker:hover,
a.bg-gray-dark-darker:focus {
    background-color: black !important;
}

button.bg-gray-dark-darker:hover,
button.bg-gray-dark-darker:focus {
    background-color: black !important;
}

.bg-gray-dark-darkest {
    background-color: #0a0c0d !important;
}

a.bg-gray-dark-darkest:hover,
a.bg-gray-dark-darkest:focus {
    background-color: black !important;
}

button.bg-gray-dark-darkest:hover,
button.bg-gray-dark-darkest:focus {
    background-color: black !important;
}

.bg-azure-lightest {
    background-color: #ecf7fe !important;
}

a.bg-azure-lightest:hover,
a.bg-azure-lightest:focus {
    background-color: #bce3fb !important;
}

button.bg-azure-lightest:hover,
button.bg-azure-lightest:focus {
    background-color: #bce3fb !important;
}

.bg-azure-lighter {
    background-color: #c7e6fb !important;
}

a.bg-azure-lighter:hover,
a.bg-azure-lighter:focus {
    background-color: #97d1f8 !important;
}

button.bg-azure-lighter:hover,
button.bg-azure-lighter:focus {
    background-color: #97d1f8 !important;
}

.bg-azure-light {
    background-color: #7dc4f6 !important;
}

a.bg-azure-light:hover,
a.bg-azure-light:focus {
    background-color: #4daef3 !important;
}

button.bg-azure-light:hover,
button.bg-azure-light:focus {
    background-color: #4daef3 !important;
}

.bg-azure-dark {
    background-color: #3788c2 !important;
}

a.bg-azure-dark:hover,
a.bg-azure-dark:focus {
    background-color: #2c6c9a !important;
}

button.bg-azure-dark:hover,
button.bg-azure-dark:focus {
    background-color: #2c6c9a !important;
}

.bg-azure-darker {
    background-color: #1c4461 !important;
}

a.bg-azure-darker:hover,
a.bg-azure-darker:focus {
    background-color: #112839 !important;
}

button.bg-azure-darker:hover,
button.bg-azure-darker:focus {
    background-color: #112839 !important;
}

.bg-azure-darkest {
    background-color: #0e2230 !important;
}

a.bg-azure-darkest:hover,
a.bg-azure-darkest:focus {
    background-color: #020609 !important;
}

button.bg-azure-darkest:hover,
button.bg-azure-darkest:focus {
    background-color: #020609 !important;
}

.bg-lime-lightest {
    background-color: #f2fbeb !important;
}

a.bg-lime-lightest:hover,
a.bg-lime-lightest:focus {
    background-color: #d6f3c1 !important;
}

button.bg-lime-lightest:hover,
button.bg-lime-lightest:focus {
    background-color: #d6f3c1 !important;
}

.bg-lime-lighter {
    background-color: #d7f2c2 !important;
}

a.bg-lime-lighter:hover,
a.bg-lime-lighter:focus {
    background-color: #bbe998 !important;
}

button.bg-lime-lighter:hover,
button.bg-lime-lighter:focus {
    background-color: #bbe998 !important;
}

.bg-lime-light {
    background-color: #a3e072 !important;
}

a.bg-lime-light:hover,
a.bg-lime-light:focus {
    background-color: #88d748 !important;
}

button.bg-lime-light:hover,
button.bg-lime-light:focus {
    background-color: #88d748 !important;
}

.bg-lime-dark {
    background-color: #62a82a !important;
}

a.bg-lime-dark:hover,
a.bg-lime-dark:focus {
    background-color: #4a7f20 !important;
}

button.bg-lime-dark:hover,
button.bg-lime-dark:focus {
    background-color: #4a7f20 !important;
}

.bg-lime-darker {
    background-color: #315415 !important;
}

a.bg-lime-darker:hover,
a.bg-lime-darker:focus {
    background-color: #192b0b !important;
}

button.bg-lime-darker:hover,
button.bg-lime-darker:focus {
    background-color: #192b0b !important;
}

.bg-lime-darkest {
    background-color: #192a0b !important;
}

a.bg-lime-darkest:hover,
a.bg-lime-darkest:focus {
    background-color: #010200 !important;
}

button.bg-lime-darkest:hover,
button.bg-lime-darkest:focus {
    background-color: #010200 !important;
}

.display-1 i,
.display-2 i,
.display-3 i,
.display-4 i {
    vertical-align: baseline;
    font-size: 0.815em;
}

.text-inherit {
    color: inherit !important;
}

.text-default {
    color: #707070 !important;
}

.text-muted-dark {
    color: #6e7687 !important;
}

.tracking-tight {
    letter-spacing: -0.05em !important;
}

.tracking-normal {
    letter-spacing: 0 !important;
}

.tracking-wide {
    letter-spacing: 0.05em !important;
}

.leading-none {
    line-height: 1 !important;
}

.leading-tight {
    line-height: 1.25 !important;
}

.leading-normal {
    line-height: 1.5 !important;
}

.leading-loose {
    line-height: 2 !important;
}

.bg-blue-1 {
    background-color: #0061da;
    color: #fff !important;
}

.bg-blue {
    background: #0061da;
    color: #fff !important;
}

a.bg-blue:hover,
a.bg-blue:focus {
    background-color: #24987E !important;
}

button.bg-blue:hover,
button.bg-blue:focus {
    background-color: #24987E !important;
}

.text-fb-blue {
    color: #234684 !important;
}

.bg-indigo {
    background: linear-gradient(to bottom right, #6574cd 0%, #2f88f7 100%);
    color: #fff !important;
}

a.bg-indigo:hover,
a.bg-indigo:focus {
    background-color: #3f51c1 !important;
}

button.bg-indigo:hover,
button.bg-indigo:focus {
    background-color: #3f51c1 !important;
}

.text-indigo {
    color: #6574cd !important;
}

.bg-purple-gradient {
    background: linear-gradient(to bottom right, #7F53AC 0%, #647DEE 100%) !important;
    color: #fff !important;
}

a.bg-purple-gradient:hover,
a.bg-purple-gradient:focus {
    background-color: #8c31e4 !important;
}

button.bg-purple-gradient:hover,
button.bg-purple-gradient:focus {
    background-color: #8c31e4 !important;
}

.text-purple {
    color: #867efc !important;
}

.text-lightpink-red {
    color: #ff7088 !important;
}

.text-lightgreen {
    color: #26eda2 !important;
}

.bg-pink {
    background: #fc5296 !important;
    color: #fff !important;
}

.bg-darkpink {
    background-color: #14A485 !important;
    color: #fff !important;
}

a.bg-pink:hover,
a.bg-pink:focus {
    background-color: #f33d7a !important;
}

button.bg-pink:hover,
button.bg-pink:focus {
    background-color: #f33d7a !important;
}

.text-pink {
    color: #ec82ef !important;
}

.bg-red {
    background: linear-gradient(to bottom right, #e73827 0%, #f85032 100%);
    color: #fff !important;
}

a.bg-red:hover,
a.bg-red:focus {
    background-color: #a11918 !important;
}

button.bg-red:hover,
button.bg-red:focus {
    background-color: #a11918 !important;
}

.text-red {
    color: #c21a1a !important;
}

.bg-orange {
    background: #fc7303;
    color: #fff !important;
}

a.bg-orange:hover,
a.bg-orange:focus {
    background-color: #fc7a12 !important;
}

button.bg-orange:hover,
button.bg-orange:focus {
    background-color: #fc7a12 !important;
}

.text-orange {
    color: #fc7303 !important;
}

.bg-yellow-1 {
    background-color: #FBB034;
    color: #fff !important;
}

.bg-yellow {
    background: #FBB034;
    color: #fff !important;
}

a.bg-yellow:hover,
a.bg-yellow:focus {
    background-color: #c29d0b !important;
}

button.bg-yellow:hover,
button.bg-yellow:focus {
    background-color: #c29d0b !important;
}

.text-yellow {
    color: #ecb403 !important;
}

.bg-green-1 {
    background-color: #4ecc48;
    color: #fff !important;
}

.bg-green {
    background: #4ecc48;
    color: #fff !important;
}

a.bg-green:hover,
a.bg-green:focus {
    background-color: #448700 !important;
}

button.bg-green:hover,
button.bg-green:focus {
    background-color: #448700 !important;
}

.text-green {
    color: #4ecc48 !important;
}

.text-green-1 {
    color: #0dff01 !important;
}

.bg-teal {
    background: #1caf9f !important;
}

a.bg-teal:hover,
a.bg-teal:focus {
    background-color: #22a193 !important;
}

button.bg-teal:hover,
button.bg-teal:focus {
    background-color: #22a193 !important;
}

.text-teal {
    color: #2bcbba !important;
}

.bg-cyan {
    background: #007ea7 !important;
    color: #fff !important;
}

a.bg-cyan:hover,
a.bg-cyan:focus {
    background-color: #117a8b !important;
}

button.bg-cyan:hover,
button.bg-cyan:focus {
    background-color: #117a8b !important;
}

.text-cyan {
    color: #17a2b8 !important;
}

.bg-white {
    background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus {
    background-color: #e6e5e5 !important;
}

button.bg-white:hover,
button.bg-white:focus {
    background-color: #e6e5e5 !important;
}

.text-white {
    color: #fff !important;
}

.bg-gray {
    background: #5a6970 !important;
}

a.bg-gray:hover,
a.bg-gray:focus {
    background-color: #6c757d !important;
}

button.bg-gray:hover,
button.bg-gray:focus {
    background-color: #6c757d !important;
}

.text-gray {
    color: #969696 !important;
}

.bg-gray-dark {
    background: #343a40 !important;
}

.bg-lightpink-red {
    color: #ff7088 !important;
}

a.bg-gray-dark:hover,
a.bg-gray-dark:focus {
    background-color: #1d2124 !important;
}

button.bg-gray-dark:hover,
button.bg-gray-dark:focus {
    background-color: #1d2124 !important;
}

.text-gray-dark {
    color: #343a40 !important;
}

.bg-azure {
    background: #45aaf2;
}

a.bg-azure:hover,
a.bg-azure:focus {
    background-color: #1594ef !important;
}

button.bg-azure:hover,
button.bg-azure:focus {
    background-color: #1594ef !important;
}

.text-azure {
    color: #45aaf2 !important;
}

.bg-purple-1 {
    background: #7F53AC;
}

.bg-lime {
    background: #7bd235;
}

a.bg-lime:hover,
a.bg-lime:focus {
    background-color: #63ad27 !important;
}

button.bg-lime:hover,
button.bg-lime:focus {
    background-color: #63ad27 !important;
}

.text-lime {
    color: #7bd235 !important;
}

.icon i {
    vertical-align: -1px;
}

a.icon {
    text-decoration: none;
    cursor: pointer;
}

a.icon:hover {
    color: #1a1a1a !important;
}

.o-auto {
    overflow: auto !important;
}

.o-hidden {
    overflow: hidden !important;
}

.shadow {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
}

.shadow-none {
    box-shadow: none !important;
}

/*------ Breadcrumb ------*/
.breadcrumb {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 0;
    list-style: none;
    border-radius: 3px;
    position: relative;
    right: 0;
    padding-right: 0;
    color: #323c53;
}

.breadcrumb-item a {
    color: #fff;
}

.breadcrumb-item a:hover {
    color: #fff;
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    color: rgba(255, 255, 255, 0.6);
    content: "/";
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline;
    text-decoration: none;
}

.breadcrumb-item.active {
    color: rgba(255, 255, 255, 0.6);
}

.breadcrumb1 {
    display: flex;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #f4f3f9;
    border-radius: .25rem;
}

.breadcrumb-item1 a:hover {
    color: #123787;
    text-decoration: underline;
}

.breadcrumb-item1+.breadcrumb-item1::before {
    display: inline-block;
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    content: "/";
    color: #cec5c5;
}

.breadcrumb-item1+.breadcrumb-item1:hover::before {
    text-decoration: underline;
    text-decoration: none;
}

.breadcrumb-item1.active {
    color: #9493a9;
}

.breadcrumb-3 ol {
    position: relative;
    display: block;
    width: 100%;
    text-align: center;
}

.breadcrumb-3 li {
    display: contents;
    text-align: center;
}

.breadcrumb-4 li,
.breadcrumb-5 li {
    display: contents;
    text-align: center;
}

.breadcrumb-4 ol,
.breadcrumb-5 ol {
    position: relative;
    display: block;
    width: 100%;
    text-align: center;
}

.breadcrumb-1 li,
.breadcrumb-2 li,
.breadcrumb-6 li {
    text-align: right;
    display: contents;
}

.breadcrumb-1 ol,
.breadcrumb-2 ol,
.breadcrumb-6 ol {
    position: relative;
    display: block;
    width: 100%;
    text-align: right;
}

/*-------- Buttons ------*/
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 0.9375rem;
    line-height: 1.84615385;
    border-radius: 3px;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn:hover {
    text-decoration: none;
}

.btn:focus {
    text-decoration: none;
    outline: 0;
    box-shadow: 0 0 0 2px rgba(194, 197, 199, 0.25);
}

.btn.focus {
    outline: 0;
    box-shadow: 0 0 0 2px rgba(194, 197, 199, 0.25);
}

.btn.disabled,
.btn:disabled {
    opacity: 0.65;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active {
    background-image: none;
}

@media screen and (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

a.btn.disabled,
fieldset:disabled a.btn {
    pointer-events: none;
}

.btn-success {
    color: #fff;
    background: #21c44c !important;
    border-color: #2aa924;
}

.btn-success:hover {
    color: #fff;
    background-color: #1ca941;
    border-color: #25931f;
}

.btn-success:focus,
.btn-success.focus {
    box-shadow: 0 0 0 2px #1dc64a;
}

.btn-success.disabled,
.btn-success:disabled {
    color: #fff;
    background-color: #4ecc48;
    border-color: #25931f;
}

.btn-success:not(:disabled):not(.disabled):active,
.btn-success:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #21c44c;
    border-color: #25931f;
}

.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #21c44c;
    border-color: #25931f;
}

.btn-success:not(:disabled):not(.disabled):active:focus,
.btn-success:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.9);
}

.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.9);
}

.btn-info {
    color: #fff;
    background: #26c2f7;
    border-color: #1da9d8;
}

.btn-info:hover {
    color: #fff;
    background-color: #1eb1e3;
    border-color: #1b9eca;
}

.btn-info:focus,
.btn-info.focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.btn-info.disabled,
.btn-info:disabled {
    color: #fff;
    background-color: #45aaf2;
    border-color: #1da9d8;
}

.btn-info:not(:disabled):not(.disabled):active,
.btn-info:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #3979a7;
    border-color: #1da9d8;
}

.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #3979a7;
    border-color: #1da9d8;
}

.btn-info:not(:disabled):not(.disabled):active:focus,
.btn-info:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.btn-warning {
    color: #fff;
    background: #f7b731 !important;
    border-color: #e5a623;
}

.btn-warning:hover {
    color: #fff;
    background-color: #dba12a;
    border-color: #dda32b;
}

.btn-warning:focus,
.btn-warning.focus {
    box-shadow: 0 0 0 2px rgba(229, 175, 4, 0.9);
}

.btn-warning.disabled,
.btn-warning:disabled {
    color: #fff;
    background-color: #faad3b;
    border-color: #e5a623;
}

.btn-warning:not(:disabled):not(.disabled):active,
.btn-warning:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #cc9547;
    border-color: #e5a623;
}

.show>.btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #cc9547;
    border-color: #e5a623;
}

.btn-warning:not(:disabled):not(.disabled):active:focus,
.btn-warning:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(237, 156, 76, 0.9);
}

.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(237, 156, 76, 0.9);
}

.btn-danger {
    color: #fff;
    background: #f5334f !important;
    border-color: #ed314c;
}

.btn-danger:hover {
    color: #fff;
    background-color: #dd2540;
    border-color: #df2540;
}

.btn-danger:focus,
.btn-danger.focus {
    box-shadow: 0 0 0 2px rgba(245, 51, 79, 0.9);
}

.btn-danger.disabled,
.btn-danger:disabled {
    color: #fff;
    background-color: #f5334f;
    border-color: #ed314c;
}

.btn-danger:not(:disabled):not(.disabled):active,
.btn-danger:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #f5334f;
    border-color: #ed314c;
}

.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #f5334f;
    border-color: #ed314c;
}

.btn-danger:not(:disabled):not(.disabled):active:focus,
.btn-danger:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(245, 51, 79, 0.9);
}

.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(245, 51, 79, 0.9);
}

.btn-default {
    color: #292828;
    background: #f4f3f9;
    border-color: #b9b5b5;
}

.btn-default:hover {
    color: #292828;
    background-color: #d5d4d6;
    border-color: #a8a6a9;
}

.btn-default:focus,
.btn-default.focus {
    box-shadow: 0 0 0 2px rgba(240, 239, 241, 0.9);
}

.btn-default.disabled,
.btn-default:disabled {
    color: #292828;
    background-color: #e5e4e6;
    border-color: #a8a6a9;
}

.btn-default:not(:disabled):not(.disabled):active,
.btn-default:not(:disabled):not(.disabled).active {
    color: #292828;
    background-color: #eceeef;
    border-color: #c8cacc;
}

.show>.btn-default.dropdown-toggle {
    color: #292828;
    background-color: #eceeef;
    border-color: #c8cacc;
}

.btn-default:not(:disabled):not(.disabled):active:focus,
.btn-default:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(185, 182, 187, 0.9);
}

.show>.btn-default.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(185, 182, 187, 0.9);
}

/*-- light-buttons--*/
.btn-success-light {
    color: #149c38;
    background: #b1f4c3 !important;
    border-color: #a7f4bc;
}

.btn-success-light:hover {
    color: #fff;
    background-color: #21c44c !important;
    border-color: #25931f;
}

.btn-success-light:focus,
.btn-success-light.focus {
    box-shadow: 0 0 0 2px #1dc64a;
}

.btn-info-light {
    color: #26c2f7;
    background: #ecf6fe;
    border-color: #e5f7fc;
}

.btn-info-light:hover {
    color: #fff;
    background-color: #26c2f7;
    border-color: #1da9d8;
}

.btn-info-light:focus,
.btn-info-light.focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.btn-warning-light {
    color: #e0a01b;
    background: #f8e8c6 !important;
    border-color: #f8e8c6;
}

.btn-warning-light:hover {
    color: #fff;
    background-color: #f7b731 !important;
    border-color: #e5a623;
}

.btn-warning-light:focus,
.btn-warning-light.focus {
    box-shadow: 0 0 0 2px rgba(229, 175, 4, 0.9);
}

.btn-danger-light {
    color: #f5334f;
    background: #f8ccd3 !important;
    border-color: #f8ccd3;
}

.btn-danger-light:hover {
    color: #fff;
    background-color: #f5334f !important;
    border-color: #ed314c;
}

.btn-danger-light:focus,
.btn-danger-light.focus {
    box-shadow: 0 0 0 2px rgba(245, 51, 79, 0.9);
}

.btn-default-light {
    color: #292828;
    background: #f4f3f9;
    border-color: #f4f3f9;
}

.btn-default-light:hover {
    color: #292828;
    background-color: #e2e1e8 !important;
    border-color: #e2e1e8;
}

.btn-default-light:focus,
.btn-default-light.focus {
    box-shadow: 0 0 0 2px #f4f3f9;
}

/*--gradient-buttons--*/
.btn-success-gradient {
    color: #fff;
    background: linear-gradient(to bottom right, #21a544 0%, #62fb62 100%) !important;
    border-color: #4ecc48;
}

.btn-success-gradient:hover {
    color: #fff;
    background-color: #4b9400;
    border-color: #448700;
}

.btn-success-gradient:focus,
.btn-success-gradient.focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.9);
}

.btn-success-gradient.disabled,
.btn-success-gradient:disabled {
    color: #fff;
    background-color: #4ecc48;
    border-color: #4ecc48;
}

.btn-success-gradient:not(:disabled):not(.disabled):active,
.btn-success-gradient:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #448700;
    border-color: #3e7a00;
}

.show>.btn-success-gradient.dropdown-toggle {
    color: #fff;
    background-color: #448700;
    border-color: #3e7a00;
}

.btn-success-gradient:not(:disabled):not(.disabled):active:focus,
.btn-success-gradient:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.9);
}

.show>.btn-success-gradient.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.9);
}

.btn-info-gradient {
    color: #fff;
    background: linear-gradient(to bottom right, #1e63c3 0%, #00f2fe 100%) !important;
    border-color: #07cedc;
}

.btn-info-gradient:hover {
    color: #fff;
    background-color: #219af0;
    border-color: #1594ef;
}

.btn-info-gradient:focus,
.btn-info-gradient.focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.btn-info-gradient.disabled,
.btn-info-gradient:disabled {
    color: #fff;
    background-color: #45aaf2;
    border-color: #07cedc;
}

.btn-info-gradient:not(:disabled):not(.disabled):active,
.btn-info-gradient:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #3979a7;
    border-color: #07cedc;
}

.show>.btn-info-gradient.dropdown-toggle {
    color: #fff;
    background-color: #3979a7;
    border-color: #07cedc;
}

.btn-info-gradient:not(:disabled):not(.disabled):active:focus,
.btn-info-gradient:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.show>.btn-info-gradient.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.9);
}

.btn-warning-gradient {
    color: #fff;
    background: linear-gradient(to bottom right, #f66b4e 0%, #fbc434 100%) !important;
    border-color: #FBB034;
}

.btn-warning-gradient:hover {
    color: #fff;
    background-color: #faad3b;
    border-color: #d4952d;
}

.btn-warning-gradient:focus,
.btn-warning-gradient.focus {
    box-shadow: 0 0 0 2px rgba(229, 175, 4, 0.9);
}

.btn-warning-gradient.disabled,
.btn-warning-gradient:disabled {
    color: #fff;
    background-color: #faad3b;
    border-color: #FBB034;
}

.btn-warning-gradient:not(:disabled):not(.disabled):active,
.btn-warning-gradient:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #cc9547;
    border-color: #FBB034;
}

.show>.btn-warning-gradient.dropdown-toggle {
    color: #fff;
    background-color: #cc9547;
    border-color: #FBB034;
}

.btn-warning-gradient:not(:disabled):not(.disabled):active:focus,
.btn-warning-gradient:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(237, 156, 76, 0.9);
}

.show>.btn-warning-gradient.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(237, 156, 76, 0.9);
}

.btn-warning-gradient-gradient {
    background: linear-gradient(to bottom right, #fbc434 0%, #f66b4e 100%);
}

.btn-warning-gradient-gradient:focus {
    box-shadow: 0 0 0 2px rgba(249, 165, 61, 0.4);
}

.btn-warning-gradient.focus {
    box-shadow: 0 0 0 2px rgba(249, 165, 61, 0.4);
}

.btn-warning-gradient:hover {
    color: #fff;
    box-shadow: 0 3px 10px rgba(240, 138, 46, 0.5);
}

.btn-danger-gradient {
    color: #fff;
    background-image: linear-gradient(to bottom right, #04cad0 0%, #FF4B2B 100%) !important;
    border-color: #e3325a;
}

.btn-danger-gradient:hover {
    color: #fff;
    background-color: #FF4B2B;
    border-color: #e3325a;
}

.btn-danger-gradient:focus,
.btn-danger-gradient.focus {
    box-shadow: 0 0 0 2px rgba(255, 75, 43, 0.9);
}

.btn-danger-gradient.disabled,
.btn-danger-gradient:disabled {
    color: #fff;
    background-color: #FF4B2B;
    border-color: #e3325a;
}

.btn-danger-gradient:not(:disabled):not(.disabled):active,
.btn-danger-gradient:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #FF4B2B;
    border-color: #e3325a;
}

.show>.btn-danger-gradient.dropdown-toggle {
    color: #fff;
    background-color: #FF4B2B;
    border-color: #e3325a;
}

.btn-danger-gradient:not(:disabled):not(.disabled):active:focus,
.btn-danger-gradient:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(255, 75, 43, 0.9);
}

.show>.btn-danger-gradient.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(255, 75, 43, 0.9);
}

.btn-default {
    color: #292828;
    background: #f4f3f9;
    border-color: #f4f3f9;
}

.btn-default:hover {
    color: #292828;
    background-color: #e9e7ef;
    border-color: #e9e7ef;
}

.btn-default:focus,
.btn-default.focus {
    box-shadow: 0 0 0 2px #f4f3f9;
}

.btn-default.disabled,
.btn-default:disabled {
    color: #292828;
    background-color: #edf5fc;
    border-color: #d9e9fa;
}

.btn-default:not(:disabled):not(.disabled):active,
.btn-default:not(:disabled):not(.disabled).active {
    color: #292828;
    background-color: #edf5fc;
    border-color: #d9e9fa;
}

.show>.btn-default.dropdown-toggle {
    color: #292828;
    background-color: #edf5fc;
    border-color: #d9e9fa;
}

.btn-default:not(:disabled):not(.disabled):active:focus,
.btn-default:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(244, 243, 249, 0.9);
}

.show>.btn-default.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(244, 243, 249, 0.9);
}

.btn-purple-gradient {
    background: linear-gradient(to bottom right, #7F53AC 0%, #647DEE 100%) !important;
    color: #fff !important;
}

.btn-light {
    color: #495057;
    background-color: #f8f9fa;
    border-color: #e1e0ea;
}

.btn-light:hover {
    color: #495057;
    background-color: #e2e6ea;
    border-color: #dbdee0;
}

.btn-light:focus,
.btn-light.focus {
    box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.1);
}

.btn-light.disabled,
.btn-light:disabled {
    color: #495057;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active,
.btn-light:not(:disabled):not(.disabled).active {
    color: #495057;
    background-color: #f6f3f9;
    border-color: #e1e0ea;
}

.show>.btn-light.dropdown-toggle {
    color: #495057;
    background-color: #f6f3f9;
    border-color: #e1e0ea;
}

.btn-light:not(:disabled):not(.disabled):active:focus,
.btn-light:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.1);
}

.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.1);
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
}

.btn-dark:focus,
.btn-dark.focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.1);
}

.btn-dark.disabled,
.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active,
.btn-dark:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus,
.btn-dark:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.1);
}

.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.1);
}

.btn-outline-default {
    color: #292828;
    background: transparent;
    background-image: none;
    border-color: #f4f3f9;
}

.btn-outline-default:hover {
    color: #292828;
    background: #f4f3f9;
    border-color: #f4f3f9;
    box-shadow: 0 5px 15px rgba(244, 243, 249, 0.5) !important;
}

.btn-outline-default:focus,
.btn-outline-default.focus {
    box-shadow: 0 0 0 2px rgba(244, 243, 249, 0.1);
}

.btn-outline-default.disabled,
.btn-outline-default:disabled {
    color: #292828;
    background-color: transparent;
}

.btn-outline-default:not(:disabled):not(.disabled):active,
.btn-outline-default:not(:disabled):not(.disabled).active {
    color: #292828;
    background-color: #f4f3f9;
    border-color: #d9e9fa;
}

.show>.btn-outline-default.dropdown-toggle {
    color: #292828;
    background-color: #f4f3f9;
    border-color: #d9e9fa;
}

.btn-outline-success {
    color: #4ecc48;
    background-color: transparent;
    background-image: none;
    border-color: #4ecc48;
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #4ecc48;
    border-color: #4ecc48;
}

.btn-outline-success:focus,
.btn-outline-success.focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.1);
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
    color: #4ecc48;
    background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active,
.btn-outline-success:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #4ecc48;
    border-color: #4ecc48;
}

.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #4ecc48;
    border-color: #4ecc48;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.btn-outline-success:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.1);
}

.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.1);
}

.btn-outline-info {
    color: #45aaf2;
    background-color: transparent;
    background-image: none;
    border-color: #45aaf2;
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #45aaf2;
    border-color: #45aaf2;
}

.btn-outline-info:focus,
.btn-outline-info.focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.1);
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
    color: #45aaf2;
    background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active,
.btn-outline-info:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #45aaf2;
    border-color: #45aaf2;
}

.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #45aaf2;
    border-color: #45aaf2;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.btn-outline-info:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.1);
}

.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.1);
}

.btn-outline-warning {
    color: #ecb403;
    background-color: transparent;
    background-image: none;
    border-color: #ecb403;
}

.btn-outline-warning:hover {
    color: #fff;
    background-color: #ecb403;
    border-color: #ecb403;
}

.btn-outline-warning:focus,
.btn-outline-warning.focus {
    box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.1);
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
    color: #ecb403;
    background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active,
.btn-outline-warning:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #ecb403;
    border-color: #ecb403;
}

.show>.btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #ecb403;
    border-color: #ecb403;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.btn-outline-warning:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.1);
}

.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.1);
}

.btn-outline-danger {
    color: #c21a1a;
    background-color: transparent;
    background-image: none;
    border-color: #c21a1a;
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #c21a1a;
    border-color: #c21a1a;
}

.btn-outline-danger:focus,
.btn-outline-danger.focus {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.1);
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
    color: #c21a1a;
    background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active,
.btn-outline-danger:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #c21a1a;
    border-color: #c21a1a;
}

.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #c21a1a;
    border-color: #c21a1a;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.btn-outline-danger:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.1);
}

.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.1);
}

.btn-outline-light {
    color: #f8f9fa;
    background-color: transparent;
    background-image: none;
    border-color: #f8f9fa;
}

.btn-outline-light:hover {
    color: #495057;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:focus,
.btn-outline-light.focus {
    box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.1);
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active,
.btn-outline-light:not(:disabled):not(.disabled).active {
    color: #495057;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.show>.btn-outline-light.dropdown-toggle {
    color: #495057;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.btn-outline-light:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.1);
}

.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(248, 249, 250, 0.1);
}

.btn-outline-dark {
    color: #343a40;
    background-color: transparent;
    background-image: none;
    border-color: #343a40;
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:focus,
.btn-outline-dark.focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.1);
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active,
.btn-outline-dark:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.btn-outline-dark:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.1);
}

.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.1);
}

.btn-link {
    font-weight: 400;
    background-color: transparent;
}

.btn-link:hover {
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent;
}

.btn-link:focus,
.btn-link.focus {
    text-decoration: underline;
    border-color: transparent;
    box-shadow: none;
}

.btn-link:disabled,
.btn-link.disabled {
    color: #868e96;
    pointer-events: none;
}

.btn-lg,
.btn-group-lg>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.125rem;
    line-height: 1.625;
}

.btn-sm,
.btn-group-sm>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.33333333;
    border-radius: 3px;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-block+.btn-block {
    margin-top: 0.5rem;
}

.btn-facebook {
    background: linear-gradient(to right bottom, #3d6cbf 0%, #1e3c72 100%);
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
    width: 100%;
}

.fade {
    transition: opacity 0.15s linear;
}

.fade:not(.show) {
    opacity: 0;
}

@media screen and (prefers-reduced-motion: reduce) {
    .fade {
        transition: none;
    }
}

.collapse:not(.show) {
    display: none;
    background: #fff;
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height 0.35s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
    .collapsing {
        transition: none;
    }
}

/*----- Btn styles------*/
.btn {
    cursor: pointer;
    font-weight: 400;
    letter-spacing: .03em;
    font-size: 0.8125rem;
    min-width: 2.375rem;
}

.btn-icon {
    padding-left: .5rem;
    padding-right: .5rem;
    text-align: center;
}

/*.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 2px #1643A3;
}*/
.btn-pill {
    border-radius: 10rem;
    padding-left: 1.5em;
    padding-right: 1.5em;
}

.btn-radius {
    border-radius: 3px;
}

.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998;
}

.btn-facebook:hover {
    color: #fff;
    background-color: #30497c;
    border-color: #2d4373;
}

.btn-facebook:focus,
.btn-facebook.focus {
    box-shadow: 0 0 0 2px rgba(59, 89, 152, 0.5);
}

.btn-facebook.disabled,
.btn-facebook:disabled {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998;
}

.btn-facebook:not(:disabled):not(.disabled):active,
.btn-facebook:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #2d4373;
    border-color: #293e6a;
}

.show>.btn-facebook.dropdown-toggle {
    color: #fff;
    background-color: #2d4373;
    border-color: #293e6a;
}

.btn-facebook:not(:disabled):not(.disabled):active:focus,
.btn-facebook:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(59, 89, 152, 0.5);
}

.show>.btn-facebook.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(59, 89, 152, 0.5);
}

.btn-twitter {
    color: #fff;
    background-color: #1da1f2;
    border-color: #1da1f2;
}

.btn-twitter:hover {
    color: #fff;
    background-color: #0d8ddc;
    border-color: #0c85d0;
}

.btn-twitter:focus,
.btn-twitter.focus {
    box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.5);
}

.btn-twitter.disabled,
.btn-twitter:disabled {
    color: #fff;
    background-color: #1da1f2;
    border-color: #1da1f2;
}

.btn-twitter:not(:disabled):not(.disabled):active,
.btn-twitter:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #0c85d0;
    border-color: #0b7ec4;
}

.show>.btn-twitter.dropdown-toggle {
    color: #fff;
    background-color: #0c85d0;
    border-color: #0b7ec4;
}

.btn-twitter:not(:disabled):not(.disabled):active:focus,
.btn-twitter:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.5);
}

.show>.btn-twitter.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.5);
}

.btn-google {
    color: #fff;
    background-color: #dc4e41;
    border-color: #dc4e41;
}

.btn-google:hover {
    color: #fff;
    background-color: #d03526;
    border-color: #c63224;
}

.btn-google:focus,
.btn-google.focus {
    box-shadow: 0 0 0 2px rgba(220, 78, 65, 0.5);
}

.btn-google.disabled,
.btn-google:disabled {
    color: #fff;
    background-color: #dc4e41;
    border-color: #dc4e41;
}

.btn-google:not(:disabled):not(.disabled):active,
.btn-google:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #c63224;
    border-color: #bb2f22;
}

.show>.btn-google.dropdown-toggle {
    color: #fff;
    background-color: #c63224;
    border-color: #bb2f22;
}

.btn-google:not(:disabled):not(.disabled):active:focus,
.btn-google:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(220, 78, 65, 0.5);
}

.show>.btn-google.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(220, 78, 65, 0.5);
}

.btn-youtube {
    color: #fff;
    background-color: #f00;
    border-color: #f00;
}

.btn-youtube:hover {
    color: #fff;
    background-color: #d90000;
    border-color: #cc0000;
}

.btn-youtube:focus,
.btn-youtube.focus {
    box-shadow: 0 0 0 2px rgba(255, 0, 0, 0.5);
}

.btn-youtube.disabled,
.btn-youtube:disabled {
    color: #fff;
    background-color: #f00;
    border-color: #f00;
}

.btn-youtube:not(:disabled):not(.disabled):active,
.btn-youtube:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #cc0000;
    border-color: #bf0000;
}

.show>.btn-youtube.dropdown-toggle {
    color: #fff;
    background-color: #cc0000;
    border-color: #bf0000;
}

.btn-youtube:not(:disabled):not(.disabled):active:focus,
.btn-youtube:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(255, 0, 0, 0.5);
}

.show>.btn-youtube.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(255, 0, 0, 0.5);
}

.btn-vimeo {
    color: #fff;
    background-color: #1ab7ea;
    border-color: #1ab7ea;
}

.btn-vimeo:hover {
    color: #fff;
    background-color: #139ecb;
    border-color: #1295bf;
}

.btn-vimeo:focus,
.btn-vimeo.focus {
    box-shadow: 0 0 0 2px rgba(26, 183, 234, 0.5);
}

.btn-vimeo.disabled,
.btn-vimeo:disabled {
    color: #fff;
    background-color: #1ab7ea;
    border-color: #1ab7ea;
}

.btn-vimeo:not(:disabled):not(.disabled):active,
.btn-vimeo:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #1295bf;
    border-color: #108cb4;
}

.show>.btn-vimeo.dropdown-toggle {
    color: #fff;
    background-color: #1295bf;
    border-color: #108cb4;
}

.btn-vimeo:not(:disabled):not(.disabled):active:focus,
.btn-vimeo:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(26, 183, 234, 0.5);
}

.show>.btn-vimeo.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(26, 183, 234, 0.5);
}

.btn-dribbble {
    color: #fff;
    background-color: #ea4c89;
    border-color: #ea4c89;
}

.btn-dribbble:hover {
    color: #fff;
    background-color: #e62a72;
    border-color: #e51e6b;
}

.btn-dribbble:focus,
.btn-dribbble.focus {
    box-shadow: 0 0 0 2px rgba(234, 76, 137, 0.5);
}

.btn-dribbble.disabled,
.btn-dribbble:disabled {
    color: #fff;
    background-color: #ea4c89;
    border-color: #ea4c89;
}

.btn-dribbble:not(:disabled):not(.disabled):active,
.btn-dribbble:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #e51e6b;
    border-color: #dc1a65;
}

.show>.btn-dribbble.dropdown-toggle {
    color: #fff;
    background-color: #e51e6b;
    border-color: #dc1a65;
}

.btn-dribbble:not(:disabled):not(.disabled):active:focus,
.btn-dribbble:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(234, 76, 137, 0.5);
}

.show>.btn-dribbble.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(234, 76, 137, 0.5);
}

.btn-github {
    color: #fff;
    background-color: #181717;
    border-color: #181717;
}

.btn-github:hover {
    color: #fff;
    background-color: #040404;
    border-color: black;
}

.btn-github:focus,
.btn-github.focus {
    box-shadow: 0 0 0 2px rgba(24, 23, 23, 0.5);
}

.btn-github.disabled,
.btn-github:disabled {
    color: #fff;
    background-color: #181717;
    border-color: #181717;
}

.btn-github:not(:disabled):not(.disabled):active,
.btn-github:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: black;
    border-color: black;
}

.show>.btn-github.dropdown-toggle {
    color: #fff;
    background-color: black;
    border-color: black;
}

.btn-github:not(:disabled):not(.disabled):active:focus,
.btn-github:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(24, 23, 23, 0.5);
}

.show>.btn-github.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(24, 23, 23, 0.5);
}

.btn-instagram {
    color: #fff;
    background-color: #e4405f;
    border-color: #e4405f;
}

.btn-instagram:hover {
    color: #fff;
    background-color: #de1f44;
    border-color: #d31e40;
}

.btn-instagram:focus,
.btn-instagram.focus {
    box-shadow: 0 0 0 2px rgba(228, 64, 95, 0.5);
}

.btn-instagram.disabled,
.btn-instagram:disabled {
    color: #fff;
    background-color: #e4405f;
    border-color: #e4405f;
}

.btn-instagram:not(:disabled):not(.disabled):active,
.btn-instagram:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #d31e40;
    border-color: #c81c3d;
}

.show>.btn-instagram.dropdown-toggle {
    color: #fff;
    background-color: #d31e40;
    border-color: #c81c3d;
}

.btn-instagram:not(:disabled):not(.disabled):active:focus,
.btn-instagram:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(228, 64, 95, 0.5);
}

.show>.btn-instagram.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(228, 64, 95, 0.5);
}

.btn-pinterest {
    color: #fff;
    background-color: #bd081c;
    border-color: #bd081c;
}

.btn-pinterest:hover {
    color: #fff;
    background-color: #980617;
    border-color: #8c0615;
}

.btn-pinterest:focus,
.btn-pinterest.focus {
    box-shadow: 0 0 0 2px rgba(189, 8, 28, 0.5);
}

.btn-pinterest.disabled,
.btn-pinterest:disabled {
    color: #fff;
    background-color: #bd081c;
    border-color: #bd081c;
}

.btn-pinterest:not(:disabled):not(.disabled):active,
.btn-pinterest:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #8c0615;
    border-color: #800513;
}

.show>.btn-pinterest.dropdown-toggle {
    color: #fff;
    background-color: #8c0615;
    border-color: #800513;
}

.btn-pinterest:not(:disabled):not(.disabled):active:focus,
.btn-pinterest:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(189, 8, 28, 0.5);
}

.show>.btn-pinterest.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(189, 8, 28, 0.5);
}

.btn-vk {
    color: #fff;
    background-color: #6383a8;
    border-color: #6383a8;
}

.btn-vk:hover {
    color: #fff;
    background-color: #527093;
    border-color: #4d6a8b;
}

.btn-vk:focus,
.btn-vk.focus {
    box-shadow: 0 0 0 2px rgba(99, 131, 168, 0.5);
}

.btn-vk.disabled,
.btn-vk:disabled {
    color: #fff;
    background-color: #6383a8;
    border-color: #6383a8;
}

.btn-vk:not(:disabled):not(.disabled):active,
.btn-vk:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #4d6a8b;
    border-color: #496482;
}

.show>.btn-vk.dropdown-toggle {
    color: #fff;
    background-color: #4d6a8b;
    border-color: #496482;
}

.btn-vk:not(:disabled):not(.disabled):active:focus,
.btn-vk:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(99, 131, 168, 0.5);
}

.show>.btn-vk.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(99, 131, 168, 0.5);
}

.btn-rss {
    color: #fff;
    background-color: #ffa500;
    border-color: #ffa500;
}

.btn-rss:hover {
    color: #fff;
    background-color: #d98c00;
    border-color: #cc8400;
}

.btn-rss:focus,
.btn-rss.focus {
    box-shadow: 0 0 0 2px rgba(255, 165, 0, 0.5);
}

.btn-rss.disabled,
.btn-rss:disabled {
    color: #fff;
    background-color: #ffa500;
    border-color: #ffa500;
}

.btn-rss:not(:disabled):not(.disabled):active,
.btn-rss:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #cc8400;
    border-color: #bf7c00;
}

.show>.btn-rss.dropdown-toggle {
    color: #fff;
    background-color: #cc8400;
    border-color: #bf7c00;
}

.btn-rss:not(:disabled):not(.disabled):active:focus,
.btn-rss:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(255, 165, 0, 0.5);
}

.show>.btn-rss.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(255, 165, 0, 0.5);
}

.btn-flickr {
    color: #fff;
    background-color: #0063dc;
    border-color: #0063dc;
}

.btn-flickr:hover {
    color: #fff;
    background-color: #0052b6;
    border-color: #004ca9;
}

.btn-flickr:focus,
.btn-flickr.focus {
    box-shadow: 0 0 0 2px rgba(0, 99, 220, 0.5);
}

.btn-flickr.disabled,
.btn-flickr:disabled {
    color: #fff;
    background-color: #0063dc;
    border-color: #0063dc;
}

.btn-flickr:not(:disabled):not(.disabled):active,
.btn-flickr:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #004ca9;
    border-color: #00469c;
}

.show>.btn-flickr.dropdown-toggle {
    color: #fff;
    background-color: #004ca9;
    border-color: #00469c;
}

.btn-flickr:not(:disabled):not(.disabled):active:focus,
.btn-flickr:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(0, 99, 220, 0.5);
}

.show>.btn-flickr.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(0, 99, 220, 0.5);
}

.btn-bitbucket {
    color: #fff;
    background-color: #0052cc;
    border-color: #0052cc;
}

.btn-bitbucket:hover {
    color: #fff;
    background-color: #0043a6;
    border-color: #003e99;
}

.btn-bitbucket:focus,
.btn-bitbucket.focus {
    box-shadow: 0 0 0 2px rgba(0, 82, 204, 0.5);
}

.btn-bitbucket.disabled,
.btn-bitbucket:disabled {
    color: #fff;
    background-color: #0052cc;
    border-color: #0052cc;
}

.btn-bitbucket:not(:disabled):not(.disabled):active,
.btn-bitbucket:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #003e99;
    border-color: #00388c;
}

.show>.btn-bitbucket.dropdown-toggle {
    color: #fff;
    background-color: #003e99;
    border-color: #00388c;
}

.btn-bitbucket:not(:disabled):not(.disabled):active:focus,
.btn-bitbucket:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(0, 82, 204, 0.5);
}

.show>.btn-bitbucket.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(0, 82, 204, 0.5);
}

.btn-blue {
    color: #fff;
    background-color: #467fcf;
    border-color: #467fcf;
}

.btn-blue:hover {
    color: #fff;
    background-color: #316cbe;
    border-color: #1f5bb1;
}

.btn-blue:focus,
.btn-blue.focus {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-blue.disabled,
.btn-blue:disabled {
    color: #fff;
    background-color: #467fcf;
    border-color: #467fcf;
}

.btn-blue:not(:disabled):not(.disabled):active,
.btn-blue:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #1f5bb1;
    border-color: #2c60a9;
}

.show>.btn-blue.dropdown-toggle {
    color: #fff;
    background-color: #1f5bb1;
    border-color: #2c60a9;
}

.btn-blue:not(:disabled):not(.disabled):active:focus,
.btn-blue:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.show>.btn-blue.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.5);
}

.btn-indigo {
    color: #fff;
    background-color: #6574cd;
    border-color: #6574cd;
}

.btn-indigo:hover {
    color: #fff;
    background-color: #485ac4;
    border-color: #3f51c1;
}

.btn-indigo:focus,
.btn-indigo.focus {
    box-shadow: 0 0 0 2px rgba(101, 116, 205, 0.5);
}

.btn-indigo.disabled,
.btn-indigo:disabled {
    color: #fff;
    background-color: #6574cd;
    border-color: #6574cd;
}

.btn-indigo:not(:disabled):not(.disabled):active,
.btn-indigo:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #3f51c1;
    border-color: #3b4db7;
}

.show>.btn-indigo.dropdown-toggle {
    color: #fff;
    background-color: #3f51c1;
    border-color: #3b4db7;
}

.btn-indigo:not(:disabled):not(.disabled):active:focus,
.btn-indigo:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(101, 116, 205, 0.5);
}

.show>.btn-indigo.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(101, 116, 205, 0.5);
}

.btn-purple {
    color: #fff;
    background: #7F53AC;
    border-color: #7F53AC;
}

.btn-purple:hover {
    color: #fff;
    background-color: #923ce6;
    border-color: #8c31e4;
}

.btn-purple:focus,
.btn-purple.focus {
    box-shadow: 0 0 0 2px rgba(165, 94, 234, 0.5);
}

.btn-purple.disabled,
.btn-purple:disabled {
    color: #fff;
    background-color: #867efc;
    border-color: #867efc;
}

.btn-purple:not(:disabled):not(.disabled):active,
.btn-purple:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #8c31e4;
    border-color: #8526e3;
}

.show>.btn-purple.dropdown-toggle {
    color: #fff;
    background-color: #8c31e4;
    border-color: #8526e3;
}

.btn-purple:not(:disabled):not(.disabled):active:focus,
.btn-purple:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(165, 94, 234, 0.5);
}

.show>.btn-purple.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(165, 94, 234, 0.5);
}

.btn-pink {
    color: #fff;
    background-color: #ec82ef;
    border-color: #ec82ef;
}

.btn-pink:hover {
    color: #fff;
    background-color: #f44982;
    border-color: #f33d7a;
}

.btn-pink:focus,
.btn-pink.focus {
    box-shadow: 0 0 0 2px rgba(246, 109, 155, 0.5);
}

.btn-pink.disabled,
.btn-pink:disabled {
    color: #fff;
    background-color: #ec82ef;
    border-color: #ec82ef;
}

.btn-pink:not(:disabled):not(.disabled):active,
.btn-pink:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #f33d7a;
    border-color: #f23172;
}

.show>.btn-pink.dropdown-toggle {
    color: #fff;
    background-color: #f33d7a;
    border-color: #f23172;
}

.btn-pink:not(:disabled):not(.disabled):active:focus,
.btn-pink:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(246, 109, 155, 0.5);
}

.show>.btn-pink.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(246, 109, 155, 0.5);
}

.btn-red {
    color: #fff;
    background-color: #c21a1a;
    border-color: #c21a1a;
}

.btn-red:hover {
    color: #fff;
    background-color: #ac1b1a;
    border-color: #a11918;
}

.btn-red:focus,
.btn-red.focus {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-red.disabled,
.btn-red:disabled {
    color: #fff;
    background-color: #c21a1a;
    border-color: #c21a1a;
}

.btn-red:not(:disabled):not(.disabled):active,
.btn-red:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #a11918;
    border-color: #961717;
}

.show>.btn-red.dropdown-toggle {
    color: #fff;
    background-color: #a11918;
    border-color: #961717;
}

.btn-red:not(:disabled):not(.disabled):active:focus,
.btn-red:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.show>.btn-red.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.5);
}

.btn-orange {
    color: #fff;
    background-color: #fc7303;
    border-color: #fc7303;
}

.btn-orange:hover {
    color: #fff;
    background-color: #fd811e;
    border-color: #fc7a12;
}

.btn-orange:focus,
.btn-orange.focus {
    box-shadow: 0 0 0 2px rgba(253, 150, 68, 0.5);
}

.btn-orange.disabled,
.btn-orange:disabled {
    color: #fff;
    background-color: #fc7303;
    border-color: #fc7303;
}

.btn-orange:not(:disabled):not(.disabled):active,
.btn-orange:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #fc7a12;
    border-color: #fc7305;
}

.show>.btn-orange.dropdown-toggle {
    color: #fff;
    background-color: #fc7a12;
    border-color: #fc7305;
}

.btn-orange:not(:disabled):not(.disabled):active:focus,
.btn-orange:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(253, 150, 68, 0.5);
}

.show>.btn-orange.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(253, 150, 68, 0.5);
}

.btn-yellow {
    color: #fff;
    background-color: #ecb403;
    border-color: #ecb403;
}

.btn-yellow:hover {
    color: #fff;
    background-color: #cea70c;
    border-color: #c29d0b;
}

.btn-yellow:focus,
.btn-yellow.focus {
    box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-yellow.disabled,
.btn-yellow:disabled {
    color: #fff;
    background-color: #ecb403;
    border-color: #ecb403;
}

.btn-yellow:not(:disabled):not(.disabled):active,
.btn-yellow:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #c29d0b;
    border-color: #b6940b;
}

.show>.btn-yellow.dropdown-toggle {
    color: #fff;
    background-color: #c29d0b;
    border-color: #b6940b;
}

.btn-yellow:not(:disabled):not(.disabled):active:focus,
.btn-yellow:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.show>.btn-yellow.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(241, 196, 15, 0.5);
}

.btn-green {
    color: #fff;
    background-color: #4ecc48;
    border-color: #4ecc48;
}

.btn-green:hover {
    color: #fff;
    background-color: #4b9400;
    border-color: #448700;
}

.btn-green:focus,
.btn-green.focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-green.disabled,
.btn-green:disabled {
    color: #fff;
    background-color: #4ecc48;
    border-color: #4ecc48;
}

.btn-green:not(:disabled):not(.disabled):active,
.btn-green:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #448700;
    border-color: #3e7a00;
}

.show>.btn-green.dropdown-toggle {
    color: #fff;
    background-color: #448700;
    border-color: #3e7a00;
}

.btn-green:not(:disabled):not(.disabled):active:focus,
.btn-green:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.show>.btn-green.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.5);
}

.btn-teal {
    color: #fff;
    background-color: #2bcbba;
    border-color: #2bcbba;
}

.btn-teal:hover {
    color: #fff;
    background-color: #24ab9d;
    border-color: #22a193;
}

.btn-teal:focus,
.btn-teal.focus {
    box-shadow: 0 0 0 2px rgba(43, 203, 186, 0.5);
}

.btn-teal.disabled,
.btn-teal:disabled {
    color: #fff;
    background-color: #2bcbba;
    border-color: #2bcbba;
}

.btn-teal:not(:disabled):not(.disabled):active,
.btn-teal:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #22a193;
    border-color: #20968a;
}

.show>.btn-teal.dropdown-toggle {
    color: #fff;
    background-color: #22a193;
    border-color: #20968a;
}

.btn-teal:not(:disabled):not(.disabled):active:focus,
.btn-teal:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(43, 203, 186, 0.5);
}

.show>.btn-teal.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(43, 203, 186, 0.5);
}

.btn-cyan {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-cyan:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b;
}

.btn-cyan:focus,
.btn-cyan.focus {
    box-shadow: 0 0 0 2px rgba(23, 162, 184, 0.5);
}

.btn-cyan.disabled,
.btn-cyan:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
}

.btn-cyan:not(:disabled):not(.disabled):active,
.btn-cyan:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f;
}

.show>.btn-cyan.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f;
}

.btn-cyan:not(:disabled):not(.disabled):active:focus,
.btn-cyan:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(23, 162, 184, 0.5);
}

.show>.btn-cyan.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(23, 162, 184, 0.5);
}

.btn-white {
    color: #495057;
    background-color: #fff;
    border-color: #fff;
}

.btn-white:hover {
    color: #495057;
    background-color: #ececec;
    border-color: #e6e5e5;
}

.btn-white:focus,
.btn-white.focus {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.btn-white.disabled,
.btn-white:disabled {
    color: #495057;
    background-color: #fff;
    border-color: #fff;
}

.btn-white:not(:disabled):not(.disabled):active,
.btn-white:not(:disabled):not(.disabled).active {
    color: #495057;
    background-color: #e6e5e5;
    border-color: #dfdfdf;
}

.show>.btn-white.dropdown-toggle {
    color: #495057;
    background-color: #e6e5e5;
    border-color: #dfdfdf;
}

.btn-white:not(:disabled):not(.disabled):active:focus,
.btn-white:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.show>.btn-white.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.5);
}

.btn-gray {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
}

.btn-gray:hover {
    color: #fff;
    background-color: #727b84;
    border-color: #6c757d;
}

.btn-gray:focus,
.btn-gray.focus {
    box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-gray.disabled,
.btn-gray:disabled {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
}

.btn-gray:not(:disabled):not(.disabled):active,
.btn-gray:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #6c757d;
    border-color: #666e76;
}

.show>.btn-gray.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #666e76;
}

.btn-gray:not(:disabled):not(.disabled):active:focus,
.btn-gray:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.show>.btn-gray.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(134, 142, 150, 0.5);
}

.btn-gray-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-gray-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
}

.btn-gray-dark:focus,
.btn-gray-dark.focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-gray-dark.disabled,
.btn-gray-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
}

.btn-gray-dark:not(:disabled):not(.disabled):active,
.btn-gray-dark:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.show>.btn-gray-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d;
}

.btn-gray-dark:not(:disabled):not(.disabled):active:focus,
.btn-gray-dark:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.show>.btn-gray-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.5);
}

.btn-azure {
    color: #fff;
    background-color: #45aaf2;
    border-color: #45aaf2;
}

.btn-azure:hover {
    color: #fff;
    background-color: #219af0;
    border-color: #1594ef;
}

.btn-azure:focus,
.btn-azure.focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-azure.disabled,
.btn-azure:disabled {
    color: #fff;
    background-color: #45aaf2;
    border-color: #45aaf2;
}

.btn-azure:not(:disabled):not(.disabled):active,
.btn-azure:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #1594ef;
    border-color: #108ee7;
}

.show>.btn-azure.dropdown-toggle {
    color: #fff;
    background-color: #1594ef;
    border-color: #108ee7;
}

.btn-azure:not(:disabled):not(.disabled):active:focus,
.btn-azure:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.show>.btn-azure.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(69, 170, 242, 0.5);
}

.btn-lime {
    color: #fff;
    background-color: #7bd235;
    border-color: #7bd235;
}

.btn-lime:hover {
    color: #fff;
    background-color: #69b829;
    border-color: #63ad27;
}

.btn-lime:focus,
.btn-lime.focus {
    box-shadow: 0 0 0 2px rgba(123, 210, 53, 0.5);
}

.btn-lime.disabled,
.btn-lime:disabled {
    color: #fff;
    background-color: #7bd235;
    border-color: #7bd235;
}

.btn-lime:not(:disabled):not(.disabled):active,
.btn-lime:not(:disabled):not(.disabled).active {
    color: #fff;
    background-color: #63ad27;
    border-color: #5da324;
}

.show>.btn-lime.dropdown-toggle {
    color: #fff;
    background-color: #63ad27;
    border-color: #5da324;
}

.btn-lime:not(:disabled):not(.disabled):active:focus,
.btn-lime:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 0 0 2px rgba(123, 210, 53, 0.5);
}

.show>.btn-lime.dropdown-toggle:focus {
    box-shadow: 0 0 0 2px rgba(123, 210, 53, 0.5);
}

.btn-option {
    background: transparent;
    color: #9aa0ac;
}

.btn-option:hover {
    color: #6e7687;
}

.btn-option:focus {
    box-shadow: none;
    color: #6e7687;
}

.btn-sm,
.btn-group-sm>.btn {
    font-size: 0.75rem;
    min-width: 1.625rem;
}

.btn-lg,
.btn-group-lg>.btn {
    font-size: 1rem;
    min-width: 2.75rem;
    font-weight: 400;
}

.btn-list {
    margin-bottom: -.5rem;
    font-size: 0;
}

.btn-list>.btn,
.btn-list>.dropdown {
    margin-bottom: .5rem;
}

.btn-list>.btn:not(:last-child),
.btn-list>.dropdown:not(:last-child) {
    margin-right: .5rem;
}

.btn-loading {
    color: transparent !important;
    pointer-events: none;
    position: relative;
}

.btn-loading:after {
    content: '';
    -webkit-animation: loader 500ms infinite linear;
    animation: loader 500ms infinite linear;
    border: 2px solid #fff;
    border-radius: 50%;
    border-right-color: transparent !important;
    border-top-color: transparent !important;
    display: block;
    height: 1.4em;
    width: 1.4em;
    position: absolute;
    left: calc(50% - (1.4em / 2));
    top: calc(50% - (1.4em / 2));
    -webkit-transform-origin: center;
    transform-origin: center;
    position: absolute !important;
}

.btn-loading.btn-sm:after {
    height: 1em;
    width: 1em;
    left: calc(50% - (1em / 2));
    top: calc(50% - (1em / 2));
}

.btn-group-sm>.btn-loading.btn:after {
    height: 1em;
    width: 1em;
    left: calc(50% - (1em / 2));
    top: calc(50% - (1em / 2));
}

.btn-loading.btn-secondary:after {
    border-color: #495057;
}

.btn-circle {
    text-align: center;
    padding: 6px 0;
    border-radius: 50%;
    text-align: center;
}

.btn-circle i {
    font-size: 0.9rem;
}

.btn-social.btn-lg {
    padding-left: 61px;
}

.btn-social.btn-lg> :first-child {
    line-height: 45px;
    width: 45px;
    font-size: 1.8em;
}

.btn-social.btn-sm {
    padding-left: 38px;
}

.btn-social.btn-sm> :first-child {
    line-height: 28px;
    width: 28px;
    font-size: 1.4em;
}

.btn-social.btn-xs {
    padding-left: 30px;
}

.btn-social.btn-xs> :first-child {
    line-height: 20px;
    width: 20px;
    font-size: 1.2em;
}

.btn-social-icon {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 34px;
    width: 34px;
    padding: 0;
}

.btn-social-icon> :first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 40px;
    line-height: 34px;
    font-size: 1.1em;
    text-align: center;
    border-right: 1px solid rgba(0, 0, 0, 0.2);
}

.btn-social-icon.btn-lg {
    padding-left: 61px;
}

.btn-social-icon.btn-lg> :first-child {
    line-height: 45px;
    width: 45px;
    font-size: 1.8em;
}

.btn-social-icon.btn-sm {
    padding-left: 38px;
}

.btn-social-icon.btn-sm> :first-child {
    line-height: 28px;
    width: 28px;
    font-size: 1.4em;
}

.btn-social-icon.btn-xs {
    padding-left: 30px;
}

.btn-social-icon.btn-xs> :first-child {
    line-height: 20px;
    width: 20px;
    font-size: 1.2em;
}

.btn-social-icon> :first-child {
    border: none;
    text-align: center;
    width: 100%;
    color: #fff;
}

.btn-social-icon.btn-lg {
    height: 45px;
    width: 45px;
    padding-left: 0;
    padding-right: 0;
}

.btn-social-icon.btn-sm {
    height: 30px;
    width: 30px;
    padding-left: 0;
    padding-right: 0;
}

.btn-social-icon.btn-xs {
    height: 22px;
    width: 22px;
    padding-left: 0;
    padding-right: 0;
}

/*------ Card -------*/
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    border: 0px solid transparent;
    background-clip: border-box;
    box-shadow: 0 25px 50px rgba(8, 21, 66, 0.04);
}

.card:hover {
    box-shadow: 0 25px 50px rgba(8, 21, 66, 0.04);
}

.card>hr {
    margin-right: 0;
    margin-left: 0;
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 7px;
    border-bottom-left-radius: 7px;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem;
}

.card-title {
    margin-bottom: 1.5rem;
}

.card-subtitle {
    margin-top: -0.75rem;
    margin-bottom: 0;
}

.card-text:last-child {
    margin-bottom: 0;
}

.card-link:hover {
    text-decoration: none;
}

.card-link+.card-link {
    margin-left: 1.5rem;
}

.card-header {
    padding: 1.5rem 1.5rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0.03);
    border-bottom: 1px solid #e1e0ea;
}

.card-header:first-child {
    border-radius: calc(3px - 1px) calc(3px - 1px) 0 0;
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0;
}

.card-footer {
    padding: 1.5rem 1.5rem;
    background-color: rgba(0, 0, 0, 0.03);
    border-top: 1px solid #e1e0ea;
}

.card-header-tabs {
    margin-right: -0.75rem;
    margin-bottom: -1.5rem;
    margin-left: -0.75rem;
    border-bottom: 0;
}

.card-header-pills {
    margin-right: -0.75rem;
    margin-left: -0.75rem;
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem;
}

.card-img {
    width: 100%;
    border-radius: calc(3px - 1px);
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(3px - 1px);
    border-top-right-radius: calc(3px - 1px);
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(3px - 1px);
    border-bottom-left-radius: calc(3px - 1px);
}

.card-deck {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}

.card-deck .card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-deck {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -0.75rem;
        margin-left: -0.75rem;
    }

    .card-deck .card {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 0.75rem;
        margin-bottom: 0;
        margin-left: 0.75rem;
    }
}

.card-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}

.card-group>.card {
    margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
    .card-group {
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
    }

    .card-group>.card {
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0;
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0;
    }

    .card-group>.card:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .card-group>.card:first-child .card-img-top,
    .card-group>.card:first-child .card-header {
        border-top-right-radius: 0;
    }

    .card-group>.card:first-child .card-img-bottom,
    .card-group>.card:first-child .card-footer {
        border-bottom-right-radius: 0;
    }

    .card-group>.card:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .card-group>.card:last-child .card-img-top,
    .card-group>.card:last-child .card-header {
        border-top-left-radius: 0;
    }

    .card-group>.card:last-child .card-img-bottom,
    .card-group>.card:last-child .card-footer {
        border-bottom-left-radius: 0;
    }

    .card-group>.card:only-child {
        border-radius: 3px;
    }

    .card-group>.card:only-child .card-img-top,
    .card-group>.card:only-child .card-header {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .card-group>.card:only-child .card-img-bottom,
    .card-group>.card:only-child .card-footer {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
        border-radius: 0;
    }

    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
    .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
        border-radius: 0;
    }
}

.card-columns .card {
    margin-bottom: 1.5rem;
}

@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1;
    }

    .card-columns .card {
        display: inline-block;
        width: 100%;
    }
}

/*------ Default Card Values -------*/
.card {
    position: relative;
    margin-bottom: 1.5rem;
    width: 100%;
    border-radius: 3px;
}

.card .card {
    box-shadow: 0px 0px 10px rgba(69, 101, 173, 0.1);
    border: 1px solid #e1e0ea;
}

@media print {
    .card {
        box-shadow: none;
        border: none;
    }
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    margin: 0;
    padding: 1.5rem 1.5rem;
    position: relative;
}

.card-body+.card-body {
    border-top: 1px solid #e1e0ea;
}

.tilebox-one i {
    font-size: 62px;
}

.card-body> :last-child {
    margin-bottom: 0;
}

@media print {
    .card-body {
        padding: 0;
    }
}

.card-body-scrollable {
    overflow: auto;
}

.card-footer,
.card-bottom {
    padding: 1rem 1.5rem;
    background: none;
}

.card-footer {
    border-top: 1px solid #e1e0ea;
    color: #6e7687;
}

.card-header {
    background: none;
    padding: 0.5rem 1.5rem;
    display: -ms-flexbox;
    display: flex;
    min-height: 3.5rem;
    -ms-flex-align: center;
    align-items: center;
}

.card-header .card-title {
    margin-bottom: 0;
}

.card-header.border-0+.card-body {
    padding-top: 0;
}

@media print {
    .card-header {
        display: none;
    }
}

.card-img-overlay {
    background-color: rgba(0, 0, 0, 0.4);
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}

.card-title {
    font-size: 1rem;
    line-height: 1.2;
    font-weight: 600;
}

.reg {
    text-align: center;
    font-size: 50px;
    color: #2e1170;
    float: right;
}

.card-title a {
    color: inherit;
}

.card-title:only-child {
    margin-bottom: 0;
}

.card-title small {
    color: #9aa0ac;
    font-size: 0.875rem;
    display: block;
    margin: -.75rem 0 1rem;
    line-height: 1.1;
    font-weight: 400;
}

.card-subtitle {
    color: #9aa0ac;
    font-size: 0.875rem;
    display: block;
    margin: -.75rem 0 1rem;
    line-height: 1.1;
    font-weight: 400;
}

.card-table {
    margin-bottom: 0;
}

.card-table tr:first-child td,
.card-table tr:first-child th {
    border-top: 0;
}

.card-table tr td:first-child,
.card-table tr th:first-child {
    padding-left: 1.5rem;
}

.card-table tr td:last-child,
.card-table tr th:last-child {
    padding-right: 1.5rem;
}

.card-body+.card-table {
    border-top: 1px solid #e1e0ea;
}

.card-profile .card-header {
    height: 5rem;
    background-size: cover;
    border: 0;
}

.profie-img .flex-md-row img {
    width: 60px;
}

.profile-img {
    display: block;
    border: 1px solid rgba(167, 180, 201, 0.2);
    border-radius: 50%;
    font-size: 10px;
    text-align: center;
    background: rgba(225, 225, 225, 0.2);
    z-index: 1000;
    position: relative;
}

.cover-image {
    background-size: cover !important;
}

.card-profile-img {
    max-width: 6rem;
    margin-bottom: 1rem;
    border: 3px solid #fff;
    border-radius: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.card-link+.card-link {
    margin-left: 1rem;
}

.card-body+.card-list-group {
    border-top: 1px solid #e1e0ea;
}

.card-list-group .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.card-list-group .list-group-item:last-child {
    border-bottom: 0;
}

.card-list-group .list-group-item:first-child {
    border-top: 0;
}

.card-header-tabs {
    margin: -1.25rem 0;
    border-bottom: 0;
    line-height: 2rem;
}

.card-header-tabs .nav-item {
    margin-bottom: 1px;
}

.card-header-pills {
    margin: -.75rem 0;
}

.card-aside {
    -ms-flex-direction: row;
    flex-direction: row;
}

.card-aside-column {
    min-width: 5rem;
    width: 30%;
    -ms-flex: 0 0 30%;
    flex: 0 0 30%;
    background: no-repeat center/cover;
}

.card-value {
    font-size: 1rem;
    line-height: 3.4rem;
    height: 3.4rem;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 400;
}

.card-value i {
    vertical-align: middle;
    font-size: 30px;
}

.card-chart-bg {
    height: 4rem;
    margin-top: -1rem;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.list-media .media-img {
    position: relative;
    float: left;
    width: 48px;
    margin-right: 20px;
}

.list-media .info {
    padding-left: 55px;
    min-height: 40px;
    height: auto;
    position: relative;
}

.list-media .info h4 a {
    font-size: 16px;
    margin-top: 10px;
}

.list-media .info p {
    font-size: 13px;
}

.list-media .info .text-right {
    right: 0;
    color: #8a8a8a;
    top: 50%;
    font-size: 12px;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    margin-top: -28px;
}

.card-options {
    margin-left: auto;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-order: 100;
    order: 100;
    margin-right: -.5rem;
    color: #9aa0ac;
    -ms-flex-item-align: center;
    align-self: center;
}

.card-options a:not(.btn) {
    margin-left: .5rem;
    color: #9493a9;
    display: inline-block;
    min-width: 1rem;
}

.card-options a:not(.btn):hover {
    text-decoration: none;
    color: #6e7687;
}

.card-options a:not(.btn) i {
    font-size: 1rem;
    vertical-align: middle;
}

.card-options .dropdown-toggle:after {
    display: none;
}

.widgets-cards .wrp.icon-circle {
    width: 73px;
    height: 73px;
    border-radius: 50px;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    padding: 0;
    margin-right: 15px;
}

.widgets-cards .wrp.icon-circle i {
    font-size: 1.6rem;
    color: #fff;
}

.widgets-cards .wrp p {
    margin-bottom: 0;
    line-height: 1;
    margin-bottom: 10px;
}

.widgets-cards .wrp p:first-child {
    font-weight: 600;
    font-size: 25px;
}

ul li .legend-dots {
    width: 1rem;
    height: 1rem;
    border-radius: 100%;
    display: inline-block;
    vertical-align: text-bottom;
    margin-right: .5rem;
}

.legend li {
    padding: 5px;
    display: inline;
}

.stretch-card {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: stretch;
    align-items: stretch;
    -webkit-justify-content: stretch;
    justify-content: stretch;
}

.stretch-card>.card {
    width: 100%;
    min-width: 100%;
}

.icon-size {
    font-size: 2rem !important;
}

.card-img-absolute {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    margin-left: -28px;
}

.card-image {
    position: absolute;
    top: 0;
    height: 100%;
    margin-left: -126px;
}

.statistics-box {
    position: relative;
    padding-left: 80px;
    text-align: right;
    padding-top: 14px;
    min-height: 80px;
    text-align: center;
}

.statistics-box .ico {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 80px;
    height: 80px;
    font-size: 70px;
    line-height: 80px;
    text-align: center;
}

.statistics-box .ico.small {
    font-weight: 900;
    font-size: 42px;
}

.statistics-box h2 {
    font-weight: 600 !important;
}

/*Card options*/
.card-collapsed> :not(.card-header):not(.card-status) {
    display: none;
}

.card-collapsed .card-options-collapse i:before {
    content: '\e92d';
}

.card-fullscreen .card-options-fullscreen i:before {
    content: '\e992';
}

.card-fullscreen .card-options-remove {
    display: none;
}

/*Card maps*/
.card-map {
    height: 15rem;
    background: #e9ecef;
}

.card-map-placeholder {
    background: no-repeat center;
}

/**Card tabs*/
.card-tabs {
    display: -ms-flexbox;
    display: flex;
}

.card-tabs-bottom .card-tabs-item {
    border: 0;
}

.card-tabs-bottom .card-tabs-item.active {
    border-top-color: #fff;
}

.card-tabs-item {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    display: block;
    padding: 1.4rem 1.5rem;
    color: inherit;
    overflow: hidden;
}

a.card-tabs-item {
    background: #fafbfc;
}

a.card-tabs-item:hover {
    text-decoration: none;
    color: inherit;
}

a.card-tabs-item:focus {
    z-index: 1;
}

a.card-tabs-item.active {
    background: #fff;
    border-bottom-color: #fff;
}

/**Card status*/
.card-status {
    position: absolute;
    top: -1px;
    left: 0px;
    right: 0px;
    height: 3px;
    border-radius: 7px 7px 0 0;
}

.card-status-left {
    right: auto;
    bottom: 0;
    height: auto;
    width: 3px;
    border-radius: 3px 0 0 3px;
}

/**Card icon*/
.card-icon {
    width: 3rem;
    font-size: 2.5rem;
    line-height: 3rem;
    text-align: center;
}

/**Card fullscreen*/
.card-fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    margin: 0;
}

/**Card alert*/
.card-alert {
    border-radius: 0;
    margin: -1px -1px 0;
}

.card-category {
    font-size: 18px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 500;
    letter-spacing: .05em;
    margin: 0 0 .5rem;
    background: #f4f3f9;
}

.card-counter {
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 7px;
    transition: .3s linear all;
    margin-bottom: 1.5rem;
}

.card-counter:hover {
    transition: .3s linear all;
}

.card-counter.primary {
    background-image: linear-gradient(to right, #564fc1 0%, #4ac361 100%);
    color: #FFF;
}

.card-counter.secondary {
    background: linear-gradient(to bottom right, #fbc434 0%, #f66b4e 100%) !important;
    color: #FFF;
}

.card-counter.success {
    background: linear-gradient(to bottom right, #62fb62, #21a544) !important;
    color: #FFF;
}

.card-counter.info {
    background: linear-gradient(to bottom right, #00f2fe 0%, #1e63c3 100%) !important;
    color: #FFF;
}

.card-counter i {
    font-size: 5em;
    opacity: 0.3;
}

.card-counter .count-numbers {
    position: absolute;
    right: 35px;
    top: 10px;
    font-size: 32px;
    display: block;
}

.card-counter .count-name {
    position: absolute;
    right: 35px;
    top: 65px;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
}

/*------ Carousel -------*/
.carousel {
    position: relative;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-item {
    position: relative;
    display: none;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform 0.6s ease;
    transition: transform 0.6s ease;
    transition: transform 0.6s ease, -webkit-transform 0.6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
    margin: 0 auto;
    text-align: center;
}

.carousel-item.active {
    display: block;
}

@media screen and (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next,
.carousel-item-prev {
    position: absolute;
    top: 0;
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

@supports (-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d) {

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

.carousel-item-next,
.active.carousel-item-right {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
}

@supports (-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d) {

    .carousel-item-next,
    .active.carousel-item-right {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
    }
}

.carousel-item-prev,
.active.carousel-item-left {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
}

@supports (-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d) {

    .carousel-item-prev,
    .active.carousel-item-left {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-duration: .6s;
    transition-property: opacity;
}

.carousel-fade .carousel-item.active {
    opacity: 1;
}

.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

@supports (-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d) {

    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: 0.5;
}

.carousel-control-prev:hover,
.carousel-control-prev:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9;
}

.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: transparent no-repeat center center;
    background-size: 100% 100%;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 10px;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.carousel-indicators li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 7px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.5);
}

.carousel-indicators li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators .active {
    background-color: #fff;
}

.carousel-indicators1 {
    position: absolute;
    right: 0;
    top: 10px;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.carousel-indicators1 li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 7px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
}

.carousel-indicators1 li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators1 li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators1 .active {
    background-color: #fff;
}

.carousel-indicators2 {
    position: absolute;
    right: 10px;
    top: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-top: 10px;
    list-style: none;
}

.carousel-indicators2 li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 7px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: #d9d7e8;
    border-radius: 50%;
}

.carousel-indicators2 li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators2 li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators2 .active {
    background-color: #e2e1ea;
}

.carousel-indicators3 {
    position: absolute;
    left: 10px;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-top: 10px;
    list-style: none;
}

.carousel-indicators3 li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 7px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
}

.carousel-indicators3 li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators3 li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators3 .active {
    background-color: #fff;
}

.carousel-indicators4 {
    position: absolute;
    right: 10px;
    bottom: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-top: 10%;
    list-style: none;
}

.carousel-indicators4 li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 7px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
}

.carousel-indicators4 li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators4 li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators4 .active {
    background-color: #fff;
}

.carousel-indicators5 {
    position: absolute;
    bottom: 0;
    left: 10px;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    list-style: none;
}

.carousel-indicators5 li {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 7px;
    height: 7px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
}

.carousel-indicators5 li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators5 li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: "";
}

.carousel-indicators5 .active {
    background-color: #fff;
}

.carousel-caption {
    position: absolute;
    right: 15%;
    top: 30%;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}

.container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

@media (max-width: 576px) {
    .container {
        padding-right: 0.75rem;
        padding-left: 0.75rem;
    }
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1280px) {
    .container {
        max-width: 1200px;
    }
}

.container-fluid {
    width: 100%;
    padding-right: 0.75rem;
    padding-left: 0.75rem;
    margin-right: auto;
    margin-left: auto;
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -0.75rem;
    margin-left: -0.75rem;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0;
}

.no-gutters>.col,
.no-gutters>[class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col,
.col-auto,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm,
.col-sm-auto,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md,
.col-md-auto,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg,
.col-lg-auto,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl,
.col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
}

.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none;
}

.col-1 {
    -ms-flex: 0 0 8.33333333%;
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
}

.col-2 {
    -ms-flex: 0 0 16.66666667%;
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
}

.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}

.col-4 {
    -ms-flex: 0 0 33.33333333%;
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
}

.col-5 {
    -ms-flex: 0 0 41.66666667%;
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
}

.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}

.col-7 {
    -ms-flex: 0 0 58.33333333%;
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
}

.col-8 {
    -ms-flex: 0 0 66.66666667%;
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
}

.col-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
}

.col-10 {
    -ms-flex: 0 0 83.33333333%;
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
}

.col-11 {
    -ms-flex: 0 0 91.66666667%;
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
}

.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}

.order-first {
    -ms-flex-order: -1;
    order: -1;
}

.order-last {
    -ms-flex-order: 13;
    order: 13;
}

.order-0 {
    -ms-flex-order: 0;
    order: 0;
}

.order-1 {
    -ms-flex-order: 1;
    order: 1;
}

.order-2 {
    -ms-flex-order: 2;
    order: 2;
}

.order-3 {
    -ms-flex-order: 3;
    order: 3;
}

.order-4 {
    -ms-flex-order: 4;
    order: 4;
}

.order-5 {
    -ms-flex-order: 5;
    order: 5;
}

.order-6 {
    -ms-flex-order: 6;
    order: 6;
}

.order-7 {
    -ms-flex-order: 7;
    order: 7;
}

.order-8 {
    -ms-flex-order: 8;
    order: 8;
}

.order-9 {
    -ms-flex-order: 9;
    order: 9;
}

.order-10 {
    -ms-flex-order: 10;
    order: 10;
}

.order-11 {
    -ms-flex-order: 11;
    order: 11;
}

.order-12 {
    -ms-flex-order: 12;
    order: 12;
}

.offset-1 {
    margin-left: 8.33333333%;
}

.offset-2 {
    margin-left: 16.66666667%;
}

.offset-3 {
    margin-left: 25%;
}

.offset-4 {
    margin-left: 33.33333333%;
}

.offset-5 {
    margin-left: 41.66666667%;
}

.offset-6 {
    margin-left: 50%;
}

.offset-7 {
    margin-left: 58.33333333%;
}

.offset-8 {
    margin-left: 66.66666667%;
}

.offset-9 {
    margin-left: 75%;
}

.offset-10 {
    margin-left: 83.33333333%;
}

.offset-11 {
    margin-left: 91.66666667%;
}

@media (min-width: 576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-sm-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-sm-1 {
        -ms-flex: 0 0 8.33333333%;
        flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-sm-2 {
        -ms-flex: 0 0 16.66666667%;
        flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-sm-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-sm-4 {
        -ms-flex: 0 0 33.33333333%;
        flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-sm-5 {
        -ms-flex: 0 0 41.66666667%;
        flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-sm-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-sm-7 {
        -ms-flex: 0 0 58.33333333%;
        flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-sm-8 {
        -ms-flex: 0 0 66.66666667%;
        flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-sm-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-sm-10 {
        -ms-flex: 0 0 83.33333333%;
        flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-sm-11 {
        -ms-flex: 0 0 91.66666667%;
        flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-sm-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-sm-first {
        -ms-flex-order: -1;
        order: -1;
    }

    .order-sm-last {
        -ms-flex-order: 13;
        order: 13;
    }

    .order-sm-0 {
        -ms-flex-order: 0;
        order: 0;
    }

    .order-sm-1 {
        -ms-flex-order: 1;
        order: 1;
    }

    .order-sm-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-sm-3 {
        -ms-flex-order: 3;
        order: 3;
    }

    .order-sm-4 {
        -ms-flex-order: 4;
        order: 4;
    }

    .order-sm-5 {
        -ms-flex-order: 5;
        order: 5;
    }

    .order-sm-6 {
        -ms-flex-order: 6;
        order: 6;
    }

    .order-sm-7 {
        -ms-flex-order: 7;
        order: 7;
    }

    .order-sm-8 {
        -ms-flex-order: 8;
        order: 8;
    }

    .order-sm-9 {
        -ms-flex-order: 9;
        order: 9;
    }

    .order-sm-10 {
        -ms-flex-order: 10;
        order: 10;
    }

    .order-sm-11 {
        -ms-flex-order: 11;
        order: 11;
    }

    .order-sm-12 {
        -ms-flex-order: 12;
        order: 12;
    }

    .offset-sm-0 {
        margin-left: 0;
    }

    .offset-sm-1 {
        margin-left: 8.33333333%;
    }

    .offset-sm-2 {
        margin-left: 16.66666667%;
    }

    .offset-sm-3 {
        margin-left: 25%;
    }

    .offset-sm-4 {
        margin-left: 33.33333333%;
    }

    .offset-sm-5 {
        margin-left: 41.66666667%;
    }

    .offset-sm-6 {
        margin-left: 50%;
    }

    .offset-sm-7 {
        margin-left: 58.33333333%;
    }

    .offset-sm-8 {
        margin-left: 66.66666667%;
    }

    .offset-sm-9 {
        margin-left: 75%;
    }

    .offset-sm-10 {
        margin-left: 83.33333333%;
    }

    .offset-sm-11 {
        margin-left: 91.66666667%;
    }
}

@media (min-width: 768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-md-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-md-1 {
        -ms-flex: 0 0 8.33333333%;
        flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-md-2 {
        -ms-flex: 0 0 16.66666667%;
        flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        -ms-flex: 0 0 33.33333333%;
        flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-md-5 {
        -ms-flex: 0 0 41.66666667%;
        flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-7 {
        -ms-flex: 0 0 58.33333333%;
        flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-md-8 {
        -ms-flex: 0 0 66.66666667%;
        flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-md-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-md-10 {
        -ms-flex: 0 0 83.33333333%;
        flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-md-11 {
        -ms-flex: 0 0 91.66666667%;
        flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-md-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-md-first {
        -ms-flex-order: -1;
        order: -1;
    }

    .order-md-last {
        -ms-flex-order: 13;
        order: 13;
    }

    .order-md-0 {
        -ms-flex-order: 0;
        order: 0;
    }

    .order-md-1 {
        -ms-flex-order: 1;
        order: 1;
    }

    .order-md-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-md-3 {
        -ms-flex-order: 3;
        order: 3;
    }

    .order-md-4 {
        -ms-flex-order: 4;
        order: 4;
    }

    .order-md-5 {
        -ms-flex-order: 5;
        order: 5;
    }

    .order-md-6 {
        -ms-flex-order: 6;
        order: 6;
    }

    .order-md-7 {
        -ms-flex-order: 7;
        order: 7;
    }

    .order-md-8 {
        -ms-flex-order: 8;
        order: 8;
    }

    .order-md-9 {
        -ms-flex-order: 9;
        order: 9;
    }

    .order-md-10 {
        -ms-flex-order: 10;
        order: 10;
    }

    .order-md-11 {
        -ms-flex-order: 11;
        order: 11;
    }

    .order-md-12 {
        -ms-flex-order: 12;
        order: 12;
    }

    .offset-md-0 {
        margin-left: 0;
    }

    .offset-md-1 {
        margin-left: 8.33333333%;
    }

    .offset-md-2 {
        margin-left: 16.66666667%;
    }

    .offset-md-3 {
        margin-left: 25%;
    }

    .offset-md-4 {
        margin-left: 33.33333333%;
    }

    .offset-md-5 {
        margin-left: 41.66666667%;
    }

    .offset-md-6 {
        margin-left: 50%;
    }

    .offset-md-7 {
        margin-left: 58.33333333%;
    }

    .offset-md-8 {
        margin-left: 66.66666667%;
    }

    .offset-md-9 {
        margin-left: 75%;
    }

    .offset-md-10 {
        margin-left: 83.33333333%;
    }

    .offset-md-11 {
        margin-left: 91.66666667%;
    }
}

@media (min-width: 992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-lg-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-lg-1 {
        -ms-flex: 0 0 8.33333333%;
        flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-lg-2 {
        -ms-flex: 0 0 16.66666667%;
        flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-lg-4 {
        -ms-flex: 0 0 33.33333333%;
        flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-lg-5 {
        -ms-flex: 0 0 41.66666667%;
        flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-lg-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-lg-7 {
        -ms-flex: 0 0 58.33333333%;
        flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-lg-8 {
        -ms-flex: 0 0 66.66666667%;
        flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-lg-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-lg-10 {
        -ms-flex: 0 0 83.33333333%;
        flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-lg-11 {
        -ms-flex: 0 0 91.66666667%;
        flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-lg-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-lg-first {
        -ms-flex-order: -1;
        order: -1;
    }

    .order-lg-last {
        -ms-flex-order: 13;
        order: 13;
    }

    .order-lg-0 {
        -ms-flex-order: 0;
        order: 0;
    }

    .order-lg-1 {
        -ms-flex-order: 1;
        order: 1;
    }

    .order-lg-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-lg-3 {
        -ms-flex-order: 3;
        order: 3;
    }

    .order-lg-4 {
        -ms-flex-order: 4;
        order: 4;
    }

    .order-lg-5 {
        -ms-flex-order: 5;
        order: 5;
    }

    .order-lg-6 {
        -ms-flex-order: 6;
        order: 6;
    }

    .order-lg-7 {
        -ms-flex-order: 7;
        order: 7;
    }

    .order-lg-8 {
        -ms-flex-order: 8;
        order: 8;
    }

    .order-lg-9 {
        -ms-flex-order: 9;
        order: 9;
    }

    .order-lg-10 {
        -ms-flex-order: 10;
        order: 10;
    }

    .order-lg-11 {
        -ms-flex-order: 11;
        order: 11;
    }

    .order-lg-12 {
        -ms-flex-order: 12;
        order: 12;
    }

    .offset-lg-0 {
        margin-left: 0;
    }

    .offset-lg-1 {
        margin-left: 8.33333333%;
    }

    .offset-lg-2 {
        margin-left: 16.66666667%;
    }

    .offset-lg-3 {
        margin-left: 25%;
    }

    .offset-lg-4 {
        margin-left: 33.33333333%;
    }

    .offset-lg-5 {
        margin-left: 41.66666667%;
    }

    .offset-lg-6 {
        margin-left: 50%;
    }

    .offset-lg-7 {
        margin-left: 58.33333333%;
    }

    .offset-lg-8 {
        margin-left: 66.66666667%;
    }

    .offset-lg-9 {
        margin-left: 75%;
    }

    .offset-lg-10 {
        margin-left: 83.33333333%;
    }

    .offset-lg-11 {
        margin-left: 91.66666667%;
    }
}

@media (min-width: 1280px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }

    .col-xl-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-xl-1 {
        -ms-flex: 0 0 8.33333333%;
        flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-xl-2 {
        -ms-flex: 0 0 16.66666667%;
        flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-xl-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-xl-4 {
        -ms-flex: 0 0 33.33333333%;
        flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-xl-5 {
        -ms-flex: 0 0 41.66666667%;
        flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-xl-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .col-xl-7 {
        -ms-flex: 0 0 58.33333333%;
        flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-xl-8 {
        -ms-flex: 0 0 66.66666667%;
        flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-xl-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-xl-10 {
        -ms-flex: 0 0 83.33333333%;
        flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-xl-11 {
        -ms-flex: 0 0 91.66666667%;
        flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-xl-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .order-xl-first {
        -ms-flex-order: -1;
        order: -1;
    }

    .order-xl-last {
        -ms-flex-order: 13;
        order: 13;
    }

    .order-xl-0 {
        -ms-flex-order: 0;
        order: 0;
    }

    .order-xl-1 {
        -ms-flex-order: 1;
        order: 1;
    }

    .order-xl-2 {
        -ms-flex-order: 2;
        order: 2;
    }

    .order-xl-3 {
        -ms-flex-order: 3;
        order: 3;
    }

    .order-xl-4 {
        -ms-flex-order: 4;
        order: 4;
    }

    .order-xl-5 {
        -ms-flex-order: 5;
        order: 5;
    }

    .order-xl-6 {
        -ms-flex-order: 6;
        order: 6;
    }

    .order-xl-7 {
        -ms-flex-order: 7;
        order: 7;
    }

    .order-xl-8 {
        -ms-flex-order: 8;
        order: 8;
    }

    .order-xl-9 {
        -ms-flex-order: 9;
        order: 9;
    }

    .order-xl-10 {
        -ms-flex-order: 10;
        order: 10;
    }

    .order-xl-11 {
        -ms-flex-order: 11;
        order: 11;
    }

    .order-xl-12 {
        -ms-flex-order: 12;
        order: 12;
    }

    .offset-xl-0 {
        margin-left: 0;
    }

    .offset-xl-1 {
        margin-left: 8.33333333%;
    }

    .offset-xl-2 {
        margin-left: 16.66666667%;
    }

    .offset-xl-3 {
        margin-left: 25%;
    }

    .offset-xl-4 {
        margin-left: 33.33333333%;
    }

    .offset-xl-5 {
        margin-left: 41.66666667%;
    }

    .offset-xl-6 {
        margin-left: 50%;
    }

    .offset-xl-7 {
        margin-left: 58.33333333%;
    }

    .offset-xl-8 {
        margin-left: 66.66666667%;
    }

    .offset-xl-9 {
        margin-left: 75%;
    }

    .offset-xl-10 {
        margin-left: 83.33333333%;
    }

    .offset-xl-11 {
        margin-left: 91.66666667%;
    }
}

@media print {
    .container {
        max-width: none;
    }
}

.row-cards>.col,
.row-cards>[class*='col-'] {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}

.row-deck>.col,
.row-deck>[class*='col-'] {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: stretch;
    align-items: stretch;
}

.row-deck>.col .card,
.row-deck>[class*='col-'] .card {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.col-text {
    max-width: 48rem;
}

.col-login {
    max-width: 24rem;
}

.gutters-0 {
    margin-right: 0;
    margin-left: 0;
}

.gutters-0>.col,
.gutters-0>[class*="col-"] {
    padding-right: 0;
    padding-left: 0;
}

.gutters-0 .card {
    margin-bottom: 0;
}

.gutters-xs {
    margin-right: -0.25rem;
    margin-left: -0.25rem;
}

.gutters-xs>.col,
.gutters-xs>[class*="col-"] {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
}

.gutters-xs .card {
    margin-bottom: 0.5rem;
}

.gutters-sm {
    margin-right: -0.5rem;
    margin-left: -0.5rem;
}

.gutters-sm>.col,
.gutters-sm>[class*="col-"] {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}

.gutters-sm .card {
    margin-bottom: 1rem;
}

.gutters-lg {
    margin-right: -1rem;
    margin-left: -1rem;
}

.gutters-lg>.col,
.gutters-lg>[class*="col-"] {
    padding-right: 1rem;
    padding-left: 1rem;
}

.gutters-lg .card {
    margin-bottom: 2rem;
}

.gutters-xl {
    margin-right: -1.5rem;
    margin-left: -1.5rem;
}

.gutters-xl>.col,
.gutters-xl>[class*="col-"] {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}

.gutters-xl .card {
    margin-bottom: 3rem;
}

.page {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    min-height: 100%;
}

body.fixed-header .page {
    padding-top: 4.5rem;
}

@media (min-width: 1600px) {
    body.aside-opened .page {
        margin-right: 22rem;
    }
}

.page-main {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.page-content {
    margin: .75rem 0;
}

@media (min-width: 768px) {
    .page-content {
        margin: 1.5rem 0;
    }
}

/*------Drop Downs-------*/
.dropup,
.dropright,
.dropdown,
.dropleft {
    position: relative;
}

.dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 0.9375rem;
    color: #495057;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e1e0ea;
}

.dropdown-menu-right {
    right: 0;
    left: auto;
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0;
    border-right: 0.3em solid transparent;
    border-bottom: 0.3em solid;
    border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0;
    border-bottom: 0.3em solid transparent;
    border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropright .dropdown-toggle::after {
    vertical-align: 0;
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    display: none;
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    width: 0;
    height: 0;
    margin-right: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid transparent;
    border-right: 0.3em solid;
    border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0;
}

.dropdown-menu[x-placement^="top"],
.dropdown-menu[x-placement^="right"],
.dropdown-menu[x-placement^="bottom"],
.dropdown-menu[x-placement^="left"] {
    right: auto;
    bottom: auto;
}

.dropdown-divider {
    height: 0;
    margin: 0.5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef;
}

.notifyimg {
    color: #fff;
    float: left;
    height: 40px;
    line-height: 40px;
    margin-right: 10px;
    text-align: center;
    vertical-align: middle;
    width: 40px;
    border-radius: 3px;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.5rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.drop-icon-wrap {
    text-align: center;
}

.drop-icon-wrap li {
    display: inline-block;
}

.drop-icon-wrap .drop-icon-item {
    display: inline-block;
    padding-bottom: 10px;
    padding-top: 10px;
    text-align: center;
    color: #878787;
    text-transform: capitalize;
    min-width: 75px;
}

.block {
    display: block !important;
}

.drop-icon-item i {
    font-size: 20px;
    padding-bottom: 5px;
}

.drop-icon-wrap .drop-icon-item:hover {
    text-decoration: none;
    background-color: #f4f3f9;
}

.dropdown-item.user {
    font-size: 14px;
    padding: 5px;
}

.user-semi-title {
    font-size: 14px;
    line-height: 23px;
}

.floating {
    animation: floating 3s ease infinite;
    will-change: transform;
}

.dropdown-item:hover,
.dropdown-item:focus,
.dropdown-item.active,
.dropdown-item:active {
    text-decoration: none;
    background-color: #f4f3f9;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #fff;
    background-color: transparent;
}

.dropdown-menu.show {
    display: block;
    margin: 0;
    border: 1px solid #e1e0ea;
    box-shadow: none;
}

.nav-item.show .dropdown-menu.dropdown-menu-arrow.show {
    top: -1px !important;
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1.5rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #868e96;
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1.5rem;
    color: #212529;
}

.btn-group,
.btn-group-vertical {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle;
}

.btn-group>.btn,
.btn-group-vertical>.btn {
    position: relative;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
}

.btn-group>.btn:hover,
.btn-group-vertical>.btn:hover {
    z-index: 1;
}

.btn-group>.btn:focus,
.btn-group>.btn:active,
.btn-group>.btn.active {
    z-index: 1;
}

.btn-group-vertical>.btn:focus,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn.active {
    z-index: 1;
}

.btn-group .btn+.btn,
.btn-group .btn+.btn-group {
    margin-left: -1px;
}

.btn-group .btn-group+.btn,
.btn-group .btn-group+.btn-group {
    margin-left: -1px;
}

.btn-group-vertical .btn+.btn,
.btn-group-vertical .btn+.btn-group {
    margin-left: -1px;
}

.btn-group-vertical .btn-group+.btn,
.btn-group-vertical .btn-group+.btn-group {
    margin-left: -1px;
}

.btn-toolbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
}

.btn-toolbar .input-group {
    width: auto;
}

.btn-group>.btn:first-child {
    margin-left: 0;
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group>.btn-group:not(:last-child)>.btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.btn-group>.btn:not(:first-child),
.btn-group>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
    padding-right: 0.5625rem;
    padding-left: 0.5625rem;
}

.dropdown-toggle-split::after {
    margin-left: 0;
}

.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
    margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0;
}

.btn-sm+.dropdown-toggle-split,
.btn-group-sm>.btn+.dropdown-toggle-split {
    padding-right: 0.375rem;
    padding-left: 0.375rem;
}

.btn-lg+.dropdown-toggle-split,
.btn-group-lg>.btn+.dropdown-toggle-split {
    padding-right: 0.75rem;
    padding-left: 0.75rem;
}

.btn-group-vertical {
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: center;
    justify-content: center;
}

.btn-group-vertical .btn,
.btn-group-vertical .btn-group {
    width: 100%;
}

.btn-group-vertical>.btn+.btn,
.btn-group-vertical>.btn+.btn-group {
    margin-top: -1px;
    margin-left: 0;
}

.btn-group-vertical>.btn-group+.btn,
.btn-group-vertical>.btn-group+.btn-group {
    margin-top: -1px;
    margin-left: 0;
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical>.btn-group:not(:last-child)>.btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.btn-group-vertical>.btn:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child)>.btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.btn-group-toggle>.btn,
.btn-group-toggle>.btn-group>.btn {
    margin-bottom: 0;
}

.btn-group-toggle>.btn input[type="radio"],
.btn-group-toggle>.btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

.btn-group-toggle>.btn-group>.btn input[type="radio"],
.btn-group-toggle>.btn-group>.btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none;
}

/*-----List Of Dropdwons-----*/
btn.dropdown-toggle~.dropdown-menu {
    background-color: #f4f4f4 !important;
    background-color: #fff !important;
    border: 0 solid #4285f4 !important;
    box-shadow: 0px 0px 3px rgba(25, 25, 25, 0.3) !important;
    top: 0px !important;
    margin: 0px !important;
    padding: 0px !important;
}

ul.dropdown-menu li.dropdown ul.dropdown-menu {
    background-color: #f4f4f4 !important;
    background-color: #fff !important;
    border: 0 solid #4285f4 !important;
    box-shadow: 0px 0px 3px rgba(25, 25, 25, 0.3) !important;
    top: 0px !important;
    margin: 0px !important;
    padding: 0px !important;
    position: absolute !important;
    width: 100% !important;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 9999;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    list-style: none;
    font-size: 14px;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
    background-clip: padding-box;
}

.dropdown-menu>li>a {
    display: block;
    padding: 8px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.428571429;
    color: #121029;
    white-space: nowrap;
}

.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus {
    text-decoration: none;
    color: #000;
    background-color: #f4f3f9;
}

.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e1e0ea;
}

.dropdown-menu .dropdown-plus-title {
    width: 100% !important;
    color: #121029 !important;
    padding: 6px 12px !important;
    font-weight: 500 !important;
    border: 0 solid #e1e0ea !important;
    border-bottom-width: 1px !important;
    cursor: pointer !important;
}

ul.dropdown-menu li.dropdown ul.dropdown-menu .dropdown-plus-title {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    line-height: 20px !important;
}

.btn.dropdown-toggle.btn-primary~.dropdown-menu .dropdown-plus-title {
    border-color: #564fc1 !important;
}

.btn.dropdown-toggle.btn-success~.dropdown-menu .dropdown-plus-title {
    border-color: #4cae4c !important;
}

.btn.dropdown-toggle.btn-info~.dropdown-menu .dropdown-plus-title {
    border-color: #46b8da !important;
}

.btn.dropdown-toggle.btn-warning~.dropdown-menu .dropdown-plus-title {
    border-color: #eea236 !important;
}

.btn.dropdown-toggle.btn-danger~.dropdown-menu .dropdown-plus-title {
    border-color: #d43f3a !important;
}

.dropdown-menu-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 15px;
    border-bottom: 1px solid #e1e0ea;
}

.dropdown-demo .dropdown-menu {
    position: static;
    float: none;
}

.dropdown-menu-header label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    color: #9493a9;
}

.dropdown-media-list .media {
    padding: 12px 15px;
}

.dropdown-media-list .media:hover,
.dropdown-media-list .media:focus {
    background-color: #f8f9fa;
}

.media {
    display: flex;
    align-items: flex-start;
}

.dropdown-media-list img {
    border-radius: 100%;
}

.dropdown-media-list .media-body {
    margin-left: 15px;
}

.dropdown-media-list .media-body>div {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.dropdown-media-list .media-body>div p {
    margin-bottom: 0;
    font-weight: 500;
    color: #9493a9;
    font-size: 14px;
}

.dropdown-media-list .media-body>div span {
    font-size: 12px;
    color: #CFCFCF;
}

.dropdown-media-list .media-body>p {
    font-size: 14px;
    color: #bfbfbf;
    margin-bottom: 0;
}

.dropdown-list-footer {
    padding: 10px 15px;
    text-align: center;
    font-size: 12px;
    border-top: 1px solid #e1e0ea;
}

.label {
    display: inline-block;
    margin-bottom: .5rem;
    padding: 0.05rem 0.5rem;
    border-radius: 3px;
}

.dropdown-media-list {
    padding: 0;
}

@media (min-width: 768px) {
    ul.dropdown-menu li.dropdown ul.dropdown-menu .dropdown-plus-title {
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }
}

@media (min-width: 768px) {
    ul.dropdown-menu li.dropdown ul.dropdown-menu {
        width: auto !important;
    }
}

.dropdown {
    display: block;
}

.dropdown-menu {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    min-width: 12rem;
}

.dropdown-item {
    color: #121029;
}

.dropdown-menu-arrow.dropdown-menu-right:before,
.dropdown-menu-arrow.dropdown-menu-right:after {
    left: auto;
    right: 12px;
}

.dropdown-toggle {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
}

.dropdown-toggle:after {
    vertical-align: 0.155em;
}

.dropdown-toggle:empty:after {
    margin-left: 0;
}

.dropdown-icon {
    color: #9aa0ac;
    margin-right: .5rem;
    margin-left: -.5rem;
    width: 1em;
    display: inline-block;
    text-align: center;
    vertical-align: -1px;
}

/*------- Forms -------*/
.form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 0.9375rem;
    line-height: 1.6;
    color: #9493a9 !important;
    background-color: #f4f3f9;
    background-clip: padding-box;
    border: 1px solid #e1e0ea;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    border-radius: 3px;
}

.authentication input {
    border: 0;
    padding-left: 32px !important;
    border-radius: 0;
}

.authentication .card:hover {
    box-shadow: 0 16px 26px 0 rgba(0, 0, 0, 0.4), 0 3px 6px 0 rgba(0, 0, 0, 0.4);
}

.authentication .card-title {
    font-size: 1.185rem;
}

.authentication .form-control {
    margin-bottom: 1rem;
}

.authentication .form-control:focus {
    box-shadow: none;
}

.authentication input::placeholder {
    color: #9493a9;
    margin-top: 1px;
}

.authentication .flex-c-m .login100-social-item i {
    color: #fff;
    margin-left: 0;
}

.authentication .wrap-input {
    width: 100%;
    margin: 0 auto;
}

.form-control {
    outline: 0 !important;
}

.form-control:focus {
    outline: 0 !important;
}

.form-control:hover {
    outline: 0 !important;
}

button,
a {
    outline: 0 !important;
}

button:focus,
a:focus {
    outline: 0 !important;
}

button:hover,
a:hover {
    outline: 0 !important;
}

.login100-social-item {
    font-size: 20px;
    color: #fff;
    display: inline-block;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin: 5px;
    text-align: center;
    line-height: 2;
}

.login100-social-item:hover {
    color: #fff;
}

.bg1 {
    background: linear-gradient(to right bottom, #163b7c 0%, #548beb 100%);
}

.bg2 {
    background: linear-gradient(to bottom right, #00f2fe 0%, #1e63c3 100%) !important;
}

.bg3 {
    background: linear-gradient(to bottom right, #f53e31, #dd4b39);
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #e1e0ea !important;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    color: #9493a9;
    background-color: #f4f3f9;
    outline: 0;
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.select2-selection--multiple:placeholder,
.select2-container .select2-search--inline .select2-search__field {
    color: #9493a9;
}

.select2-container--default .select2-selection--multiple {
    background-color: white;
    border: 1px solid #e1e0ea !important;
    cursor: text;
    border-radius: 3px !important;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #e1e0ea !important;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice,
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff !important;
}

.select2-container--default .select2-results>.select2-results__options {
    box-shadow: 0px 8px 14.72px 1.28px #b4cade;
}

@media screen and (prefers-reduced-motion: reduce) {
    .form-control {
        transition: none;
    }
}

.form-control {
    color: #99c1b2;
    opacity: 1;
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0;
}

.form-control:focus {
    color: #121029 !important;
    background-color: #fff;
    border-color: 1px solid #534f55;
    outline: 0;
    box-shadow: 0 0 0 1px rgba(211, 181, 234, 0.25);
}

.form-control::-webkit-input-placeholder,
.form-control::-moz-placeholder,
.form-control:-ms-input-placeholder,
.form-control::-ms-input-placeholder {
    color: #9493a9;
    opacity: 1;
}

.form-control:disabled,
.form-control[readonly] {
    background-color: #f7f7f7;
    opacity: 1;
}

select.form-control:not([size]):not([multiple]) {
    height: 2.375rem;
}

.select2-container .select2-selection--single {
    height: 2.375rem !important;
    border-radius: 3px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 35px !important;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 2.375rem !important;
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.form-control-file,
.form-control-range {
    display: block;
    width: 100%;
}

.col-form-label {
    padding-top: calc(0.375rem + 1px);
    padding-bottom: calc(0.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.6;
}

.col-form-label-lg {
    padding-top: calc(0.5rem + 1px);
    padding-bottom: calc(0.5rem + 1px);
    font-size: 1.125rem;
    line-height: 1.44444444;
}

.col-form-label-sm {
    padding-top: calc(0.25rem + 1px);
    padding-bottom: calc(0.25rem + 1px);
    font-size: 0.875rem;
    line-height: 1.14285714;
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: 0.375rem;
    padding-bottom: 0.375rem;
    margin-bottom: 0;
    line-height: 1.6;
    color: #495057;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0;
}

.form-control-plaintext.form-control-sm {
    padding-right: 0;
    padding-left: 0;
}

.input-group-sm>.form-control-plaintext.form-control,
.input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text,
.input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,
.input-group-sm>.input-group-prepend>.form-control-plaintext.btn,
.input-group-sm>.input-group-append>.form-control-plaintext.btn {
    padding-right: 0;
    padding-left: 0;
}

.form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0;
}

.input-group-lg>.form-control-plaintext.form-control,
.input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,
.input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,
.input-group-lg>.input-group-prepend>.form-control-plaintext.btn,
.input-group-lg>.input-group-append>.form-control-plaintext.btn {
    padding-right: 0;
    padding-left: 0;
}

.form-control-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.14285714;
    border-radius: 3px;
}

.input-group-sm>.form-control,
.input-group-sm>.input-group-prepend>.input-group-text,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn,
.input-group-sm>.input-group-append>.btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.14285714;
    border-radius: 3px;
}

select.form-control-sm:not([size]):not([multiple]) {
    height: calc(1.8125rem + 2px);
}

.input-group-sm>select.form-control:not([size]):not([multiple]),
.input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
.input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),
.input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
.input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]) {
    height: calc(1.8125rem + 2px);
}

.form-control-lg {
    padding: 0.5rem 1rem;
    font-size: 1.125rem;
    line-height: 1.44444444;
    border-radius: 3px;
}

.input-group-lg>.form-control,
.input-group-lg>.input-group-prepend>.input-group-text,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn,
.input-group-lg>.input-group-append>.btn {
    padding: 0.5rem 1rem;
    font-size: 1.125rem;
    line-height: 1.44444444;
    border-radius: 3px;
}

select.form-control-lg:not([size]):not([multiple]) {
    height: calc(2.6875rem + 2px);
}

.input-group-lg>select.form-control:not([size]):not([multiple]),
.input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
.input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),
.input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
.input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]) {
    height: calc(2.6875rem + 2px);
}

.form-group {
    margin-bottom: 1rem;
}

.form-text {
    display: block;
    margin-top: 0.25rem;
}

.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

.form-row>.col,
.form-row>[class*="col-"] {
    padding-right: 5px;
    padding-left: 5px;
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem;
}

.form-check-input {
    position: absolute;
    margin-top: 0.3rem;
    margin-left: -1.25rem;
}

.form-check-input:disabled~.form-check-label {
    color: #505662;
}

.form-check-label {
    margin-bottom: 0;
}

.form-check-inline {
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 0;
    margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0;
}

.ms-choice {
    border-radius: 3px;
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 87.5%;
    color: #4ecc48;
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(94, 186, 0, 0.8);
    border-radius: .2rem;
}

.was-validated .form-control:valid,
.form-control.is-valid,
.was-validated .custom-select:valid,
.custom-select.is-valid {
    border-color: #4ecc48;
}

.was-validated .form-control:valid:focus,
.form-control.is-valid:focus,
.was-validated .custom-select:valid:focus,
.custom-select.is-valid:focus {
    border-color: #4ecc48;
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.25);
}

.was-validated .form-control:valid~.valid-feedback,
.was-validated .form-control:valid~.valid-tooltip {
    display: block;
}

.form-control.is-valid~.valid-feedback,
.form-control.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-select:valid~.valid-feedback,
.was-validated .custom-select:valid~.valid-tooltip {
    display: block;
}

.custom-select.is-valid~.valid-feedback,
.custom-select.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .form-check-input:valid~.form-check-label,
.form-check-input.is-valid~.form-check-label {
    color: #4ecc48;
}

.was-validated .form-check-input:valid~.valid-feedback,
.was-validated .form-check-input:valid~.valid-tooltip {
    display: block;
}

.form-check-input.is-valid~.valid-feedback,
.form-check-input.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid~.custom-control-label,
.custom-control-input.is-valid~.custom-control-label {
    color: #4ecc48;
}

.was-validated .custom-control-input:valid~.custom-control-label::before,
.custom-control-input.is-valid~.custom-control-label::before {
    background-color: #9eff3b;
}

.was-validated .custom-control-input:valid~.valid-feedback,
.was-validated .custom-control-input:valid~.valid-tooltip {
    display: block;
}

.custom-control-input.is-valid~.valid-feedback,
.custom-control-input.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-control-input:valid:checked~.custom-control-label::before,
.custom-control-input.is-valid:checked~.custom-control-label::before {
    background-color: #78ed00;
}

.was-validated .custom-control-input:valid:focus~.custom-control-label::before,
.custom-control-input.is-valid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 1px #f4f3f9, 0 0 0 2px rgba(94, 186, 0, 0.25);
}

.was-validated .custom-file-input:valid~.custom-file-label,
.custom-file-input.is-valid~.custom-file-label {
    border-color: #4ecc48;
}

.was-validated .custom-file-input:valid~.custom-file-label::before,
.custom-file-input.is-valid~.custom-file-label::before {
    border-color: inherit;
}

.was-validated .custom-file-input:valid~.valid-feedback,
.was-validated .custom-file-input:valid~.valid-tooltip {
    display: block;
}

.custom-file-input.is-valid~.valid-feedback,
.custom-file-input.is-valid~.valid-tooltip {
    display: block;
}

.was-validated .custom-file-input:valid:focus~.custom-file-label,
.custom-file-input.is-valid:focus~.custom-file-label {
    box-shadow: 0 0 0 2px rgba(94, 186, 0, 0.25);
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: 0.25rem;
    font-size: 87.5%;
    color: #c21a1a;
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(205, 32, 31, 0.8);
    border-radius: .2rem;
}

.was-validated .form-control:invalid,
.form-control.is-invalid,
.was-validated .custom-select:invalid,
.custom-select.is-invalid {
    border-color: #c21a1a;
}

.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus,
.was-validated .custom-select:invalid:focus,
.custom-select.is-invalid:focus {
    border-color: #c21a1a;
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.25);
}

.was-validated .form-control:invalid~.invalid-feedback,
.was-validated .form-control:invalid~.invalid-tooltip {
    display: block;
}

.form-control.is-invalid~.invalid-feedback,
.form-control.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-select:invalid~.invalid-feedback,
.was-validated .custom-select:invalid~.invalid-tooltip {
    display: block;
}

.custom-select.is-invalid~.invalid-feedback,
.custom-select.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .form-check-input:invalid~.form-check-label,
.form-check-input.is-invalid~.form-check-label {
    color: #c21a1a;
}

.was-validated .form-check-input:invalid~.invalid-feedback,
.was-validated .form-check-input:invalid~.invalid-tooltip {
    display: block;
}

.form-check-input.is-invalid~.invalid-feedback,
.form-check-input.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid~.custom-control-label,
.custom-control-input.is-invalid~.custom-control-label {
    color: #c21a1a;
}

.was-validated .custom-control-input:invalid~.custom-control-label::before,
.custom-control-input.is-invalid~.custom-control-label::before {
    background-color: #ec8080;
}

.was-validated .custom-control-input:invalid~.invalid-feedback,
.was-validated .custom-control-input:invalid~.invalid-tooltip {
    display: block;
}

.custom-control-input.is-invalid~.invalid-feedback,
.custom-control-input.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-control-input:invalid:checked~.custom-control-label::before,
.custom-control-input.is-invalid:checked~.custom-control-label::before {
    background-color: #e23e3d;
}

.was-validated .custom-control-input:invalid:focus~.custom-control-label::before,
.custom-control-input.is-invalid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 1px #f4f3f9, 0 0 0 2px rgba(205, 32, 31, 0.25);
}

.was-validated .custom-file-input:invalid~.custom-file-label,
.custom-file-input.is-invalid~.custom-file-label {
    border-color: #c21a1a;
}

.was-validated .custom-file-input:invalid~.custom-file-label::before,
.custom-file-input.is-invalid~.custom-file-label::before {
    border-color: inherit;
}

.was-validated .custom-file-input:invalid~.invalid-feedback,
.was-validated .custom-file-input:invalid~.invalid-tooltip {
    display: block;
}

.custom-file-input.is-invalid~.invalid-feedback,
.custom-file-input.is-invalid~.invalid-tooltip {
    display: block;
}

.was-validated .custom-file-input:invalid:focus~.custom-file-label,
.custom-file-input.is-invalid:focus~.custom-file-label {
    box-shadow: 0 0 0 2px rgba(205, 32, 31, 0.25);
}

.form-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
}

.header .form-inline {
    margin-right: 7px;
}

.form-inline .form-check {
    width: 100%;
}

@media (min-width: 576px) {
    .form-inline label {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0;
    }

    .form-inline .form-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0;
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
    }

    .form-inline .form-control-plaintext {
        display: inline-block;
    }

    .form-inline .input-group,
    .form-inline .custom-select {
        width: auto;
    }

    .form-inline .form-check {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        padding-left: 0;
    }

    .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: 0.25rem;
        margin-left: 0;
    }

    .form-inline .custom-control {
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .form-inline .custom-control-label {
        margin-bottom: 0;
    }
}

.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}

.input-group>.form-control,
.input-group>.custom-select,
.input-group>.custom-file {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}

.input-group>.form-control:focus,
.input-group>.custom-select:focus,
.input-group>.custom-file:focus {
    z-index: 3;
}

.input-group>.form-control+.form-control,
.input-group>.form-control+.custom-select,
.input-group>.form-control+.custom-file {
    margin-left: -1px;
}

.input-group>.custom-select+.form-control,
.input-group>.custom-select+.custom-select,
.input-group>.custom-select+.custom-file {
    margin-left: -1px;
}

.input-group>.custom-file+.form-control,
.input-group>.custom-file+.custom-select,
.input-group>.custom-file+.custom-file {
    margin-left: -1px;
}

.input-group>.form-control:not(:last-child),
.input-group>.custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.form-control:not(:first-child),
.input-group>.custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.custom-file {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
}

.input-group>.custom-file:not(:last-child) .custom-file-label {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.custom-file:not(:first-child) .custom-file-label::after {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
    display: -ms-flexbox;
    display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
    position: relative;
    z-index: 0;
}

.input-group-prepend .btn+.btn,
.input-group-prepend .btn+.input-group-text {
    margin-left: -1px;
}

.input-group-prepend .input-group-text+.input-group-text,
.input-group-prepend .input-group-text+.btn {
    margin-left: -1px;
}

.input-group-append .btn+.btn,
.input-group-append .btn+.input-group-text {
    margin-left: -1px;
}

.input-group-append .input-group-text+.input-group-text,
.input-group-append .input-group-text+.btn {
    margin-left: -1px;
}

.input-group-prepend {
    margin-right: -1px;
}

.input-group-append {
    margin-left: -1px;
}

.input-group-text {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: 0.375rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.9375rem;
    font-weight: 400;
    line-height: 0.9;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #f4f3f9;
    border-radius: 3px;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
    margin-top: 0;
}

.input-group>.input-group-prepend>.btn,
.input-group>.input-group-prepend>.input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append:not(:last-child)>.btn,
.input-group>.input-group-append:not(:last-child)>.input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
.input-group>.input-group-append:last-child>.input-group-text:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group>.input-group-append>.btn,
.input-group>.input-group-append>.input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.input-group-prepend:not(:first-child)>.btn,
.input-group>.input-group-prepend:not(:first-child)>.input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

/*-----Icon input-----*/
.form-control.header-search {
    background: #f4f3f9;
    border: 1px solid rgba(225, 225, 225, 0.1);
    color: #fff;
    padding: 0.375rem 0.75rem;
    width: 100%;
    margin-top: 6px;
}

.form-control.header-search:hover,
.form-control.header-search:focus {
    border: 1px solid rgba(225, 225, 225, 0.1);
    box-shadow: none;
}

.input-icon {
    position: relative;
}

.input-icon-addon {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    min-width: 2.5rem;
    pointer-events: none;
    color: #fff;
}

.input-icon-addon.search-icon {
    right: auto !important;
    left: 0 !important;
    color: #636262 !important;
}

.input-icon-addon:last-child {
    left: auto;
    right: 0;
}

.form-fieldset {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    padding: 1rem;
    border-radius: 3px;
    margin-bottom: 1rem;
}

.form-required {
    color: #c21a1a;
}

.form-required:before {
    content: ' ';
}

.state-valid {
    padding-right: 2rem;
    background: url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%235eba00' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'><polyline points='20 6 9 17 4 12'></polyline></svg>") no-repeat center right 0.5rem/1rem;
}

.state-invalid {
    padding-right: 2rem;
    background: url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23cd201f' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'><line x1='18' y1='6' x2='6' y2='18'></line><line x1='6' y1='6' x2='18' y2='18'></line></svg>") no-repeat center right 0.5rem/1rem;
}

.form-help {
    display: inline-block;
    width: 1rem;
    height: 1rem;
    text-align: center;
    line-height: 1rem;
    color: #9aa0ac;
    background: #f8f9fa;
    border-radius: 50%;
    font-size: 0.75rem;
    transition: .3s background-color, .3s color;
    text-decoration: none;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.form-help:hover,
.form-help[aria-describedby] {
    background: #467fcf;
    color: #fff;
}

/*-----Lists-----*/
.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
}

.list-group-item-action {
    width: 100%;
    color: #121029;
    text-align: inherit;
}

.list-group-item-action:hover,
.list-group-item-action:focus {
    color: #000;
    text-decoration: none;
    background-color: #f4f3f9;
}

.list-group-item-action:active {
    color: #9493a9;
    background-color: #e9ecef;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #e1e0ea;
}

.listorder {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #e1e0ea;
    list-style-type: decimal;
    list-style-position: inside;
}

.listorder1 {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #e1e0ea;
    list-style-type: upper-alpha;
    list-style-position: inside;
}

.listunorder {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #e1e0ea;
    list-style-type: circle;
    list-style-position: inside;
}

.listunorder1 {
    position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #e1e0ea;
    list-style-type: square;
    list-style-position: inside;
}

.list-group-item:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.list-group-item:hover,
.list-group-item:focus {
    z-index: 1;
    text-decoration: none;
}

.list-group-item.disabled,
.list-group-item:disabled {
    color: #7c90b1;
    background-color: #fff;
}

.list-group-item.active {
    z-index: 0;
    background-color: #f4f3f9;
    border-color: 3px solid rgba(238, 238, 238, 0.5);
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
    border-bottom: 0;
}

.list-group-item-primary {
    color: #24426c;
    background-color: #cbdbf2;
}

.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
    color: #24426c;
    background-color: #b7cded;
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #24426c;
    border-color: #24426c;
}

.list-group-item-secondary {
    color: #464a4e;
    background-color: #dddfe2;
}

.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
    color: #464a4e;
    background-color: #cfd2d6;
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #464a4e;
    border-color: #464a4e;
}

.list-group-item-success {
    color: #316100;
    background-color: #d2ecb8;
}

.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
    color: #316100;
    background-color: #c5e7a4;
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #316100;
    border-color: #316100;
}

.list-group-item-info {
    color: #24587e;
    background-color: #cbe7fb;
}

.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
    color: #24587e;
    background-color: #b3dcf9;
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #24587e;
    border-color: #24587e;
}

.list-group-item-warning {
    color: #7d6608;
    background-color: #fbeebc;
}

.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
    color: #7d6608;
    background-color: #fae8a4;
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #7d6608;
    border-color: #7d6608;
}

.list-group-item-danger {
    color: #6b1110;
    background-color: #f1c1c0;
}

.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
    color: #6b1110;
    background-color: #ecacab;
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #6b1110;
    border-color: #6b1110;
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182;
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
    color: #1b1e21;
    background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21;
}

.close {
    float: right;
    font-size: 1.40625rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    opacity: .75;
}

.close:not(:disabled):not(.disabled) {
    cursor: pointer;
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
}

.list-inline-dots .list-inline-item+.list-inline-item:before {
    content: '· ';
    margin-left: -2px;
    margin-right: 3px;
}

.list-separated-item {
    padding: 1rem 0;
}

.list-separated-item:first-child {
    padding-top: 0;
}

.list-group-item.active .icon {
    color: inherit !important;
}

.list-group-item .icon {
    color: #9493a9 !important;
}

.list-group-transparent .list-group-item {
    background: none;
    border: 0;
    padding: .5rem 1rem;
    border-radius: 3px;
}

.list-group-transparent .list-group-item.active {
    background: #e7e6ec;
    font-weight: 600;
    border-radius: 0;
}

/*------ Media object ------*/
.media {
    margin-top: 15px;
    zoom: 1;
    overflow: hidden;
}

.media-body {
    zoom: 1;
    overflow: hidden;
    width: 10000px;
}

.media-object {
    display: block;
}

.media img {
    width: 40px;
    height: 40px;
}

.media-right,
.media>.pull-right {
    padding-left: 10px;
}

.media-body,
.media-left,
.media-right {
    display: table-cell;
    vertical-align: top;
}

.media-left,
.media>.pull-left {
    padding-right: 10px;
}

.media-heading {
    margin-top: 0;
    margin-bottom: 5px;
}

.media-body h4 {
    font-weight: 600;
    font-size: 16px;
}

.media-middle {
    vertical-align: middle;
}

.media-bottom {
    vertical-align: bottom;
}

.media-left,
.media>.pull-left {
    padding-right: 10px;
}

/*------ Modal -------*/
.modal-open {
    overflow: hidden;
}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0;
    padding-right: 0 !important;
    margin: 0 !important;
}

.modal-open,
.modal-backdrop.fade.show {
    padding-right: 0 !important;
}

.modal-open {
    padding: 0 !important;
    display: block;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
}

.modal.fade .modal-dialog {
    transition: -webkit-transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
    transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
    -webkit-transform: translate(0, -25%);
    transform: translate(0, -25%);
}

.modal.show .modal-dialog {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
}

@media screen and (prefers-reduced-motion: reduce) {
    .modal.fade .modal-dialog {
        transition: none;
    }
}

.modal-dialog-centered {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - (0.5rem * 2));
}

.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    outline: 0;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}

.modal-backdrop.fade {
    opacity: 0;
}

.modal-backdrop.show {
    opacity: 0.5;
}

.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem;
    border-bottom: 1px solid #e1e0ea;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto;
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
}

.modal-body p:last-child {
    margin-bottom: 0;
}

.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #e9ecef;
}

.modal-footer> :not(:first-child) {
    margin-left: .25rem;
}

.modal-footer> :not(:last-child) {
    margin-right: .25rem;
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
    }

    .modal-dialog-centered {
        min-height: calc(100% - (1.75rem * 2));
    }

    .modal-sm {
        max-width: 300px;
    }
}

@media (min-width: 992px) {
    .modal-lg {
        max-width: 75%;
    }
}

/*-----Jumbotron-----*/
.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #f4f3f9;
}

@media (min-width: 576px) {
    .jumbotron {
        padding: 2rem;
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
}

/*------ Navigation -------*/
.nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.nav-link {
    display: block;
    padding: 0.2rem 0.5rem;
}

.nav-link:hover,
.nav-link:focus {
    text-decoration: none;
}

.nav-link.disabled {
    color: #9ea7af;
}

.nav-link.disable {
    color: #cba4f7;
}

.app-sidebar .nav-link {
    padding: 0.2rem 0.5rem !important;
}

.nav-tabs {
    border-bottom: 1px solid #e1e0ea;
}

.nav-tabs .nav-item {
    margin-bottom: -1px;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
}

.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
    border: 0;
}

.nav-tabs .nav-link.disabled {
    color: #868e96;
    background-color: transparent;
    border-color: transparent;
}

.nav-tabs .nav-link.active {
    border: 0;
}

.nav-tabs .nav-item.show .nav-link {
    border: 0;
}

.nav-tabs .dropdown-menu {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
}

.nav-fill .nav-item {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center;
}

.nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center;
}

.tab-content>.tab-pane {
    display: none;
}

.tab-content>.active {
    display: block;
}

.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 0.5rem 1rem;
}

.navbar>.container,
.navbar>.container-fluid {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.359375rem;
    padding-bottom: 0.359375rem;
    margin-right: 1rem;
    font-size: 1.125rem;
    line-height: inherit;
    white-space: nowrap;
}

.navbar-brand:hover,
.navbar-brand:focus {
    text-decoration: none;
}

.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-align: center;
    align-items: center;
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.125rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
}

.navbar-toggler:hover,
.navbar-toggler:focus {
    text-decoration: none;
}

.navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%;
}

@media (max-width: 575.98px) {

    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand-sm .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-sm>.container,
    .navbar-expand-sm>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    .navbar-expand-sm .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-sm .navbar-toggler {
        display: none;
    }
}

@media (max-width: 767.98px) {

    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand-md .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-md>.container,
    .navbar-expand-md>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    .navbar-expand-md .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-md .navbar-toggler {
        display: none;
    }
}

@media (max-width: 991.98px) {

    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-lg>.container,
    .navbar-expand-lg>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-lg .navbar-toggler {
        display: none;
    }
}

@media (max-width: 1279.98px) {

    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        padding-right: 0;
        padding-left: 0;
    }
}

@media (min-width: 1280px) {
    .navbar-expand-xl {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand-xl .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute;
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem;
    }

    .navbar-expand-xl>.container,
    .navbar-expand-xl>.container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    .navbar-expand-xl .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }

    .navbar-expand-xl .navbar-toggler {
        display: none;
    }
}

.navbar-expand {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    padding-right: 0;
    padding-left: 0;
}

.navbar-expand .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
}

.navbar-expand>.container,
.navbar-expand>.container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
}

.navbar-expand .navbar-toggler {
    display: none;
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .active>.nav-link {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='$black-5' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
    color: #fff;
}

.navbar-dark .navbar-brand:hover,
.navbar-dark .navbar-brand:focus {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show>.nav-link,
.navbar-dark .navbar-nav .active>.nav-link {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
    color: #fff;
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='$white-5' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
    color: #fff;
}

.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
    color: #fff;
}

.nav-item1 {
    padding: 10px;
    min-width: 2rem;
    transition: .3s color;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
}

.nav1 {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    background: #f4f3f9;
}

.nav-item1:hover:not(.disabled),
.nav-item1.active {
    color: #fff;
}

.nav-item1 .nav-link.disabled {
    opacity: 6;
    cursor: default;
    pointer-events: none;
}

.nav-item1 .nav-link.disable {
    opacity: 3;
}

.nav-tabs {
    border-bottom: 1px solid #e1e0ea;
}

.nav-tabs .nav-item1 {
    margin-bottom: -1px;
    margin-bottom: 0;
    position: relative;
}

.nav-tabs .nav-item1.nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.nav-tabs .nav-item1 .nav-link {
    border: 0;
    color: inherit;
    margin-bottom: -1px;
    color: #9493a9;
    transition: .3s border-color;
    font-weight: 400;
}

.nav-tabs .nav-item1 .nav-link:hover:not(.disabled),
.nav-tabs .nav-item1 .nav-link.active {
    color: #fff;
}

.nav-tabs .nav-item1 .nav-link.disabled {
    opacity: .6;
    cursor: default;
    pointer-events: none;
}

.nav-tabs .nav-item1 i {
    margin-right: .25rem;
    line-height: 1;
    width: 0.875rem;
    vertical-align: baseline;
    display: inline-block;
    margin-right: 10px;
}

.nav-tabs .nav-item1:hover .nav-submenu {
    display: block;
}

.nav-tabs .nav-submenu {
    display: none;
    position: absolute;
    background: #000;
    border: 1px solid #e1e0ea;
    border-top: none;
    z-index: 10;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    min-width: 10rem;
    border-radius: 0 0 3px 3px;
}

.nav-tabs .nav-submenu .nav-item1 {
    display: block;
    padding: .5rem 1rem;
    color: #9aa0ac;
    margin: 0 !important;
    cursor: pointer;
    transition: .3s background;
}

.nav-tabs .nav-submenu .nav-item1.active {
    color: #467fcf;
}

.nav-tabs .nav-submenu .nav-item1:hover {
    color: #6e7687;
    text-decoration: none;
    background: rgba(0, 0, 0, 0.024);
}

.nav-link,
.nav-item {
    min-width: 2rem;
    transition: .3s color;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
}

.header .nav-link .badge {
    position: absolute;
    top: 2px;
    left: 23px;
    display: block !important;
    padding: 3px 5px !important;
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    font-size: 11px;
    line-height: 0.9;
    color: #fff;
}

#headerMenuCollapse .nav-link .badge,
#headerMenuCollapse .nav-item .badge {
    position: relative;
    min-width: 1rem;
    font-size: 10px;
    font-weight: 500;
}

.nav-tabs {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color: #000;
    margin: 0 -.75rem;
}

.nav-tabs .nav-link {
    border: 0;
    color: inherit;
    color: #9493a9;
    transition: .3s border-color;
    font-weight: 500;
    padding: 1rem 1.80rem;
    font-size: 13px;
    text-align: center;
}

.nav-tabs .nav-link:hover:not(.disabled),
.nav-tabs .nav-link.active {
    color: #fff;
}

.nav-tabs .nav-link.disabled {
    opacity: .4;
    cursor: default;
    pointer-events: none;
}

.nav-tabs .nav-item {
    margin-bottom: 0;
    position: relative;
}

.nav-tabs .nav-item:hover .nav-submenu {
    display: block;
}

.nav-link:hover .dropdown-menu,
.nav-item:hover .dropdown-menu,
.nav-link:hover .dropdown-menu.show {
    display: block;
}

.pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 3px;
}

.page-link {
    position: relative;
    display: block;
    padding: 0.5rem 0.75rem;
    margin-left: -1px;
    line-height: 1.25;
    background-color: #fff;
    border: 1px solid #e1e0ea;
}

.page-link:hover {
    z-index: 2;
    text-decoration: none;
    background-color: #f4f3f9;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
}

.page-link:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.page-item:last-child .page-link {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
}

.page-item.disabled .page-link {
    color: #ced4da;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #e1e0ea;
}

.pagination-lg .page-link {
    padding: 0.75rem 1.5rem;
    font-size: 1.125rem;
    line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

/*-----Pricing tables-----*/
.pricing-divider {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}

.pricing {
    color: #fff;
}

.pricing1 {
    color: #707070;
}

.pricing .card-category {
    background: rgba(255, 255, 255, 0.3);
    padding: 10px 0;
    color: #fff;
}

.pricing .list-unstyled li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 7px 0;
}

.pricing1 .list-unstyled li {
    border-bottom: 1px solid #e1e0ea;
    padding: 7px 0;
}

.pricing1 .card-category {
    background: rgba(255, 255, 255, 0.3);
    padding: 20px 0;
    border-radius: 7px 7px 0 0;
    color: #Fff;
}

.pricing-table {
    width: 100%;
    margin: 0 auto;
    transition: all .3s ease;
    -o-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -webkit-transition: all .3s ease;
    border-radius: 0px;
}

.pricing-table:hover {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}

.pricing-table:hover>.panel-footer-landing {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.05) inset;
    -webkit-transition: all .3s ease;
}

.pricing-table:hover>.panel>.panel-body-landing {
    background: #1643A3;
    -webkit-transition: all .3s ease;
}

.pricing-table:hover>.panel>.panel-heading-landing-box {
    background: #fff !important;
    color: #333 !important;
    -webkit-transition: all .3s ease;
}

.pricing-table:hover>.panel>.controle-header {
    background: #1643A3 !important;
    /*    border: solid 2px #5CB85C !important;*/
    -webkit-transition: all .3s ease;
}

.pricing-table:hover>.panel>.panel-footer {
    background: #1643A3 !important;
    /*    border: solid 2px #5CB85C !important;*/
    -webkit-transition: all .3s ease;
    text-align: center;
}

.princing-item:hover {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
}

.princing-item:hover .deco-layer--1 {
    -webkit-transform: translate3d(15px, 0, 0);
    transform: translate3d(15px, 0, 0);
}

.princing-item:hover .deco-layer--2 {
    -webkit-transform: translate3d(-15px, 0, 0);
    /* transform: translate3d(-15px, 0, 0); */
}

.btn-price:hover {
    background: #fff !important;
    color: #1643A3 !important;
    -webkit-transition: all .3s ease;
}

.pricing-table:hover>.panel>.controle-header>.panel-title-landing {
    color: #fff !important;
    -webkit-transition: all .3s ease;
    font-size: 35px;
}

.pricing-table:hover>.panel>.panel-body-landing>.table>tbody>tr>td {
    font-weight: 700;
    -webkit-transition: all .3s ease;
}

.pricing-table>.panel>.controle-header>.panel-title-landing {
    color: #000 !important;
    font-size: 35px;
}

.table>tbody>tr>th {
    font-weight: 700;
    -webkit-transition: all .3s ease;
}

.table>tfoot>tr>td,
.table>tfoot>tr>th {
    font-weight: 700;
    -webkit-transition: all .3s ease;
}

.table>thead>tr>td,
.table>thead>tr>th {
    font-weight: 700;
    -webkit-transition: all .3s ease;
}

.panel-body-landing:hover>.table>tbody>tr>td {
    color: #fff !important;
    -webkit-transition: all .3s ease;
}

.panel-heading-landing {
    background: #f7f7f7 !important;
    padding: 20px !important;
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
    border: solid 2px #1643A3 !important;
    border-bottom: none !important;
    text-align: center;
    margin-top: 20px;
}

.col-sm-4 .pricing-table .table td {
    padding: 0.75rem;
    vertical-align: top;
    text-align: left;
}

.panel-heading-landing-box {
    background: #1643A3 !important;
    color: #fff !important;
    font-size: 16px !important;
    text-align: center;
    border-top: none !important;
}

.panel-title-landing {
    color: #1643A3 !important;
    font-size: 35px;
    font-weight: bold;
}

.panel-body-landing {
    border: solid 2px #1643A3 !important;
    border-top: none !important;
    border-bottom: none !important;
    text-align: center;
    background: #fff;
}

.panel-footer-landing {
    border: solid 2px #1643A3 !important;
    border-bottom-left-radius: 10px !important;
    border-bottom-right-radius: 10px !important;
    border-top: none !important;
    text-align: center;
    background: #f7f7f7;
}

/*------ Pricing Styles ---------*/
.panel.price {
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -webkit-transition: all .3s ease;
}

.panel.price>.panel-heading {
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -webkit-transition: all .3s ease;
}

.panel.price h3 {
    margin-bottom: 0;
    padding: 20px 0;
}

.panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    background: #fff;
}

.panel.price {
    margin-bottom: 1.5rem;
    box-shadow: 0px 22px 68px -9px rgba(0, 0, 0, 0.15);
}

.panel.price>.panel-heading {
    color: #fff;
}

.panel.price .list-group-item:last-child {
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
}

.panel.price .list-group-item:first-child {
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;
}

.panel.price:hover {
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
}

.price .panel-footer {
    border-bottom: 0px;
    background-color: #fff;
    border-left: 0;
    border-right: 0;
}

.price.panel-color>.panel-body {
    background-color: #fff;
}

.panel-body {
    padding: 15px;
}

.panel-body .lead {
    font-size: 20px;
    margin-bottom: 0;
    padding: 10px 0;
}

.panel-body .lead strong {
    font-size: 40px;
    margin-bottom: 0;
}

.panel-footer {
    padding: 10px 15px;
    background-color: #fff;
    border-top: 1px solid #e1e0ea;
    border-left: 0px solid #e1e0ea;
    border-right: 0px solid #e1e0ea;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.panel.price .btn {
    box-shadow: 0 -1px 0px rgba(50, 50, 50, 0.2) inset;
    border: 0px;
}

/*end of pricing*/
.list.d-flex img {
    width: 60px;
}

/*-----progress-----*/
@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }

    to {
        background-position: 0 0;
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }

    to {
        background-position: 0 0;
    }
}

.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: 0.703125rem;
    background-color: #e2e1ea;
    border-radius: 3px;
}

.progress-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    transition: width 0.6s ease;
}

.current-progressbar {
    margin-top: 14.5px;
}

.progress-content {
    margin-bottom: 16.5px;
}

.progress-content:last-child {
    margin-bottom: 0;
}

@media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent) !important;
    background-size: 1rem 1rem;
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite;
}

.media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
}

.media-body {
    -ms-flex: 1;
    flex: 1;
}

.social i {
    font-size: 40px;
}

.social .social-icon i {
    font-size: 14px;
}

.instagram {
    background: linear-gradient(to right bottom, #de497b 0%, #e1164f 100%);
}

.linkedin {
    background-image: linear-gradient(to right bottom, #0d97de 0%, #13547a 100%);
}

.twitter {
    background-image: linear-gradient(to right bottom, #00f2fe 0%, #1e63c3 100%);
}

.facebook {
    background-image: linear-gradient(to right bottom, #3d6cbf 0%, #1e3c72 100%);
}

/*------ progress sizes ------*/
.progress {
    position: relative;
}

.progress-xs {
    height: .25rem;
}

.progress-xs .progress-bar {
    height: .25rem;
}

.progress-sm {
    height: .5rem;
}

.progress-sm .progress-bar {
    height: .5rem;
}

.progress-lg {
    height: 1.25rem;
}

.progress-lg .progress-bar {
    height: 1.25rem;
}

.progress-bar-indeterminate:after {
    content: '';
    position: absolute;
    background-color: inherit;
    left: 0;
    will-change: left, right;
    top: 0;
    bottom: 0;
}

.progress-bar-indeterminate:before {
    content: '';
    position: absolute;
    background-color: inherit;
    left: 0;
    will-change: left, right;
    top: 0;
    bottom: 0;
    -webkit-animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
    animation: indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
}

.progress-bar-indeterminate:after {
    -webkit-animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    animation: indeterminate-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
    -webkit-animation-delay: 1.15s;
    animation-delay: 1.15s;
}

@-webkit-keyframes loader {
    from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes loader {
    from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

/*------ Tables -----*/
.table,
.text-wrap table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
}

.table th {
    padding: 0.75rem;
    vertical-align: top;
}

.text-wrap table th,
.text-wrap table td {
    padding: 0.75rem;
    vertical-align: top;
}

.table td {
    padding: 0.75rem;
    vertical-align: top;
}

.border {
    padding: 0.75rem;
    vertical-align: top;
    border: 1px solid #e1e0ea;
}

.table thead th,
.text-wrap table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid #e1e0ea;
}

.table tbody+tbody,
.text-wrap table tbody+tbody {
    border-top: 2px solid #e1e0ea;
}

.table .table,
.text-wrap table .table,
.table .text-wrap table {
    background-color: #f4f3f9;
}

.text-wrap .table table,
.text-wrap table table {
    background-color: #f4f3f9;
}

.table-sm th,
.table-sm td {
    padding: 0.3rem;
}

.table-bordered,
.text-wrap table,
.table-bordered th,
.text-wrap table th,
.table-bordered td,
.text-wrap table td {
    border: 1px solid #e1e0ea;
}

.table-bordered thead th,
.text-wrap table thead th,
.table-bordered thead td,
.text-wrap table thead td {
    border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody+tbody {
    border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.02);
}

.table-hover tbody tr:hover,
.table-hover tbody th {
    background-color: #f4f3f9;
}

.table-primary {
    background-color: #d6f9dd;
}

.table-primary>th,
.table-primary>td {
    background-color: #d6f9dd;
}

.table-hover .table-primary:hover {
    background-color: #d2f9da;
}

.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #d2f9da;
}

.table-secondary {
    background-color: #ffecca;
}

.table-secondary>th,
.table-secondary>td {
    background-color: #ffecca;
}

.table-hover .table-secondary:hover {
    background-color: #ffecca;
}

.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #ffecca;
}

.table-success {
    background-color: #d2ecb8;
}

.table-success>th,
.table-success>td {
    background-color: #d2ecb8;
}

.table-hover .table-success:hover {
    background-color: #c5e7a4;
}

.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #c5e7a4;
}

.table-info {
    background-color: #cbe7fb;
}

.table-info>th,
.table-info>td {
    background-color: #cbe7fb;
}

.table-hover .table-info:hover {
    background-color: #b3dcf9;
}

.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #b3dcf9;
}

.table-warning {
    background-color: #f1d5a7;
}

.table-warning>th,
.table-warning>td {
    background-color: #f1d5a7;
}

.table-hover .table-warning:hover {
    background-color: #fae8a4;
}

.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #fae8a4;
}

.table-danger {
    background-color: #f1c1c0;
}

.table-danger>th,
.table-danger>td {
    background-color: #f1c1c0;
}

.table-hover .table-danger:hover {
    background-color: #ecacab;
}

.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #ecacab;
}

.table-light {
    background-color: #fdfdfe;
}

.table-light>th,
.table-light>td {
    background-color: #fdfdfe;
}

.table-hover .table-light:hover {
    background-color: #ececf6;
}

.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ececf6;
}

.table-dark {
    background-color: #c6c8ca;
}

.table-dark>th,
.table-dark>td {
    background-color: #c6c8ca;
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe;
}

.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #b9bbbe;
}

.table-active {
    background-color: rgba(0, 0, 0, 0.04);
}

.table-active>th,
.table-active>td {
    background-color: rgba(0, 0, 0, 0.04);
}

.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.04);
}

.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, 0.04);
}

.table .thead-dark th,
.text-wrap table .thead-dark th {
    color: #f4f3f9;
    background-color: #212529;
    border-color: #32383e;
}

.table .thead-light th,
.text-wrap table .thead-light th {
    color: #495057;
    background-color: #f4f3f9;
    border-color: #e1e0ea;
}

.table-dark {
    color: #f4f3f9;
    background-color: #212529;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #32383e;
}

.table-dark.table-bordered {
    border: 0;
}

.text-wrap table.table-dark {
    border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075);
}

.table.dataTable thead th {
    border-bottom: 0 !important;
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-sm>.table-bordered {
        border: 0;
    }

    .text-wrap .table-responsive-sm>table {
        border: 0;
    }

    .countdown-timer-wrapper {
        border-radius: 5px;
        margin-bottom: 30px;
        max-width: 320px !important;
    }

    .countdown-timer-wrapper .timer .timer-wrapper .time {
        font-size: 25px !important;
        font-weight: bold;
        color: #fff;
        width: 60px !important;
        height: 60px !important;
        border-radius: 50px;
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1));
        line-height: 2.3;
        text-align: center;
        margin: 0 auto;
        margin-bottom: 5px;
        position: relative;
        overflow: hidden;
    }

    .construction .display-2 {
        font-size: 2.3rem !important;
    }

    .countdown-timer-wrapper .timer {
        padding: 0px !important;
        text-align: center;
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-md>.table-bordered {
        border: 0;
    }

    .text-wrap .table-responsive-md>table {
        border: 0;
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-lg>.table-bordered {
        border: 0;
    }

    .text-wrap .table-responsive-lg>table {
        border: 0;
    }
}

@media (max-width: 1279.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-xl>.table-bordered {
        border: 0;
    }

    .text-wrap .table-responsive-xl>table {
        border: 0;
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive>.table-bordered {
    border: 0;
}

.text-wrap .table-responsive>table {
    border: 0;
}

.table thead th,
.text-wrap table thead th {
    border-bottom-width: 1px;
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.table th,
.text-wrap table th {
    color: #2e3138;
    text-transform: uppercase;
    font-size: 0.875rem;
    font-weight: 400;
}

.table-md th,
.table-md td {
    padding: .5rem;
}

.table-vcenter td,
.table-vcenter th {
    vertical-align: middle;
    border-top: 1px solid #e1e0ea;
}

.table-center td,
.table-center th {
    text-align: center;
}

.table-striped tbody tr:nth-of-type(odd) {
    background: transparent;
}

.table-striped tbody tr:nth-of-type(even) {
    background-color: #fff;
}

.table-calendar {
    margin: 0 0 .75rem;
}

.table-calendar td,
.table-calendar th {
    border: 0;
    text-align: center;
    padding: 0 !important;
    width: 14.28571429%;
    line-height: 2.5rem;
}

.table-calendar td {
    border-top: 0;
}

.table-calendar-link {
    line-height: 2rem;
    min-width: calc(2rem + 2px);
    display: inline-block;
    border-radius: 3px;
    background: #f8f9fa;
    color: #495057;
    font-weight: 600;
    transition: .3s background, .3s color;
    position: relative;
}

.table-calendar-link:before {
    content: '';
    width: 4px;
    height: 4px;
    position: absolute;
    left: .25rem;
    top: .25rem;
    border-radius: 50px;
    background: #467fcf;
}

.table-calendar-link:hover {
    color: #fff;
    text-decoration: none;
    background: #467fcf;
    transition: .3s background;
}

.table-calendar-link:hover:before {
    background: #fff;
}

.table-header {
    cursor: pointer;
    transition: .3s color;
}

.table-header:hover {
    color: #495057 !important;
}

.table-header:after {
    content: '\f0dc';
    font-family: FontAwesome;
    display: inline-block;
    margin-left: .5rem;
    font-size: .75rem;
}

.table-header-asc {
    color: #495057 !important;
}

.table-header-asc:after {
    content: '\f0de';
}

.table-header-desc {
    color: #495057 !important;
}

.table-header-desc:after {
    content: '\f0dd';
}

/*---- Tags-----*/
.tag {
    font-size: 0.75rem;
    color: #121029;
    background-color: #f4f3f9;
    border-radius: 3px;
    padding: 0 .5rem;
    line-height: 2em;
    display: -ms-inline-flexbox;
    display: inline-flex;
    cursor: default;
    font-weight: 400;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

a.tag {
    text-decoration: none;
    cursor: pointer;
    transition: .3s color, .3s background;
}

a.tag:hover {
    background-color: rgba(110, 118, 135, 0.2);
    color: inherit;
}

.tag-addon {
    display: inline-block;
    padding: 0 .5rem;
    color: inherit;
    text-decoration: none;
    background: rgba(0, 0, 0, 0.06);
    margin: 0 -.5rem 0 .5rem;
    text-align: center;
    min-width: 1.5rem;
}

.tag-addon:last-child {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.tag-addon i {
    vertical-align: middle;
    margin: 0 -.25rem;
}

a.tag-addon {
    text-decoration: none;
    cursor: pointer;
    transition: .3s color, .3s background;
}

a.tag-addon:hover {
    background: rgba(0, 0, 0, 0.16);
    color: inherit;
}

.tag-avatar {
    width: 1.5rem;
    height: 1.5rem;
    border-radius: 3px 0 0 3px;
    margin: 0 .5rem 0 -.5rem;
}

.tag-blue {
    background-color: #467fcf;
    color: #fff;
}

.tag-indigo {
    background-color: #6574cd;
    color: #fff;
}

.tag-purple {
    background-color: #867efc;
    color: #fff;
}

.tag-pink {
    background-color: #ec82ef;
    color: #fff;
}

.tag-red {
    background-color: #c21a1a;
    color: #fff;
}

.tag-orange {
    background-color: #fc7303;
    color: #fff;
}

.tag-yellow {
    background-color: #ecb403;
    color: #fff;
}

.tag-green {
    background-color: #4ecc48;
    color: #fff;
}

.tag-teal {
    background-color: #2bcbba;
    color: #fff;
}

.tag-cyan {
    background-color: #17a2b8;
    color: #fff;
}

.tag-white {
    background-color: #fff;
    color: #fff;
}

.tag-gray {
    background-color: #868e96;
    color: #fff;
}

.tag-gray-dark {
    background-color: #343a40;
    color: #fff;
}

.tag-azure {
    background-color: #45aaf2;
    color: #fff;
}

.tag-lime {
    background-color: #7bd235;
    color: #fff;
}

.tag-primary {
    background-color: #467fcf;
    color: #fff;
}

.tag-secondary {
    background-color: #868e96;
    color: #fff;
}

.tag-success {
    background-color: #4ecc48;
    color: #fff;
}

.tag-info {
    background-color: #45aaf2;
    color: #fff;
}

.tag-warning {
    background-color: #ecb403;
    color: #fff;
}

.tag-danger {
    background-color: #c21a1a;
    color: #fff;
}

.tag-light {
    background-color: #f8f9fa;
    color: #fff;
}

.tag-dark {
    background-color: #343a40;
    color: #fff;
}

.tag-rounded {
    border-radius: 50px;
}

.tag-rounded .tag-avatar {
    border-radius: 50px;
}

.tags {
    margin-bottom: -.5rem;
    font-size: 0;
}

.tags>.tag {
    margin-bottom: .5rem;
}

.tags>.tag:not(:last-child) {
    margin-right: .5rem;
}

.highlight .hll {
    background-color: #ffc;
}

.highlight .c {
    color: #999;
}

.highlight .k {
    color: #069;
}

.highlight .o {
    color: #555;
}

.highlight .cm {
    color: #999;
}

.highlight .cp {
    color: #099;
}

.highlight .c1,
.highlight .cs {
    color: #999;
}

.highlight .gd {
    background-color: #fcc;
    border: 1px solid #c00;
}

.highlight .ge {
    font-style: italic;
}

.highlight .gr {
    color: #f00;
}

.highlight .gh {
    color: #030;
}

.highlight .gi {
    background-color: #cfc;
    border: 1px solid #0c0;
}

.highlight .go {
    color: #aaa;
}

.highlight .gp {
    color: #009;
}

.highlight .gu {
    color: #030;
}

.highlight .gt {
    color: #9c6;
}

.highlight .kc,
.highlight .kd,
.highlight .kn,
.highlight .kp,
.highlight .kr {
    color: #069;
}

.highlight .kt {
    color: #078;
}

.highlight .m {
    color: #f60;
}

.highlight .s {
    color: #cc0099;
}

.highlight .na {
    color: #00cc7a;
}

.highlight .nb {
    color: #366;
}

.highlight .nc {
    color: #0a8;
}

.highlight .no {
    color: #360;
}

.highlight .nd {
    color: #99f;
}

.highlight .ni {
    color: #999;
}

.highlight .ne {
    color: #c00;
}

.highlight .nf {
    color: #c0f;
}

.highlight .nl {
    color: #99f;
}

.highlight .nn {
    color: #0cf;
}

.highlight .nt {
    color: #800000;
}

.highlight .nv {
    color: #033;
}

.highlight .ow {
    color: #000;
}

.highlight .w {
    color: #bbb;
}

.highlight .mf,
.highlight .mh,
.highlight .mi,
.highlight .mo {
    color: #f60;
}

.highlight .sb,
.highlight .sc {
    color: #c30;
}

.highlight .sd {
    font-style: italic;
    color: #c30;
}

.highlight .s2,
.highlight .se,
.highlight .sh {
    color: #c30;
}

.highlight .si {
    color: #a00;
}

.highlight .sx {
    color: #c30;
}

.highlight .sr {
    color: #3aa;
}

.highlight .s1 {
    color: #c30;
}

.highlight .ss {
    color: #fc3;
}

.highlight .bp {
    color: #366;
}

.highlight .vc,
.highlight .vg,
.highlight .vi {
    color: #033;
}

.highlight .il {
    color: #f60;
}

.highlight .css .o {
    color: #999;
}

.highlight .css .o+.nt {
    color: #999;
}

.highlight .css .nt+.nt {
    color: #999;
}

.highlight .language-bash::before,
.highlight .language-sh::before {
    color: #009;
    content: "$ ";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.highlight .language-powershell::before {
    color: #009;
    content: "PM> ";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/*-------Tooptip &popover------*/
.bd-example {
    position: relative;
    padding: 1rem;
    margin: 1rem -1rem;
    border-width: .2rem 0 0;
}

.bd-example-tooltip-static .tooltip {
    position: relative;
    display: inline-block;
    margin: 10px 20px;
    opacity: 1;
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-style: normal;
    font-weight: 400;
    letter-spacing: normal;
    line-break: auto;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    white-space: normal;
    word-break: normal;
    word-spacing: normal;
    font-size: .875rem;
    word-wrap: break-word;
    opacity: 0;
}

.tooltip.bs-tether-element-attached-bottom,
.tooltip.tooltip-top {
    padding: 5px 0;
    margin-top: -3px;
}

.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: .25rem;
}

.tooltip.bs-tether-element-attached-left,
.tooltip.tooltip-right {
    padding: 0 5px;
    margin-left: 3px;
}

.tooltip.bs-tether-element-attached-bottom .tooltip-inner::before,
.tooltip.tooltip-top .tooltip-inner::before {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    content: "";
    border-width: 5px 5px 0;
    border-top-color: #000;
}

.tooltip.bs-tether-element-attached-left .tooltip-inner::before,
.tooltip.tooltip-right .tooltip-inner::before {
    top: 50%;
    left: 0;
    margin-top: -5px;
    content: "";
    border-width: 5px 5px 5px 0;
    border-right-color: #000;
}

.tooltip.bs-tether-element-attached-top,
.tooltip.tooltip-bottom {
    padding: 5px 0;
    margin-top: 3px;
}

.tooltip.bs-tether-element-attached-top .tooltip-inner::before,
.tooltip.tooltip-bottom .tooltip-inner::before {
    top: 0;
    left: 50%;
    margin-left: -5px;
    content: "";
    border-width: 0 5px 5px;
    border-bottom-color: #000;
}

.tooltip.bs-tether-element-attached-right,
.tooltip.tooltip-left {
    padding: 0 5px;
    margin-left: -3px;
}

.tooltip.bs-tether-element-attached-right .tooltip-inner::before,
.tooltip.tooltip-left .tooltip-inner::before {
    top: 50%;
    right: 0;
    margin-top: -5px;
    content: "";
    border-width: 5px 0 5px 5px;
    border-left-color: #000;
}

.tooltip-inner::before {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
}

/*alerts*/
.pop-primary {
    color: #4d9dff;
}

.popsecondary {
    color: #628dea;
}

.popinfo {
    color: #88c8f7;
}

.popsuccess {
    color: #bfff80;
}

.popdanger {
    color: #ea6262;
}

.popwarning {
    color: #f7db6e;
}

.tooltip {
    position: absolute;
    z-index: 998;
    display: block;
    margin: 0;
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    opacity: 0;
}

.tooltip.show {
    opacity: 0.9;
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem;
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^="top"] {
    padding: 0.4rem 0;
}

.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0;
}

.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    top: 0;
    border-width: 0.4rem 0.4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^="right"] {
    padding: 0 0.4rem;
}

.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    right: 0;
    border-width: 0.4rem 0.4rem 0.4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^="bottom"] {
    padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0;
}

.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    bottom: 0;
    border-width: 0 0.4rem 0.4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^="left"] {
    padding: 0 0.4rem;
}

.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem;
}

.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    left: 0;
    border-width: 0.4rem 0 0.4rem 0.4rem;
    border-left-color: #000;
}

.tooltip-inner {
    max-width: 200px;
    padding: 0.25rem 0.5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 3px;
}

.popover {
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: 0.875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #dee3eb;
    border-radius: 3px;
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 0.5rem;
    height: 0.5rem;
    margin: 0 3px;
}

.popover .arrow::before,
.popover .arrow::after {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid;
}

.bs-popover-top,
.bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.5rem;
}

.bs-popover-top .arrow,
.bs-popover-auto[x-placement^="top"] .arrow {
    bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before,
.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
    border-width: 0.5rem 0.25rem 0;
}

.bs-popover-top .arrow::before,
.bs-popover-auto[x-placement^="top"] .arrow::before {
    bottom: 0;
    border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top .arrow::after,
.bs-popover-auto[x-placement^="top"] .arrow::after {
    bottom: 1px;
    border-top-color: #fff;
}

.bs-popover-right,
.bs-popover-auto[x-placement^="right"] {
    margin-left: 0.5rem;
}

.bs-popover-right .arrow,
.bs-popover-auto[x-placement^="right"] .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 0.5rem;
    margin: 3px 0;
}

.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before,
.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
    border-width: 0.25rem 0.5rem 0.25rem 0;
}

.bs-popover-right .arrow::before,
.bs-popover-auto[x-placement^="right"] .arrow::before {
    left: 0;
    border-right-color: #dee3eb;
}

.bs-popover-right .arrow::after,
.bs-popover-auto[x-placement^="right"] .arrow::after {
    left: 1px;
    border-right-color: #fff;
}

.bs-popover-bottom,
.bs-popover-auto[x-placement^="bottom"] {
    margin-top: 0.5rem;
}

.bs-popover-bottom .arrow,
.bs-popover-auto[x-placement^="bottom"] .arrow {
    top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before,
.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
    border-width: 0 0.25rem 0.5rem 0.25rem;
}

.bs-popover-bottom .arrow::before,
.bs-popover-auto[x-placement^="bottom"] .arrow::before {
    top: 0;
    border-bottom-color: #dee3eb;
}

.bs-popover-bottom .arrow::after,
.bs-popover-auto[x-placement^="bottom"] .arrow::after {
    top: 1px;
    border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before,
.bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 0.5rem;
    margin-left: -0.25rem;
    content: "";
    border-bottom: 1px solid #fff;
}

.bs-popover-left,
.bs-popover-auto[x-placement^="left"] {
    margin-right: 0.5rem;
}

.bs-popover-left .arrow,
.bs-popover-auto[x-placement^="left"] .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 0.5rem;
    margin: 3px 0;
}

.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before,
.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
    border-width: 0.25rem 0 0.25rem 0.5rem;
}

.bs-popover-left .arrow::before,
.bs-popover-auto[x-placement^="left"] .arrow::before {
    right: 0;
    border-left-color: #dee3eb;
}

.bs-popover-left .arrow::after,
.bs-popover-auto[x-placement^="left"] .arrow::after {
    right: 1px;
    border-left-color: #fff;
}

.popover-header {
    padding: 0.5rem 0.75rem;
    margin-bottom: 0;
    font-size: 0.9375rem;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(3px - 1px);
    border-top-right-radius: calc(3px - 1px);
}

.popover-header:empty {
    display: none;
}

.popover-body {
    padding: 0.75rem 1rem;
    color: #6e7687;
}

.popover {
    -webkit-filter: drop-shadow(0 1px 3px rgba(0, 0, 0, 0.1));
    filter: drop-shadow(0 1px 3px rgba(0, 0, 0, 0.1));
}

.popover.bs-popover-top,
.popover.bs-popover-auto[x-placement^="top"] {
    margin-bottom: 0.625rem;
}

.popover .arrow {
    margin-left: calc(.25rem + -5px);
}

.popover-static-demo .popover {
    position: relative;
}

.popover-static-demo .popover .arrow {
    margin-left: calc(.25rem + 122px);
}

/* ###### layouts ####### */
/*-----Back to Top-----*/
#back-to-top {
    color: #fff;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99;
    display: none;
    text-align: center;
    z-index: 1;
    height: 50px;
    width: 50px;
    background-repeat: no-repeat;
    background-position: center;
    transition: background-color 0.1s linear;
    -moz-transition: background-color 0.1s linear;
    -webkit-transition: background-color 0.1s linear;
    -o-transition: background-color 0.1s linear;
}

#back-to-top i {
    padding-top: 15px;
    font-size: 16px;
}

#back-to-top:hover {
    background: #fff !important;
}

#footer,
.fc-toolbar .ui-button,
.fileinput .thumbnail {
    text-align: center;
}

.four-zero {
    text-align: center;
}

.four-zero footer>a {
    text-align: center;
}

.ie-warning,
.login-content,
.login-navigation {
    text-align: center;
}

.pt-inner {
    text-align: center;
}

.pt-inner .pti-footer>a {
    text-align: center;
}

.top-footer {
    width: 100%;
    line-height: 1.25rem;
    opacity: 1;
    transform: translate(0px, 0px);
    font-size: 14px;
    flex: 0 0 auto;
}

.top-footer h6 {
    font-size: 14px;
    margin-bottom: 1rem;
    font-weight: 600;
}

.top-footer p {
    color: #9493a9;
}

.top-footer a {
    color: #9493a9;
    line-height: 2;
    color: #9493a9;
    line-height: 2;
}

.top-footer a address {
    color: #9493a9;
    margin-bottom: 0;
    line-height: 2;
}

.top-footer img {
    width: 80px;
    border: 1px solid #e6eaea;
    padding: 2px;
    height: 80px;
}

.top-footer img:hover {
    color: #8e9090;
    opacity: .6;
}

.top-footer .list-unstyled li {
    border-bottom: 0;
}

.footer-payments {
    padding-left: 0;
    list-style: none;
    margin: 0;
    line-height: 1.25rem;
}

.footer-payments li {
    display: inline-block;
}

.footer-payments li:not(:last-child) {
    margin-right: 1.5rem;
}

.footer-payments a {
    color: #a7a8c7;
    text-decoration: none;
    font-size: 2rem;
}

.footer-payments a:hover {
    opacity: .9;
}

.main-footer {
    padding: 20px 30px 20px 280px;
    font-size: 14px;
    font-weight: 400;
    background-color: #fff;
    border-top: 1px solid #e6eaea;
}

.footer-social-list {
    padding-left: 0;
    list-style: none;
    margin: 0;
    line-height: 1.25rem;
}

.footer-social-list li {
    display: inline-block;
}

.footer-social-list li:not(:last-child) {
    margin-right: 1.5rem;
}

.footer-social-list a {
    color: #9493a9;
    text-decoration: none;
    font-size: 1rem;
}

/*----- Global Loader -----*/
#global-loader {
    position: fixed;
    z-index: 50000;
    background: #fff;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
}

.loader-img {
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    top: 45%;
    margin: 0 auto;
}

/*------ Headers -------*/
.page-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    margin: 1.5rem 0 1.5rem 0;
    -ms-flex-wrap: wrap;
    justify-content: space-between;
    padding: 0;
    /* border-radius: 7px; */
    position: relative;
    min-height: 50px;
}

.page-title {
    margin: 0;
    font-size: 25px;
    font-weight: 400;
    line-height: 1.5rem;
    position: relative;
    color: #fff;
}

.page-title-icon {
    color: #9aa0ac;
    font-size: 1.25rem;
}

.page-subtitle {
    font-size: 0.8125rem;
    color: #c0a0f1;
    margin-left: 2rem;
    position: relative;
}

.page-subtitle a {
    color: inherit;
}

.page-options {
    margin-left: auto;
}

.page-breadcrumb {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
}

.page-description {
    margin: .25rem 0 0;
    color: #6e7687;
}

.page-description a {
    color: inherit;
}

.page-single {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    display: -ms-flexbox;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.content-heading {
    font-weight: 400;
    margin: 2rem 0 1.5rem;
    font-size: 1.25rem;
    line-height: 1.25;
}

.content-heading:first-child {
    margin-top: 0;
}

.aside {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    width: 22rem;
    background: #fff;
    border-left: 1px solid #e1e0ea;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    z-index: 100;
    visibility: hidden;
    box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.05);
}

@media (min-width: 1600px) {
    body.aside-opened .aside {
        visibility: visible;
    }
}

.aside-body {
    padding: 1.5rem;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    overflow: auto;
}

.aside-footer {
    padding: 1rem 1.5rem;
    border-top: 1px solid #e1e0ea;
}

.aside-header {
    padding: 1rem 1.5rem;
    border-bottom: 1px solid #e1e0ea;
}

.header {
    padding-top: .75rem;
    padding-bottom: .75rem;
}

body.fixed-header .header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030;
}

@media print {
    .header {
        display: none;
    }
}

.header .dropdown-menu {
    margin-top: 0;
}

.header .mega-menu {
    width: 350px;
}

.header .nav-tabs {
    margin: 0;
}

.nav-unread {
    position: absolute;
    top: 0.4rem;
    background: #ecd938;
    width: .5rem;
    height: .5rem;
    border-radius: 50%;
}

.nav-unread.badge {
    position: absolute;
    top: 0;
    text-align: center;
    right: 0;
    width: 1.2rem;
    height: 1.2rem;
    border-radius: 50%;
}

.pulse {
    display: block;
    position: absolute;
    top: .3rem;
    right: .6rem;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #ffb209;
    cursor: pointer;
    box-shadow: 0 0 0 rgba(255, 178, 9, 0.9);
    animation: pulse 2s infinite;
}

.pulse:hover {
    animation: none;
}

@-webkit-keyframes pulse {
    0% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 178, 9, 0.9);
    }

    70% {
        -webkit-box-shadow: 0 0 0 10px rgba(255, 178, 9, 0);
    }

    100% {
        -webkit-box-shadow: 0 0 0 0 rgba(255, 178, 9, 0);
    }
}

@keyframes pulse {
    0% {
        -moz-box-shadow: 0 0 0 0 rgba(255, 178, 9, 0.9);
        box-shadow: 0 0 0 0 rgba(255, 178, 9, 0.7);
    }

    70% {
        -moz-box-shadow: 0 0 0 10px rgba(255, 178, 9, 0);
        box-shadow: 0 0 0 10px rgba(255, 178, 9, 0);
    }

    100% {
        -moz-box-shadow: 0 0 0 0 rgba(255, 178, 9, 0);
        box-shadow: 0 0 0 0 rgba(255, 178, 9, 0);
    }
}

.nav-link.icon {
    margin: 5px;
    padding: 13px 12px 12px 9px;
    width: 2.5rem;
    text-align: center;
    height: 2.5rem;
    position: relative;
}

.nav-link.icon i {
    color: #fff !important;
    font-size: 1.3rem;
    width: 2.2rem;
    height: 2.2rem;
    margin: 0 auto;
    text-align: center;
}

.header-right-icons a {
    display: block;
    padding-top: 9px;
}

.header-right-icons .dropdown-menu a {
    padding-top: 0.5rem;
}

.header-brand {
    color: inherit;
    font-size: 1.25rem;
    white-space: nowrap;
    font-weight: 600;
    padding: 0;
    transition: .3s opacity;
    line-height: 2.6rem;
    margin-top: 2px;
}

.app-header .header-brand {
    color: inherit;
    margin-right: 0;
    font-size: 1.25rem;
    white-space: nowrap;
    font-weight: 600;
    padding: 0;
    transition: .3s opacity;
    line-height: 2.9rem;
    margin-right: 2rem;
    margin-top: 0;
    text-align: center;
}

.app-header .header-brand .header-brand-img {
    margin-right: 0;
}

.app-header1 .header-brand {
    color: inherit;
    margin-right: 0;
    font-size: 1.25rem;
    white-space: nowrap;
    font-weight: 600;
    padding: 0;
    transition: .3s opacity;
    line-height: 2.9rem;
    min-width: 215px;
    text-align: center;
}

.app-header1 .header-brand .header-brand-img {
    margin-right: 0;
}

.header-brand:hover {
    color: inherit;
    text-decoration: none;
}

.header-brand-img {
    height: 2.5rem;
    line-height: 2rem;
    vertical-align: middle;
    margin-right: .5rem;
    width: auto;
}

.header-avatar {
    width: 2rem;
    height: 2rem;
    display: inline-block;
    vertical-align: bottom;
    border-radius: 50%;
}

.header-btn {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    text-align: center;
    font-size: 1rem;
}

.center-block {
    margin-right: auto;
    margin-left: auto;
    float: inherit !important;
}

.footer {
    background: #fff;
    border-top: 1px solid transparant;
    font-size: 0.875rem;
    padding: 1.25rem 0;
    color: #121029;
}

.footer .container {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}

.footer .social {
    margin: 0 auto;
}

.footer .social ul li {
    float: left;
    padding: 7px;
}

.footer .social ul li a {
    color: #9493a9;
}

@media print {
    .footer {
        display: none;
    }
}

/*----- Typography ------*/
.heading-inverse {
    background-color: #333;
    color: #fff;
    padding: 5px;
}

.heading-success {
    background-color: #21c44c;
    color: #fff;
    padding: 5px;
}

.heading-info {
    background-color: #45aaf2;
    color: #fff;
    padding: 5px;
}

.heading-warning {
    background-color: #ecb403;
    color: #fff;
    padding: 5px;
}

.heading-danger {
    background-color: #c21a1a;
    color: #fff;
    padding: 5px;
}

/* All the default sidebar styles */
/* toggle button settings */
/* Note: this disables the navbar-toggle class's hide function. set visibility with the boostrap visible/hidden classes */
/* Note: this also disables the navbar-header class positioning settings in small screens. */
.navbar.navbar-static .navbar-header {
    float: left;
}

.navbar .navbar-toggle.toggle-left {
    float: left;
    margin-left: 15px;
}

.navbar .navbar-toggle.toggle-right {
    float: right;
    margin-right: 15px;
}

.navbar .navbar-toggle.toggle-sidebar {
    display: block;
}

[data-toggle="sidebar"] {
    display: block;
}

/* sidebar settings */
.sidebar {
    position: fixed;
    display: block;
    top: 0;
    width: 300px;
    bottom: 0;
    z-index: 1000;
    min-height: 100%;
    max-height: none;
    overflow: auto;
    background-color: #fff;
    /* border-right: 1px solid #eee; */
    border: 1px solid #eaf2f6;
    box-shadow: 0px 8px 1px rgba(180, 202, 222, 0.7);
}

.sidebar-left {
    left: 0;
}

.sidebar-right {
    right: 0;
}

/* css to override hiding the sidebar according to different screen sizes */
.row .sidebar.sidebar-left.sidebar-xs-show {
    left: 0;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    transform: translate(0, 0);
}

.row .sidebar.sidebar-right.sidebar-xs-show {
    right: 0;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    transform: translate(0, 0);
}

/*right sidebar is untested */
@media (min-width: 768px) {
    .row .sidebar.sidebar-left.sidebar-sm-show {
        left: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .row .sidebar.sidebar-right.sidebar-sm-show {
        right: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    /*right sidebar is untested */
}

@media (min-width: 992px) {
    .row .sidebar.sidebar-left.sidebar-md-show {
        left: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .row .sidebar.sidebar-right.sidebar-md-show {
        right: 0;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        transform: translate(0, 0);
    }
}

@media (min-width: 1170px) {
    .row .sidebar.sidebar-left.sidebar-lg-show {
        left: 0;
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .row .sidebar.sidebar-right.sidebar-lg-show {
        right: 0;
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
    }
}

/* animation class - optional: without it the sidebar would just pop in and out*/
.sidebar-animate {
    -webkit-transition: -webkit-transform 300ms ease;
    -moz-transition: -moz-transform 300ms ease;
    -o-transition: transform 300ms ease;
    transition: transform 300ms ease;
}

/* Left panel positioning classes */
.sidebar.sidebar-left {
    -webkit-transform: translate(-100%, 0);
    -moz-transform: translate(-100%, 0);
    -ms-transform: translate(-100%, 0);
    -o-transform: translate(-100%, 0);
    transform: translate(-100%, 0);
}

.sidebar.sidebar-left.sidebar-open {
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}

.sidebar.sidebar-right {
    -webkit-transform: translate(100%, 0);
    -moz-transform: translate(100%, 0);
    -ms-transform: translate(100%, 0);
    -o-transform: translate(100%, 0);
    transform: translate(100%, 0);
}

.sidebar.sidebar-right.sidebar-open {
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}

/* ###### plugins ####### */
/*----- Date Picker ----*/
.ui-datepicker {
    background-color: #f4f3f9;
    border: 1px solid #ced4da;
    font-family: inherit;
    font-size: inherit;
    padding: 10px;
    margin: 1px 0 0;
    display: none;
    width: auto !important;
    z-index: 5 !important;
}

.ui-datepicker .ui-datepicker-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    font-weight: 500;
    font-size: 12px;
    text-transform: uppercase;
    color: #473b52;
    padding: 0 0 5px;
    letter-spacing: 1px;
    border: 0;
    background-color: transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev {
    text-indent: -99999px;
    color: #6c757d;
    top: 1px;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next::before,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev::before {
    font-size: 16px;
    font-family: 'FontAwesome';
    position: absolute;
    top: -4px;
    text-indent: 0;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next:hover::before,
.ui-datepicker .ui-datepicker-header .ui-datepicker-next:focus::before {
    color: #343a40;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:hover::before,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:focus::before {
    color: #343a40;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next {
    order: 3;
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next:before {
    right: 5px;
    content: '\f105';
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-prev:before {
    left: 5px;
    content: '\f104';
}

.ui-datepicker .ui-datepicker-header .ui-datepicker-next-hover,
.ui-datepicker .ui-datepicker-header .ui-datepicker-prev-hover {
    color: #495057;
    cursor: pointer;
    top: 1px;
    border: 0;
    background-color: transparent;
}

.ui-datepicker .ui-datepicker-title {
    color: #5B93D3;
}

.ui-datepicker .ui-datepicker-calendar {
    margin: 0;
    background-color: transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}

.ui-datepicker .ui-datepicker-calendar th {
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 1px;
    padding: 6px 10px;
    color: #a3a7b7;
}

.ui-datepicker .ui-datepicker-calendar td {
    border: 1px solid #eceef9;
    padding: 0;
    background-color: #eceef9;
    text-align: right;
}

.ui-datepicker .ui-datepicker-calendar td:last-child {
    border-right: 0;
}

.ui-datepicker .ui-datepicker-calendar td.ui-datepicker-other-month .ui-state-default {
    color: #ccc;
}

.ui-datepicker .ui-datepicker-calendar td span {
    transition: all 0.2s ease-in-out;
    padding: 5px;
    background-color: #fff;
    color: #473b52;
    padding: 6px 10px;
    display: block;
    font-weight: 400;
    font-size: 12px;
    border: 0;
    border-radius: 1px;
}

.ui-datepicker .ui-datepicker-calendar td a {
    transition: all 0.2s ease-in-out;
    padding: 5px;
    background-color: #fff;
    color: #473b52;
    padding: 6px 10px;
    display: block;
    font-weight: 400;
    font-size: 12px;
    border: 0;
    border-radius: 1px;
}

.ui-datepicker .ui-datepicker-calendar td a:hover {
    background-color: #f0f2f7;
    color: #473b52;
}

.ui-datepicker .ui-datepicker-calendar .ui-datepicker-today a {
    background-color: #f8f9fa;
    color: #473b52;
}

@media (max-width: 320px) {
    .ui-datepicker .ui-datepicker-calendar th {
        padding: 4px 0;
        letter-spacing: normal;
    }
}

.ui-datepicker-multi .ui-datepicker-group {
    padding-right: 15px;
    width: auto;
    float: left;
}

.ui-datepicker-multi .ui-datepicker-group .ui-datepicker-title {
    margin: auto;
}

.ui-datepicker-multi .ui-datepicker-group .ui-datepicker-prev::before {
    left: 10px;
}

.ui-datepicker-multi .ui-datepicker-group .ui-datepicker-next::before {
    right: 10px;
}

.ui-datepicker-multi .ui-datepicker-group table {
    margin: 0;
}

.ui-datepicker-multi .ui-datepicker-group-last {
    padding-right: 0;
}

.ui-datepicker-inline {
    max-width: 270px;
    border-radius: 12px;
}

/*-----Gallery-----*/
.demo-gallery>ul {
    margin-bottom: 0;
}

.demo-gallery>ul>li {
    float: left;
    margin-bottom: 15px;
    width: 200px;
    border: 0;
}

.demo-gallery>ul>li a {
    border: 3px solid #FFF;
    border-radius: 3px;
    display: block;
    overflow: hidden;
    position: relative;
    float: left;
}

.demo-gallery>ul>li a>img {
    -webkit-transition: -webkit-transform 0.15s ease 0s;
    -moz-transition: -moz-transform 0.15s ease 0s;
    -o-transition: -o-transform 0.15s ease 0s;
    transition: transform 0.15s ease 0s;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    height: 100%;
    width: 100%;
}

.demo-gallery>ul>li a:hover>img {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
}

.demo-gallery>ul>li a:hover .demo-gallery-poster>img {
    opacity: 1;
}

.demo-gallery>ul>li a .demo-gallery-poster {
    background-color: rgba(0, 0, 0, 0.1);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    -webkit-transition: background-color 0.15s ease 0s;
    -o-transition: background-color 0.15s ease 0s;
    transition: background-color 0.15s ease 0s;
}

.demo-gallery>ul>li a .demo-gallery-poster>img {
    left: 50%;
    margin-left: -10px;
    margin-top: -10px;
    opacity: 0;
    position: absolute;
    top: 50%;
    -webkit-transition: opacity 0.3s ease 0s;
    -o-transition: opacity 0.3s ease 0s;
    transition: opacity 0.3s ease 0s;
}

.demo-gallery>ul>li a:hover .demo-gallery-poster {
    background-color: rgba(0, 0, 0, 0.5);
}

.demo-gallery .justified-gallery>a>img {
    -webkit-transition: -webkit-transform 0.15s ease 0s;
    -moz-transition: -moz-transform 0.15s ease 0s;
    -o-transition: -o-transform 0.15s ease 0s;
    transition: transform 0.15s ease 0s;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    height: 100%;
    width: 100%;
}

.demo-gallery .justified-gallery>a:hover>img {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
}

.demo-gallery .justified-gallery>a:hover .demo-gallery-poster>img {
    opacity: 1;
}

.demo-gallery .justified-gallery>a .demo-gallery-poster {
    background-color: rgba(0, 0, 0, 0.1);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    -webkit-transition: background-color 0.15s ease 0s;
    -o-transition: background-color 0.15s ease 0s;
    transition: background-color 0.15s ease 0s;
}

.demo-gallery .justified-gallery>a .demo-gallery-poster>img {
    left: 50%;
    margin-left: -10px;
    margin-top: -10px;
    opacity: 0;
    position: absolute;
    top: 50%;
    -webkit-transition: opacity 0.3s ease 0s;
    -o-transition: opacity 0.3s ease 0s;
    transition: opacity 0.3s ease 0s;
}

.demo-gallery .justified-gallery>a:hover .demo-gallery-poster {
    background-color: rgba(0, 0, 0, 0.5);
}

.demo-gallery .video .demo-gallery-poster img {
    height: 48px;
    margin-left: -24px;
    margin-top: -24px;
    opacity: 0.8;
    width: 48px;
}

.demo-gallery.dark>ul>li a {
    border: 3px solid #04070a;
}

.home .demo-gallery {
    padding-bottom: 80px;
}

.carousel-inner>.item>img,
.carousel-inner>.item>a>img {
    width: 100%;
}

.col-sm-3 a {
    border: 1px solid transparent;
    border-radius: 0;
    transition: all 3s ease;
}

.col-sm-3 a:hover {
    border: 1px solid #ff4647;
    border-radius: 100% 60% / 30% 10%;
    background: linear-gradient(rgba(56, 123, 131, 0.7), rgba(56, 123, 131, 0.7));
}

.gallery-wrap .img-big-wrap img {
    height: 350px;
    display: inline-block;
    cursor: zoom-in;
    width: auto;
    margin-top: 7px;
}

.gallery-wrap .img-small-wrap {
    text-align: center;
}

.gallery-wrap .img-small-wrap .item-gallery {
    width: 80px;
    height: 80px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin: 7px 2px;
    display: inline-block;
    overflow: hidden;
    text-align: center;
}

.gallery-wrap .img-small-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 4px;
    cursor: zoom-in;
}

svg {
    -ms-touch-action: none;
    touch-action: none;
}

.jvectormap-container {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    -ms-touch-action: none;
    touch-action: none;
}

.jvectormap-tip {
    position: absolute;
    display: none;
    border-radius: 3px;
    background: #212529;
    color: white;
    padding: 6px;
    font-size: 11px;
    line-height: 1;
    font-weight: 700;
}

.jvectormap-tip small {
    font-size: inherit;
    font-weight: 400;
}

.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
    position: absolute;
    left: 10px;
    border-radius: 3px;
    background: #292929;
    padding: 3px;
    color: white;
    cursor: pointer;
    line-height: 10px;
    text-align: center;
    box-sizing: content-box;
}

.jvectormap-zoomin,
.jvectormap-zoomout {
    width: 10px;
    height: 10px;
}

.jvectormap-zoomin {
    top: 10px;
}

.jvectormap-zoomout {
    top: 30px;
}

.jvectormap-goback {
    bottom: 10px;
    z-index: 1000;
    padding: 6px;
}

.jvectormap-spinner {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==);
}

.jvectormap-legend-title {
    font-weight: bold;
    font-size: 14px;
    text-align: center;
}

.jvectormap-legend-cnt {
    position: absolute;
}

.jvectormap-legend-cnt-h {
    bottom: 0;
    right: 0;
}

.jvectormap-legend-cnt-v {
    top: 0;
    right: 0;
}

.jvectormap-legend {
    background: black;
    color: white;
    border-radius: 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend {
    float: left;
    margin: 0 10px 10px 0;
    padding: 3px 3px 1px 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
    float: left;
}

.jvectormap-legend-cnt-v .jvectormap-legend {
    margin: 10px 10px 0 0;
    padding: 3px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick {
    width: 40px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
    height: 15px;
}

.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
    height: 20px;
    width: 20px;
    display: inline-block;
    vertical-align: middle;
}

.jvectormap-legend-tick-text {
    font-size: 12px;
}

.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
    text-align: center;
}

.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
    display: inline-block;
    vertical-align: middle;
    line-height: 20px;
    padding-left: 3px;
}

/*----- Range slider -------*/
.range {
    display: table;
    position: relative;
    height: 25px;
    margin-top: 20px;
    background-color: whitesmoke;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;
    display: table-cell;
    width: 100%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
}

.range input[type="range"]::-webkit-slider-thumb,
.range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;
    width: 11px;
    height: 25px;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: #999999;
}

.range output {
    display: table-cell;
    padding: 3px 5px 2px;
    min-width: 40px;
    color: #fff;
    background-color: #999999;
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}

.range input[type="range"] {
    outline: none;
}

.range.range-success input[type="range"]::-webkit-slider-thumb,
.range.range-success input[type="range"]::-moz-slider-thumb {
    background-color: #4ecc48;
}

.range.range-success output {
    background-color: #4ecc48;
}

.range.range-success input[type="range"] {
    outline-color: #4ecc48;
}

.range.range-info input[type="range"]::-webkit-slider-thumb,
.range.range-info input[type="range"]::-moz-slider-thumb {
    background-color: #45aaf2;
}

.range.range-info output {
    background-color: #45aaf2;
}

.range.range-info input[type="range"] {
    outline-color: #45aaf2;
}

.range.range-warning input[type="range"]::-webkit-slider-thumb,
.range.range-warning input[type="range"]::-moz-slider-thumb {
    background-color: #ecb403;
}

.range.range-warning output {
    background-color: #ecb403;
}

.range.range-warning input[type="range"] {
    outline-color: #ecb403;
}

.range.range-danger input[type="range"]::-webkit-slider-thumb,
.range.range-danger input[type="range"]::-moz-slider-thumb {
    background-color: #c21a1a;
}

.range.range-danger output {
    background-color: #c21a1a;
}

.range.range-danger input[type="range"] {
    outline-color: #c21a1a;
}

.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.select2-container .select2-selection--single .select2-selection__clear {
    position: relative;
}

.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered {
    padding-right: 8px;
    padding-left: 20px;
}

.select2-container .select2-selection--multiple {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    min-height: 32px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-container .select2-selection--multiple .select2-selection__rendered {
    display: inline-block;
    overflow: hidden;
    padding-left: 8px;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.select2-container .select2-search--inline {
    float: left;
}

.select2-container .select2-search--inline .select2-search__field {
    box-sizing: border-box;
    border: none;
    font-size: 100%;
    margin-top: 5px;
    padding: 0;
}

.select2-container .select2-search--inline .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none;
}

.select2-dropdown {
    background-color: white;
    border: 1px solid #eaf2f9;
    border-radius: 4px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: -100000px;
    width: 100%;
    z-index: 1051;
}

.select2-results {
    display: block;
}

.select2-results__options {
    list-style: none;
    margin: 0;
    padding: 0;
}

.select2-results__option {
    padding: 6px;
    user-select: none;
    -webkit-user-select: none;
}

.select2-results__option[aria-selected] {
    cursor: pointer;
}

.select2-container--open .select2-dropdown {
    left: 0;
}

.select2-container--open .select2-dropdown--above {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.select2-container--open .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-search--dropdown {
    display: block;
    padding: 4px;
}

.select2-search--dropdown .select2-search__field {
    padding: 4px;
    width: 100%;
    box-sizing: border-box;
}

.select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
    -webkit-appearance: none;
}

.select2-search--dropdown.select2-search--hide {
    display: none;
}

.select2-close-mask {
    border: 0;
    margin: 0;
    padding: 0;
    display: block;
    position: fixed;
    left: 0;
    top: 0;
    min-height: 100%;
    min-width: 100%;
    height: auto;
    width: auto;
    opacity: 0;
    z-index: 99;
    background-color: #fff;
    filter: alpha(opacity=0);
}

.select2-hidden-accessible {
    border: 0 !important;
    clip: rect(0 0 0 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important;
}

.select2-container--default .select2-selection--single {
    background-color: #f4f3f9;
    border: 1px solid #eaf2f9;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #9493a9;
    line-height: 28px;
}

.select2-container--default .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
}

.select2-container--default .select2-selection--single .select2-selection__placeholder {
    color: #9493a9;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #abc4dc transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__clear {
    float: left;
}

.select2-container--default[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    left: 1px;
    right: auto;
}

.select2-container--default.select2-container--disabled .select2-selection--single {
    background-color: #f4f3f9;
    cursor: default;
}

.select2-container--default.select2-container--disabled .select2-selection--single .select2-selection__clear {
    display: none;
}

.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #abc4dc transparent;
    border-width: 0 4px 5px 4px;
}

.select2-container--default .select2-selection--multiple {
    background-color: #f4f3f9;
    border: 1px solid #eaf2f9;
    padding: 0.1rem 0.75rem !important;
    border-radius: 0;
    cursor: text;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered {
    box-sizing: border-box;
    list-style: none;
    margin: 0;
    padding: 0px;
    width: 100%;
}

.select2-container--default .select2-selection--multiple .select2-selection__rendered li {
    list-style: none;
}

.select2-container--default .select2-selection--multiple .select2-selection__placeholder {
    color: #9493a9;
    margin-top: 5px;
    float: left;
}

.select2-container--default .select2-selection--multiple .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    margin-top: 5px;
    margin-right: 10px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #eaf2f9;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #9493a9;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    margin-right: 2px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #333;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice,
.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder,
.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-search--inline {
    float: right;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
    margin-left: 5px;
    margin-right: auto;
}

.select2-container--default[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 2px;
    margin-right: auto;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: solid black 1px;
    outline: 0;
}

.select2-container--default.select2-container--disabled .select2-selection--multiple {
    background-color: #eee;
    cursor: default;
}

.select2-container--default.select2-container--disabled .select2-selection__choice__remove {
    display: none;
}

.select2-container--default.select2-container--open.select2-container--above .select2-selection--single,
.select2-container--default.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #eaf2f9;
}

.select2-container--default .select2-search--inline .select2-search__field {
    background: transparent;
    border: none;
    outline: 0;
    box-shadow: none;
    -webkit-appearance: textfield;
}

.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
}

.select2-container--default .select2-results__option[role=group] {
    padding: 0;
}

.select2-container--default .select2-results__option[aria-disabled=true] {
    color: #9493a9;
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #f4f3f9;
}

.select2-container--default .select2-results__option .select2-results__option {
    padding-left: 1em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__group {
    padding-left: 0;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -1em;
    padding-left: 2em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -2em;
    padding-left: 3em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -3em;
    padding-left: 4em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -4em;
    padding-left: 5em;
}

.select2-container--default .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
    margin-left: -5em;
    padding-left: 6em;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #564ec1;
    color: white;
}

.select2-container--default .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px;
}

.select2-container--default .select2-selection--multiple::-webkit-input-placeholder {
    color: #9493a9 !important;
}

.select2-container--classic .select2-selection--single {
    background-color: #f7f7f7;
    border: 1px solid #eaf2f9;
    border-radius: 4px;
    outline: 0;
    background-image: -webkit-linear-gradient(top, #fff 50%, #eee 100%);
    background-image: -o-linear-gradient(top, #fff 50%, #eee 100%);
    background-image: linear-gradient(to bottom, #fff 50%, #eee 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
}

.select2-container--classic .select2-selection--single:focus {
    border: 1px solid #564ec1;
}

.select2-container--classic .select2-selection--single .select2-selection__rendered {
    color: #9493a9;
    line-height: 28px;
}

.select2-container--classic .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    margin-right: 10px;
}

.select2-container--classic .select2-selection--single .select2-selection__placeholder {
    color: #9493a9;
}

.select2-container--classic .select2-selection--single .select2-selection__arrow {
    background-color: #ddd;
    border: none;
    border-left: 1px solid #eaf2f9;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    height: 26px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
    background-image: -webkit-linear-gradient(top, #eee 50%, #ccc 100%);
    background-image: -o-linear-gradient(top, #eee 50%, #ccc 100%);
    background-image: linear-gradient(to bottom, #eee 50%, #ccc 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFCCCCCC', GradientType=0);
}

.select2-container--classic .select2-selection--single .select2-selection__arrow b {
    border-color: #9493a9 transparent transparent transparent;
    border-style: solid;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__clear {
    float: left;
}

.select2-container--classic[dir="rtl"] .select2-selection--single .select2-selection__arrow {
    border: none;
    border-right: 1px solid #eaf2f9;
    border-radius: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    left: 1px;
    right: auto;
}

.select2-container--classic.select2-container--open .select2-selection--single {
    border: 1px solid #564ec1;
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow {
    background: transparent;
    border: none;
}

.select2-container--classic.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent #9493a9 transparent;
    border-width: 0 4px 5px 4px;
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--single {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-image: -webkit-linear-gradient(top, #fff 0%, #eee 50%);
    background-image: -o-linear-gradient(top, #fff 0%, #eee 50%);
    background-image: linear-gradient(to bottom, #fff 0%, #eee 50%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFFFF', endColorstr='#FFEEEEEE', GradientType=0);
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--single {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    background-image: -webkit-linear-gradient(top, #eee 50%, #fff 100%);
    background-image: -o-linear-gradient(top, #eee 50%, #fff 100%);
    background-image: linear-gradient(to bottom, #eee 50%, #fff 100%);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFEEEEEE', endColorstr='#FFFFFFFF', GradientType=0);
}

.select2-container--classic .select2-selection--multiple {
    background-color: white;
    border: 1px solid #eaf2f9;
    border-radius: 4px;
    cursor: text;
    outline: 0;
}

.select2-container--classic .select2-selection--multiple:focus {
    border: 1px solid #564ec1;
}

.select2-container--classic .select2-selection--multiple .select2-selection__rendered {
    list-style: none;
    margin: 0;
    padding: 0 5px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__clear {
    display: none;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice {
    background-color: #e4e4e4;
    border: 1px solid #eaf2f9;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
    color: #9493a9;
    cursor: pointer;
    display: inline-block;
    font-weight: bold;
    margin-right: 2px;
}

.select2-container--classic .select2-selection--multiple .select2-selection__choice__remove:hover {
    color: #9493a9;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
    float: right;
    margin-left: 5px;
    margin-right: auto;
}

.select2-container--classic[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
    margin-left: 2px;
    margin-right: auto;
}

.select2-container--classic.select2-container--open .select2-selection--multiple {
    border: 1px solid #564ec1;
}

.select2-container--classic.select2-container--open.select2-container--above .select2-selection--multiple {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.select2-container--classic.select2-container--open.select2-container--below .select2-selection--multiple {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.select2-container--classic .select2-search--dropdown .select2-search__field {
    border: 1px solid #eaf2f9;
    outline: 0;
}

.select2-container--classic .select2-search--inline .select2-search__field {
    outline: 0;
    box-shadow: none;
}

.select2-container--classic .select2-dropdown {
    background-color: #fff;
    border: 1px solid transparent;
}

.select2-container--classic .select2-dropdown--above {
    border-bottom: none;
}

.select2-container--classic .select2-dropdown--below {
    border-top: none;
}

.select2-container--classic .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
}

.select2-container--classic .select2-results__option[role=group] {
    padding: 0;
}

.select2-container--classic .select2-results__option[aria-disabled=true] {
    color: #9493a9;
}

.select2-container--classic .select2-results__option--highlighted[aria-selected] {
    background-color: #3875d7;
    color: #fff;
}

.select2-container--classic .select2-results__group {
    cursor: default;
    display: block;
    padding: 6px;
}

.select2-container--classic.select2-container--open .select2-dropdown {
    border-color: #564ec1;
}

/*-----selectize ------*/
.selectize-control.plugin-drag_drop.multi>.selectize-input>div.ui-sortable-placeholder {
    visibility: visible !important;
    background: #f2f2f2 !important;
    background: rgba(0, 0, 0, 0.06) !important;
    border: 0 none !important;
    box-shadow: inset 0 0 12px 4px #fff;
}

.selectize-control.plugin-drag_drop .ui-sortable-placeholder::after {
    content: '!';
    visibility: hidden;
}

.selectize-control.plugin-drag_drop .ui-sortable-helper {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.selectize-dropdown-header {
    position: relative;
    padding: 5px 8px;
    border-bottom: 1px solid #d0d0d0;
    background: #f8f8f8;
    border-radius: 3px 3px 0 0;
}

.selectize-dropdown-header-close {
    position: absolute;
    right: 8px;
    top: 50%;
    color: #495057;
    opacity: 0.4;
    margin-top: -12px;
    line-height: 20px;
    font-size: 20px !important;
}

.selectize-dropdown-header-close:hover {
    color: #000;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup {
    border-right: 1px solid #f2f2f2;
    border-top: 0 none;
    float: left;
    box-sizing: border-box;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup:last-child {
    border-right: 0 none;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup:before {
    display: none;
}

.selectize-dropdown.plugin-optgroup_columns .optgroup-header {
    border-top: 0 none;
}

.selectize-control {
    position: relative;
    padding: 0;
    border: 0;
}

.selectize-control.plugin-remove_button [data-value] {
    position: relative;
    padding-right: 24px !important;
}

.selectize-control.plugin-remove_button [data-value] .remove {
    z-index: 1;
    /* fixes ie bug (see #392) */
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 17px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    color: inherit;
    text-decoration: none;
    vertical-align: middle;
    display: inline-block;
    padding: 2px 0 0 0;
    border-left: 1px solid #d0d0d0;
    border-radius: 0 2px 2px 0;
    box-sizing: border-box;
}

.selectize-control.plugin-remove_button [data-value] .remove:hover {
    background: rgba(0, 0, 0, 0.05);
}

.selectize-control.plugin-remove_button [data-value].active .remove {
    border-left-color: #cacaca;
}

.selectize-control.plugin-remove_button .disabled [data-value] .remove {
    border-left-color: #fff;
}

.selectize-control.plugin-remove_button .disabled [data-value] .remove:hover {
    background: none;
}

.selectize-control.plugin-remove_button .remove-single {
    position: absolute;
    right: 28px;
    top: 6px;
    font-size: 23px;
}

.selectize-dropdown {
    color: #495057;
    font-family: inherit;
    font-size: 15px;
    line-height: 18px;
    -webkit-font-smoothing: inherit;
}

.selectize-input {
    color: #495057;
    font-family: inherit;
    font-size: 15px;
    line-height: 18px;
    -webkit-font-smoothing: inherit;
    background: #fff;
    cursor: text;
    display: inline-block;
}

.selectize-input input {
    color: #495057;
    font-family: inherit;
    font-size: 15px;
    line-height: 18px;
    -webkit-font-smoothing: inherit;
}

.selectize-control.single .selectize-input.input-active {
    background: #fff;
    cursor: text;
    display: inline-block;
}

.selectize-input {
    border: 1px solid #e1e0ea;
    padding: 0.5625rem 0.75rem;
    display: inline-block;
    display: block;
    width: 100%;
    overflow: hidden;
    position: relative;
    z-index: 1;
    box-sizing: border-box;
    border-radius: 3px;
    transition: .3s border-color, .3s box-shadow;
}

.selectize-control.multi .selectize-input.has-items {
    padding: 7px 0.75rem 4px 7px;
}

.selectize-input.full {
    background-color: #fff;
}

.selectize-input.disabled {
    cursor: default !important;
}

.selectize-input.disabled * {
    cursor: default !important;
}

.selectize-input.focus {
    border-color: #467fcf;
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.selectize-input.dropdown-active {
    border-radius: 3px 3px 0 0;
}

.selectize-input>* {
    vertical-align: baseline;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
    *display: inline;
}

.selectize-control.multi .selectize-input>div {
    cursor: pointer;
    margin: 0 3px 3px 0;
    padding: 2px 6px;
    background: #e9ecef;
    color: #495057;
    font-size: 13px;
    border: 0 solid rgba(0, 40, 100, 0.12);
    border-radius: 3px;
    font-weight: 400;
}

.selectize-control.multi .selectize-input>div.active {
    background: #e8e8e8;
    color: #303030;
    border: 0 solid #cacaca;
}

.selectize-control.multi .selectize-input.disabled>div {
    color: #7d7d7d;
    background: #fff;
    border: 0 solid #fff;
}

.selectize-control.multi .selectize-input.disabled>div.active {
    color: #7d7d7d;
    background: #fff;
    border: 0 solid #fff;
}

.selectize-input>input {
    display: inline-block !important;
    padding: 0 !important;
    min-height: 0 !important;
    max-height: none !important;
    max-width: 100% !important;
    margin: 0 2px 0 0 !important;
    text-indent: 0 !important;
    border: 0 none !important;
    background: none !important;
    line-height: inherit !important;
    box-shadow: none !important;
}

.selectize-input>input::-ms-clear {
    display: none;
}

.selectize-input>input:focus {
    outline: none !important;
}

.selectize-input::after {
    content: ' ';
    display: block;
    clear: left;
}

.selectize-input.dropdown-active::before {
    content: ' ';
    display: block;
    position: absolute;
    background: #f0f0f0;
    height: 1px;
    bottom: 0;
    left: 0;
    right: 0;
}

.selectize-dropdown {
    position: absolute;
    z-index: 10;
    border: 1px solid #e1e0ea;
    background: #fff;
    margin: -1px 0 0 0;
    border-top: 0 none;
    box-sizing: border-box;
    border-radius: 0 0 3px 3px;
    height: auto;
    padding: 0;
}

.selectize-dropdown [data-selectable] {
    cursor: pointer;
    overflow: hidden;
    padding: 6px .75rem;
}

.selectize-dropdown [data-selectable] .highlight {
    background: rgba(125, 168, 208, 0.2);
    border-radius: 1px;
}

.selectize-dropdown .optgroup-header {
    padding: 6px .75rem;
}

.selectize-dropdown .optgroup:first-child .optgroup-header {
    border-top: 0 none;
}

.selectize-dropdown .optgroup-header {
    color: #495057;
    background: #fff;
    cursor: default;
}

.selectize-dropdown .active {
    background-color: #F1F4F8;
    color: #467fcf;
}

.selectize-dropdown .active.create {
    color: #495057;
}

.selectize-dropdown .create {
    color: rgba(48, 48, 48, 0.5);
}

.selectize-dropdown-content {
    overflow-y: auto;
    overflow-x: hidden;
    max-height: 200px;
    -webkit-overflow-scrolling: touch;
}

.selectize-control.single .selectize-input {
    cursor: pointer;
}

.selectize-control.single .selectize-input input {
    cursor: pointer;
}

.selectize-control.single .selectize-input.input-active {
    cursor: text;
}

.selectize-control.single .selectize-input.input-active input {
    cursor: text;
}

.selectize-control.single .selectize-input:after {
    content: '';
    display: block;
    position: absolute;
    top: 13px;
    right: 12px;
    width: 8px;
    height: 10px;
    background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 5'%3E%3Cpath fill='#999' d='M0 0L10 0L5 5L0 0'/%3E%3C/svg%3E") no-repeat center;
    background-size: 8px 10px;
    transition: .3s transform;
}

.selectize-control.single .selectize-input.dropdown-active:after {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.selectize-control .selectize-input.disabled {
    opacity: 0.5;
    background-color: #fafafa;
}

.selectize-dropdown .image,
.selectize-input .image {
    width: 1.25rem;
    height: 1.25rem;
    background-size: contain;
    margin: -1px .5rem -1px -4px;
    line-height: 1.25rem;
    float: left;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.selectize-dropdown .image img {
    max-width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
    border-radius: 2px;
}

.selectize-input .image {
    width: 1.5rem;
    height: 1.5rem;
    margin: -3px .75rem -3px -5px;
}

.selectize-input .image img {
    max-width: 100%;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
    border-radius: 2px;
}

/* ###### custom ####### */
/*------ Icons List ------*/
.browser {
    width: 1.25rem;
    height: 1.25rem;
    display: inline-block;
    background: no-repeat center/100% 100%;
    vertical-align: bottom;
    font-style: normal;
}

.browser-android-browser {
    background-image: url("../images/browsers/android-browser.svg");
}

.browser-aol-explorer {
    background-image: url("../images/browsers/aol-explorer.svg");
}

.browser-blackberry {
    background-image: url("../images/browsers/blackberry.svg");
}

.browser-camino {
    background-image: url("../images/browsers/camino.svg");
}

.browser-chrome {
    background-image: url("../images/browsers/chrome.svg");
}

.browser-chromium {
    background-image: url("../images/browsers/chromium.svg");
}

.browser-dolphin {
    background-image: url("../images/browsers/dolphin.svg");
}

.browser-edge {
    background-image: url("../images/browsers/edge.svg");
}

.browser-firefox {
    background-image: url("../images/browsers/firefox.svg");
}

.browser-ie {
    background-image: url("../images/browsers/ie.svg");
}

.browser-maxthon {
    background-image: url("../images/browsers/maxthon.svg");
}

.browser-mozilla {
    background-image: url("../images/browsers/mozilla.svg");
}

.browser-netscape {
    background-image: url("../images/browsers/netscape.svg");
}

.browser-opera {
    background-image: url("../images/browsers/opera.svg");
}

.browser-safari {
    background-image: url("../images/browsers/safari.svg");
}

.browser-sleipnir {
    background-image: url("../images/browsers/sleipnir.svg");
}

.browser-uc-browser {
    background-image: url("../images/browsers/uc-browser.svg");
}

.browser-vivaldi {
    background-image: url("../images/browsers/vivaldi.svg");
}

.page-main {
    position: relative;
    overflow: hidden;
}

.page-main:after {
    content: "";
    height: 280px;
    position: absolute;
    z-index: -1;
    width: 100%;
    top: 0;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.dropdown-menu-arrow:before {
    content: "";
    position: absolute;
    right: 11px;
    top: -10px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 10px 10px 10px;
    border-color: transparent transparent #fff transparent;
    z-index: 9999;
}

@media (max-width: 992px) {
    .page-title {
        font-size: 22px;
    }

    .header-brand {
        margin-left: 2.3rem;
    }

    .breadcrumb {
        right: 15px;
    }

    .with-sub .nav-link,
    .nav-item.with-sub {
        display: block !important;
    }

    .about-con {
        border-bottom: 1px solid #e1e0ea;
    }
}

@media (max-width: 1279px) and (min-width: 992px) {
    .nav-tabs .nav-link {
        padding: 1rem 0.95rem;
        font-size: 13px;
    }
}

@media (max-width: 480px) {
    .list-media .info {
        padding-bottom: 15px;
    }

    .list-media .info .text-right {
        display: none;
    }

    .header .nav-link {
        padding: 0.5rem 0.5rem !important;
        line-height: 1.9;
    }

    .header .nav-link.icon {
        margin: 3px;
    }

    .header-brand {
        margin-top: 2px;
    }

    .header .nav-link.leading-none::after {
        top: 12px !important;
    }

    .header .navsearch i {
        font-size: 17px !important;
        margin-top: 2px;
    }

    .header .nav-link.icon {
        font-size: 16px;
    }

    .header .nav-link .badge {
        position: absolute;
        top: -7px;
        right: 6px;
        width: 1rem;
        height: 1rem;
        font-size: 11px;
        text-align: center !important;
        padding: 0.25em 0.4em;
        line-height: 1;
    }

    #user-profile .tabs-menu2 ul li a {
        padding: 10px 8px 11px 8px;
    }

    .tabs-menu ul li {
        width: 100%;
        margin: 15px 15px 0 15px;
    }

    .tabs-menu ul li:last-child {
        margin-bottom: 15px;
    }

    .tabs-menu ul li a {
        width: 100%;
        border: 1px solid #e1e0ea;
    }

    .cal1 .clndr .clndr-table tr {
        height: 50px !important;
    }

    .tabs-menu1 ul li {
        width: 100%;
        margin: 15px 15px 0 15px;
        border: 1px solid #e1e0ea;
    }

    .tabs-menu1 ul li:last-child {
        margin-bottom: 15px;
    }

    .tabs-menu1 ul li a {
        width: 100%;
    }

    .wizard-card .nav-pills>li {
        text-align: center;
        padding: 9px !important;
    }

    .form-control.custom-select.w-auto {
        display: none;
    }

    .badge {
        margin: 10px 0;
    }

    .header .drop-heading .badge,
    .mail-inbox .badge {
        margin: 0;
    }

    .construction .display-5 {
        font-size: 1.5rem;
    }

    .jumbotron .display-3 {
        font-size: 2.5rem;
    }

    .mail-option .hidden-phone {
        display: none;
    }

    .error-page .display-1 {
        font-size: 8.5rem !important;
        text-align: center;
        margin-right: 2px;
    }

    .countdown-timer-wrapper .timer .timer-wrapper {
        width: 50px;
        margin: 10px;
        margin-bottom: 0 !important;
    }

    .countdown-timer-wrapper .timer .timer-wrapper .time {
        width: 50px;
        height: 50px;
        font-size: 25px;
    }

    .sidebar .tabs-menu ul li a {
        width: auto;
        margin: 3px 0px 3px 8px !important;
    }

    .siderbar-tabs .tabs-menu ul li {
        width: auto;
        margin: 0;
    }

    .header-settings .nav-link {
        padding: 0 !important;
        margin-top: 9px;
    }
}

@media (max-width: 320px) {
    .error-page .display-1 {
        font-size: 6.5rem !important;
        text-align: center;
    }

    .construction .btn.btn-icon {
        width: 40px !important;
        height: 40px !important;
        border-radius: 50%;
        text-align: center;
        padding: 0;
        background: transparent;
        font-size: 16px;
        color: #fff;
        margin: 0 2px !important;
    }

    .countdown-timer-wrapper .timer {
        padding: 0 !important;
    }

    .display-2 {
        text-align: center;
        font-size: 3rem;
    }

    .header .notifications {
        display: none;
    }

    .header-settings {
        margin: 3px;
        margin-top: 0;
    }
}

@media (max-width: 480px) {
    .error-page .display-1 {
        font-size: 6.5rem !important;
        text-align: center;
    }

    .page-header {
        display: block !important;
    }

    .breadcrumb {
        flex-wrap: wrap;
        margin-bottom: 0;
        list-style: none;
        border-radius: 3px;
        position: relative;
        right: 0;
        top: 0px;
        padding-right: 0;
        color: #fff;
        left: 0px;
        padding: 0;
        margin-top: 5px;
    }

    #user-profile .tabs-menu2 ul li a {
        padding: 10px 6px 11px 6px;
    }

    .header .nav-link {
        padding: 0.6rem 0.5rem;
        line-height: 1.9;
    }

    .calendar-header th {
        padding: 2px !important;
        font-size: 12px;
    }

    .cal1 .clndr .clndr-controls .month {
        width: 100% !important;
    }

    .cal1 .clndr .clndr-controls .clndr-control-button {
        float: none !important;
        width: 100% !important;
    }
}

@media (max-width: 480px) {

    .app-header .header-brand,
    .app-header1 .header-brand {
        min-width: auto;
    }

    .header-right-icons .dropdown .header-toggler {
        margin-top: 9px;
    }
}

@media (max-width: 767px) {
    .card-tabs {
        display: block !important;
    }

    .header .input-icon.mt-2 {
        margin-top: 5px !important;
    }

    .footer .privacy {
        text-align: center !important;
    }

    .shop-dec .col-md-6.pr-0 {
        padding-right: 0.75rem !important;
    }

    .shop-dec .col-md-6.pl-0 {
        padding-left: 0.75rem !important;
    }
}

@media (max-width: 992px) {
    .header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: .25rem;
        padding-bottom: .25rem;
        position: fixed;
        left: 0;
        right: 0;
        top: 0 !important;
        width: 100%;
        z-index: 999;
    }

    .content-area {
        padding-top: 53px;
    }

    .sidebar-gone.active .header {
        position: inherit;
    }

    .sidebar-gone.active .content-area {
        padding: 0px 0.75rem 0px 0.75rem;
    }

    .header.header-1,
    .header.header-style,
    .header.header-2 {
        position: inherit;
        z-index: 1;
        border-bottom: 0;
        padding: 0 !important;
    }

    .horizontal-main.horizonatal-headers {
        border-top: 0 !important;
        border-bottom: 0 !important;
    }

    .header-style .header-brand {
        margin-left: 2rem !important;
    }

    .header-style .animated-arrow {
        cursor: pointer;
        padding: 18px 29px 15px 7px;
        margin: 11px 0 0 -11px;
    }
}

@media (max-width: 768px) {

    .header.header-2 .message,
    .header.header-1 .message,
    .header.header-style .message,
    .header.header-2 .full-screen-link,
    .header.header-1 .full-screen-link,
    .header.header-style .full-screen-link {
        display: none;
    }

    .nav-tabs .nav-link {
        width: 100%;
    }

    .page-subtitle {
        display: none;
    }

    .richText .richText-toolbar ul li a {
        border: rgba(0, 40, 100, 0.12) solid 1px;
    }

    .ticket-card .col-md-1 {
        width: 100%;
        display: block;
    }

    .ticket-card img {
        display: block;
        text-align: Center;
        margin: 0 auto;
    }

    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
        margin-top: 10px !important;
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
        justify-content: center !important;
    }

    .page-title {
        line-height: 1.5rem;
    }

    .carousel-caption {
        display: none;
    }

    .demo-gallery>ul>li {
        width: 100% !important;
    }

    ul.inbox-pagination li span {
        display: none;
    }
}

@media (max-width: 990px) and (min-width: 767px) {
    .carousel-caption {
        top: 10%;
    }
}

@media (max-width: 320px) {

    .wizard-card .nav-pills>li>a,
    .wizard-card .moving-tab {
        font-size: 11px;
    }

    .tui-full-calendar-popup-container {
        padding: 17px 24px !important;
    }
}

@media (max-width: 576px) {
    .sm-mb-3 {
        margin-bottom: 1.5rem !important;
    }
}

@media (max-width: 568px) and (min-width: 480px) {
    .container-messages {
        position: absolute;
        top: 50px !important;
    }

    .messages-list {
        top: 24px !important;
        bottom: 73px !important;
    }

    .messages-right {
        top: 10px !important;
        bottom: 71px !important;
    }

    .messages-left-footer {
        bottom: 40px !important;
        display: none;
    }

    .messages-left .card-header {
        display: none;
    }

    .message-footer,
    .message-header {
        height: 50px !important;
    }

    .message-body {
        top: 50px !important;
        bottom: 50px !important;
    }

    .form-control.header-search {
        margin-top: -3px !important;
    }
}

@media (max-width: 990px) and (min-width: 569px) {

    .message-header,
    .message-footer {
        height: 50px !important;
    }

    .messages-right {
        top: 10px !important;
        bottom: 80px !important;
    }

    .message-body {
        top: 50px !important;
        bottom: 50px !important;
    }

    .messages-left .card-header {
        display: none;
    }

    .messages-list {
        top: 24px !important;
    }
}

@media (max-width: 990px) {
    .header-toggler {
        top: 6px;
    }

    .nav-tabs .nav-link {
        width: 100%;
    }

    form.convFormDynamic button.submit {
        margin: 4px !important;
    }

    .messages-list .media {
        padding: 9px !important;
    }

    .nav-tabs {
        z-index: 1000;
    }
}

.nav-tabs .nav-item i {
    margin-right: .25rem;
    line-height: 1;
    width: 0.875rem;
    vertical-align: baseline;
    display: inline-block;
    margin-right: 10px;
}

.nav-tabs .nav-submenu {
    display: none;
    position: absolute;
    background: #fff;
    border: 1px solid #e1e0ea;
    border-top: none;
    z-index: 10;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    min-width: 10rem;
    border-radius: 0 0 3px 3px;
}

.nav-tabs .nav-submenu .nav-item {
    display: block;
    padding: .5rem 1rem;
    color: #9aa0ac;
    margin: 0 !important;
    cursor: pointer;
    transition: .3s background;
}

.nav-tabs .nav-submenu .nav-item.active {
    color: #467fcf;
}

.nav-tabs .nav-submenu .nav-item:hover {
    color: #6e7687;
    text-decoration: none;
    background: rgba(0, 0, 0, 0.024);
}

.product_price .old_price {
    text-decoration: line-through !important;
    color: #93a3ba;
}

.product_price li {
    display: inline-block;
    padding: 0 10px;
}

.alert {
    font-size: 0.9375rem;
}

.alert-icon {
    padding-left: 3rem;
}

.alert-icon>i {
    color: inherit !important;
    font-size: 1rem;
    position: absolute;
    top: 1rem;
    left: 1rem;
}

.alert-avatar {
    padding-left: 3.75rem;
}

.alert-avatar .avatar {
    position: absolute;
    top: .5rem;
    left: .75rem;
}

.close {
    font-size: 1rem;
    line-height: 1.5;
    transition: .3s color;
}

/*
.close:before {
  content: '\ea00';
  font-family: "feather";
}
*/
/*--------panel----------*/
.expanel-default {
    border: #ddd !important;
}

.expanel-success {
    border: #4ecc48 !important;
}

.expanel-danger {
    border: #c21a1a !important;
}

.expanel-success>.expanel-heading {
    color: #fff !important;
    background-color: #4ecc48 !important;
    border-color: #4ecc48 !important;
}

.expanel-danger>.expanel-heading {
    color: #fff !important;
    background-color: #c21a1a !important;
    border-color: #c21a1a !important;
}

.expanel-warning>.expanel-heading {
    color: #fff !important;
    background-color: #ecd938 !important;
    border-color: #ecd938 !important;
}

.expanel-title {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    font-size: 16px !important;
    color: inherit !important;
}

.expanel {
    margin-bottom: 20px !important;
    background-color: #fff !important;
    border: 1px solid #e1e0ea !important;
    border-radius: 4px !important;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.01) !important;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.01) !important;
}

.expanel-default>.expanel-heading {
    background-color: #f4f3f9 !important;
    border-color: #f4f3f9 !important;
}

.expanel-heading {
    padding: 10px 15px !important;
    border-bottom: 1px solid #e1e0ea;
    border-top-left-radius: 3px !important;
    border-top-right-radius: 3px !important;
}

.expanel-footer {
    padding: 10px 15px !important;
    background-color: #f4f3f9 !important;
    border-top: 1px solid #e1e0ea !important;
    border-bottom-right-radius: 3px !important;
    border-bottom-left-radius: 3px !important;
}

.expanel-body {
    padding: 15px !important;
}

/*---------Thumbnails----------*/
.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #e1e0ea;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
}

.thumbnail a>img,
.thumbnail>img {
    margin-right: auto;
    margin-left: auto;
}

.thumbnail p:last-child {
    margin-bottom: 0;
}

.thumbimg {
    height: 100%;
    width: 100%;
    display: block;
}

.thumbnail .caption {
    padding: 15px;
}

.badge {
    display: inline-block;
    font-size: 80%;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    padding: 4px 8px;
    font-weight: 400;
    letter-spacing: .5px;
    border-radius: 3px;
}

.badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 10rem;
}

.badgetext {
    float: right;
}

.btn-custom {
    background: #f6fafd;
}

.badge-default {
    background: #f4f3f9;
    color: #292828;
}

.badge-gradient-default {
    background: linear-gradient(to bottom right, #efeeee 0%, #d1cfcf 100%) !important;
    color: #9493a9;
}

.about-img {
    background: linear-gradient(rgba(112, 64, 165, 0.3), rgba(112, 64, 165, 0.3)), url("../images/about4.jpg");
    background-size: cover;
    background-position: center;
}

.login-img {
    background: #f9f7fd;
    height: 100%;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: inline-table;
}

.construction-img {
    background: url("../images/construction.jpg");
    background-size: cover;
}

.card-blog-overlay {
    background: url("../images/thumbnails/thumb2.jpg");
    background-size: cover;
    position: relative;
}

.card-blog-overlay:before {
    content: '';
    display: block;
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    right: 0;
    top: 0;
}

.card-blog-overlay1:before,
.card-blog-overlay2:before {
    content: '';
    display: block;
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    right: 0;
    top: 0;
}

.card-blog-overlay1 {
    background: url("../images/thumbnails/thumb3.jpg");
    background-size: cover;
}

.card-blog-overlay2 {
    background: url("../images/photos/22.jpg");
    background-size: cover;
}

.z-index2 {
    z-index: 2;
}

.page-breadcrumb {
    background: none;
    padding: 0;
    margin: 1rem 0 0;
    font-size: 0.875rem;
}

.page-breadcrumb .breadcrumb-item {
    color: #9aa0ac;
}

.page-breadcrumb .breadcrumb-item.active {
    color: #6e7687;
}

@media (min-width: 768px) {
    .page-breadcrumb {
        margin: -.5rem 0 0;
    }
}

@media (max-width: 320px) {
    .fc-toolbar .fc-right {
        float: right;
        width: 100%;
        text-align: center;
        margin: 10px 0;
    }
}

.pagination-simple .page-item .page-link {
    background: none;
    border: none;
}

.pagination-simple .page-item.active .page-link {
    color: #495057;
    font-weight: 700;
}

.pagination-pager .page-prev {
    margin-right: auto;
}

.pagination-pager .page-next {
    margin-left: auto;
}

.page-total-text {
    margin-right: 1rem;
    -ms-flex-item-align: center;
    align-self: center;
    color: #6e7687;
}

.visitor-list p {
    font-size: 12px;
}

.visitor-list i {
    font-size: 20px;
}

.sales-relative {
    position: relative;
}

.icon-absolute {
    position: absolute;
    display: block;
    bottom: 10px;
    right: 10px;
    padding: 20px 0;
    text-align: center;
    border-radius: 50%;
    width: 70px;
    height: 70px;
}

@media (min-width: 991px) and (max-width: 1024px) {
    .icon-absolute {
        display: none;
    }
}

@media (max-width: 991px) {
    .page-main:after {
        content: "";
        height: 150px;
        top: 50px;
    }

    .left-app .page-main:after {
        height: 150px !important;
    }

    .header .form-inline {
        margin-right: -2px;
    }
}

.icons-list {
    list-style: none;
    margin: 0 -1px -1px 0;
    padding: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.icons-list>li {
    -ms-flex: 1 0 5rem;
    flex: 1 0 5rem;
}

.icons-list-wrap {
    overflow: hidden;
}

.icons-list-item {
    text-align: center;
    height: 3rem;
    width: 3rem;
    border-radius: 3px;
    line-height: 3rem;
    margin: 4px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-right: 1px solid #e1e0ea;
    border-bottom: 1px solid #e1e0ea;
    border-top: 1px solid #e1e0ea;
    border-left: 1px solid #e1e0ea;
}

.icons-list-item i {
    font-size: 1.25rem;
}

.img-gallery {
    margin-right: -.25rem;
    margin-left: -.25rem;
    margin-bottom: -.5rem;
}

.img-gallery>.col,
.img-gallery>[class*="col-"] {
    padding-left: .25rem;
    padding-right: .25rem;
    padding-bottom: .5rem;
}

.link-overlay {
    position: relative;
}

.link-overlay:hover .link-overlay-bg {
    opacity: 1;
}

.link-overlay-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(212, 182, 228, 0.8);
    display: -ms-flexbox;
    display: flex;
    color: #fff;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 1.25rem;
    opacity: 0;
    transition: .3s opacity;
}

.media-icon {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    text-align: center;
    border-radius: 100%;
}

.media-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

textarea[cols] {
    height: auto;
}

.form-group {
    display: block;
}

.form-label {
    display: block;
    margin-bottom: .375rem;
    font-weight: 600;
    font-size: 0.875rem;
    margin-top: 9px;
}

.form-label-small {
    font-weight: 400;
    font-size: 87.5%;
}

.form-footer {
    margin-top: 2rem;
}

.custom-control {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.custom-controls-stacked .custom-control {
    margin-bottom: .25rem;
}

.custom-control-label {
    vertical-align: middle;
}

.custom-control-label:before {
    border: 1px solid #e1e0ea;
    background-color: #f4f3f9;
    background-size: .5rem;
}

.custom-control-description {
    line-height: 1.5rem;
}

.input-group-prepend,
.input-group-append,
.input-group-btn {
    font-size: 0.9375rem;
}

.input-group-prepend>.btn,
.input-group-append>.btn,
.input-group-btn>.btn {
    height: 100%;
    border-color: #24c4b4;
}

.input-group-prepend>.input-group-text {
    border-right: 0;
}

.input-group-append>.input-group-text {
    border-left: 0;
}

.form-signin .form-control {
    border-right: 0;
    border-left: 0;
    border-top: 0;
    border-radius: 0;
}

.form-signin .form-control:focus {
    box-shadow: none;
}

/**widgets*/
.widgets {
    font-size: 35px;
    padding: 20px;
}

.widgetstext {
    top: 0;
    bottom: 0;
    padding: 20px 40px;
}

.widget-line h4 {
    font-size: 24px;
    font-weight: 600;
}

.fs {
    font-size: 25px;
}

.widget-line p {
    font-size: 16px;
}

.widget-line-list li {
    display: inline-block;
    font-size: 16px;
    line-height: 27px;
    padding: 5px 20px 0 15px;
    list-style-type: none;
}

.wideget-user-info {
    margin-top: 1rem;
}

/*----Profile----*/
.media {
    display: flex;
    align-items: flex-start;
}

.mediaicon {
    font-size: 18px;
    color: #fff;
    width: 40px;
    height: 40px;
    text-align: center;
    padding: 9px 0px;
    border-radius: 20px;
}

.mediafont {
    font-size: 16px;
    font-weight: 600;
}

.sparkline {
    display: inline-block;
    height: 2rem;
}

.jqstooltip {
    box-sizing: content-box;
    font-family: inherit !important;
    background: #333 !important;
    border: none !important;
    border-radius: 3px;
    font-size: 11px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    padding: 6px !important;
}

.jqstooltip .jqsfield {
    font: inherit !important;
}

.social-links li a {
    background: #f8f8f8;
    border-radius: 50%;
    color: #9aa0ac;
    display: inline-block;
    height: 1.75rem;
    width: 1.75rem;
    line-height: 1.75rem;
    text-align: center;
}

.map,
.chart {
    position: relative;
    padding-top: 56.25%;
}

.map-square,
.chart-square {
    padding-top: 100%;
}

.map-content,
.chart-content {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.map-header {
    margin-bottom: 1.5rem;
    height: 15rem;
    position: relative;
    margin-bottom: -1.5rem;
}

.map-header:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 10rem;
    background: linear-gradient(to bottom, rgba(245, 247, 251, 0) 5%, #f4f3f9 95%);
    pointer-events: none;
}

.map-header-layer {
    height: 100%;
}

.map-static {
    height: 120px;
    width: 100%;
    max-width: 640px;
    background-position: center center;
    background-size: 640px 120px;
}

@-webkit-keyframes status-pulse {

    0%,
    100% {
        opacity: 1;
    }

    50% {
        opacity: .32;
    }
}

@keyframes status-pulse {

    0%,
    100% {
        opacity: 1;
    }

    50% {
        opacity: .32;
    }
}

.status-icon {
    content: '';
    width: 0.5rem;
    height: 0.5rem;
    display: inline-block;
    background: currentColor;
    border-radius: 50%;
    -webkit-transform: translateY(-1px);
    transform: translateY(-1px);
    margin-right: .375rem;
    vertical-align: middle;
}

.status-animated {
    -webkit-animation: 1s status-pulse infinite ease;
    animation: 1s status-pulse infinite ease;
}

.chart-circle {
    display: initial;
    height: 7rem;
    width: 7rem;
    position: relative;
    display: block;
    margin: 0 auto;
}

.chart-circle-1 {
    display: initial;
    height: 12rem;
    width: 12rem;
    position: relative;
}

.widget-line-list {
    margin: 6px;
}

.chart-circle canvas {
    margin: 0 auto;
    display: block;
    max-width: 100%;
    max-height: 100%;
}

.chart-circle-xs {
    height: 2.5rem;
    width: 2.5rem;
    font-size: .8rem;
}

.chart-circle-sm {
    height: 3rem !important;
    width: 3rem !important;
    font-size: .5rem;
}

.chart-circle-md {
    height: 4rem !important;
    width: 4rem !important;
    font-size: .5rem;
}

.chart-circle-lg {
    height: 10rem;
    width: 10rem;
    font-size: .8rem;
}

.chart-circle-value {
    position: absolute;
    top: 0px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
    line-height: 1;
}

.chart-circle-value small {
    display: block;
    color: #9aa0ac;
    font-size: 0.9375rem;
}

.chart-circle-1-value {
    position: absolute;
    top: -184px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
    line-height: 1;
    font-size: 40px;
}

.chart-circle-1-value small {
    display: block;
    color: #9aa0ac;
    font-size: 0.9375rem;
}

.chips {
    margin: 0 0 -.5rem;
}

.team i {
    float: right;
}

.chips .chip {
    margin: 0 .5rem .5rem 0;
}

.chip {
    display: inline-block;
    height: 2rem;
    line-height: 2rem;
    font-size: 0.875rem;
    font-weight: 500;
    color: #6e7687;
    padding: 0 .75rem;
    border-radius: 1rem;
    background-color: rgba(70, 127, 207, 0.06);
    transition: .3s background;
}

.chip .avatar {
    float: left;
    margin: 0 .5rem 0 -.75rem;
    height: 2rem;
    width: 2rem;
    border-radius: 50%;
}

a.chip:hover {
    color: #fff;
    text-decoration: none;
}

.emp-tab table {
    margin-bottom: 0;
    border: 0;
}

.stamp {
    color: #fff;
    background: #868e96;
    display: inline-block;
    min-width: 40px;
    height: 40px;
    padding: 0 .25rem;
    line-height: 2rem;
    text-align: center;
    border-radius: 100%;
    font-weight: 600;
}

.stamp-md {
    min-width: 3rem;
    height: 3rem;
    line-height: 3rem;
}

.stamp-lg {
    min-width: 4rem;
    height: 4rem;
    line-height: 4rem;
}

.chat {
    outline: 0;
    margin: 0;
    list-style-type: none;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: end;
    justify-content: flex-end;
    min-height: 100%;
}

.chat-line {
    padding: 0;
    text-align: right;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row-reverse;
    flex-direction: row-reverse;
}

.chat-line+.chat-line {
    padding-top: 1rem;
}

.chat-message {
    position: relative;
    display: inline-block;
    background-color: #467fcf;
    color: #fff;
    font-size: 0.875rem;
    padding: .375rem .5rem;
    border-radius: 3px;
    white-space: normal;
    text-align: left;
    margin: 0 .5rem 0 2.5rem;
    line-height: 1.4;
}

.chat-message> :last-child {
    margin-bottom: 0 !important;
}

.chat-message:after {
    content: "";
    position: absolute;
    right: -5px;
    top: 7px;
    border-bottom: 6px solid transparent;
    border-left: 6px solid #467fcf;
    border-top: 6px solid transparent;
}

.chat-message img {
    max-width: 100%;
}

.chat-message p {
    margin-bottom: 1em;
}

.chat-line-friend {
    -ms-flex-direction: row;
    flex-direction: row;
}

.chat-line-friend+.chat-line-friend {
    margin-top: -.5rem;
}

.chat-line-friend+.chat-line-friend .chat-author {
    visibility: hidden;
}

.chat-line-friend+.chat-line-friend .chat-message:after {
    display: none;
}

.chat-line-friend .chat-message {
    background-color: #f3f3f3;
    color: #495057;
    margin-left: .5rem;
    margin-right: 2.5rem;
}

.chat-line-friend .chat-message:after {
    right: auto;
    left: -5px;
    border-left-width: 0;
    border-right: 5px solid #f3f3f3;
}

.example {
    padding: 1.5rem;
    border: 1px solid #e1e0ea;
    border-radius: 3px 3px 0 0;
    font-size: 0.9375rem;
}

.example-bg {
    background: #f4f3f9;
}

.example+.highlight {
    border-top: none;
    margin-top: 0;
    border-radius: 0 0 3px 3px;
}

.highlight {
    margin: 1rem 0 2rem;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    font-size: 0.9375rem;
    max-height: 40rem;
    overflow: auto;
    background: #f4f3f9;
}

.highlight pre {
    margin-bottom: 0;
}

.example-column {
    margin: 0 auto;
}

.example-column>.card:last-of-type {
    margin-bottom: 0;
}

.example-column-1 {
    max-width: 20rem;
}

.example-column-2 {
    max-width: 40rem;
}

.chart-circle-value-3 {
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
    line-height: 1;
}

.chart-circle-value-4 {
    position: absolute;
    top: -66px;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
    line-height: 1;
    font-size: 50px;
}

.chart-circle-value-1 {
    position: absolute;
    top: 0.5rem;
    left: 0;
    right: -10.5rem;
    margin-left: auto;
    margin-right: auto;
    bottom: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-direction: column;
    flex-direction: column;
    line-height: 1;
    font-size: 16px;
}

.carousel-item-background {
    content: '';
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

.model-wrapper-demo {
    padding: 50px 0;
    background: #f4f3f9;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*:before,
*:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

/***** time-line*****/
.timeline__item:after {
    background: #fff !important;
}

.timeline__content {
    background-color: #fff;
    border-radius: 10px;
    display: block;
    padding: 1.25rem;
    position: relative;
}

.tabs-menu ul li a {
    padding: 10px 20px 11px 20px;
    display: block;
}

.tabs-menu ul li .active {
    background: #564fc1;
    color: #fff;
}

.tabs-menu1 ul li a {
    padding: 10px 20px 11px 20px;
    display: block;
}

.tabs-menu-body {
    border: 1px solid #e1e0ea;
}

.tabs-menu-body p:last-child {
    margin-bottom: 0;
}

.tab-menu-heading {
    padding: 20px;
    border: 1px solid #e1e0ea;
    border-bottom: 0;
}

.tab_wrapper .content_wrapper .tab_content.active p:last-child {
    margin-bottom: 0;
}

.tabs-menu2 ul li a {
    color: #636262;
    padding: 10px 20px 11px 20px;
}

.tabs-menu2 ul li .active {
    font-weight: 600;
}

.tabs-menu2 ul li .fade {
    color: #eeee;
}

.item-card .cardbody {
    position: relative;
    padding: 30px 15px;
    border-radius: 0 0 .2rem .2rem;
}

.item-card .cardtitle span {
    display: block;
    font-size: .75rem;
}

.item-card .cardtitle a {
    color: #707070;
    font-weight: 500;
    text-decoration: none;
}

.item-card .cardprice {
    position: absolute;
    top: 30px;
    right: 15px;
}

.item-card .cardprice span {
    display: block;
    color: #707070;
}

.item-card .cardprice span.type--strikethrough {
    opacity: .7;
    text-decoration: line-through;
}

.features {
    overflow: hidden;
}

.features h2 {
    font-weight: 600;
    margin-bottom: 12px;
    text-align: center;
    font-size: 2.2em;
}

.features h3 {
    font-size: 20px;
    font-weight: 600;
}

.features span {
    color: #43414e;
    display: block;
    font-weight: 400;
    text-align: center;
}

.feature .feature-svg {
    width: 25%;
}

.feature .feature-svg3 {
    width: 12%;
}

.col-sm-2 .feature {
    padding: 0;
    border: 0px;
    box-shadow: none;
}

.feature .border {
    position: relative;
    display: inline-block;
    width: 3em;
    height: 3em;
    line-height: 2em;
    vertical-align: middle;
    padding-top: 8px;
    border-radius: 50%;
    color: #fff;
}

.feature p {
    margin-bottom: 0;
}

/*-- rating--*/
.rating-stars {
    width: 100%;
    text-align: center;
}

.rating-stars .rating-stars-container {
    font-size: 0px;
}

.rating-stars .rating-stars-container .rating-star {
    display: inline-block;
    font-size: 32px;
    cursor: pointer;
    padding: 5px 10px;
    color: #e2e1ea;
}

.rating-stars .rating-stars-container .rating-star.sm {
    display: inline-block;
    font-size: 14px;
    color: #e1e0ea;
    cursor: pointer;
    padding: 5px;
}

.rating-stars .rating-stars-container .rating-star.is--active,
.rating-stars .rating-stars-container .rating-star.is--hover {
    color: #f1c40f;
}

.rating-stars .rating-stars-container .rating-star.is--no-hover,
.rating-stars .rating-stars-container .rating-star .fa-heart .is--no-hover {
    color: #f4f3f9;
}

.rating-stars input {
    display: block;
    margin: 0 auto;
    text-align: center;
    padding: 0.375rem 0.75rem;
    font-size: 0.9375rem;
    line-height: 1.6;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

#messages-main {
    position: relative;
    margin: 0 auto;
}

#messages-main:after,
#messages-main:before {
    content: " ";
    display: table;
}

#messages-main .ms-menu {
    position: absolute;
    left: 0;
    top: 0;
    border-right: 1px solid #eee;
    padding-bottom: 50px;
    height: 100%;
    width: 240px;
    background: #fff;
}

#messages-main .ms-user {
    padding: 15px;
    background: #f8f8f8;
}

#messages-main .ms-user>div {
    overflow: hidden;
    padding: 3px 5px 0 15px;
    font-size: 11px;
}

#messages-main #ms-compose {
    position: fixed;
    bottom: 120px;
    z-index: 1;
    right: 30px;
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.14), 0 4px 8px rgba(0, 0, 0, 0.28);
}

@media (max-width: 767px) {
    #messages-main .ms-menu {
        height: calc(100% - 58px);
        display: none;
        z-index: 1;
        top: 58px;
    }

    #messages-main .ms-menu.toggled {
        display: block;
    }

    #messages-main .ms-body {
        overflow: hidden;
    }
}

#ms-menu-trigger {
    user-select: none;
    position: absolute;
    left: 0;
    top: 0;
    width: 50px;
    height: 100%;
    padding-right: 10px;
    padding-top: 19px;
}

#ms-menu-trigger i {
    font-size: 21px;
}

#ms-menu-trigger.toggled i:before {
    content: "";
}

.fc-toolbar:before,
.login-content:after {
    content: "";
}

.message-feed {
    padding: 10px;
}

.message-feed.right>.pull-right {
    margin-left: 15px;
}

.message-feed:not(.right) .mf-content {
    color: #fff;
}

.message-feed.right .mf-content {
    background: #f4f3f9;
}

.mf-content {
    padding: 9px;
    border-radius: 2px;
    display: inline-block;
    max-width: 80%;
    position: relative;
}

.message-feed:not(.right) .mf-content:before {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    left: -20px;
    top: 11px;
}

.message-feed.right .mf-content:before {
    content: '';
    display: block;
    position: absolute;
    border: 10px solid transparent;
    border-left-color: #f4f3f9;
    right: -20px;
    top: 11px;
}

.mf-date {
    display: block;
    margin-top: 7px;
}

.mf-date>i {
    font-size: 14px;
    line-height: 100%;
    position: relative;
    top: 1px;
}

.msb-reply {
    position: relative;
    margin-top: 3px;
    background: #fff;
    padding: 10px;
    border-radius: 0 7px 7px 7px;
}

.four-zero,
.lc-block {
    box-shadow: 0 1px 11px rgba(0, 0, 0, 0.27);
}

.msb-reply textarea {
    width: 100%;
    font-size: 13px;
    border: 0;
    padding: 10px 15px;
    resize: none;
    background: 0 0;
}

.msb-reply button {
    top: 0;
    right: 0;
    border: 0;
    height: 100%;
    width: 60px;
    font-size: 20px;
    color: #fff;
    border-radius: 0 3px 3px 0;
    line-height: 36px;
}

.img-avatar {
    height: 37px;
    border-radius: 2px;
    width: 37px;
}

.list-group.lg-alt .list-group-item {
    border: 0;
}

.p-15 {
    padding: 15px !important;
}

.action-header {
    position: relative;
    background: #f8f8f8;
    padding: 15px 13px 15px 17px;
}

.ah-actions {
    z-index: 3;
    float: right;
    margin-top: 7px;
    position: relative;
}

.actions {
    list-style: none;
    padding: 0;
    margin: 0;
}

.actions>li {
    display: inline-block;
}

.actions:not(.a-alt)>li>a>i {
    color: #939393;
}

.actions>li>a {
    display: block;
    padding: 0 10px;
}

.actions>li>a>i {
    font-size: 20px;
}

.ms-body {
    background: #fff;
    border-radius: 7px;
}

#ms-menu-trigger {
    user-select: none;
    position: absolute;
    left: 0;
    top: 0;
    width: 50px;
    height: 100%;
    padding-right: 10px;
    padding-top: 19px;
    cursor: pointer;
    text-align: right;
}

.message-feed.right {
    text-align: right;
}

#ms-menu-trigger,
.toggle-switch {
    -webkit-user-select: none;
    -moz-user-select: none;
}

.message-feed.media .media-body,
.message-feed.right .media-body {
    overflow: visible;
}

.amcharts-chart-div a,
.canvasjs-chart-container a {
    display: none !important;
}

.rotation {
    -webkit-animation: rotation 2s infinite linear;
}

@-webkit-keyframes rotation {
    from {
        -webkit-transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(359deg);
    }
}

.amChartsLegend.amcharts-legend-div {
    display: none;
}

.input-icon .form-group.is-empty {
    margin-bottom: 0;
}

.input-icon .form-group.is-empty .form-control {
    margin-bottom: 0;
}

/* --------Added--------- css*/
.wizard-card .moving-tab {
    margin-top: 5px;
    background: linear-gradient(to right, #564fc1 0%, #4ac361 100%);
}

.wizard-card.form-group .form-control {
    background-image: linear-gradient(#c4c4c4, #c4c4c4, linear-gradient(#e1e1e2, #e1e1e2));
}

.richText {
    border: #e1e0ea solid 1px;
    background-color: #f4f3f9;
}

.richText .richText-toolbar {
    border-bottom: rgba(156, 162, 161, 0.1) solid 1px;
}

.richText .richText-toolbar ul li a {
    border-right: rgba(156, 162, 161, 0.2) solid 1px;
}

.cal1 {
    font-size: 14px;
}

.cal1 .clndr .clndr-table .header-days .header-day {
    border-left: 1px solid #e2e3e4;
    border-top: 1px solid #e2e3e4;
}

.cal1 .clndr .clndr-table tr .empty,
.cal1 .clndr .clndr-table tr .adjacent-month,
.cal1 .clndr .clndr-table tr .my-empty,
.cal1 .clndr .clndr-table tr .my-adjacent-month {
    border-left: 1px solid #e1e0ea;
    border-top: 1px solid #e1e0ea;
    background: #f4f3f9;
}

.cal1 .clndr .clndr-table tr .day {
    border-left: 1px solid #e1e0ea;
    border-top: 1px solid #e1e0ea;
}

.cal1 .clndr .clndr-table tr .day.event,
.cal1 .clndr .clndr-table tr .day.my-event {
    background: #f4f3f9;
}

.cal1 .clndr .clndr-table tr .day:last-child {
    border-right: 1px solid #e1e0ea;
}

.cal1 .clndr .clndr-table tr .day:hover {
    background: #fcfaff;
}

.cal1 .clndr .clndr-controls .clndr-control-button .clndr-previous-button,
.cal1 .clndr .clndr-controls .clndr-control-button .clndr-next-button {
    color: #fff;
}

.fc button {
    background: #564fc1 !important;
}

.fc-unthemed .fc-content,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-list-heading td,
.fc-unthemed .fc-list-view,
.fc-unthemed .fc-popover,
.fc-unthemed .fc-row,
.fc-unthemed tbody,
.fc-unthemed td,
.fc-unthemed th,
.fc-unthemed thead {
    border-color: #e1e0ea;
}

.fc-event,
.fc-event-dot {
    color: #e1e0ea !important;
}

.fc-unthemed .fc-divider,
.fc-unthemed .fc-list-heading td,
.fc-unthemed .fc-popover .fc-header {
    background: #e2e3e4;
}

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
    background: #b4b4b4;
}

.fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled:focus {
    border: none !important;
    box-shadow: none !important;
}

.fc-unthemed .fc-list-item:hover td {
    background-color: #eeeeee;
}

.conv-form-wrapper div#messages div.message.to {
    background: #f4f3f9;
}

#sidebar li a.active {
    background: #fff;
}

#sidebar li a.active a[data-toggle="collapse"] {
    background: #Fff;
}

.job-box-filter label {
    width: 100%;
}

.job-box-filter select.input-sm {
    display: inline-block;
    max-width: 120px;
    margin: 0 5px;
    border: 1px solid rgba(119, 119, 119, 0.3);
    border-radius: 2px;
    height: 34px;
    font-size: 15px;
}

.job-box-filter label input.form-control {
    max-width: 200px;
    display: inline-block;
    border: 1px solid rgba(119, 119, 119, 0.3);
    border-radius: 2px;
    height: 34px;
    margin-left: 5px;
    font-size: 15px;
}

.text-right {
    text-align: right;
}

.job-box-filter {
    padding: 12px 15px;
    border-bottom: 1px solid #e4e4e4;
}

.job-box {
    display: inline-block;
    width: 100%;
    padding: 0px;
}

.job-box-filter a.filtsec {
    margin-top: 8px;
    display: inline-block;
    margin-right: 15px;
    padding: 4px 10px;
    font-family: 'Open Sans', sans-serif;
    transition: all ease 0.4s;
    background: #edf0f3;
    border-radius: 50px;
    font-size: 13px;
    color: #81a0b1;
    border: 1px solid #e2e8ef;
}

.job-box-filter a.filtsec.active {
    color: #fff;
    background: #16262c;
    border-color: #16262c;
}

.job-box-filter a.filtsec i {
    color: #03A9F4;
    margin-right: 5px;
}

.job-box-filter a.filtsec:hover,
.job-box-filter a.filtsec:focus {
    color: #fff;
    background: #07b107;
    border-color: #07b107;
}

.job-box-filter a.filtsec:hover i,
.job-box-filter a.filtsec:focus i {
    color: #fff;
}

.job-box-filter h4 i {
    margin-right: 10px;
}

/*=====================================
Inbox Message Style
=======================================*/
.inbox-message ul {
    padding: 0;
    margin: 0;
}

.inbox-message ul li {
    list-style: none;
    position: relative;
    padding: 15px 20px;
    border-bottom: 1px solid #e4e4e4;
}

.inbox-message ul li:hover,
.inbox-message ul li:focus {
    background: #eeeeee;
}

.inbox-message .message-avatar {
    position: absolute;
    left: 30px;
    top: 50%;
    transform: translateY(-50%);
}

.message-avatar img {
    display: inline-block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.inbox-message .message-body {
    margin-left: 85px;
    font-size: 15px;
    color: #999999;
}

.message-body-heading h5 {
    font-weight: 600;
    display: inline-block;
    color: #999999;
    margin: 0 0 7px 0;
    padding: 0;
}

.message-body h5 span {
    border-radius: 50px;
    line-height: 14px;
    font-size: 12px;
    color: #fff;
    font-style: normal;
    padding: 4px 10px;
    margin-left: 5px;
    margin-top: -5px;
}

.message-body h5 span.unread {
    background: #07b107;
}

.message-body h5 span.important {
    background: #dd2027;
}

.message-body h5 span.pending {
    background: #11a3dd;
}

.message-body-heading span {
    float: right;
    font-size: 14px;
}

.messages-inbox .message-body p {
    margin: 0;
    padding: 0;
    line-height: 27px;
    font-size: 15px;
}

@media (max-width: 600px) {
    .job-box-filter label {
        width: 100%;
        text-align: center;
    }

    .message-body h5 span.pending,
    .message-body h5 span.unread {
        display: none;
    }
}

/* ----Added css----*/
.addui-slider .addui-slider-track .addui-slider-handle .addui-slider-value {
    background: rgba(111, 63, 115, 0.9) !important;
}

.addui-slider .addui-slider-track .addui-slider-handle.addui-slider-handle-active {
    background: rgba(111, 63, 115, 0.5);
    box-shadow: 0 0 5px rgba(111, 63, 115, 0.5);
}

/* line 77, C:/wamp/www/github/addSlider/src/partials/_addSlider.scss */
.accordionjs .acc_section.acc_active>.acc_head {
    background: #564fc1;
    color: #FFF !important;
}

.tab_wrapper>ul li.active {
    background: #564fc1;
}

.tab_wrapper.right_side>ul li.active:after {
    background: linear-gradient(to right, #564fc1 0%, #564fc1 100%);
}

.timeline__item--right .timeline__content:before {
    border-right: 12px solid rgba(238, 232, 239, 0.9);
}

.timeline__items img {
    border-radius: 7px;
}

.image-size {
    width: 128px;
    height: 128px;
}

.cal1 .clndr .clndr-table tr .day.today:hover,
.cal1 .clndr .clndr-table tr .day.my-today:hover {
    background: #3ac555;
}

.cal1 .clndr .clndr-table tr .empty:hover,
.cal1 .clndr .clndr-table tr .adjacent-month:hover,
.cal1 .clndr .clndr-table tr .my-empty:hover,
.cal1 .clndr .clndr-table tr .my-adjacent-month:hover {
    background: #dcdaf5;
}

/*----chart-drop-shadow----*/
.chart-dropshadow {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(0, 0, 0, 0.1));
    filter: drop-shadow(-6px 12px 4px rgba(0, 0, 0, 0.1));
}

.chart-dropshadow2 {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(0, 0, 0, 0.2));
    filter: drop-shadow(-6px 12px 4px rgba(0, 0, 0, 0.2));
}

.chart-dropshadow-primary {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(86, 78, 193, 0.5));
    filter: drop-shadow(-6px 12px 4px rgba(86, 78, 193, 0.5));
}

.chart-dropshadow-primary-1 {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(86, 78, 193, 0.2));
    filter: drop-shadow(-6px 12px 4px rgba(86, 78, 193, 0.2));
}

.chart-dropshadow-secondary {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(4, 202, 208, 0.2));
    filter: drop-shadow(-6px 12px 4px rgba(4, 202, 208, 0.2));
}

.chart-dropshadow-danger {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(244, 88, 91, 0.5));
    filter: drop-shadow(-6px 12px 4px rgba(244, 88, 91, 0.5));
}

.chart-dropshadow-success {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(69, 213, 85, 0.5));
    filter: drop-shadow(-6px 12px 4px rgba(69, 213, 85, 0.5));
}

.chart-dropshadow-warning {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(251, 141, 52, 0.5));
    filter: drop-shadow(-6px 12px 4px rgba(251, 141, 52, 0.5));
}

.chart-dropshadow-blue {
    -webkit-filter: drop-shadow(-6px 12px 4px rgba(91, 91, 233, 0.5));
    filter: drop-shadow(-6px 12px 4px rgba(91, 91, 233, 0.5));
}

.GradientlineShadow {
    -webkit-filter: drop-shadow(0 -8px 4px rgba(0, 0, 0, 0.2));
    filter: drop-shadow(0 -8px 4px rgba(0, 0, 0, 0.2));
}

.BarChartShadow {
    -webkit-filter: drop-shadow(-4px 9px 4px rgba(0, 0, 0, 0.3));
    filter: drop-shadow(-6px 9px 4px rgba(0, 0, 0, 0.3));
}

.donutShadow {
    -webkit-filter: drop-shadow(-5px 4px 6px rgba(0, 0, 0, 0.5));
    filter: drop-shadow(-1px 0px 2px rgba(159, 120, 255, 0.5));
}

.donutShadow-yellow {
    -webkit-filter: drop-shadow(-5px 4px 6px rgba(0, 0, 0, 0.5));
    filter: drop-shadow(-1px 0px 2px rgba(251, 196, 52, 0.5));
}

.donutShadow-blue {
    -webkit-filter: drop-shadow(-5px 4px 6px rgba(0, 0, 0, 0.5));
    filter: drop-shadow(-1px 0px 2px rgba(36, 72, 135, 0.5));
}

.circle-icon {
    height: 70px;
    width: 70px;
    position: absolute;
    margin-top: 13px;
    margin-left: 13px;
    float: right;
    border-radius: 5px;
}

.square-icon {
    height: 88px;
    width: 81px;
    position: absolute;
    float: right;
    border-radius: 7px 0px 0px 7px;
    line-height: 7;
}

.card-padding {
    padding: 14px 2px 2px 11px;
}

.shadow-primary {
    box-shadow: 0 7px 30px rgba(86, 78, 193, 0.3) !important;
}

.shadow-secondary {
    box-shadow: 0 7px 30px rgba(248, 147, 67, 0.1) !important;
}

.shadow-warning {
    box-shadow: 0 7px 30px rgba(251, 176, 52, 0.1) !important;
}

.shadow-info {
    box-shadow: 0 7px 30px rgba(40, 146, 235, 0.5) !important;
}

.shadow-success {
    box-shadow: 0 7px 30px rgba(26, 122, 16, 0.1) !important;
}

.shadow-danger {
    box-shadow: 0 7px 30px rgba(245, 167, 184, 0.1) !important;
}

.label-size {
    font-size: 3.8em;
    margin-left: 9px;
}

.label-font-size {
    font-size: 1.8em;
}

.label-medium-size {
    font-size: 1.2em;
}

.labels li {
    display: inline;
}

.label-title {
    font-size: 1.125rem;
}

.label-font {
    font-size: 0.8em;
}

.line-divide {
    border: 1px solid rgba(218, 216, 219, 0.2);
}

.bg-round {
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    position: absolute;
}

.activity {
    position: relative;
    border-left: 1px solid rgba(0, 0, 0, 0.125);
    margin-left: 16px;
}

.activity .img-activity {
    width: 25px;
    height: 25px;
    text-align: center;
    line-height: 34px;
    border-radius: 50%;
    position: absolute;
    left: -12px;
    -webkit-box-shadow: 0 0 0 0.5px #f8f9fa;
    box-shadow: 0 0 0 0.5px #f8f9fa;
}

.activity .item-activity {
    margin-left: 40px;
    margin-bottom: 26px;
}

.bg-square {
    color: #fff;
    background: #868e96;
    display: inline-block;
    min-width: 2rem;
    height: 2rem;
    padding: .5rem .25rem;
    text-align: center;
    border-radius: 3px;
    font-weight: 600;
}

.card-items {
    padding: 10px;
}

ul.timeline {
    list-style-type: none;
    position: relative;
}

ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}

ul.timeline>li {
    margin: -5px 42px;
    padding-left: 20px;
}

ul.timeline>li:before {
    content: ' ';
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 1px solid #6c6c6f;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}

.weather-card {
    height: 492px;
    background: #fff;
    overflow: hidden;
}

.weather-card .top {
    position: relative;
    height: 328px;
    width: 100%;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    text-align: center;
}

.weather-card .top .wrapper {
    padding: 30px;
    position: relative;
    z-index: 1;
}

.weather-card .top .wrapper .mynav {
    height: 20px;
}

.weather-card .top .wrapper .mynav .lnr {
    color: #fff;
    font-size: 20px;
}

.weather-card .top .wrapper .mynav .lnr-chevron-left {
    display: inline-block;
    float: left;
}

.weather-card .top .wrapper .mynav .lnr-cog {
    display: inline-block;
    float: right;
}

.weather-card .top .wrapper .heading {
    margin-top: 20px;
    font-size: 35px;
    font-weight: 400;
    color: #fff;
}

.weather-card .top .wrapper .location {
    margin-top: 20px;
    font-size: 21px;
    font-weight: 400;
    color: #fff;
}

.weather-card .top .wrapper .temp {
    margin-top: 20px;
}

.weather-card .top .wrapper .temp a {
    text-decoration: none;
    color: #fff;
}

.weather-card .top .wrapper .temp a .temp-type {
    font-size: 85px;
}

.weather-card .top .wrapper .temp .temp-value {
    display: inline-block;
    font-size: 85px;
    font-weight: 600;
    color: #fff;
}

.weather-card .top .wrapper .temp .deg {
    display: inline-block;
    font-size: 35px;
    font-weight: 600;
    color: #fff;
    vertical-align: top;
    margin-top: 10px;
}

.weather-card .top:after {
    content: "";
    height: 100%;
    width: 100%;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
}

.weather-card .bottom {
    padding: 0 30px;
    background: #fff;
}

.weather-card .bottom .wrapper .forecast {
    overflow: hidden;
    margin: 0;
    font-size: 0;
    padding: 0;
    padding-top: 20px;
    max-height: 155px;
}

.weather-card .bottom .wrapper .forecast a {
    text-decoration: none;
    color: #000;
}

.weather-card .bottom .wrapper .forecast .go-up {
    text-align: center;
    display: block;
    font-size: 25px;
    margin-bottom: 10px;
}

.weather-card .bottom .wrapper .forecast li {
    display: block;
    font-size: 25px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.25);
    line-height: 1em;
    margin-bottom: 30px;
}

.weather-card .bottom .wrapper .forecast li .date {
    display: inline-block;
}

.weather-card .bottom .wrapper .forecast li .condition {
    display: inline-block;
    vertical-align: middle;
    float: right;
    font-size: 25px;
}

.weather-card .bottom .wrapper .forecast li .condition .temp {
    display: inline-block;
    vertical-align: top;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    font-weight: 400;
    padding-top: 2px;
}

.weather-card .bottom .wrapper .forecast li .condition .temp .deg {
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    margin-left: 3px;
    vertical-align: top;
}

.weather-card .bottom .wrapper .forecast li .condition .temp .temp-type {
    font-size: 20px;
}

.weather-card .bottom .wrapper .forecast li.active {
    color: rgba(0, 0, 0, 0.8);
}

.activity .img-activity {
    width: 42px;
    height: 42px;
    text-align: center;
    line-height: 34px;
    border-radius: 50%;
    position: absolute;
    left: -22px;
    -webkit-box-shadow: 0 0 0 0.5px #f8f9fa;
    box-shadow: 0 0 0 0.5px #f8f9fa;
}

.user-profile .box {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
}

.user-profile .box .img {
    width: 120px;
    height: 120px;
    margin: 0 auto;
    border-radius: 50%;
    overflow: hidden;
}

.card .box .img img {
    width: 150px;
    height: 150px;
    border-radius: 100%;
}

.card .box h2 {
    font-size: 20px;
    color: #262626;
    margin: 20px auto;
}

.card .box h2 span {
    font-size: 14px;
    color: #fff;
    display: inline-block;
    padding: 4px 10px;
    border-radius: 15px;
}

.card .box p {
    color: #262626;
}

.container-login100 .box .social-icons {
    position: relative;
}

.container-login100 .box ul {
    margin: 0;
    padding: 0;
}

.container-login100 .box ul li {
    list-style: none;
    float: left;
    padding: 7px 7px;
}

.container-login100 .box ul li a {
    margin: 0 10px;
    font-size: 20px;
    transition: 0.5s;
    text-align: center;
}

.primary .pricing-divider {
    padding: 1em 0 4em;
    position: relative;
}

.secondary .pricing-divider {
    background: linear-gradient(to bottom right, #fbc434 0%, #f66b4e 100%) !important;
    padding: 1em 0 4em;
    position: relative;
}

.info .pricing-divider {
    background: linear-gradient(to bottom right, #f1644b 0%, #f94971 100%) !important;
    padding: 1em 0 4em;
    position: relative;
}

.success .pricing-divider {
    background: linear-gradient(to bottom right, #62fb62 0%, #21a544 100%) !important;
    padding: 1em 0 4em;
    position: relative;
}

.pricing-divider-img {
    position: absolute;
    left: 0;
    width: 100%;
}

.deco-layer {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
}

.img-float {
    width: 50px;
    position: absolute;
    top: -3.5rem;
    right: 1rem;
}

.text-transparent {
    color: #fff;
    opacity: 0.5;
}

.bg-primary-light {
    background: #fff;
    border-radius: 7px;
}

.product-grid6 {
    overflow: hidden;
}

.product-grid6 .product-image6 {
    overflow: hidden;
}

.product-grid6:hover {
    border-radius: 7px;
}

.product-grid6 .product-image6 a {
    display: block;
}

.product-grid6 .product-image6 img {
    width: 100%;
    height: auto;
    transition: all .5s ease 0s;
}

.product-grid6:hover .product-image6 img {
    transform: scale(1.1);
}

.product-grid6 .product-content {
    text-align: center;
    transition: all .5s ease 0s;
    padding: 15px 0 0 0;
}

.product-grid6:hover .product-content {
    opacity: 0;
}

.product-grid6 .title {
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 10px;
    transition: all .3s ease 0s;
    margin-bottom: 7px;
}

.product-grid6 .price {
    font-size: 18px;
    font-weight: 600;
}

.product-grid6 .price span {
    color: #9493a9;
    font-size: 15px;
    font-weight: 400;
    text-decoration: line-through;
    margin-left: 7px;
    display: inline-block;
}

.product-grid6 .icons {
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    left: 0;
    right: 0;
    text-align: center;
    position: absolute;
    bottom: -3px;
    z-index: 1;
    transition: all .5s ease 0s;
}

.product-grid6:hover .icons {
    opacity: 1;
    bottom: 33px;
}

.product-grid6 .icons li {
    display: inline-block;
}

.product-grid6 .icons li a {
    font-size: 16px;
    line-height: 45px;
    text-align: center;
    height: 45px;
    width: 45px;
    margin: 2px 7px;
    border-radius: 50px;
    display: block;
    position: relative;
    transition: all .3s ease-in-out;
}

.product-grid6 .icons li a:hover {
    color: #fff;
    background: #564ec1;
}

.product-grid6 .icons li a:after,
.product-grid6 .icons li a:before {
    content: attr(data-tip);
    color: #fff;
    font-size: 12px;
    letter-spacing: 1px;
    line-height: 20px;
    padding: 1px 5px;
    border-radius: 5px;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -30px;
}

.product-grid6 .icons li a:after {
    content: '';
    height: 15px;
    width: 15px;
    border-radius: 0;
    transform: translateX(-50%) rotate(45deg);
    top: -20px;
    z-index: -1;
}

.product-grid6 .icons li a:hover:after,
.product-grid6 .icons li a:hover:before {
    opacity: 1;
}

.price-detail-wrap .rating-stars {
    text-align: left !important;
}

.input-group-addon {
    padding: 10px 0px 6px 12px;
    width: 38px;
    height: 38px;
    font-size: 20px;
    font-weight: 400;
    line-height: 1 !important;
    color: #555;
    text-align: center;
    border-right: 0;
    border-radius: 4px 0 0 4px;
}

.ribbon1 {
    position: absolute;
    top: -6.1px;
    right: 10px;
    color: #fff;
    z-index: 1;
}

.ribbon1:after {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    border-left: 20px solid transparent;
    border-right: 24px solid transparent;
    border-top: 13px solid #F8463F;
}

.ribbon1 span {
    position: relative;
    display: block;
    text-align: center;
    background: #F8463F;
    font-size: 14px;
    line-height: 1;
    padding: 12px 8px 10px;
    border-top-right-radius: 8px;
}

.ribbon1 span:before,
.ribbon1 span:after {
    position: absolute;
    content: "";
}

.ribbon1 span:before {
    height: 6px;
    width: 6px;
    left: -6px;
    top: 0;
    background: #F8463F;
}

.ribbon1 span:after {
    height: 6px;
    width: 8px;
    left: -8px;
    top: 0;
    border-radius: 8px 8px 0 0;
    background: #C02031;
}

.ribbon {
    position: absolute;
    right: -5px;
    top: -5px;
    z-index: 1;
    overflow: hidden;
    width: 75px;
    height: 75px;
    text-align: right;
}

.ribbon span {
    font-size: 10px;
    font-weight: bold;
    color: #FFF;
    text-transform: uppercase;
    text-align: center;
    line-height: 20px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    width: 100px;
    display: block;
    background: #79A70A;
    background: linear-gradient(#f8463f 0%, #f8463f 100%);
    box-shadow: 0 3px 10px -5px black;
    position: absolute;
    top: 19px;
    right: -21px;
}

.ribbon span::before {
    content: "";
    position: absolute;
    left: 0px;
    top: 100%;
    z-index: -1;
    border-left: 3px solid #f8463f;
    border-right: 3px solid transparent;
    border-bottom: 3px solid transparent;
    border-top: 3px solid #f8463f;
}

.ribbon span::after {
    content: "";
    position: absolute;
    right: 0px;
    top: 100%;
    z-index: -1;
    border-left: 3px solid transparent;
    border-right: 3px solid #f8463f;
    border-bottom: 3px solid transparent;
    border-top: 3px solid #f8463f;
}

.social-card-header {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 96px;
}

.social-card-header i {
    font-size: 32px;
    color: #FFF;
}

.text-facebook {
    color: #3b5998;
}

.bg-google-plus {
    background-color: #dd4b39;
}

.text-google-plus {
    color: #dd4b39;
}

.text-twitter {
    color: #1da1f2;
}

.bg-pinterest {
    background: linear-gradient(to right bottom, #c51629 0%, #bd081c 100%);
}

.text-pinterest {
    color: #bd081c;
}

.card-label {
    border: 0;
}

.card-label.list-group-item {
    border-bottom: 0;
}

.error-template h2 {
    font-size: 3.5rem;
}

.counters h3 {
    font-weight: 400;
}

.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    padding: 20px;
}

.main-box h2 {
    margin: 0 0 15px -20px;
    padding: 5px 0 5px 20px;
    border-left: 10px solid #c2c2c2;
    /*7e8c8d*/
}

/* CONVERSATION */
.conversation-inner {
    padding: 0 0 5px 0;
    margin-right: 10px;
}

.conversation-item {
    padding: 5px 0;
    position: relative;
}

.conversation-user {
    width: 50px;
    height: 50px;
    overflow: hidden;
    float: left;
    border-radius: 50%;
    margin-top: 6px;
}

.conversation-body {
    background: #f5f5f5;
    font-size: 0.875em;
    width: auto;
    margin-left: 60px;
    padding: 8px 10px;
    position: relative;
}

.conversation-body:before {
    border-color: transparent #f5f5f5 transparent transparent;
    border-style: solid;
    border-width: 6px;
    content: "";
    cursor: pointer;
    left: -12px;
    position: absolute;
    top: 25px;
}

.conversation-item.item-right .conversation-body {
    background: #efeef1;
}

.conversation-item.item-right .conversation-body:before {
    border-color: transparent transparent transparent #efeef1;
    left: auto;
    right: -12px;
}

.conversation-item.item-right .conversation-user {
    float: right;
}

.conversation-item.item-right .conversation-body {
    margin-left: 0;
    margin-right: 60px;
}

.conversation-body>.name {
    font-weight: 600;
    font-size: 1.125em;
}

.conversation-body>.time {
    position: absolute;
    font-size: 0.875em;
    right: 10px;
    top: 0;
    margin-top: 10px;
    color: #605f5f;
    font-weight: 300;
}

.conversation-body>.time:before {
    content: "\f017";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
    margin-top: 4px;
    font-size: 0.875em;
}

.conversation-body>.text {
    padding-top: 6px;
}

.conversation-new-message {
    padding-top: 10px;
}

textarea.form-control {
    height: auto;
}

.bg-light-gray {
    background-color: #f4f3f9;
}

.error-page .display-1 {
    font-size: 10.5rem;
    margin-top: 0px;
}

.hor-menu .nav-badge {
    border-radius: 30px;
    position: absolute;
    top: 3px;
    right: 14px;
    padding: 0.2em 0.4em;
    font-size: 12px;
}

@media (max-width: 992px) {
    .hor-menu .nav-badge {
        right: auto !important;
    }
}

.header .form-inline .form-control {
    border-color: rgba(0, 0, 0, 0.1);
    padding-left: 20px;
    width: 650px;
    padding-right: 40px;
    background: rgba(0, 0, 0, 0.3);
    color: #fff !important;
    border-radius: 3px;
}

.header .form-inline .btn {
    border-radius: 0;
    padding: 5px 15px 6px 15px;
    border: 2px solid transparent;
    box-shadow: none;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    background: transparent;
    color: #fff;
    margin-left: -56px;
    font-size: 15px;
    position: absolute;
    top: 3px;
    right: 0;
}

.header .search-element {
    position: relative;
}

@media (max-width: 992px) and (min-width: 768px) {
    .header .form-inline .form-control {
        width: 300px;
    }

    .header-brand-img.desktop-logo {
        margin-top: 4px;
    }
}

@media (max-width: 767.98px) and (min-width: 576px) {
    .header .form-inline .search-element {
        position: absolute;
        top: 8px;
        left: 10px;
        right: 10px;
        z-index: 892;
        display: none;
    }

    .header-brand-img.desktop-logo {
        margin-top: 3px;
    }

    .header .form-inline .form-control {
        color: #000 !important;
    }

    body.search-show .header .form-inline .search-element {
        display: block;
    }

    .header .navsearch i {
        font-size: 20px;
        color: #fff;
    }

    .search-element .form-control {
        float: left;
        width: 100% !important;
        height: 40px;
        margin: 0 auto;
        background: #fff !important;
        color: #000;
    }

    .search-show .search-element {
        display: block;
        left: 0 !important;
        top: 0 !important;
        right: 0;
        width: 100%;
        padding: 10px 13px;
    }

    .header .form-inline .form-control::-webkit-input-placeholder {
        color: #9493a9;
    }

    .header .navsearch i {
        font-size: 20px;
        color: #fff;
        padding-top: 7px;
    }

    .header .form-inline .btn {
        color: #46494a !important;
        padding: 8px 15px 6px 15px;
        position: absolute !important;
        top: 10px !important;
        right: 8px !important;
    }
}

@media (max-width: 1024px) {

    body.search-show,
    body.sidebar-show {
        overflow: hidden;
    }

    body.search-show:before,
    body.sidebar-show:before {
        content: '';
        position: fixed;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        opacity: .6;
        z-index: 1;
    }
}

@media (max-width: 575.98px) {
    body.search-show .header .form-inline .search-element {
        display: block;
    }

    .header .form-inline .search-element .form-control {
        float: left;
        width: 100%;
        height: 40px;
        margin: 0 auto;
        background: #fff;
        border-radius: 0;
    }

    .default-header .header .form-inline .search-element .form-control {
        background: #fff;
    }

    .header .form-inline .form-control {
        color: #000 !important;
    }

    .search-show .search-element {
        display: block;
        left: 0;
        top: 0;
        right: 0;
        width: 100%;
        padding: 10px 13px;
    }

    .form-control.header-search {
        color: #000;
    }

    .header .form-inline .search-element {
        position: absolute;
        z-index: 892;
        display: none;
    }

    .header .form-inline .btn {
        color: #46494a !important;
        position: absolute;
        top: 8px;
        right: 8px;
    }

    .header .form-inline .form-control::-webkit-input-placeholder {
        color: #9493a9 !important;
    }

    .header .navsearch i {
        font-size: 20px;
        color: #fff;
        padding-top: 4px;
    }

    .header .header-brand-img.desktop-logo {
        display: none;
    }

    .header .header-brand-img.mobile-view-logo {
        display: block !important;
        margin-top: 3px;
    }

    .header .navsearch i {
        padding-top: 7px;
    }
}

.server i {
    width: 50px;
    height: 50px;
    font-size: 1.5rem;
    line-height: 50px;
    border-radius: 50%;
    text-align: center;
    position: relative;
}

.icon-size1 {
    font-size: 2.1rem !important;
}

.text-primary-gradient {
    text-transform: uppercase;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-transform: uppercase;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-secondary-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right, #ed6ea0 0%, #fb8d34 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-warning-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right, #f66b4e 0%, #fbc434 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-info-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right bottom, #1e63c3 0%, #00f2fe 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-danger-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right, #f58c45 0%, #FF4B2B 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-success-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right, #21a544 0%, #62fb62 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-facebook-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right bottom, #1e3c72 0%, #3d6cbf 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-twitter-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right bottom, #1e63c3 0%, #00f2fe 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-google-plus-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right bottom, #dd4b39 0%, #ef6a5a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-pinterset-gradient {
    text-transform: uppercase;
    background: linear-gradient(to right bottom, #bd081c 0%, #eb4553 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.sparkline_area {
    position: relative;
    bottom: -3px;
}

@media (max-width: 568px) {
    .header .input-icon .form-control {
        display: block !important;
    }

    .page-main .header {
        top: 55px;
    }

    .chart-toolbar .apexcharts-toolbar {
        top: 23px !important;
    }
}

.highcharts-credits,
.highcharts-button,
.highcharts-data-label,
.highcharts-label {
    display: none;
}

.highcharts-data-label-connector {
    display: none !important;
}

#orders {
    position: relative;
    bottom: -10px;
    height: 102px !important;
    width: 100% !important;
}

#profit {
    position: relative;
    bottom: -13px;
    height: 111px !important;
}

#total-customers {
    position: relative;
    left: -11px;
}

#sales-revenue {
    position: relative;
    bottom: -13px;
}

#resolved-complaints {
    position: relative;
    bottom: -13px;
    left: -4px;
    height: 199px;
}

#areaChart1,
#areaChart2,
#areaChart3,
#areaChart4 {
    height: 7rem !important;
}

.overflow-hidden {
    overflow: hidden;
}

.card-img-holder i {
    font-size: 45px;
}

.widget-progress .progress {
    background-color: rgba(0, 0, 0, 0.1);
}

.bg-progress-white {
    background-color: #eaeceb;
}

.bg-image {
    background: url(../images/photos/seigaiha.png);
}

.widget-card-1 i {
    position: relative;
    bottom: 1px;
    right: 11px;
    border-radius: 5px;
    font-size: 57px;
    color: #fff;
    opacity: 0.5;
}

.widget-card-1 i:hover {
    color: #fff;
    font-size: 80px;
    position: absolute;
    bottom: -10px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.secondary-card {
    position: relative;
    bottom: 20px;
    border-radius: 0;
}

.dot-label {
    width: 10px;
    height: 10px;
    display: inline-block;
    border-radius: 100%;
    margin-right: 5px;
}

@media (max-width: 578px) {
    .m-portlet__head .nav-pills .nav-link {
        font-size: .5rem;
        font-weight: 400;
        padding: .35rem 0.5rem;
    }

    .m-portlet__head .nav-pills .nav-item {
        margin-bottom: 0;
    }

    .m-widget4 .m-widget4__item {
        display: inline-grid !important;
        width: 100%;
    }

    .m-widget4 .m-widget4__item:first-child {
        padding-top: 0 !important;
    }

    .m-widget4 .m-widget4__item:last-child {
        padding-bottom: 0 !important;
    }

    .m-widget4 .m-widget4__item .m-widget4__img {
        text-align: center;
    }

    .m-widget4.m-widget4--progress .m-widget4__info,
    .m-widget4.m-widget4--progress .m-widget4__progress {
        width: 100% !important;
        text-align: center;
        margin-top: 10px;
    }

    .m-widget4 .m-widget4__item .m-widget4__ext {
        width: 100% !important;
        text-align: center;
    }

    .m-widget17__progress-number,
    .m-widget17__progress-label {
        width: 50%;
    }
}

@media (max-width: 768px) {
    .m-widget4.m-widget4--progress .m-widget4__progress {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
        margin-bottom: 20px;
    }

    .dash-1 {
        margin-bottom: 1.5rem;
    }
}

.socailicons i {
    font-size: 126px;
    text-align: right;
    position: absolute;
    top: -21px;
    right: -29px;
    overflow: hidden;
    padding: 12px;
    border-radius: 0 0 0 34%;
    outline: none;
    color: #f1f6fb;
    text-shadow: none;
    z-index: 0;
}

.social-content {
    position: relative;
    z-index: 99;
}

.google-plus1 {
    background: linear-gradient(to right bottom, #dd4b39 0%, #ef6a5a 100%);
}

.pinterest1 {
    background: linear-gradient(to right bottom, #bd081c 0%, #eb4553 100%);
}

@media (max-width: 992px) and (min-width: 768px) {
    #resolved-complaints {
        height: 190px !important;
    }

    #total-coversations {
        height: 168px !important;
    }
}

@media (max-width: 1279px) and (min-width: 993px) {
    #resolved-complaints {
        height: 190px !important;
    }

    #total-coversations {
        height: 171px !important;
    }
}

.icon-icon-shape {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    text-align: center;
}

.icon-icon-shape i {
    font-size: 24px;
    line-height: 2;
}

.header .header-brand-img.mobile-view-logo {
    display: none;
}

.settings {
    content: "\e8c3";
    top: -7px;
    font-size: 18px;
    position: absolute;
    right: 4px;
    font-family: "feather";
    z-index: 1029;
    line-height: 1;
    color: #fff;
    -webkit-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
    -webkit-animation: anim-rotate 1.5s linear infinite;
    animation: anim-rotate 1.5s linear infinite;
}

.setting-1 {
    content: "\62";
    top: 0;
    font-size: 120px;
    position: absolute;
    right: -45px;
    font-family: "pct";
    z-index: 1001;
    line-height: 0;
    color: #04a9f5;
    -webkit-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
    text-shadow: 1px 0 2px rgba(4, 169, 245, 0.9), 3px 0 5px rgba(0, 0, 0, 0.1);
    letter-spacing: -44px;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.wideget-user-desc {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.wideget-user-desc .wideget-user-img img {
    border-radius: 100%;
    margin-right: 2rem;
}

.wideget-user-desc .user-wrap {
    margin-top: 1.5rem;
}

.wideget-user .wideget-user-icons a {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    text-align: center;
    border-radius: 100px;
    line-height: 2rem;
    margin-top: 0.3rem;
}

.wideget-user .wideget-user-icons a:hover {
    color: #fff;
}

.wideget-user-info .wideget-user-warap {
    display: flex;
}

.wideget-user-info .wideget-user-warap h4 {
    font-size: 1.5rem;
    font-weight: 500;
    margin-bottom: 0.4rem;
}

.wideget-user-info .wideget-user-warap .wideget-user-warap-r {
    margin-left: 10rem;
}

.wideget-user-info .wideget-user-rating a {
    font-size: 18px;
}

.wideget-user-tab .tab-menu-heading {
    padding: 0;
    border: 0;
}

.wideget-user-tab .tab-menu-heading .nav li a {
    color: #374254;
    font-size: 15px;
    font-weight: 400;
}

.usertab-list {
    display: inline-block;
}

.usertab-list li {
    width: 50%;
    margin-bottom: 1rem;
    float: left;
}

.wideget-user-tab .tabs-menu1 ul li a {
    padding: 14px 20px 14px 20px;
    display: block;
}

.item-box .item-box-wrap {
    margin-top: 15px;
}

.item-box .stamp i {
    font-size: 18px;
    line-height: 2;
}

.item-box .item-box-wrap h5 {
    font-size: 20px;
    font-weight: 600;
}

.widgets-cards .widgets-cards-data {
    margin-top: 8px;
}

.widgets-cards .widgets-cards-data .wrp p:first-child {
    font-size: 20px;
    font-weight: 600;
}

.card-item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.card-aside-img {
    position: relative;
}

.card-aside-img img {
    width: 80px;
    height: 80px;
    vertical-align: middle;
}

.card-aside-img.wrap-border img {
    border: 1px solid rgba(167, 180, 201, 0.3);
    padding: 3px;
}

.card-aside-img a {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.card-item-desc {
    padding: 15px;
}

.card-item-desc h6 {
    margin-top: 5px;
}

.card-blogs .card {
    border: none;
    box-shadow: none;
}

.card-blogs1 .card {
    box-shadow: none;
    border-bottom: 1px solid rgba(167, 180, 201, 0.3);
    padding-bottom: 15px;
    margin-bottom: 10px;
}

.card-blogs1 .card:last-child {
    box-shadow: none;
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0;
}

.card-blogs1 .card-item-desc .card-item-price .newprice {
    font-weight: 600;
}

.card-blogs1 .card-item-desc .card-item-price .oldprice {
    font-size: 14px;
}

.card-blogs2 .card {
    border: none;
    box-shadow: none;
}

.info-box small {
    font-size: 14px;
}

.info-box-icon {
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0, 0, 0, 0.2);
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    border-radius: 2px;
    margin-bottom: 15px;
    box-shadow: 0 0 0 1px #dce3ec, 0 8px 16px 0 #dce3ec;
}

.info-box-icon>img {
    max-width: 100%;
}

.info-box-content {
    padding: 1.5rem 1.5rem;
    margin-left: 90px;
}

.info-box-number {
    display: block;
}

.info-box-text {
    display: block;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-transform: uppercase;
}

.info-box-more {
    display: block;
}

.bg-dribbble {
    background: linear-gradient(to bottom right, #ea4c89, #c93764) !important;
}

.bg-google {
    background: linear-gradient(to bottom right, #e64522, #c33219) !important;
    color: #fff;
}

.memberblock {
    width: 100%;
    float: left;
    clear: both;
    margin-bottom: 15px;
}

.member {
    width: 100%;
    float: left;
    background: #fff;
    border: 1px solid #e6eaea;
    padding: 3px;
    position: relative;
    overflow: hidden;
    text-decoration: none !important;
}

.memmbername {
    bottom: -30px;
    background: rgba(0, 0, 0, 0.9);
    color: #fff;
    line-height: 30px;
    padding: 0 5px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    text-align: center;
    width: 100%;
    font-size: 11px;
}

.member:hover .memmbername {
    bottom: 0;
}

.member img {
    width: 100%;
}

.header .dropdown-menu {
    padding: 0;
    border: 1px solid #e1e0ea;
    top: 8px !important;
}

.header .bg-image {
    background: linear-gradient(to right bottom, rgba(132, 65, 246, 0.7), rgba(212, 40, 234, 0.7)), url(../images/photos/tornoto.jpg);
    position: relative;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.header .bg-image-2 {
    background: linear-gradient(to right bottom, rgba(251, 196, 52, 0.7), rgba(246, 107, 78, 0.7)), url(../images/photos/tornoto.jpg);
    position: relative;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.header .bg-image-3 {
    background: linear-gradient(to right bottom, rgba(98, 251, 92, 0.6), rgba(33, 165, 6, 0.6)), url(../images/photos/tornoto.jpg);
    position: relative;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.header .bg-image a:hover {
    background: transparent !important;
}

#particles-js {
    position: absolute;
    height: 100%;
    left: 0;
    right: 0;
    width: 100%;
    top: 0;
    bottom: 0;
}

.relative {
    position: relative !important;
}

.construction .btn.btn-icon {
    width: 50px;
    height: 50px;
    text-align: center;
    padding: 0;
    background: transparent;
    font-size: 20px;
    color: #fff;
    margin: 0 3px;
}

.floating {
    animation: floating 3s ease infinite;
    will-change: transform;
}

.floating:hover {
    animation-play-state: paused;
}

.floating-lg {
    animation: floating-lg 3s ease infinite;
}

.floating-sm {
    animation: floating-sm 3s ease infinite;
}

@keyframes floating-lg {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(15px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(10px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating-sm {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(5px);
    }

    100% {
        transform: translateY(0px);
    }
}

.error-page {
    position: relative;
}

/*---about us---*/
.statistics-info .counter-icon {
    margin-bottom: 0.5rem;
    display: inline-flex;
    width: 4rem;
    height: 4rem;
    padding: 1.3rem 1.4rem;
    border-radius: 50%;
    text-align: center;
}

.statistics-info .counter-icon i {
    font-size: 1.2rem;
}

.service .item-box i {
    font-size: 35px;
}

/*--home2 category effect--*/
.item-card-img {
    overflow: hidden;
}

/*--item-card2-img--*/
.item-card2-img {
    position: relative;
    overflow: hidden;
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;
}

/*
.item-card2-img a{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}
*/
.item-card2-desc ul li {
    margin-right: 1.5rem;
    font-size: 13px;
}

.item-card2-desc ul li:last-child {
    margin-right: 0;
}

/*--item-card2--*/
.item-card2-icons {
    position: absolute;
    top: 20px;
    right: 15px;
    z-index: 999;
}

.item-card2-icons a {
    width: 2rem;
    display: inline-block;
    height: 2rem;
    text-align: center;
    border-radius: 100px;
    line-height: 2.1rem;
    border-radius: 50px;
    color: #fff;
}

/*--item-list--*/
.item-list .list-group-item {
    border: 0;
    margin-bottom: 0;
    border-bottom: 1px solid rgba(167, 180, 201, 0.3);
}

.item-list .list-group-item i {
    margin-right: 5px;
    width: 25px;
    height: 25px;
    border-radius: 2px;
    font-size: 12px;
    text-align: center;
    line-height: 25px;
    color: #fff !important;
}

/*--item-user--*/
.item-user .item-user-icons a {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    text-align: center;
    border-radius: 100px;
    line-height: 2rem;
    margin-top: 0.3rem;
}

.item-user .item-user-icons a:hover {
    color: #fff;
}

.border-danger {
    border: 1px solid #04cad0;
}

.productdec {
    background: #f2faff;
}

.productdesc .list-unstyled li {
    border-bottom: 0 !important;
    margin-bottom: 18px;
}

.productdesc .tab-content i {
    color: inherit;
}

.productdesc-1 .list-unstyled li {
    border-bottom: 0 !important;
    margin-bottom: 5px;
}

.cart .input-group-prepend>.btn,
.input-group-append>.btn,
.input-group-btn>.btn {
    height: 100%;
    border-color: transparant;
}

.input-indec .input-group-btn>.btn {
    height: 100%;
    border-color: #e1e0ea;
}

.gallery a img {
    float: left;
    height: auto;
    border: 1px solid rgba(0, 0, 0, 0.2);
    -webkit-transition: -webkit-transform .15s ease;
    -moz-transition: -moz-transform .15s ease;
    -o-transition: -o-transform .15s ease;
    -ms-transition: -ms-transform .15s ease;
    transition: transform .15s ease;
    position: relative;
}

.mcs-horizontal-example {
    overflow-x: auto;
    white-space: nowrap;
}

.mcs-horizontal-example .item {
    display: inline-block;
}

.hover15 .card {
    position: relative;
}

.hover15 .card::before {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    display: block;
    content: '';
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 100%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    opacity: 0;
}

.hover15 .card:hover::before {
    -webkit-animation: circle .75s;
    animation: circle .75s;
}

@-webkit-keyframes circle {
    0% {
        opacity: 1;
    }

    40% {
        opacity: 1;
    }

    100% {
        width: 200%;
        height: 200%;
        opacity: 0;
    }
}

@keyframes circle {
    0% {
        opacity: 1;
    }

    40% {
        opacity: 1;
    }

    100% {
        width: 200%;
        height: 200%;
        opacity: 0;
    }
}

.notifications .dropdown-menu-arrow:before,
.message .dropdown-menu-arrow:before,
.profile-1 .dropdown-menu-arrow:before {
    border-color: transparent transparent #fff transparent !important;
}

.drop-heading {
    padding: 1rem 1rem;
}

/*---chat---*/
/*--chat--*/
.chat {
    margin-bottom: auto;
}

.chat .card {
    height: 600px;
}

.chat .card-header {
    padding: 1rem;
}

.contacts_body {
    white-space: nowrap;
}

.msg_card_body {
    overflow-y: auto;
}

.contacts_body .contacts {
    list-style: none;
    padding: 0;
}

.contacts_body .contacts li {
    width: 100% !important;
    padding: 15px;
    border-bottom: 1px solid #e1e0ea;
}

.contacts_body .active {
    background-color: #f4f3f9;
}

.chatbox .user_img {
    height: 50px;
    width: 50px;
    border: 1.5px solid #f5f6fa;
}

.chatbox .user_img_msg {
    height: 40px;
    width: 40px;
    border: 1.5px solid #f5f6fa;
}

.chatbox .img_cont {
    position: relative;
    height: 50px;
    width: 50px;
}

.chatbox .img_cont_msg {
    height: 40px;
    width: 40px;
    display: contents;
}

.chat-box-single-line {
    height: 12px;
    margin: 7px 0 30px;
    position: relative;
    text-align: center;
}

.chat abbr.timestamp {
    padding: 4px 14px;
    background: #dbf0f7;
    border-radius: 4px;
}

.chatbox .user_info {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 15px;
}

.chatbox .user_info span {
    color: #464444;
}

.chatbox .action-header small {
    font-size: 10px;
}

.chat .video_cam {
    margin-left: 50px;
    margin-top: 5px;
}

.chat .video_cam span {
    color: white;
    font-size: 20px;
    cursor: pointer;
    margin-right: 20px;
}

.chat .msg_cotainer {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 10px;
    background-color: #f4f3f9;
    padding: 10px;
    position: relative;
}

.chat .msg_cotainer_send {
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 10px;
    background-color: #e2e0ec;
    padding: 10px;
    position: relative;
}

.chat .msg_time {
    position: absolute;
    left: 0;
    bottom: -18px;
    color: #7886a0;
    font-size: 10px;
}

.chat .msg_time_send {
    position: absolute;
    right: 0;
    bottom: -18px;
    color: #7886a0;
    font-size: 10px;
}

.chat .msg_head {
    position: relative;
    box-shadow: 0 1px 15px 1px rgba(58, 58, 62, 0.4);
}

#action_menu_btn {
    position: absolute;
    right: 36px;
    top: 21px;
    color: white;
    cursor: pointer;
    font-size: 20px;
}

.action_menu {
    z-index: 1;
    position: absolute;
    padding: 15px 0;
    background-color: #fff;
    color: #646367;
    top: 40px;
    right: 15px;
    display: none;
}

.action_menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.chat .action-header {
    position: relative;
    background: #fff;
    padding: 15px 13px 15px 17px;
    border-bottom: 1px solid #e1e0ea;
}

.chat .dropdown-menu.dropdown-menu-right.show {
    width: 100%;
    margin-bottom: 5px;
    position: absolute;
    transform: translate3d(-176px, 22px, 0px);
    top: 10px !important;
    left: 0px;
    will-change: transform;
}

.chat .msb-reply textarea {
    width: 100%;
    font-size: 13px;
    padding: 12px 47px;
    resize: none;
    height: 44px;
    border: 1px solid #e1e0ea;
    background: #f4f3f9;
    margin-left: -42px;
    color: #9493a9;
}

.msb-reply button {
    position: absolute;
    top: 10px;
    right: 4px;
    border: 0;
    height: 44px;
    width: 44px;
    font-size: 20px;
    color: #fff;
    background: #564fc1;
}

.chat .attach_btn {
    background: transparent;
    border: 0 !important;
    cursor: pointer;
    z-index: 1000;
    margin-left: 0px;
}

.chat .dropdown-menu li {
    padding: 7px;
    color: #121029;
}

.chat .dropdown-menu li:hover {
    background: #f4f3f9;
}

.chat .dropdown-menu li i {
    padding: 7px;
}

.action_menu ul li:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.2);
}

.chat .actions>li {
    display: inline-block;
    margin-top: 15px;
}

.chat .actions:not(.a-alt)>li>a>i {
    color: #121029;
}

.chat .justify-content-start,
.chat .justify-content-end {
    margin-bottom: 30px;
}

.contacts_body {
    overflow-y: auto;
    white-space: nowrap;
    max-height: 510px;
}

.countdown span:first-child {
    font-size: 2rem;
    font-weight: 700;
}

/*PMboYSIqMee+p4uAjskftSrErYaF9PDNDn+EGSzR9N2BspYI8=
feCz66HNQhyoUIndT6pXQpWta+PA3e1h3yExMyH1EsOo6f8PXnNPyHGLRfchOSF9WSX7exs=*/
@media (max-width: 992px) {
    .footer-social-list {
        text-align: center;
        margin-top: 1rem;
    }

    .footer1 {
        text-align: center;
    }

    .header .container,
    .container.content-area {
        max-width: none;
    }
}

@media (max-width: 988px) {
    .note-toolbar {
        display: block !important;
    }
}

#smartwizard .nav.nav-tabs.step-anchor {
    border-bottom: 0 !important;
    padding: 30px;
}

#smartwizard .nav-tabs {
    border-top: 0 !important;
}

#smartwizard .nav-link {
    padding: 15px 40px;
}

.sw-theme-dots .nav-tabs .nav-link:hover:not(.disabled) {
    background: transparent;
}

.accordion-wizard .badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 0;
}

.avatar-group .avatar {
    position: relative;
    z-index: 0;
}

.avatar-group .avatar:hover {
    z-index: 3;
}

.avatar-group .avatar+.avatar {
    margin-left: -0.8rem;
}

.avatar-group .avatar-sm {
    font-size: .875rem;
    width: 32px;
    height: 32px;
}

.avatar-group .avatar {
    background: transparent !important;
}

#basicwizard .nav-tabs .nav-link {
    padding: .80rem .80rem;
}

.leading-loose {
    line-height: 3 !important;
}

/*----Timeline---*/
.cbp_tmtimeline {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative;
}

.cbp_tmtimeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 3px;
    background: #e4e6e8;
    left: 20%;
    margin-left: -6px;
}

.cbp_tmtimeline>li {
    position: relative;
}

.cbp_tmtimeline>li:first-child .cbp_tmtime span.large {
    font-size: 17px !important;
    font-weight: 700;
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmtime span:last-child {
    font-size: 13px;
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel {
    background: #fff;
}

.cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
    border-right-color: #fff;
}

.cbp_tmtimeline>li .empty span {
    color: #121029;
}

.cbp_tmtimeline>li .cbp_tmtime {
    display: block;
    width: 21%;
    padding-right: 70px;
    position: absolute;
}

.cbp_tmtimeline>li .cbp_tmtime span {
    display: block;
    text-align: right;
}

.cbp_tmtimeline>li .cbp_tmtime span:first-child {
    font-size: 15px;
    font-weight: 700;
}

.cbp_tmtimeline>li .cbp_tmtime span:last-child {
    font-size: 14px;
}

.cbp_tmtimeline>li .cbp_tmlabel {
    margin: 0 0 30px 25%;
    background: #fff;
    padding: 1.2em;
    position: relative;
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
}

.cbp_tmtimeline>li .cbp_tmlabel:after {
    right: 100%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-right-color: #fff;
    border-width: 10px;
    top: 10px;
}

.cbp_tmtimeline>li .cbp_tmlabel blockquote {
    font-size: 16px;
}

.cbp_tmtimeline>li .cbp_tmlabel .map-checkin {
    border: 5px solid rgba(235, 235, 235, 0.2);
    -moz-box-shadow: 0px 0px 0px 1px #ebebeb;
    -webkit-box-shadow: 0px 0px 0px 1px #ebebeb;
    box-shadow: 0px 0px 0px 1px #ebebeb;
    background: #3d3780 !important;
}

.cbp_tmtimeline>li .cbp_tmlabel h2 {
    margin: 0px;
    padding: 0 0 5px 0;
    line-height: 26px;
    font-size: 18px;
    font-weight: 600;
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a {
    font-size: 15px;
}

.cbp_tmtimeline>li .cbp_tmlabel h2 a:hover {
    text-decoration: none;
}

.cbp_tmtimeline>li .cbp_tmlabel h2 span {
    font-size: 15px;
}

.cbp_tmtimeline>li .cbp_tmlabel p {
    margin-bottom: 0;
}

.cbp_tmtimeline>li .cbp_tmicon {
    width: 40px;
    height: 40px;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    font-size: 1.4em;
    line-height: 40px;
    -webkit-font-smoothing: antialiased;
    position: absolute;
    color: #fff;
    background: #46a4da;
    border-radius: 50%;
    text-align: center;
    left: 20%;
    top: 0;
    margin: 0 0 0 -25px;
}

.cbp_tmtimeline .map {
    padding-top: 0 !important;
}

@media screen and (max-width: 992px) and (min-width: 768px) {
    .cbp_tmtimeline>li .cbp_tmtime {
        padding-right: 60px;
        width: 25%;
    }

    .cbp_tmtimeline>li .cbp_tmicon {
        left: 23%;
    }

    .cbp_tmtimeline:before {
        left: 23%;
    }

    .cbp_tmtimeline>li .cbp_tmlabel {
        margin: 0 0 15px 30%;
    }
}

@media screen and (max-width: 65.375em) {
    .cbp_tmtimeline>li .cbp_tmtime span:last-child {
        font-size: 12px;
    }
}

@media screen and (max-width: 47.2em) {
    .cbp_tmtimeline:before {
        display: none;
    }

    .cbp_tmtimeline>li .cbp_tmtime {
        width: 100%;
        position: relative;
        padding: 0 0 20px 0;
    }

    .cbp_tmtimeline>li .cbp_tmtime span {
        text-align: left;
    }

    .cbp_tmtimeline>li .cbp_tmlabel {
        margin: 0 0 30px 0;
        padding: 1em;
        font-weight: 400;
        font-size: 95%;
    }

    .cbp_tmtimeline>li .cbp_tmlabel:after {
        right: auto;
        left: 20px;
        border-right-color: transparent;
        border-bottom-color: #fff;
        top: -20px;
    }

    .cbp_tmtimeline>li .cbp_tmicon {
        position: relative;
        float: right;
        left: auto;
        margin: -64px 5px 0 0px;
    }

    .cbp_tmtimeline>li:nth-child(odd) .cbp_tmlabel:after {
        border-right-color: transparent;
        border-bottom-color: #fff;
    }
}

.team {
    height: 15rem;
}

.header-1 .navbar .nav-link.nav-link-lg i {
    font-size: 1.1rem;
    width: 2.2rem;
    height: 2.2rem;
    border-radius: 50%;
    color: #323c53;
    line-height: 32px;
    margin: 0 auto;
    text-align: center;
}

.header-1 .nav-link .badge {
    position: absolute;
    top: -2px;
    right: 6px;
    width: 1rem;
    height: 1rem;
    font-size: 11px;
    text-align: center !important;
    padding: 0.25em 0.4em;
    line-height: 1;
}

.header-1 .badge {
    border-radius: 50%;
}

.header-1 .form-inline .btn {
    border-radius: 0;
    padding: 5px 15px 6px 15px;
    border: 2px solid transparent;
    box-shadow: none;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    background: transparent;
    color: #323c53;
    margin-left: -56px;
    font-size: 15px;
}

.header-1 .form-control.header-search {
    color: #323c53;
}

.header-1 .form-inline .form-control::-webkit-input-placeholder {
    color: #9493a9;
}

.header-1 .animated-arrow span {
    display: none;
}

.animated-arrow span:before,
.animated-arrow span:after {
    display: none;
}

@media only screen and (max-width: 991px) {
    .header-1 .animated-arrow span {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #323c53;
        position: absolute;
        display: block;
        content: '';
    }

    .animated-arrow span:before,
    .animated-arrow span:after {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #323c53;
        position: absolute;
        display: block;
        content: '';
    }

    .header-1 .animated-arrow span {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #323c53;
        position: absolute;
        display: block;
        content: '';
    }

    .animated-arrow span:before,
    .animated-arrow span:after {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #323c53;
        position: absolute;
        display: block;
        content: '';
    }

    .header-1 .hor-toggle.animated-arrow {
        margin: 11px 0 0 0px !important;
    }

    .header-1 .animated-arrow {
        cursor: pointer;
        padding: 33px 29px 15px 7px;
        margin: 11px 0 0 -11px;
    }

    .header-1 .navbar .nav-link.nav-link-lg i {
        font-size: 1.1rem;
        width: 2.2rem;
        height: 2.2rem;
        border-radius: 50%;
        color: #323c53;
        line-height: 39px;
        margin: 0 auto;
        text-align: center;
        padding: 0px 42px 0px 10px;
    }

    .header-1 .nav-link .badge {
        position: absolute;
        top: -7px;
        width: 1rem;
        height: 1rem;
        font-size: 11px;
        text-align: center !important;
        padding: 0.25em 0.4em;
        line-height: 1;
    }
}

.navbar-nav {
    flex-direction: initial !important;
}

.header-1 .nav-link.icon i {
    color: #fff !important;
}

@media only screen and (max-width: 991px) {
    .header-1 .animated-arrow span {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #fff;
        color: #fff;
        position: absolute;
        display: block;
        content: '';
    }

    .header-1 .animated-arrow span:before,
    .header-1 .animated-arrow span:after {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #fff;
        color: #fff;
        position: absolute;
        display: block;
        content: '';
    }
}

/*--header-2--*/
/*PMboYSIqMee+p4uAjskftSrErYaF9PDNDn+EGSzR9N2BspYI8=
feCz66HNQhyoUIndT6pXQpWta+PA3e1h3yExMyH1EsOo6f8PXnNPyHGLRfchOSF9WSX7exs=*/
.header-2 .nav-link .badge {
    position: absolute;
    top: -10px;
    right: 10px;
    width: 1rem;
    height: 1rem;
    font-size: 11px;
    text-align: center !important;
    padding: 0.25em 0.4em;
    line-height: 1;
    border-radius: 50%;
}

.header-2 .nav-link i {
    display: block;
    text-align: center;
    font-size: 20px;
    position: relative;
    color: #fff;
}

.header-2 .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.9rem;
    padding-left: 0.9rem;
}

.header-2 .form-inline .btn {
    border-radius: 0;
    padding: 5px 15px 6px 15px;
    border: 2px solid transparent;
    box-shadow: none;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    background: transparent;
    color: #323c53;
    margin-left: -56px;
    font-size: 15px;
}

.header-2 .form-inline .form-control::-webkit-input-placeholder {
    color: #9493a9;
}

.header-2 .form-control.header-search {
    background: rgba(225, 225, 225, 0.4);
    border: 1px solid rgba(225, 225, 225, 0.1);
    color: #fff;
    padding: 0.375rem 0.75rem;
    margin-top: 4px;
}

@media only screen and (max-width: 1279px) and (min-width: 1025px) {
    .horizontal-main2 .horizontalMenu>.horizontalMenu-list>li>a {
        display: block;
        padding: 1rem 0.7rem 1rem;
        text-decoration: none;
        position: relative;
        margin: 0px;
        color: #fcfeff;
    }
}

@media (max-width: 1024px) and (min-width: 992px) {
    .horizontal-main2 .horizontalMenu>.horizontalMenu-list>li>a {
        padding: 1rem 0.8rem 1rem !important;
        font-size: 14px;
    }
}

@media only screen and (max-width: 991px) {
    .header-2 .animated-arrow {
        cursor: pointer;
        padding: 22px 33px 3px 0px;
        margin: 11px 0 0 -11px;
    }

    .header-2 .animated-arrow span {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #fff;
        color: #fff;
        position: absolute;
        display: block;
        content: '';
    }

    .header-2 .animated-arrow span:before,
    .header-2 .animated-arrow span:after {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #fff;
        color: #fff;
        position: absolute;
        display: block;
        content: '';
    }

    .header-2 .nav-link .badge {
        position: absolute;
        top: -14px;
        right: 6px;
        width: 1rem;
        height: 1rem;
        font-size: 11px;
        text-align: center !important;
        padding: 0.25em 0.4em;
        line-height: 1;
        border-radius: 50%;
    }

    .header-2 .navbar-nav .dropdown-menu {
        position: absolute;
        float: right;
    }

    .header-2 .dropdown-menu.dropdown-menu-right {
        position: absolute;
        transform: translate3d(-98px, 19px, -16px);
        top: 24px;
        left: 0px;
        will-change: transform;
    }
}

.horizontal-main2 .horizontalMenu>.horizontalMenu-list>li>a.active {
    color: #fff;
    background: rgba(225, 225, 225, 0.06);
}

.horizontal-main2.horizontal-main {
    width: 100%;
    position: relative;
    background: #0b2239;
    border-top: 0;
}

@media only screen and (max-width: 460px) {
    .header-2 .navbar-nav .envelope {
        display: none !important;
    }
}

/*--header-3--*/
.header-3 .nav-link .badge {
    position: absolute;
    top: -10px;
    right: 10px;
    width: 1rem;
    height: 1rem;
    font-size: 11px;
    text-align: center !important;
    padding: 0.25em 0.4em;
    line-height: 1;
    border-radius: 50%;
}

.header-3 .nav-link i {
    display: block;
    text-align: center;
    font-size: 20px;
    position: relative;
    color: #323c53;
}

.header-3 .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.9rem;
    padding-left: 0.9rem;
}

.header-3 .form-inline .btn {
    border-radius: 0;
    padding: 5px 15px 6px 15px;
    border: 2px solid transparent;
    box-shadow: none;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
    background: transparent;
    color: #323c53;
    margin-left: -56px;
    font-size: 15px;
}

.header-3 .form-inline .form-control::-webkit-input-placeholder {
    color: #9493a9;
}

.header-3 .form-control.header-search {
    background: rgba(225, 225, 225, 0.4);
    border: 1px solid rgba(225, 225, 225, 0.1);
    color: #fff;
    padding: 0.375rem 0.75rem;
    margin-top: 4px;
}

@media only screen and (max-width: 1279px) and (min-width: 1025px) {
    .horizontal-main3 .horizontalMenu>.horizontalMenu-list>li>a {
        display: block;
        padding: 1rem 0.7rem 1rem;
        text-decoration: none;
        position: relative;
        margin: 0px;
        color: #fcfeff;
    }
}

@media only screen and (max-width: 1279px) and (min-width: 992px) {
    #orders {
        position: relative;
        bottom: -6px;
        height: 102px !important;
        width: 100% !important;
        left: -6px;
    }
}

@media (max-width: 1024px) and (min-width: 992px) {
    .horizontal-main3 .horizontalMenu>.horizontalMenu-list>li>a {
        padding: 1rem 0.8rem 1rem !important;
        font-size: 14px;
    }
}

@media only screen and (max-width: 991px) {
    .header-3 .animated-arrow {
        cursor: pointer;
        padding: 32px 33px 3px 0px;
        margin: 11px 0 0 -11px;
    }

    .header-3 .animated-arrow span {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #323c53;
        color: #323c53;
        position: absolute;
        display: block;
        content: '';
    }

    .header-3 .animated-arrow span:before,
    .header-3 .animated-arrow span:after {
        cursor: pointer;
        height: 2px;
        width: 17px;
        background: #323c53;
        color: #323c53;
        position: absolute;
        display: block;
        content: '';
    }

    .header-3 .nav-link .badge {
        position: absolute;
        top: -14px;
        right: 6px;
        width: 1rem;
        height: 1rem;
        font-size: 11px;
        text-align: center !important;
        padding: 0.25em 0.4em;
        line-height: 1;
        border-radius: 50%;
    }

    .header-3 .navbar-nav .dropdown-menu {
        position: absolute;
        float: right;
    }

    .header-3 .dropdown-menu.dropdown-menu-right {
        position: absolute;
        transform: translate3d(-98px, 19px, -16px);
        top: 24px;
        left: 0px;
        will-change: transform;
    }
}

.horizontal-main3.horizontal-main {
    width: 100%;
    position: relative;
    background: rgba(52, 1, 108, 0.8);
    border-top: 0;
}

@media only screen and (max-width: 460px) {
    .header-3 .navbar-nav .envelope {
        display: none !important;
    }
}

@media screen and (max-width: 998px) and (min-width: 768px) {

    .note-popover .popover-content,
    .card-header.note-toolbar {
        padding: 14px 0 5px 5px !important;
        margin: 0;
        background: #f4f3f9;
    }
}

@media only screen and (max-width: 490px) {
    #smartwizard .nav-link {
        padding: 15px 21px;
    }
}

@media (max-width: 495px) {
    .nested-media .media {
        display: block;
    }
}

.widget-drop .dropdown-menu {
    position: absolute;
    transform: translate3d(-156px, 31px, 0px) !important;
    top: 0px;
    left: 0px;
    will-change: transform;
    min-width: 80px;
}

.widget-drop .button:focus {
    border-color: transparant !important;
}

.default-1-header .form-inline .form-control,
.header2 .form-inline .form-control,
.header3 .form-inline .form-control {
    background: #f6f9fc !important;
}

.border-right-1 {
    border-right: 1px solid #d5dce3;
}

.custom-switch {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: default;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-align: center;
    align-items: center;
    margin: 0;
}

.custom-switch-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.custom-switches-stacked {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}

.custom-switches-stacked .custom-switch {
    margin-bottom: .5rem;
}

.custom-switch-indicator {
    display: inline-block;
    height: 1.25rem;
    width: 2.25rem;
    background: #e9ecef;
    border-radius: 50px;
    position: relative;
    vertical-align: bottom;
    border: 1px solid rgba(0, 0, 0, 0.1);
    transition: .3s border-color, .3s background-color;
}

.custom-switch-indicator:before {
    content: '';
    position: absolute;
    height: calc(1.25rem - 4px);
    width: calc(1.25rem - 4px);
    top: 1px;
    left: 1px;
    background: #fff;
    border-radius: 50%;
    transition: .3s left;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
}

.custom-switch-input:checked~.custom-switch-indicator:before {
    left: calc(1rem + 1px);
}

.custom-switch-input:focus~.custom-switch-indicator {
    box-shadow: 0 0 0 2px rgba(70, 127, 207, 0.25);
}

.custom-switch-description {
    margin-left: .5rem;
    color: #6e7687;
    transition: .3s color;
}

.custom-switch-input:checked~.custom-switch-description {
    color: #495057;
}

.material-switch>input[type="checkbox"] {
    display: none;
}

.material-switch>label {
    cursor: pointer;
    height: 0px;
    position: relative;
    width: 40px;
}

.material-switch>label::before {
    background: #f2f7fb;
    box-shadow: inset 0px 0px 10px #a1b5c5;
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position: absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 40px;
}

.material-switch>label::after {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0px 0px 5px #a1b5c5;
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}

.material-switch>input[type="checkbox"]:checked+label::before {
    background: inherit;
    opacity: 0.5;
}

.material-switch>input[type="checkbox"]:checked+label::after {
    background: inherit;
    left: 20px;
}

.label-default {
    background: #d5e0ec;
}

.label-success {
    background: #21c44c;
}

.label-danger {
    background: #f5334f;
}

.label-warning {
    background: #f7b731;
}

.label-info {
    background: #26c2f7;
}

.fixed-header {
    position: fixed !important;
    left: 0;
    right: 0;
    margin: 0 auto;
    z-index: 10;
}

.fixed-header.visible-title {
    top: 0;
}

.fixed-header.visible-title.horizontal-main {
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.15) !important;
    background: #32067b;
}

.absolute-image1 img {
    position: absolute;
    top: 190px;
    left: -300px;
    display: block;
    width: 50%;
    animation: floating 3s ease infinite;
    will-change: transform;
}

.absolute-image2 img {
    position: absolute;
    right: -300px;
    display: block;
    width: 50%;
    animation: floating 3s ease infinite;
    will-change: transform;
}

@media (max-width: 568px) {
    .hor-toggle.animated-arrow {
        padding: 22px 35px 16px 0px !important;
    }
}

@media (max-width: 992px) {
    .absolute-image1 img {
        left: -50px;
    }

    .absolute-image2 img {
        right: -50px;
        top: 82px;
    }

    .page-main:after {
        border-radius: 0;
    }
}

@media (min-width: 480px) and (max-width: 992px) {
    .header-settings .nav-link.icon span .avatar.mb-0 {
        margin-bottom: 0.25rem !important;
    }
}

/** Sticky styless **/
.sticky {
    width: 100%;
}

.sticky-pin {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1;
}

/*--bg-transparents--*/
.bg-success-transparent {
    background-color: rgba(0, 230, 130, 0.1);
}

.bg-secondary-transparent {
    background-color: rgba(4, 202, 208, 0.1);
}

.bg-primary-transparent {
    background-color: rgba(86, 78, 193, 0.1);
}

.bg-info-transparent {
    background-color: rgba(0, 214, 230, 0.1);
}

.bg-warning-transparent {
    background-color: rgba(255, 162, 43, 0.1);
}

.bg-danger-transparent {
    background-color: rgba(255, 56, 43, 0.1);
}

.bg-pink-transparent {
    background-color: rgba(255, 43, 136, 0.1);
}

.bg-purple-transparent {
    background-color: rgba(96, 77, 216, 0.1);
}

.bg-dark-transparent {
    background-color: rgba(55, 66, 84, 0.1);
}

/*PMboYSIqMee+p4uAjskftSrErYaF9PDNDn+EGSzR9N2BspYI8=
feCz66HNQhyoUIndT6pXQpWta+PA3e1h3yExMyH1EsOo6f8PXnNPyHGLRfchOSF9WSX7exs=*/
/*sidebar tabs*/
.sidebar .tabs-menu ul li .active {
    color: #fff;
    border-radius: 3px;
}

.sidebar .tabs-menu ul li a {
    margin: 3px 0px 3px 10px;
}

.sidebar ul li a {
    padding: 8px 9px;
    margin: 3px 0px 3px 14px;
    display: block;
    border: 1px solid #e1e0ea;
    line-height: 17px;
    border-radius: 3px;
    color: #2e384d;
}

.sidebar .tab-menu-heading {
    padding: 15px 0 !important;
}

.chat {
    margin-bottom: auto;
}

.chat .card {
    height: 650px;
}

.chat .card-header {
    padding: 1rem;
}

.contacts_body {
    padding: 0.75rem 0 !important;
    overflow-y: auto;
    white-space: nowrap;
}

.msg_card_body {
    overflow-y: auto;
}

.chat .container {
    align-content: center;
}

.chat .search {
    background-color: #f4f3f9 !important;
    border: 0 !important;
    color: #121029 !important;
}

.chat .search:focus {
    box-shadow: none !important;
    outline: 0px !important;
}

.chat .type_msg {
    background-color: #f4f3f9 !important;
    border: 0 !important;
    color: white !important;
    overflow-y: auto;
}

.chat.type_msg:focus {
    box-shadow: none !important;
    outline: 0px !important;
}

.chat .attach_btn {
    background: transparent;
    border: 0 !important;
    cursor: pointer;
    z-index: 1000;
    margin-left: 0px;
}

.chat .send_btn {
    background-color: #f4f3f9 !important;
    border: 0 !important;
    cursor: pointer;
}

.chat .search_btn {
    border: 0 !important;
    cursor: pointer;
    color: #fff !important;
    cursor: pointer;
}

.chat .contacts {
    list-style: none;
    padding: 0;
}

.chat .contacts li {
    width: 100% !important;
    padding: 15px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.07);
}

.chat .active {
    background-color: #f4f3f9;
}

.user_img {
    height: 50px;
    width: 50px;
    border: 1.5px solid #f5f6fa;
}

.user_img_msg {
    height: 40px;
    width: 40px;
    border: 1.5px solid #f5f6fa;
}

.img_cont {
    position: relative;
    height: 50px;
    width: 50px;
}

.img_cont_msg {
    height: 40px;
    width: 40px;
    display: contents;
}

.online_icon {
    position: absolute;
    height: 12px;
    width: 12px;
    background-color: #00C851;
    border-radius: 50%;
    bottom: 0.2em;
    right: 0.4em;
    border: 1.5px solid white;
}

.offline {
    background-color: #ff6666 !important;
}

.chat-box-single-line {
    height: 12px;
    margin: 7px 0 30px;
    position: relative;
    text-align: center;
}

.chat abbr.timestamp {
    padding: 4px 14px;
    background: #f4f3f9;
    border-radius: 4px;
}

.user_info {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 15px;
}

.user_info span {
    color: #464444;
}

.chat .action-header small {
    font-size: 10px;
}

.tab-social {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    vertical-align: middle;
    text-align: center;
    border-radius: 3px;
    margin: 0 auto;
}

.header .sidebar-link .nav-link.icon {
    padding-right: 0;
    margin-right: 0;
    padding-top: 11px;
}

.content-area {
    min-height: 75vh;
}

#widgetChart1,
#widgetChart2 {
    width: 115% !important;
    height: 178px !important;
    bottom: -15px;
    position: relative;
    left: -30px;
}

#statistics {
    height: 178px !important;
}

.chart-back {
    position: absolute;
}

#bouncerate,
#sessions,
#pageviews,
#users {
    height: 80px !important;
    position: relative;
    bottom: 13px;
    right: 15px;
}

.feature .icon {
    border-radius: 3px;
}

.accordionjs .acc_section.acc_active>.acc_head h3 {
    color: #fff;
}

@media (max-width: 1366px) and (min-width: 992px) {
    .header .form-inline .form-control {
        width: 350px;
    }
}

@media (max-width: 320px) {
    .number-font.display-4 {
        font-size: 1.5rem;
    }
}

.header-style2 .page-title {
    color: #121029;
}

@media (min-width: 992px) {
    .header.hor-top-header .header-brand .desktop-logo {
        display: none;
    }

    .header.hor-top-header .header-brand.header-brand2 .desktop-logo {
        display: block;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
    }

    .header.hor-top-header .form-inline .form-control {
        padding-left: 20px;
        width: 300px;
    }
}

@media (max-width: 991px) {
    .header.hor-top-header .header-brand.header-brand2 .desktop-logo {
        display: none;
    }
}

@media (max-width: 575.98px) {
    .header.hor-top-header .header-brand.header-brand2 .header-brand-img.mobile-view-logo {
        display: none !important;
    }
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.2rem;
    padding-left: 1.5rem;
}

.custom-control-inline {
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 1rem;
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: 0 0 0 1px #f4f3f9, 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.custom-control-input:active~.custom-control-label::before {
    color: #fff;
    background-color: rgba(218, 201, 232, 0.5);
}

.custom-control-input:disabled~.custom-control-label {
    color: #868e96;
}

.custom-control-input:disabled~.custom-control-label::before {
    background-color: #e9ecef;
}

.custom-control-label {
    margin-bottom: 0;
}

.custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #e1e0ea;
}

.custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%;
}

.custom-checkbox .custom-control-label::before {
    border-radius: 3px;
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E");
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(163, 149, 175, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
    background-color: rgba(212, 182, 228, 0.5);
}

.custom-radio .custom-control-label::before {
    border-radius: 50%;
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(163, 149, 175, 0.5);
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: 2.375rem;
    padding: 0.5rem 1.75rem 0.5rem 0.75rem;
    line-height: 1.5;
    color: #9493a9;
    vertical-align: middle;
    background: #f4f3f9 url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 5'%3E%3Cpath fill='#999' d='M0 0L10 0L5 5L0 0'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
    background-size: 8px 10px;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.custom-select:focus {
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(98, 58, 162, 0.5);
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff;
}

.custom-select[multiple],
.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none;
}

.custom-select:disabled {
    color: #868e96;
    background-color: #e9ecef;
}

.custom-select::-ms-expand {
    opacity: 0;
}

.custom-select-sm {
    height: calc(1.8125rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    font-size: 75%;
}

div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto;
    height: calc(1.8125rem + 2px);
}

.custom-select-lg {
    height: calc(2.6875rem + 2px);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    font-size: 125%;
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 2.375rem;
    margin-bottom: 0;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 2.375rem;
    margin: 0;
    opacity: 0;
}

.custom-file-input:focus~.custom-file-label {
    border-color: #1991eb;
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.custom-file-input:focus~.custom-file-label::after {
    border-color: #1991eb;
}

.custom-file-input:lang(en)~.custom-file-label::after {
    content: "Browse";
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 0;
    height: 2.375rem;
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    background-color: #f4f3f9;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(2.375rem - 1px * 2);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #fff;
    content: "Browse";
    border-left: 1px solid #e1e0ea;
    border-radius: 0 3px 3px 0;
}

.custom-range {
    width: 100%;
    padding-left: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.custom-range:focus {
    outline: none;
}

.custom-range::-moz-focus-outer {
    border: 0;
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    border: 0;
    border-radius: 1rem;
    -webkit-appearance: none;
    appearance: none;
}

.custom-range::-webkit-slider-thumb:focus {
    outline: none;
    box-shadow: 0 0 0 1px #f4f3f9, 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #d4e1f4;
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #e1e0ea;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    border: 0;
    border-radius: 1rem;
    -moz-appearance: none;
    appearance: none;
}

.custom-range::-moz-range-thumb:focus {
    outline: none;
    box-shadow: 0 0 0 1px #f4f3f9, 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.custom-range::-moz-range-thumb:active {
    background-color: #d4e1f4;
}

.custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #e1e0ea;
    border-color: transparent;
    border-radius: 1rem;
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    border: 0;
    border-radius: 1rem;
    appearance: none;
}

.custom-range::-ms-thumb:focus {
    outline: none;
    box-shadow: 0 0 0 1px #f4f3f9, 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.custom-range::-ms-thumb:active {
    background-color: #d4e1f4;
}

.custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
    background-color: #e1e0ea;
    border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #e1e0ea;
    border-radius: 1rem;
}

.custom-range {
    -ms-flex-align: center;
    align-items: center;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: none;
    cursor: pointer;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    min-height: 2.375rem;
    overflow: hidden;
    padding: 0;
    border: 0;
}

.custom-range:focus {
    box-shadow: none;
    outline: none;
}

.custom-range:focus::-webkit-slider-thumb,
.custom-range:focus::-moz-range-thumb,
.custom-range:focus::-ms-thumb {
    border-color: #467fcf;
    background-color: #467fcf;
}

.custom-range::-moz-focus-outer {
    border: 0;
}

.custom-range::-webkit-slider-runnable-track {
    background: #467fcf;
    content: '';
    height: 2px;
    pointer-events: none;
}

.custom-range::-webkit-slider-thumb {
    width: 14px;
    height: 14px;
    -webkit-appearance: none;
    appearance: none;
    background: #fff;
    border-radius: 50px;
    box-shadow: 1px 0 0 -6px rgba(0, 50, 126, 0.12), 6px 0 0 -6px rgba(0, 50, 126, 0.12), 7px 0 0 -6px rgba(0, 50, 126, 0.12), 8px 0 0 -6px rgba(0, 50, 126, 0.12), 9px 0 0 -6px rgba(0, 50, 126, 0.12), 10px 0 0 -6px rgba(0, 50, 126, 0.12), 11px 0 0 -6px rgba(0, 50, 126, 0.12), 12px 0 0 -6px rgba(0, 50, 126, 0.12), 13px 0 0 -6px rgba(0, 50, 126, 0.12), 14px 0 0 -6px rgba(0, 50, 126, 0.12), 15px 0 0 -6px rgba(0, 50, 126, 0.12), 16px 0 0 -6px rgba(0, 50, 126, 0.12), 17px 0 0 -6px rgba(0, 50, 126, 0.12), 18px 0 0 -6px rgba(0, 50, 126, 0.12), 19px 0 0 -6px rgba(0, 50, 126, 0.12), 20px 0 0 -6px rgba(0, 50, 126, 0.12), 21px 0 0 -6px rgba(0, 50, 126, 0.12), 22px 0 0 -6px rgba(0, 50, 126, 0.12), 23px 0 0 -6px rgba(0, 50, 126, 0.12), 24px 0 0 -6px rgba(0, 50, 126, 0.12), 25px 0 0 -6px rgba(0, 50, 126, 0.12), 26px 0 0 -6px rgba(0, 50, 126, 0.12), 27px 0 0 -6px rgba(0, 50, 126, 0.12), 28px 0 0 -6px rgba(0, 50, 126, 0.12), 29px 0 0 -6px rgba(0, 50, 126, 0.12), 30px 0 0 -6px rgba(0, 50, 126, 0.12), 31px 0 0 -6px rgba(0, 50, 126, 0.12), 32px 0 0 -6px rgba(0, 50, 126, 0.12), 33px 0 0 -6px rgba(0, 50, 126, 0.12), 34px 0 0 -6px rgba(0, 50, 126, 0.12), 35px 0 0 -6px rgba(0, 50, 126, 0.12), 36px 0 0 -6px rgba(0, 50, 126, 0.12), 37px 0 0 -6px rgba(0, 50, 126, 0.12), 38px 0 0 -6px rgba(0, 50, 126, 0.12), 39px 0 0 -6px rgba(0, 50, 126, 0.12), 40px 0 0 -6px rgba(0, 50, 126, 0.12), 41px 0 0 -6px rgba(0, 50, 126, 0.12), 42px 0 0 -6px rgba(0, 50, 126, 0.12), 43px 0 0 -6px rgba(0, 50, 126, 0.12), 44px 0 0 -6px rgba(0, 50, 126, 0.12), 45px 0 0 -6px rgba(0, 50, 126, 0.12), 46px 0 0 -6px rgba(0, 50, 126, 0.12), 47px 0 0 -6px rgba(0, 50, 126, 0.12), 48px 0 0 -6px rgba(0, 50, 126, 0.12), 49px 0 0 -6px rgba(0, 50, 126, 0.12), 50px 0 0 -6px rgba(0, 50, 126, 0.12), 51px 0 0 -6px rgba(0, 50, 126, 0.12), 52px 0 0 -6px rgba(0, 50, 126, 0.12), 53px 0 0 -6px rgba(0, 50, 126, 0.12), 54px 0 0 -6px rgba(0, 50, 126, 0.12), 55px 0 0 -6px rgba(0, 50, 126, 0.12), 56px 0 0 -6px rgba(0, 50, 126, 0.12), 57px 0 0 -6px rgba(0, 50, 126, 0.12), 58px 0 0 -6px rgba(0, 50, 126, 0.12), 59px 0 0 -6px rgba(0, 50, 126, 0.12), 60px 0 0 -6px rgba(0, 50, 126, 0.12), 61px 0 0 -6px rgba(0, 50, 126, 0.12), 62px 0 0 -6px rgba(0, 50, 126, 0.12), 63px 0 0 -6px rgba(0, 50, 126, 0.12), 64px 0 0 -6px rgba(0, 50, 126, 0.12), 65px 0 0 -6px rgba(0, 50, 126, 0.12), 66px 0 0 -6px rgba(0, 50, 126, 0.12), 67px 0 0 -6px rgba(0, 50, 126, 0.12), 68px 0 0 -6px rgba(0, 50, 126, 0.12), 69px 0 0 -6px rgba(0, 50, 126, 0.12), 70px 0 0 -6px rgba(0, 50, 126, 0.12), 71px 0 0 -6px rgba(0, 50, 126, 0.12), 72px 0 0 -6px rgba(0, 50, 126, 0.12), 73px 0 0 -6px rgba(0, 50, 126, 0.12), 74px 0 0 -6px rgba(0, 50, 126, 0.12), 75px 0 0 -6px rgba(0, 50, 126, 0.12), 76px 0 0 -6px rgba(0, 50, 126, 0.12), 77px 0 0 -6px rgba(0, 50, 126, 0.12), 78px 0 0 -6px rgba(0, 50, 126, 0.12), 79px 0 0 -6px rgba(0, 50, 126, 0.12), 80px 0 0 -6px rgba(0, 50, 126, 0.12), 81px 0 0 -6px rgba(0, 50, 126, 0.12), 82px 0 0 -6px rgba(0, 50, 126, 0.12), 83px 0 0 -6px rgba(0, 50, 126, 0.12), 84px 0 0 -6px rgba(0, 50, 126, 0.12), 85px 0 0 -6px rgba(0, 50, 126, 0.12), 86px 0 0 -6px rgba(0, 50, 126, 0.12), 87px 0 0 -6px rgba(0, 50, 126, 0.12), 88px 0 0 -6px rgba(0, 50, 126, 0.12), 89px 0 0 -6px rgba(0, 50, 126, 0.12), 90px 0 0 -6px rgba(0, 50, 126, 0.12), 91px 0 0 -6px rgba(0, 50, 126, 0.12), 92px 0 0 -6px rgba(0, 50, 126, 0.12), 93px 0 0 -6px rgba(0, 50, 126, 0.12), 94px 0 0 -6px rgba(0, 50, 126, 0.12), 95px 0 0 -6px rgba(0, 50, 126, 0.12), 96px 0 0 -6px rgba(0, 50, 126, 0.12), 97px 0 0 -6px rgba(0, 50, 126, 0.12), 98px 0 0 -6px rgba(0, 50, 126, 0.12), 99px 0 0 -6px rgba(0, 50, 126, 0.12), 100px 0 0 -6px rgba(0, 50, 126, 0.12), 101px 0 0 -6px rgba(0, 50, 126, 0.12), 102px 0 0 -6px rgba(0, 50, 126, 0.12), 103px 0 0 -6px rgba(0, 50, 126, 0.12), 104px 0 0 -6px rgba(0, 50, 126, 0.12), 105px 0 0 -6px rgba(0, 50, 126, 0.12), 106px 0 0 -6px rgba(0, 50, 126, 0.12), 107px 0 0 -6px rgba(0, 50, 126, 0.12), 108px 0 0 -6px rgba(0, 50, 126, 0.12), 109px 0 0 -6px rgba(0, 50, 126, 0.12), 110px 0 0 -6px rgba(0, 50, 126, 0.12), 111px 0 0 -6px rgba(0, 50, 126, 0.12), 112px 0 0 -6px rgba(0, 50, 126, 0.12), 113px 0 0 -6px rgba(0, 50, 126, 0.12), 114px 0 0 -6px rgba(0, 50, 126, 0.12), 115px 0 0 -6px rgba(0, 50, 126, 0.12), 116px 0 0 -6px rgba(0, 50, 126, 0.12), 117px 0 0 -6px rgba(0, 50, 126, 0.12), 118px 0 0 -6px rgba(0, 50, 126, 0.12), 119px 0 0 -6px rgba(0, 50, 126, 0.12), 120px 0 0 -6px rgba(0, 50, 126, 0.12), 121px 0 0 -6px rgba(0, 50, 126, 0.12), 122px 0 0 -6px rgba(0, 50, 126, 0.12), 123px 0 0 -6px rgba(0, 50, 126, 0.12), 124px 0 0 -6px rgba(0, 50, 126, 0.12), 125px 0 0 -6px rgba(0, 50, 126, 0.12), 126px 0 0 -6px rgba(0, 50, 126, 0.12), 127px 0 0 -6px rgba(0, 50, 126, 0.12), 128px 0 0 -6px rgba(0, 50, 126, 0.12), 129px 0 0 -6px rgba(0, 50, 126, 0.12), 130px 0 0 -6px rgba(0, 50, 126, 0.12), 131px 0 0 -6px rgba(0, 50, 126, 0.12), 132px 0 0 -6px rgba(0, 50, 126, 0.12), 133px 0 0 -6px rgba(0, 50, 126, 0.12), 134px 0 0 -6px rgba(0, 50, 126, 0.12), 135px 0 0 -6px rgba(0, 50, 126, 0.12), 136px 0 0 -6px rgba(0, 50, 126, 0.12), 137px 0 0 -6px rgba(0, 50, 126, 0.12), 138px 0 0 -6px rgba(0, 50, 126, 0.12), 139px 0 0 -6px rgba(0, 50, 126, 0.12), 140px 0 0 -6px rgba(0, 50, 126, 0.12), 141px 0 0 -6px rgba(0, 50, 126, 0.12), 142px 0 0 -6px rgba(0, 50, 126, 0.12), 143px 0 0 -6px rgba(0, 50, 126, 0.12), 144px 0 0 -6px rgba(0, 50, 126, 0.12), 145px 0 0 -6px rgba(0, 50, 126, 0.12), 146px 0 0 -6px rgba(0, 50, 126, 0.12), 147px 0 0 -6px rgba(0, 50, 126, 0.12), 148px 0 0 -6px rgba(0, 50, 126, 0.12), 149px 0 0 -6px rgba(0, 50, 126, 0.12), 150px 0 0 -6px rgba(0, 50, 126, 0.12), 151px 0 0 -6px rgba(0, 50, 126, 0.12), 152px 0 0 -6px rgba(0, 50, 126, 0.12), 153px 0 0 -6px rgba(0, 50, 126, 0.12), 154px 0 0 -6px rgba(0, 50, 126, 0.12), 155px 0 0 -6px rgba(0, 50, 126, 0.12), 156px 0 0 -6px rgba(0, 50, 126, 0.12), 157px 0 0 -6px rgba(0, 50, 126, 0.12), 158px 0 0 -6px rgba(0, 50, 126, 0.12), 159px 0 0 -6px rgba(0, 50, 126, 0.12), 160px 0 0 -6px rgba(0, 50, 126, 0.12), 161px 0 0 -6px rgba(0, 50, 126, 0.12), 162px 0 0 -6px rgba(0, 50, 126, 0.12), 163px 0 0 -6px rgba(0, 50, 126, 0.12), 164px 0 0 -6px rgba(0, 50, 126, 0.12), 165px 0 0 -6px rgba(0, 50, 126, 0.12), 166px 0 0 -6px rgba(0, 50, 126, 0.12), 167px 0 0 -6px rgba(0, 50, 126, 0.12), 168px 0 0 -6px rgba(0, 50, 126, 0.12), 169px 0 0 -6px rgba(0, 50, 126, 0.12), 170px 0 0 -6px rgba(0, 50, 126, 0.12), 171px 0 0 -6px rgba(0, 50, 126, 0.12), 172px 0 0 -6px rgba(0, 50, 126, 0.12), 173px 0 0 -6px rgba(0, 50, 126, 0.12), 174px 0 0 -6px rgba(0, 50, 126, 0.12), 175px 0 0 -6px rgba(0, 50, 126, 0.12), 176px 0 0 -6px rgba(0, 50, 126, 0.12), 177px 0 0 -6px rgba(0, 50, 126, 0.12), 178px 0 0 -6px rgba(0, 50, 126, 0.12), 179px 0 0 -6px rgba(0, 50, 126, 0.12), 180px 0 0 -6px rgba(0, 50, 126, 0.12), 181px 0 0 -6px rgba(0, 50, 126, 0.12), 182px 0 0 -6px rgba(0, 50, 126, 0.12), 183px 0 0 -6px rgba(0, 50, 126, 0.12), 184px 0 0 -6px rgba(0, 50, 126, 0.12), 185px 0 0 -6px rgba(0, 50, 126, 0.12), 186px 0 0 -6px rgba(0, 50, 126, 0.12), 187px 0 0 -6px rgba(0, 50, 126, 0.12), 188px 0 0 -6px rgba(0, 50, 126, 0.12), 189px 0 0 -6px rgba(0, 50, 126, 0.12), 190px 0 0 -6px rgba(0, 50, 126, 0.12), 191px 0 0 -6px rgba(0, 50, 126, 0.12), 192px 0 0 -6px rgba(0, 50, 126, 0.12), 193px 0 0 -6px rgba(0, 50, 126, 0.12), 194px 0 0 -6px rgba(0, 50, 126, 0.12), 195px 0 0 -6px rgba(0, 50, 126, 0.12), 196px 0 0 -6px rgba(0, 50, 126, 0.12), 197px 0 0 -6px rgba(0, 50, 126, 0.12), 198px 0 0 -6px rgba(0, 50, 126, 0.12), 199px 0 0 -6px rgba(0, 50, 126, 0.12), 200px 0 0 -6px rgba(0, 50, 126, 0.12), 201px 0 0 -6px rgba(0, 50, 126, 0.12), 202px 0 0 -6px rgba(0, 50, 126, 0.12), 203px 0 0 -6px rgba(0, 50, 126, 0.12), 204px 0 0 -6px rgba(0, 50, 126, 0.12), 205px 0 0 -6px rgba(0, 50, 126, 0.12), 206px 0 0 -6px rgba(0, 50, 126, 0.12), 207px 0 0 -6px rgba(0, 50, 126, 0.12), 208px 0 0 -6px rgba(0, 50, 126, 0.12), 209px 0 0 -6px rgba(0, 50, 126, 0.12), 210px 0 0 -6px rgba(0, 50, 126, 0.12), 211px 0 0 -6px rgba(0, 50, 126, 0.12), 212px 0 0 -6px rgba(0, 50, 126, 0.12), 213px 0 0 -6px rgba(0, 50, 126, 0.12), 214px 0 0 -6px rgba(0, 50, 126, 0.12), 215px 0 0 -6px rgba(0, 50, 126, 0.12), 216px 0 0 -6px rgba(0, 50, 126, 0.12), 217px 0 0 -6px rgba(0, 50, 126, 0.12), 218px 0 0 -6px rgba(0, 50, 126, 0.12), 219px 0 0 -6px rgba(0, 50, 126, 0.12), 220px 0 0 -6px rgba(0, 50, 126, 0.12), 221px 0 0 -6px rgba(0, 50, 126, 0.12), 222px 0 0 -6px rgba(0, 50, 126, 0.12), 223px 0 0 -6px rgba(0, 50, 126, 0.12), 224px 0 0 -6px rgba(0, 50, 126, 0.12), 225px 0 0 -6px rgba(0, 50, 126, 0.12), 226px 0 0 -6px rgba(0, 50, 126, 0.12), 227px 0 0 -6px rgba(0, 50, 126, 0.12), 228px 0 0 -6px rgba(0, 50, 126, 0.12), 229px 0 0 -6px rgba(0, 50, 126, 0.12), 230px 0 0 -6px rgba(0, 50, 126, 0.12), 231px 0 0 -6px rgba(0, 50, 126, 0.12), 232px 0 0 -6px rgba(0, 50, 126, 0.12), 233px 0 0 -6px rgba(0, 50, 126, 0.12), 234px 0 0 -6px rgba(0, 50, 126, 0.12), 235px 0 0 -6px rgba(0, 50, 126, 0.12), 236px 0 0 -6px rgba(0, 50, 126, 0.12), 237px 0 0 -6px rgba(0, 50, 126, 0.12), 238px 0 0 -6px rgba(0, 50, 126, 0.12), 239px 0 0 -6px rgba(0, 50, 126, 0.12), 240px 0 0 -6px rgba(0, 50, 126, 0.12);
    margin-top: -6px;
    border: 1px solid rgba(0, 30, 75, 0.12);
    transition: .3s border-color, .3s background-color;
}

.custom-range::-moz-range-track {
    width: 240px;
    height: 2px;
    background: rgba(0, 50, 126, 0.12);
}

.custom-range::-moz-range-thumb {
    width: 14px;
    height: 14px;
    background: #fff;
    border-radius: 50px;
    border: 1px solid rgba(0, 30, 75, 0.12);
    position: relative;
    transition: .3s border-color, .3s background-color;
}

.custom-range::-moz-range-progress {
    height: 2px;
    background: #467fcf;
    border: 0;
    margin-top: 0;
}

.custom-range::-ms-track {
    background: transparent;
    border: 0;
    border-color: transparent;
    border-radius: 0;
    border-width: 0;
    color: transparent;
    height: 2px;
    margin-top: 10px;
    width: 240px;
}

.custom-range::-ms-thumb {
    width: 240px;
    height: 2px;
    background: #fff;
    border-radius: 50px;
    border: 1px solid rgba(0, 30, 75, 0.12);
    transition: .3s border-color, .3s background-color;
}

.custom-range::-ms-fill-lower {
    background: #467fcf;
    border-radius: 0;
}

.custom-range::-ms-fill-upper {
    background: rgba(0, 50, 126, 0.12);
    border-radius: 0;
}

.custom-range::-ms-tooltip {
    display: none;
}

.selectgroup {
    display: -ms-inline-flexbox;
    display: inline-flex;
}

.selectgroup-item {
    -ms-flex-positive: 1;
    flex-grow: 1;
    position: relative;
}

.selectgroup-item+.selectgroup-item {
    margin-left: -1px;
}

.selectgroup-item:not(:first-child) .selectgroup-button {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.selectgroup-item:not(:last-child) .selectgroup-button {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.selectgroup-input {
    opacity: 0;
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
}

.selectgroup-button {
    display: block;
    border: 1px solid #e1e0ea;
    text-align: center;
    padding: 0.375rem 1rem;
    position: relative;
    cursor: pointer;
    border-radius: 3px;
    color: #9aa0ac;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-size: 0.9375rem;
    line-height: 1.5rem;
    min-width: 2.375rem;
}

.selectgroup-button-icon {
    padding-left: .5rem;
    padding-right: .5rem;
    font-size: 1rem;
}

.selectgroup-input:checked+.selectgroup-button {
    z-index: 1;
    background: #f4f3f9;
}

.selectgroup-input:focus+.selectgroup-button {
    z-index: 2;
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.selectgroup-pills {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: start;
    align-items: flex-start;
}

.selectgroup-pills .selectgroup-item {
    margin-right: .5rem;
    -ms-flex-positive: 0;
    flex-grow: 0;
}

.selectgroup-pills .selectgroup-button {
    border-radius: 50px !important;
}

.custom-switch {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: default;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-align: center;
    align-items: center;
    margin: 0;
}

.custom-switch-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.custom-switches-stacked {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
}

.custom-switches-stacked .custom-switch {
    margin-bottom: .5rem;
}

.custom-switch-indicator {
    display: inline-block;
    height: 1.25rem;
    width: 2.25rem;
    background: #e9ecef;
    border-radius: 50px;
    position: relative;
    vertical-align: bottom;
    border: 1px solid #e1e0ea;
    transition: .3s border-color, .3s background-color;
}

.custom-switch-indicator:before {
    content: '';
    position: absolute;
    height: calc(1.25rem - 4px);
    width: calc(1.25rem - 4px);
    top: 1px;
    left: 1px;
    background: #fff;
    border-radius: 50%;
    transition: .3s left;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.4);
}

.custom-switch-input:checked~.custom-switch-indicator:before {
    left: calc(1rem + 1px);
}

.custom-switch-input:focus~.custom-switch-indicator {
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
    border-color: #7c46a8;
}

.custom-switch-description {
    margin-left: .5rem;
    color: #6e7687;
    transition: .3s color;
}

.custom-switch-input:checked~.custom-switch-description {
    color: #495057;
}

.imagecheck {
    margin: 0;
    position: relative;
    cursor: pointer;
}

.imagecheck-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.imagecheck-figure {
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    margin: 0;
    position: relative;
}

.imagecheck-input:focus~.imagecheck-figure {
    border-color: #467fcf;
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
}

.imagecheck-input:checked~.imagecheck-figure {
    border-color: rgba(0, 40, 100, 0.24);
}

.imagecheck-figure:before {
    content: '';
    position: absolute;
    top: .25rem;
    left: .25rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background: #467fcf url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") no-repeat center center/50% 50%;
    color: #fff;
    z-index: 1;
    border-radius: 3px;
    opacity: 0;
    transition: .3s opacity;
}

.imagecheck-input:checked~.imagecheck-figure:before {
    opacity: 1;
}

.imagecheck-image {
    max-width: 100%;
    opacity: .64;
    transition: .3s opacity;
}

.imagecheck-image:first-child {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.imagecheck-image:last-child {
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
}

.imagecheck:hover .imagecheck-image {
    opacity: 1;
}

.imagecheck-input:focus~.imagecheck-figure .imagecheck-image,
.imagecheck-input:checked~.imagecheck-figure .imagecheck-image {
    opacity: 1;
}

.imagecheck-caption {
    text-align: center;
    padding: .25rem .25rem;
    color: #9aa0ac;
    font-size: 0.875rem;
    transition: .3s color;
}

.imagecheck:hover .imagecheck-caption {
    color: #495057;
}

.imagecheck-input:focus~.imagecheck-figure .imagecheck-caption,
.imagecheck-input:checked~.imagecheck-figure .imagecheck-caption {
    color: #495057;
}

.colorinput {
    margin: 0;
    position: relative;
    cursor: pointer;
}

.colorinput-input {
    position: absolute;
    z-index: -1;
    opacity: 0;
}

.colorinput-color {
    display: inline-block;
    width: 1.75rem;
    height: 1.75rem;
    border-radius: 3px;
    border: 1px solid #e1e0ea;
    color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.colorinput-color:before {
    content: '';
    opacity: 0;
    position: absolute;
    top: .25rem;
    left: .25rem;
    height: 1.25rem;
    width: 1.25rem;
    transition: .3s opacity;
    background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E") no-repeat center center/50% 50%;
}

.colorinput-input:checked~.colorinput-color:before {
    opacity: 1;
}

.colorinput-input:focus~.colorinput-color {
    border-color: #e1e0ea;
    box-shadow: 0 0 0 2px rgba(98, 58, 162, 0.25);
}

@media (max-width: 1279px) {
    .wideget-user-info .wideget-user-warap {
        margin-top: 2rem !important;
    }
}

@media (max-width: 360px) {
    .wideget-user-desc .wideget-user-img {
        width: 130px;
        height: 130px;
    }

    .wideget-user-desc .user-wrap {
        margin-top: 0.7rem !important;
        margin-left: 13px;
    }

    .wideget-user-info .wideget-user-warap .wideget-user-warap-r {
        margin-left: 5rem !important;
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
}

.section-nav {
    background-color: #f8f9fa;
    margin: 1rem 0;
    padding: .5rem 1rem;
    border: 1px solid #e1e0ea;
    border-radius: 3px;
    list-style: none;
}

.section-nav:before {
    content: 'Table of contents:';
    display: block;
    font-weight: 600;
}

/*----- Custom control -----*/
* html .fileinput-button {
    line-height: 24px;
    margin: 1px -3px 0 0;
}

*+html .fileinput-button {
    margin: 1px 0 0;
    padding: 2px 15px;
}

@media (max-width: 767px) {
    .files .btn span {
        display: none;
    }

    .files .preview * {
        width: 40px;
    }

    .files .name * {
        display: inline-block;
        width: 80px;
        word-wrap: break-word;
    }

    .files .progress {
        width: 20px;
    }

    .files .delete {
        width: 60px;
    }

    .border-right-1 {
        border-right: 0 !important;
    }
}

ul {
    list-style-type: none;
    padding: 0px;
    margin: 0px;
}

.br-100 {
    border-radius: 100% !important;
}

.br-7 {
    border-radius: 7px;
}

.br-tl-7 {
    border-top-left-radius: 7px !important;
}

.br-bl-7 {
    border-bottom-left-radius: 7px !important;
}

.br-tr-7 {
    border-top-right-radius: 7px !important;
}

.br-br-7 {
    border-bottom-right-radius: 7px !important;
}

.br-tl-0 {
    border-top-left-radius: 0px !important;
}

.br-bl-0 {
    border-bottom-left-radius: 0px !important;
}

.br-tr-0 {
    border-top-right-radius: 0px !important;
}

.br-br-0 {
    border-bottom-right-radius: 0px !important;
}

#popup {
    position: absolute;
    width: auto;
    height: 30px;
    background: #fe6b1f;
    display: none;
    color: white;
    border-radius: 5px;
}

#copy {
    background: none;
    color: white;
    font-weight: bold;
    padding: 8px 25px;
    border: 0;
}

/*------ Charts styles ------*/
.chart-visitors {
    min-height: 18rem;
    overflow: hidden;
}

.chart-tasks {
    height: 15rem;
    overflow: hidden;
}

.chart-donut {
    height: 22rem;
    overflow: hidden;
}

.chart-pie {
    height: 21rem;
    overflow: hidden;
}

.chartsh {
    height: 16rem;
    overflow: hidden;
}

.chartwidget {
    height: 17rem;
    overflow: hidden;
}

.chartheight {
    height: 12rem;
    overflow: hidden;
}

.widget-info i {
    width: 100px;
    height: 100px;
    padding: 27px 0;
    text-align: center;
    border: 2px solid #fff;
    border-radius: 50%;
}

.widget-info a {
    border-bottom: 1px solid #fff;
}

/*-----Feather icons-----*/
@font-face {
    font-family: "feather";
    src: url("../fonts/feather/feather-webfont.eot?t=1501841394106");
    /* IE9*/
    src: url("../fonts/feather/feather-webfont.eot?t=1501841394106#iefix") format("embedded-opentype"), url("../fonts/feather/feather-webfont.woff?t=1501841394106") format("woff"), url("../fonts/feather/feather-webfont.ttf?t=1501841394106") format("truetype"), url("../fonts/feather/feather-webfont.svg?t=1501841394106#feather") format("svg");
    /* iOS 4.1- */
}

.fe {
    font-family: 'feather' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.fe-activity:before {
    content: "\e900";
}

.fe-airplay:before {
    content: "\e901";
}

.fe-alert-circle:before {
    content: "\e902";
}

.fe-alert-octagon:before {
    content: "\e903";
}

.fe-alert-triangle:before {
    content: "\e904";
}

.fe-align-center:before {
    content: "\e905";
}

.fe-align-justify:before {
    content: "\e906";
}

.fe-align-left:before {
    content: "\e907";
}

.fe-align-right:before {
    content: "\e908";
}

.fe-anchor:before {
    content: "\e909";
}

.fe-aperture:before {
    content: "\e90a";
}

.fe-arrow-down:before {
    content: "\e90b";
}

.fe-arrow-down-circle:before {
    content: "\e90c";
}

.fe-arrow-down-left:before {
    content: "\e90d";
}

.fe-arrow-down-right:before {
    content: "\e90e";
}

.fe-arrow-left:before {
    content: "\e90f";
}

.fe-arrow-left-circle:before {
    content: "\e910";
}

.fe-arrow-right:before {
    content: "\e911";
}

.fe-arrow-right-circle:before {
    content: "\e912";
}

.fe-arrow-up:before {
    content: "\e913";
}

.fe-arrow-up-circle:before {
    content: "\e914";
}

.fe-arrow-up-left:before {
    content: "\e915";
}

.fe-arrow-up-right:before {
    content: "\e916";
}

.fe-at-sign:before {
    content: "\e917";
}

.fe-award:before {
    content: "\e918";
}

.fe-bar-chart:before {
    content: "\e919";
}

.fe-bar-chart-2:before {
    content: "\e91a";
}

.fe-battery:before {
    content: "\e91b";
}

.fe-battery-charging:before {
    content: "\e91c";
}

.fe-bell:before {
    content: "\e91d";
}

.fe-bell-off:before {
    content: "\e91e";
}

.fe-bluetooth:before {
    content: "\e91f";
}

.fe-bold:before {
    content: "\e920";
}

.fe-book:before {
    content: "\e921";
}

.fe-book-open:before {
    content: "\e922";
}

.fe-bookmark:before {
    content: "\e923";
}

.fe-box:before {
    content: "\e924";
}

.fe-briefcase:before {
    content: "\e925";
}

.fe-calendar:before {
    content: "\e926";
}

.fe-camera:before {
    content: "\e927";
}

.fe-camera-off:before {
    content: "\e928";
}

.fe-cast:before {
    content: "\e929";
}

.fe-check:before {
    content: "\e92a";
}

.fe-check-circle:before {
    content: "\e92b";
}

.fe-check-square:before {
    content: "\e92c";
}

.fe-chevron-down:before {
    content: "\e92d";
}

.fe-chevron-left:before {
    content: "\e92e";
}

.fe-chevron-right:before {
    content: "\e92f";
}

.fe-chevron-up:before {
    content: "\e930";
}

.fe-chevrons-down:before {
    content: "\e931";
}

.fe-chevrons-left:before {
    content: "\e932";
}

.fe-chevrons-right:before {
    content: "\e933";
}

.fe-chevrons-up:before {
    content: "\e934";
}

.fe-chrome:before {
    content: "\e935";
}

.fe-circle:before {
    content: "\e936";
}

.fe-clipboard:before {
    content: "\e937";
}

.fe-clock:before {
    content: "\e938";
}

.fe-cloud:before {
    content: "\e939";
}

.fe-cloud-drizzle:before {
    content: "\e93a";
}

.fe-cloud-lightning:before {
    content: "\e93b";
}

.fe-cloud-off:before {
    content: "\e93c";
}

.fe-cloud-rain:before {
    content: "\e93d";
}

.fe-cloud-snow:before {
    content: "\e93e";
}

.fe-code:before {
    content: "\e93f";
}

.fe-codepen:before {
    content: "\e940";
}

.fe-command:before {
    content: "\e941";
}

.fe-compass:before {
    content: "\e942";
}

.fe-copy:before {
    content: "\e943";
}

.fe-corner-down-left:before {
    content: "\e944";
}

.fe-corner-down-right:before {
    content: "\e945";
}

.fe-corner-left-down:before {
    content: "\e946";
}

.fe-corner-left-up:before {
    content: "\e947";
}

.fe-corner-right-down:before {
    content: "\e948";
}

.fe-corner-right-up:before {
    content: "\e949";
}

.fe-corner-up-left:before {
    content: "\e94a";
}

.fe-corner-up-right:before {
    content: "\e94b";
}

.fe-cpu:before {
    content: "\e94c";
}

.fe-credit-card:before {
    content: "\e94d";
}

.fe-crop:before {
    content: "\e94e";
}

.fe-crosshair:before {
    content: "\e94f";
}

.fe-database:before {
    content: "\e950";
}

.fe-delete:before {
    content: "\e951";
}

.fe-disc:before {
    content: "\e952";
}

.fe-dollar-sign:before {
    content: "\e953";
}

.fe-download:before {
    content: "\e954";
}

.fe-download-cloud:before {
    content: "\e955";
}

.fe-droplet:before {
    content: "\e956";
}

.fe-edit:before {
    content: "\e957";
}

.fe-edit-2:before {
    content: "\e958";
}

.fe-edit-3:before {
    content: "\e959";
}

.fe-external-link:before {
    content: "\e95a";
}

.fe-eye:before {
    content: "\e95b";
}

.fe-eye-off:before {
    content: "\e95c";
}

.fe-facebook:before {
    content: "\e95d";
}

.fe-fast-forward:before {
    content: "\e95e";
}

.fe-feather:before {
    content: "\e95f";
}

.fe-file:before {
    content: "\e960";
}

.fe-file-minus:before {
    content: "\e961";
}

.fe-file-plus:before {
    content: "\e962";
}

.fe-file-text:before {
    content: "\e963";
}

.fe-film:before {
    content: "\e964";
}

.fe-filter:before {
    content: "\e965";
}

.fe-flag:before {
    content: "\e966";
}

.fe-folder:before {
    content: "\e967";
}

.fe-folder-minus:before {
    content: "\e968";
}

.fe-folder-plus:before {
    content: "\e969";
}

.fe-git-branch:before {
    content: "\e96a";
}

.fe-git-commit:before {
    content: "\e96b";
}

.fe-git-merge:before {
    content: "\e96c";
}

.fe-git-pull-request:before {
    content: "\e96d";
}

.fe-github:before {
    content: "\e96e";
}

.fe-gitlab:before {
    content: "\e96f";
}

.fe-globe:before {
    content: "\e970";
}

.fe-grid:before {
    content: "\e971";
}

.fe-hard-drive:before {
    content: "\e972";
}

.fe-hash:before {
    content: "\e973";
}

.fe-headphones:before {
    content: "\e974";
}

.fe-heart:before {
    content: "\e975";
}

.fe-help-circle:before {
    content: "\e976";
}

.fe-home:before {
    content: "\e977";
}

.fe-image:before {
    content: "\e978";
}

.fe-inbox:before {
    content: "\e979";
}

.fe-info:before {
    content: "\e97a";
}

.fe-instagram:before {
    content: "\e97b";
}

.fe-italic:before {
    content: "\e97c";
}

.fe-layers:before {
    content: "\e97d";
}

.fe-layout:before {
    content: "\e97e";
}

.fe-life-buoy:before {
    content: "\e97f";
}

.fe-link:before {
    content: "\e980";
}

.fe-link-2:before {
    content: "\e981";
}

.fe-linkedin:before {
    content: "\e982";
}

.fe-list:before {
    content: "\e983";
}

.fe-loader:before {
    content: "\e984";
}

.fe-lock:before {
    content: "\e985";
}

.fe-log-in:before {
    content: "\e986";
}

.fe-log-out:before {
    content: "\e987";
}

.fe-mail:before {
    content: "\e988";
}

.fe-map:before {
    content: "\e989";
}

.fe-map-pin:before {
    content: "\e98a";
}

.fe-maximize:before {
    content: "\e98b";
}

.fe-maximize-2:before {
    content: "\e98c";
}

.fe-menu:before {
    content: "\e98d";
}

.fe-message-circle:before {
    content: "\e98e";
}

.fe-message-square:before {
    content: "\e98f";
}

.fe-mic:before {
    content: "\e990";
}

.fe-mic-off:before {
    content: "\e991";
}

.fe-minimize:before {
    content: "\e992";
}

.fe-minimize-2:before {
    content: "\e993";
}

.fe-minus:before {
    content: "\e994";
}

.fe-minus-circle:before {
    content: "\e995";
}

.fe-minus-square:before {
    content: "\e996";
}

.fe-monitor:before {
    content: "\e997";
}

.fe-moon:before {
    content: "\e998";
}

.fe-more-horizontal:before {
    content: "\e999";
}

.fe-more-vertical:before {
    content: "\e99a";
}

.fe-move:before {
    content: "\e99b";
}

.fe-music:before {
    content: "\e99c";
}

.fe-navigation:before {
    content: "\e99d";
}

.fe-navigation-2:before {
    content: "\e99e";
}

.fe-octagon:before {
    content: "\e99f";
}

.fe-package:before {
    content: "\e9a0";
}

.fe-paperclip:before {
    content: "\e9a1";
}

.fe-pause:before {
    content: "\e9a2";
}

.fe-pause-circle:before {
    content: "\e9a3";
}

.fe-percent:before {
    content: "\e9a4";
}

.fe-phone:before {
    content: "\e9a5";
}

.fe-phone-call:before {
    content: "\e9a6";
}

.fe-phone-forwarded:before {
    content: "\e9a7";
}

.fe-phone-incoming:before {
    content: "\e9a8";
}

.fe-phone-missed:before {
    content: "\e9a9";
}

.fe-phone-off:before {
    content: "\e9aa";
}

.fe-phone-outgoing:before {
    content: "\e9ab";
}

.fe-pie-chart:before {
    content: "\e9ac";
}

.fe-play:before {
    content: "\e9ad";
}

.fe-play-circle:before {
    content: "\e9ae";
}

.fe-plus:before {
    content: "\e9af";
}

.fe-plus-circle:before {
    content: "\e9b0";
}

.fe-plus-square:before {
    content: "\e9b1";
}

.fe-pocket:before {
    content: "\e9b2";
}

.fe-power:before {
    content: "\e9b3";
}

.fe-printer:before {
    content: "\e9b4";
}

.fe-radio:before {
    content: "\e9b5";
}

.fe-refresh-ccw:before {
    content: "\e9b6";
}

.fe-refresh-cw:before {
    content: "\e9b7";
}

.fe-repeat:before {
    content: "\e9b8";
}

.fe-rewind:before {
    content: "\e9b9";
}

.fe-rotate-ccw:before {
    content: "\e9ba";
}

.fe-rotate-cw:before {
    content: "\e9bb";
}

.fe-rss:before {
    content: "\e9bc";
}

.fe-save:before {
    content: "\e9bd";
}

.fe-scissors:before {
    content: "\e9be";
}

.fe-search:before {
    content: "\e9bf";
}

.fe-send:before {
    content: "\e9c0";
}

.fe-server:before {
    content: "\e9c1";
}

.fe-settings:before {
    content: "\e9c2";
}

.fe-share:before {
    content: "\e9c3";
}

.fe-share-2:before {
    content: "\e9c4";
}

.fe-shield:before {
    content: "\e9c5";
}

.fe-shield-off:before {
    content: "\e9c6";
}

.fe-shopping-bag:before {
    content: "\e9c7";
}

.fe-shopping-cart:before {
    content: "\e9c8";
}

.fe-shuffle:before {
    content: "\e9c9";
}

.fe-sidebar:before {
    content: "\e9ca";
}

.fe-skip-back:before {
    content: "\e9cb";
}

.fe-skip-forward:before {
    content: "\e9cc";
}

.fe-slack:before {
    content: "\e9cd";
}

.fe-slash:before {
    content: "\e9ce";
}

.fe-sliders:before {
    content: "\e9cf";
}

.fe-smartphone:before {
    content: "\e9d0";
}

.fe-speaker:before {
    content: "\e9d1";
}

.fe-square:before {
    content: "\e9d2";
}

.fe-star:before {
    content: "\e9d3";
}

.fe-stop-circle:before {
    content: "\e9d4";
}

.fe-sun:before {
    content: "\e9d5";
}

.fe-sunrise:before {
    content: "\e9d6";
}

.fe-sunset:before {
    content: "\e9d7";
}

.fe-tablet:before {
    content: "\e9d8";
}

.fe-tag:before {
    content: "\e9d9";
}

.fe-target:before {
    content: "\e9da";
}

.fe-terminal:before {
    content: "\e9db";
}

.fe-thermometer:before {
    content: "\e9dc";
}

.fe-thumbs-down:before {
    content: "\e9dd";
}

.fe-thumbs-up:before {
    content: "\e9de";
}

.fe-toggle-left:before {
    content: "\e9df";
}

.fe-toggle-right:before {
    content: "\e9e0";
}

.fe-trash:before {
    content: "\e9e1";
}

.fe-trash-2:before {
    content: "\e9e2";
}

.fe-trending-down:before {
    content: "\e9e3";
}

.fe-trending-up:before {
    content: "\e9e4";
}

.fe-triangle:before {
    content: "\e9e5";
}

.fe-truck:before {
    content: "\e9e6";
}

.fe-tv:before {
    content: "\e9e7";
}

.fe-twitter:before {
    content: "\e9e8";
}

.fe-type:before {
    content: "\e9e9";
}

.fe-umbrella:before {
    content: "\e9ea";
}

.fe-underline:before {
    content: "\e9eb";
}

.fe-unlock:before {
    content: "\e9ec";
}

.fe-upload:before {
    content: "\e9ed";
}

.fe-upload-cloud:before {
    content: "\e9ee";
}

.fe-user:before {
    content: "\e9ef";
}

.fe-user-check:before {
    content: "\e9f0";
}

.fe-user-minus:before {
    content: "\e9f1";
}

.fe-user-plus:before {
    content: "\e9f2";
}

.fe-user-x:before {
    content: "\e9f3";
}

.fe-users:before {
    content: "\e9f4";
}

.fe-video:before {
    content: "\e9f5";
}

.fe-video-off:before {
    content: "\e9f6";
}

.fe-voicemail:before {
    content: "\e9f7";
}

.fe-volume:before {
    content: "\e9f8";
}

.fe-volume-1:before {
    content: "\e9f9";
}

.fe-volume-2:before {
    content: "\e9fa";
}

.fe-volume-x:before {
    content: "\e9fb";
}

.fe-watch:before {
    content: "\e9fc";
}

.fe-wifi:before {
    content: "\e9fd";
}

.fe-wifi-off:before {
    content: "\e9fe";
}

.fe-wind:before {
    content: "\e9ff";
}

.fe-x:before {
    content: "\ea00";
}

.fe-x-circle:before {
    content: "\ea01";
}

.fe-x-square:before {
    content: "\ea02";
}

.fe-zap:before {
    content: "\ea03";
}

.fe-zap-off:before {
    content: "\ea04";
}

.fe-zoom-in:before {
    content: "\ea05";
}

.fe-zoom-out:before {
    content: "\ea06";
}

.flag {
    width: 1.6rem;
    height: 1.2rem;
    display: inline-block;
    background: no-repeat center/100% 100%;
    vertical-align: bottom;
    font-style: normal;
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 2px;
}

.flag-ad {
    background-image: url("../images/flags/ad.svg");
}

.flag-ae {
    background-image: url("../images/flags/ae.svg");
}

.flag-af {
    background-image: url("../images/flags/af.svg");
}

.flag-ag {
    background-image: url("../images/flags/ag.svg");
}

.flag-ai {
    background-image: url("../images/flags/ai.svg");
}

.flag-al {
    background-image: url("../images/flags/al.svg");
}

.flag-am {
    background-image: url("../images/flags/am.svg");
}

.flag-ao {
    background-image: url("../images/flags/ao.svg");
}

.flag-aq {
    background-image: url("../images/flags/aq.svg");
}

.flag-ar {
    background-image: url("../images/flags/ar.svg");
}

.flag-as {
    background-image: url("../images/flags/as.svg");
}

.flag-at {
    background-image: url("../images/flags/at.svg");
}

.flag-au {
    background-image: url("../images/flags/au.svg");
}

.flag-aw {
    background-image: url("../images/flags/aw.svg");
}

.flag-ax {
    background-image: url("../images/flags/ax.svg");
}

.flag-az {
    background-image: url("../images/flags/az.svg");
}

.flag-ba {
    background-image: url("../images/flags/ba.svg");
}

.flag-bb {
    background-image: url("../images/flags/bb.svg");
}

.flag-bd {
    background-image: url("../images/flags/bd.svg");
}

.flag-be {
    background-image: url("../images/flags/be.svg");
}

.flag-bf {
    background-image: url("../images/flags/bf.svg");
}

.flag-bg {
    background-image: url("../images/flags/bg.svg");
}

.flag-bh {
    background-image: url("../images/flags/bh.svg");
}

.flag-bi {
    background-image: url("../images/flags/bi.svg");
}

.flag-bj {
    background-image: url("../images/flags/bj.svg");
}

.flag-bl {
    background-image: url("../images/flags/bl.svg");
}

.flag-bm {
    background-image: url("../images/flags/bm.svg");
}

.flag-bn {
    background-image: url("../images/flags/bn.svg");
}

.flag-bo {
    background-image: url("../images/flags/bo.svg");
}

.flag-bq {
    background-image: url("../images/flags/bq.svg");
}

.flag-br {
    background-image: url("../images/flags/br.svg");
}

.flag-bs {
    background-image: url("../images/flags/bs.svg");
}

.flag-bt {
    background-image: url("../images/flags/bt.svg");
}

.flag-bv {
    background-image: url("../images/flags/bv.svg");
}

.flag-bw {
    background-image: url("../images/flags/bw.svg");
}

.flag-by {
    background-image: url("../images/flags/by.svg");
}

.flag-bz {
    background-image: url("../images/flags/bz.svg");
}

.flag-ca {
    background-image: url("../images/flags/ca.svg");
}

.flag-cc {
    background-image: url("../images/flags/cc.svg");
}

.flag-cd {
    background-image: url("../images/flags/cd.svg");
}

.flag-cf {
    background-image: url("../images/flags/cf.svg");
}

.flag-cg {
    background-image: url("../images/flags/cg.svg");
}

.flag-ch {
    background-image: url("../images/flags/ch.svg");
}

.flag-ci {
    background-image: url("../images/flags/ci.svg");
}

.flag-ck {
    background-image: url("../images/flags/ck.svg");
}

.flag-cl {
    background-image: url("../images/flags/cl.svg");
}

.flag-cm {
    background-image: url("../images/flags/cm.svg");
}

.flag-cn {
    background-image: url("../images/flags/cn.svg");
}

.flag-co {
    background-image: url("../images/flags/co.svg");
}

.flag-cr {
    background-image: url("../images/flags/cr.svg");
}

.flag-cu {
    background-image: url("../images/flags/cu.svg");
}

.flag-cv {
    background-image: url("../images/flags/cv.svg");
}

.flag-cw {
    background-image: url("../images/flags/cw.svg");
}

.flag-cx {
    background-image: url("../images/flags/cx.svg");
}

.flag-cy {
    background-image: url("../images/flags/cy.svg");
}

.flag-cz {
    background-image: url("../images/flags/cz.svg");
}

.flag-de {
    background-image: url("../images/flags/de.svg");
}

.flag-dj {
    background-image: url("../images/flags/dj.svg");
}

.flag-dk {
    background-image: url("../images/flags/dk.svg");
}

.flag-dm {
    background-image: url("../images/flags/dm.svg");
}

.flag-do {
    background-image: url("../images/flags/do.svg");
}

.flag-dz {
    background-image: url("../images/flags/dz.svg");
}

.flag-ec {
    background-image: url("../images/flags/ec.svg");
}

.flag-ee {
    background-image: url("../images/flags/ee.svg");
}

.flag-eg {
    background-image: url("../images/flags/eg.svg");
}

.flag-eh {
    background-image: url("../images/flags/eh.svg");
}

.flag-er {
    background-image: url("../images/flags/er.svg");
}

.flag-es {
    background-image: url("../images/flags/es.svg");
}

.flag-et {
    background-image: url("../images/flags/et.svg");
}

.flag-eu {
    background-image: url("../images/flags/eu.svg");
}

.flag-fi {
    background-image: url("../images/flags/fi.svg");
}

.flag-fj {
    background-image: url("../images/flags/fj.svg");
}

.flag-fk {
    background-image: url("../images/flags/fk.svg");
}

.flag-fm {
    background-image: url("../images/flags/fm.svg");
}

.flag-fo {
    background-image: url("../images/flags/fo.svg");
}

.flag-fr {
    background-image: url("../images/flags/fr.svg");
}

.flag-ga {
    background-image: url("../images/flags/ga.svg");
}

.flag-gb-eng {
    background-image: url("../images/flags/gb-eng.svg");
}

.flag-gb-nir {
    background-image: url("../images/flags/gb-nir.svg");
}

.flag-gb-sct {
    background-image: url("../images/flags/gb-sct.svg");
}

.flag-gb-wls {
    background-image: url("../images/flags/gb-wls.svg");
}

.flag-gb {
    background-image: url("../images/flags/gb.svg");
}

.flag-gd {
    background-image: url("../images/flags/gd.svg");
}

.flag-ge {
    background-image: url("../images/flags/ge.svg");
}

.flag-gf {
    background-image: url("../images/flags/gf.svg");
}

.flag-gg {
    background-image: url("../images/flags/gg.svg");
}

.flag-gh {
    background-image: url("../images/flags/gh.svg");
}

.flag-gi {
    background-image: url("../images/flags/gi.svg");
}

.flag-gl {
    background-image: url("../images/flags/gl.svg");
}

.flag-gm {
    background-image: url("../images/flags/gm.svg");
}

.flag-gn {
    background-image: url("../images/flags/gn.svg");
}

.flag-gp {
    background-image: url("../images/flags/gp.svg");
}

.flag-gq {
    background-image: url("../images/flags/gq.svg");
}

.flag-gr {
    background-image: url("../images/flags/gr.svg");
}

.flag-gs {
    background-image: url("../images/flags/gs.svg");
}

.flag-gt {
    background-image: url("../images/flags/gt.svg");
}

.flag-gu {
    background-image: url("../images/flags/gu.svg");
}

.flag-gw {
    background-image: url("../images/flags/gw.svg");
}

.flag-gy {
    background-image: url("../images/flags/gy.svg");
}

.flag-hk {
    background-image: url("../images/flags/hk.svg");
}

.flag-hm {
    background-image: url("../images/flags/hm.svg");
}

.flag-hn {
    background-image: url("../images/flags/hn.svg");
}

.flag-hr {
    background-image: url("../images/flags/hr.svg");
}

.flag-ht {
    background-image: url("../images/flags/ht.svg");
}

.flag-hu {
    background-image: url("../images/flags/hu.svg");
}

.flag-id {
    background-image: url("../images/flags/id.svg");
}

.flag-ie {
    background-image: url("../images/flags/ie.svg");
}

.flag-il {
    background-image: url("../images/flags/il.svg");
}

.flag-im {
    background-image: url("../images/flags/im.svg");
}

.flag-in {
    background-image: url("../images/flags/in.svg");
}

.flag-io {
    background-image: url("../images/flags/io.svg");
}

.flag-iq {
    background-image: url("../images/flags/iq.svg");
}

.flag-ir {
    background-image: url("../images/flags/ir.svg");
}

.flag-is {
    background-image: url("../images/flags/is.svg");
}

.flag-it {
    background-image: url("../images/flags/it.svg");
}

.flag-je {
    background-image: url("../images/flags/je.svg");
}

.flag-jm {
    background-image: url("../images/flags/jm.svg");
}

.flag-jo {
    background-image: url("../images/flags/jo.svg");
}

.flag-jp {
    background-image: url("../images/flags/jp.svg");
}

.flag-ke {
    background-image: url("../images/flags/ke.svg");
}

.flag-kg {
    background-image: url("../images/flags/kg.svg");
}

.flag-kh {
    background-image: url("../images/flags/kh.svg");
}

.flag-ki {
    background-image: url("../images/flags/ki.svg");
}

.flag-km {
    background-image: url("../images/flags/km.svg");
}

.flag-kn {
    background-image: url("../images/flags/kn.svg");
}

.flag-kp {
    background-image: url("../images/flags/kp.svg");
}

.flag-kr {
    background-image: url("../images/flags/kr.svg");
}

.flag-kw {
    background-image: url("../images/flags/kw.svg");
}

.flag-ky {
    background-image: url("../images/flags/ky.svg");
}

.flag-kz {
    background-image: url("../images/flags/kz.svg");
}

.flag-la {
    background-image: url("../images/flags/la.svg");
}

.flag-lb {
    background-image: url("../images/flags/lb.svg");
}

.flag-lc {
    background-image: url("../images/flags/lc.svg");
}

.flag-li {
    background-image: url("../images/flags/li.svg");
}

.flag-lk {
    background-image: url("../images/flags/lk.svg");
}

.flag-lr {
    background-image: url("../images/flags/lr.svg");
}

.flag-ls {
    background-image: url("../images/flags/ls.svg");
}

.flag-lt {
    background-image: url("../images/flags/lt.svg");
}

.flag-lu {
    background-image: url("../images/flags/lu.svg");
}

.flag-lv {
    background-image: url("../images/flags/lv.svg");
}

.flag-ly {
    background-image: url("../images/flags/ly.svg");
}

.flag-ma {
    background-image: url("../images/flags/ma.svg");
}

.flag-mc {
    background-image: url("../images/flags/mc.svg");
}

.flag-md {
    background-image: url("../images/flags/md.svg");
}

.flag-me {
    background-image: url("../images/flags/me.svg");
}

.flag-mf {
    background-image: url("../images/flags/mf.svg");
}

.flag-mg {
    background-image: url("../images/flags/mg.svg");
}

.flag-mh {
    background-image: url("../images/flags/mh.svg");
}

.flag-mk {
    background-image: url("../images/flags/mk.svg");
}

.flag-ml {
    background-image: url("../images/flags/ml.svg");
}

.flag-mm {
    background-image: url("../images/flags/mm.svg");
}

.flag-mn {
    background-image: url("../images/flags/mn.svg");
}

.flag-mo {
    background-image: url("../images/flags/mo.svg");
}

.flag-mp {
    background-image: url("../images/flags/mp.svg");
}

.flag-mq {
    background-image: url("../images/flags/mq.svg");
}

.flag-mr {
    background-image: url("../images/flags/mr.svg");
}

.flag-ms {
    background-image: url("../images/flags/ms.svg");
}

.flag-mt {
    background-image: url("../images/flags/mt.svg");
}

.flag-mu {
    background-image: url("../images/flags/mu.svg");
}

.flag-mv {
    background-image: url("../images/flags/mv.svg");
}

.flag-mw {
    background-image: url("../images/flags/mw.svg");
}

.flag-mx {
    background-image: url("../images/flags/mx.svg");
}

.flag-my {
    background-image: url("../images/flags/my.svg");
}

.flag-mz {
    background-image: url("../images/flags/mz.svg");
}

.flag-na {
    background-image: url("../images/flags/na.svg");
}

.flag-nc {
    background-image: url("../images/flags/nc.svg");
}

.flag-ne {
    background-image: url("../images/flags/ne.svg");
}

.flag-nf {
    background-image: url("../images/flags/nf.svg");
}

.flag-ng {
    background-image: url("../images/flags/ng.svg");
}

.flag-ni {
    background-image: url("../images/flags/ni.svg");
}

.flag-nl {
    background-image: url("../images/flags/nl.svg");
}

.flag-no {
    background-image: url("../images/flags/no.svg");
}

.flag-np {
    background-image: url("../images/flags/np.svg");
}

.flag-nr {
    background-image: url("../images/flags/nr.svg");
}

.flag-nu {
    background-image: url("../images/flags/nu.svg");
}

.flag-nz {
    background-image: url("../images/flags/nz.svg");
}

.flag-om {
    background-image: url("../images/flags/om.svg");
}

.flag-pa {
    background-image: url("../images/flags/pa.svg");
}

.flag-pe {
    background-image: url("../images/flags/pe.svg");
}

.flag-pf {
    background-image: url("../images/flags/pf.svg");
}

.flag-pg {
    background-image: url("../images/flags/pg.svg");
}

.flag-ph {
    background-image: url("../images/flags/ph.svg");
}

.flag-pk {
    background-image: url("../images/flags/pk.svg");
}

.flag-pl {
    background-image: url("../images/flags/pl.svg");
}

.flag-pm {
    background-image: url("../images/flags/pm.svg");
}

.flag-pn {
    background-image: url("../images/flags/pn.svg");
}

.flag-pr {
    background-image: url("../images/flags/pr.svg");
}

.flag-ps {
    background-image: url("../images/flags/ps.svg");
}

.flag-pt {
    background-image: url("../images/flags/pt.svg");
}

.flag-pw {
    background-image: url("../images/flags/pw.svg");
}

.flag-py {
    background-image: url("../images/flags/py.svg");
}

.flag-qa {
    background-image: url("../images/flags/qa.svg");
}

.flag-re {
    background-image: url("../images/flags/re.svg");
}

.flag-ro {
    background-image: url("../images/flags/ro.svg");
}

.flag-rs {
    background-image: url("../images/flags/rs.svg");
}

.flag-ru {
    background-image: url("../images/flags/ru.svg");
}

.flag-rw {
    background-image: url("../images/flags/rw.svg");
}

.flag-sa {
    background-image: url("../images/flags/sa.svg");
}

.flag-sb {
    background-image: url("../images/flags/sb.svg");
}

.flag-sc {
    background-image: url("../images/flags/sc.svg");
}

.flag-sd {
    background-image: url("../images/flags/sd.svg");
}

.flag-se {
    background-image: url("../images/flags/se.svg");
}

.flag-sg {
    background-image: url("../images/flags/sg.svg");
}

.flag-sh {
    background-image: url("../images/flags/sh.svg");
}

.flag-si {
    background-image: url("../images/flags/si.svg");
}

.flag-sj {
    background-image: url("../images/flags/sj.svg");
}

.flag-sk {
    background-image: url("../images/flags/sk.svg");
}

.flag-sl {
    background-image: url("../images/flags/sl.svg");
}

.flag-sm {
    background-image: url("../images/flags/sm.svg");
}

.flag-sn {
    background-image: url("../images/flags/sn.svg");
}

.flag-so {
    background-image: url("../images/flags/so.svg");
}

.flag-sr {
    background-image: url("../images/flags/sr.svg");
}

.flag-ss {
    background-image: url("../images/flags/ss.svg");
}

.flag-st {
    background-image: url("../images/flags/st.svg");
}

.flag-sv {
    background-image: url("../images/flags/sv.svg");
}

.flag-sx {
    background-image: url("../images/flags/sx.svg");
}

.flag-sy {
    background-image: url("../images/flags/sy.svg");
}

.flag-sz {
    background-image: url("../images/flags/sz.svg");
}

.flag-tc {
    background-image: url("../images/flags/tc.svg");
}

.flag-td {
    background-image: url("../images/flags/td.svg");
}

.flag-tf {
    background-image: url("../images/flags/tf.svg");
}

.flag-tg {
    background-image: url("../images/flags/tg.svg");
}

.flag-th {
    background-image: url("../images/flags/th.svg");
}

.flag-tj {
    background-image: url("../images/flags/tj.svg");
}

.flag-tk {
    background-image: url("../images/flags/tk.svg");
}

.flag-tl {
    background-image: url("../images/flags/tl.svg");
}

.flag-tm {
    background-image: url("../images/flags/tm.svg");
}

.flag-tn {
    background-image: url("../images/flags/tn.svg");
}

.flag-to {
    background-image: url("../images/flags/to.svg");
}

.flag-tr {
    background-image: url("../images/flags/tr.svg");
}

.flag-tt {
    background-image: url("../images/flags/tt.svg");
}

.flag-tv {
    background-image: url("../images/flags/tv.svg");
}

.flag-tw {
    background-image: url("../images/flags/tw.svg");
}

.flag-tz {
    background-image: url("../images/flags/tz.svg");
}

.flag-ua {
    background-image: url("../images/flags/ua.svg");
}

.flag-ug {
    background-image: url("../images/flags/ug.svg");
}

.flag-um {
    background-image: url("../images/flags/um.svg");
}

.flag-un {
    background-image: url("../images/flags/un.svg");
}

.flag-us {
    background-image: url("../images/flags/us.svg");
}

.flag-uy {
    background-image: url("../images/flags/uy.svg");
}

.flag-uz {
    background-image: url("../images/flags/uz.svg");
}

.flag-va {
    background-image: url("../images/flags/va.svg");
}

.flag-vc {
    background-image: url("../images/flags/vc.svg");
}

.flag-ve {
    background-image: url("../images/flags/ve.svg");
}

.flag-vg {
    background-image: url("../images/flags/vg.svg");
}

.flag-vi {
    background-image: url("../images/flags/vi.svg");
}

.flag-vn {
    background-image: url("../images/flags/vn.svg");
}

.flag-vu {
    background-image: url("../images/flags/vu.svg");
}

.flag-wf {
    background-image: url("../images/flags/wf.svg");
}

.flag-ws {
    background-image: url("../images/flags/ws.svg");
}

.flag-ye {
    background-image: url("../images/flags/ye.svg");
}

.flag-yt {
    background-image: url("../images/flags/yt.svg");
}

.flag-za {
    background-image: url("../images/flags/za.svg");
}

.flag-zm {
    background-image: url("../images/flags/zm.svg");
}

.flag-zw {
    background-image: url("../images/flags/zw.svg");
}

@font-face {
    font-family: 'Glyphicons Halflings';
    src: url("../fonts/glyphicons-halflings-regular.eot");
    src: url("../fonts/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/glyphicons-halflings-regular.woff2") format("woff2"), url("../fonts/glyphicons-halflings-regular.woff") format("woff"), url("../fonts/glyphicons-halflings-regular.ttf") format("truetype"), url("../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format("svg");
}

.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.glyphicon-asterisk:before {
    content: "\2a";
}

.glyphicon-plus:before {
    content: "\2b";
}

.glyphicon-euro:before,
.glyphicon-eur:before {
    content: "\20ac";
}

.glyphicon-minus:before {
    content: "\2212";
}

.glyphicon-cloud:before {
    content: "\2601";
}

.glyphicon-envelope:before {
    content: "\2709";
}

.glyphicon-pencil:before {
    content: "\270f";
}

.glyphicon-glass:before {
    content: "\e001";
}

.glyphicon-music:before {
    content: "\e002";
}

.glyphicon-search:before {
    content: "\e003";
}

.glyphicon-heart:before {
    content: "\e005";
}

.glyphicon-star:before {
    content: "\e006";
}

.glyphicon-star-empty:before {
    content: "\e007";
}

.glyphicon-user:before {
    content: "\e008";
}

.glyphicon-film:before {
    content: "\e009";
}

.glyphicon-th-large:before {
    content: "\e010";
}

.glyphicon-th:before {
    content: "\e011";
}

.glyphicon-th-list:before {
    content: "\e012";
}

.glyphicon-ok:before {
    content: "\e013";
}

.glyphicon-remove:before {
    content: "\e014";
}

.glyphicon-zoom-in:before {
    content: "\e015";
}

.glyphicon-zoom-out:before {
    content: "\e016";
}

.glyphicon-off:before {
    content: "\e017";
}

.glyphicon-signal:before {
    content: "\e018";
}

.glyphicon-cog:before {
    content: "\e019";
}

.glyphicon-trash:before {
    content: "\e020";
}

.glyphicon-home:before {
    content: "\e021";
}

.glyphicon-file:before {
    content: "\e022";
}

.glyphicon-time:before {
    content: "\e023";
}

.glyphicon-road:before {
    content: "\e024";
}

.glyphicon-download-alt:before {
    content: "\e025";
}

.glyphicon-download:before {
    content: "\e026";
}

.glyphicon-upload:before {
    content: "\e027";
}

.glyphicon-inbox:before {
    content: "\e028";
}

.glyphicon-play-circle:before {
    content: "\e029";
}

.glyphicon-repeat:before {
    content: "\e030";
}

.glyphicon-refresh:before {
    content: "\e031";
}

.glyphicon-list-alt:before {
    content: "\e032";
}

.glyphicon-lock:before {
    content: "\e033";
}

.glyphicon-flag:before {
    content: "\e034";
}

.glyphicon-headphones:before {
    content: "\e035";
}

.glyphicon-volume-off:before {
    content: "\e036";
}

.glyphicon-volume-down:before {
    content: "\e037";
}

.glyphicon-volume-up:before {
    content: "\e038";
}

.glyphicon-qrcode:before {
    content: "\e039";
}

.glyphicon-barcode:before {
    content: "\e040";
}

.glyphicon-tag:before {
    content: "\e041";
}

.glyphicon-tags:before {
    content: "\e042";
}

.glyphicon-book:before {
    content: "\e043";
}

.glyphicon-bookmark:before {
    content: "\e044";
}

.glyphicon-print:before {
    content: "\e045";
}

.glyphicon-camera:before {
    content: "\e046";
}

.glyphicon-font:before {
    content: "\e047";
}

.glyphicon-bold:before {
    content: "\e048";
}

.glyphicon-italic:before {
    content: "\e049";
}

.glyphicon-text-height:before {
    content: "\e050";
}

.glyphicon-text-width:before {
    content: "\e051";
}

.glyphicon-align-left:before {
    content: "\e052";
}

.glyphicon-align-center:before {
    content: "\e053";
}

.glyphicon-align-right:before {
    content: "\e054";
}

.glyphicon-align-justify:before {
    content: "\e055";
}

.glyphicon-list:before {
    content: "\e056";
}

.glyphicon-indent-left:before {
    content: "\e057";
}

.glyphicon-indent-right:before {
    content: "\e058";
}

.glyphicon-facetime-video:before {
    content: "\e059";
}

.glyphicon-picture:before {
    content: "\e060";
}

.glyphicon-map-marker:before {
    content: "\e062";
}

.glyphicon-adjust:before {
    content: "\e063";
}

.glyphicon-tint:before {
    content: "\e064";
}

.glyphicon-edit:before {
    content: "\e065";
}

.glyphicon-share:before {
    content: "\e066";
}

.glyphicon-check:before {
    content: "\e067";
}

.glyphicon-move:before {
    content: "\e068";
}

.glyphicon-step-backward:before {
    content: "\e069";
}

.glyphicon-fast-backward:before {
    content: "\e070";
}

.glyphicon-backward:before {
    content: "\e071";
}

.glyphicon-play:before {
    content: "\e072";
}

.glyphicon-pause:before {
    content: "\e073";
}

.glyphicon-stop:before {
    content: "\e074";
}

.glyphicon-forward:before {
    content: "\e075";
}

.glyphicon-fast-forward:before {
    content: "\e076";
}

.glyphicon-step-forward:before {
    content: "\e077";
}

.glyphicon-eject:before {
    content: "\e078";
}

.glyphicon-chevron-left:before {
    content: "\e079";
}

.glyphicon-chevron-right:before {
    content: "\e080";
}

.glyphicon-plus-sign:before {
    content: "\e081";
}

.glyphicon-minus-sign:before {
    content: "\e082";
}

.glyphicon-remove-sign:before {
    content: "\e083";
}

.glyphicon-ok-sign:before {
    content: "\e084";
}

.glyphicon-question-sign:before {
    content: "\e085";
}

.glyphicon-info-sign:before {
    content: "\e086";
}

.glyphicon-screenshot:before {
    content: "\e087";
}

.glyphicon-remove-circle:before {
    content: "\e088";
}

.glyphicon-ok-circle:before {
    content: "\e089";
}

.glyphicon-ban-circle:before {
    content: "\e090";
}

.glyphicon-arrow-left:before {
    content: "\e091";
}

.glyphicon-arrow-right:before {
    content: "\e092";
}

.glyphicon-arrow-up:before {
    content: "\e093";
}

.glyphicon-arrow-down:before {
    content: "\e094";
}

.glyphicon-share-alt:before {
    content: "\e095";
}

.glyphicon-resize-full:before {
    content: "\e096";
}

.glyphicon-resize-small:before {
    content: "\e097";
}

.glyphicon-exclamation-sign:before {
    content: "\e101";
}

.glyphicon-gift:before {
    content: "\e102";
}

.glyphicon-leaf:before {
    content: "\e103";
}

.glyphicon-fire:before {
    content: "\e104";
}

.glyphicon-eye-open:before {
    content: "\e105";
}

.glyphicon-eye-close:before {
    content: "\e106";
}

.glyphicon-warning-sign:before {
    content: "\e107";
}

.glyphicon-plane:before {
    content: "\e108";
}

.glyphicon-calendar:before {
    content: "\e109";
}

.glyphicon-random:before {
    content: "\e110";
}

.glyphicon-comment:before {
    content: "\e111";
}

.glyphicon-magnet:before {
    content: "\e112";
}

.glyphicon-chevron-up:before {
    content: "\e113";
}

.glyphicon-chevron-down:before {
    content: "\e114";
}

.glyphicon-retweet:before {
    content: "\e115";
}

.glyphicon-shopping-cart:before {
    content: "\e116";
}

.glyphicon-folder-close:before {
    content: "\e117";
}

.glyphicon-folder-open:before {
    content: "\e118";
}

.glyphicon-resize-vertical:before {
    content: "\e119";
}

.glyphicon-resize-horizontal:before {
    content: "\e120";
}

.glyphicon-hdd:before {
    content: "\e121";
}

.glyphicon-bullhorn:before {
    content: "\e122";
}

.glyphicon-bell:before {
    content: "\e123";
}

.glyphicon-certificate:before {
    content: "\e124";
}

.glyphicon-thumbs-up:before {
    content: "\e125";
}

.glyphicon-thumbs-down:before {
    content: "\e126";
}

.glyphicon-hand-right:before {
    content: "\e127";
}

.glyphicon-hand-left:before {
    content: "\e128";
}

.glyphicon-hand-up:before {
    content: "\e129";
}

.glyphicon-hand-down:before {
    content: "\e130";
}

.glyphicon-circle-arrow-right:before {
    content: "\e131";
}

.glyphicon-circle-arrow-left:before {
    content: "\e132";
}

.glyphicon-circle-arrow-up:before {
    content: "\e133";
}

.glyphicon-circle-arrow-down:before {
    content: "\e134";
}

.glyphicon-globe:before {
    content: "\e135";
}

.glyphicon-wrench:before {
    content: "\e136";
}

.glyphicon-tasks:before {
    content: "\e137";
}

.glyphicon-filter:before {
    content: "\e138";
}

.glyphicon-briefcase:before {
    content: "\e139";
}

.glyphicon-fullscreen:before {
    content: "\e140";
}

.glyphicon-dashboard:before {
    content: "\e141";
}

.glyphicon-paperclip:before {
    content: "\e142";
}

.glyphicon-heart-empty:before {
    content: "\e143";
}

.glyphicon-link:before {
    content: "\e144";
}

.glyphicon-phone:before {
    content: "\e145";
}

.glyphicon-pushpin:before {
    content: "\e146";
}

.glyphicon-usd:before {
    content: "\e148";
}

.glyphicon-gbp:before {
    content: "\e149";
}

.glyphicon-sort:before {
    content: "\e150";
}

.glyphicon-sort-by-alphabet:before {
    content: "\e151";
}

.glyphicon-sort-by-alphabet-alt:before {
    content: "\e152";
}

.glyphicon-sort-by-order:before {
    content: "\e153";
}

.glyphicon-sort-by-order-alt:before {
    content: "\e154";
}

.glyphicon-sort-by-attributes:before {
    content: "\e155";
}

.glyphicon-sort-by-attributes-alt:before {
    content: "\e156";
}

.glyphicon-unchecked:before {
    content: "\e157";
}

.glyphicon-expand:before {
    content: "\e158";
}

.glyphicon-collapse-down:before {
    content: "\e159";
}

.glyphicon-collapse-up:before {
    content: "\e160";
}

.glyphicon-log-in:before {
    content: "\e161";
}

.glyphicon-flash:before {
    content: "\e162";
}

.glyphicon-log-out:before {
    content: "\e163";
}

.glyphicon-new-window:before {
    content: "\e164";
}

.glyphicon-record:before {
    content: "\e165";
}

.glyphicon-save:before {
    content: "\e166";
}

.glyphicon-open:before {
    content: "\e167";
}

.glyphicon-saved:before {
    content: "\e168";
}

.glyphicon-import:before {
    content: "\e169";
}

.glyphicon-export:before {
    content: "\e170";
}

.glyphicon-send:before {
    content: "\e171";
}

.glyphicon-floppy-disk:before {
    content: "\e172";
}

.glyphicon-floppy-saved:before {
    content: "\e173";
}

.glyphicon-floppy-remove:before {
    content: "\e174";
}

.glyphicon-floppy-save:before {
    content: "\e175";
}

.glyphicon-floppy-open:before {
    content: "\e176";
}

.glyphicon-credit-card:before {
    content: "\e177";
}

.glyphicon-transfer:before {
    content: "\e178";
}

.glyphicon-cutlery:before {
    content: "\e179";
}

.glyphicon-header:before {
    content: "\e180";
}

.glyphicon-compressed:before {
    content: "\e181";
}

.glyphicon-earphone:before {
    content: "\e182";
}

.glyphicon-phone-alt:before {
    content: "\e183";
}

.glyphicon-tower:before {
    content: "\e184";
}

.glyphicon-stats:before {
    content: "\e185";
}

.glyphicon-sd-video:before {
    content: "\e186";
}

.glyphicon-hd-video:before {
    content: "\e187";
}

.glyphicon-subtitles:before {
    content: "\e188";
}

.glyphicon-sound-stereo:before {
    content: "\e189";
}

.glyphicon-sound-dolby:before {
    content: "\e190";
}

.glyphicon-sound-5-1:before {
    content: "\e191";
}

.glyphicon-sound-6-1:before {
    content: "\e192";
}

.glyphicon-sound-7-1:before {
    content: "\e193";
}

.glyphicon-copyright-mark:before {
    content: "\e194";
}

.glyphicon-registration-mark:before {
    content: "\e195";
}

.glyphicon-cloud-download:before {
    content: "\e197";
}

.glyphicon-cloud-upload:before {
    content: "\e198";
}

.glyphicon-tree-conifer:before {
    content: "\e199";
}

.glyphicon-tree-deciduous:before {
    content: "\e200";
}

.glyphicon-cd:before {
    content: "\e201";
}

.glyphicon-save-file:before {
    content: "\e202";
}

.glyphicon-open-file:before {
    content: "\e203";
}

.glyphicon-level-up:before {
    content: "\e204";
}

.glyphicon-copy:before {
    content: "\e205";
}

.glyphicon-paste:before {
    content: "\e206";
}

.glyphicon-alert:before {
    content: "\e209";
}

.glyphicon-equalizer:before {
    content: "\e210";
}

.glyphicon-king:before {
    content: "\e211";
}

.glyphicon-queen:before {
    content: "\e212";
}

.glyphicon-pawn:before {
    content: "\e213";
}

.glyphicon-bishop:before {
    content: "\e214";
}

.glyphicon-knight:before {
    content: "\e215";
}

.glyphicon-baby-formula:before {
    content: "\e216";
}

.glyphicon-tent:before {
    content: "\26fa";
}

.glyphicon-blackboard:before {
    content: "\e218";
}

.glyphicon-bed:before {
    content: "\e219";
}

.glyphicon-apple:before {
    content: "\f8ff";
}

.glyphicon-erase:before {
    content: "\e221";
}

.glyphicon-hourglass:before {
    content: "\231b";
}

.glyphicon-lamp:before {
    content: "\e223";
}

.glyphicon-duplicate:before {
    content: "\e224";
}

.glyphicon-piggy-bank:before {
    content: "\e225";
}

.glyphicon-scissors:before {
    content: "\e226";
}

.glyphicon-bitcoin:before,
.glyphicon-btc:before,
.glyphicon-xbt:before {
    content: "\e227";
}

.glyphicon-yen:before,
.glyphicon-jpy:before {
    content: "\00a5";
}

.glyphicon-ruble:before,
.glyphicon-rub:before {
    content: "\20bd";
}

.glyphicon-scale:before {
    content: "\e230";
}

.glyphicon-ice-lolly:before {
    content: "\e231";
}

.glyphicon-ice-lolly-tasted:before {
    content: "\e232";
}

.glyphicon-education:before {
    content: "\e233";
}

.glyphicon-option-horizontal:before {
    content: "\e234";
}

.glyphicon-option-vertical:before {
    content: "\e235";
}

.glyphicon-menu-hamburger:before {
    content: "\e236";
}

.glyphicon-modal-window:before {
    content: "\e237";
}

.glyphicon-oil:before {
    content: "\e238";
}

.glyphicon-grain:before {
    content: "\e239";
}

.glyphicon-sunglasses:before {
    content: "\e240";
}

.glyphicon-text-size:before {
    content: "\e241";
}

.glyphicon-text-color:before {
    content: "\e242";
}

.glyphicon-text-background:before {
    content: "\e243";
}

.glyphicon-object-align-top:before {
    content: "\e244";
}

.glyphicon-object-align-bottom:before {
    content: "\e245";
}

.glyphicon-object-align-horizontal:before {
    content: "\e246";
}

.glyphicon-object-align-left:before {
    content: "\e247";
}

.glyphicon-object-align-vertical:before {
    content: "\e248";
}

.glyphicon-object-align-right:before {
    content: "\e249";
}

.glyphicon-triangle-right:before {
    content: "\e250";
}

.glyphicon-triangle-left:before {
    content: "\e251";
}

.glyphicon-triangle-bottom:before {
    content: "\e252";
}

.glyphicon-triangle-top:before {
    content: "\e253";
}

.glyphicon-console:before {
    content: "\e254";
}

.glyphicon-superscript:before {
    content: "\e255";
}

.glyphicon-subscript:before {
    content: "\e256";
}

.glyphicon-menu-left:before {
    content: "\e257";
}

.glyphicon-menu-right:before {
    content: "\e258";
}

.glyphicon-menu-down:before {
    content: "\e259";
}

.glyphicon-menu-up:before {
    content: "\e260";
}

/**
Dimmer
*/
.dimmer {
    position: relative;
}

.dimmer .loader {
    display: none;
    margin: 0 auto;
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.dimmer.active .loader {
    display: block;
}

.dimmer.active .dimmer-content {
    opacity: .04;
    pointer-events: none;
}

/*-------- Loaders ---------*/
.spinner {
    width: 40px;
    height: 40px;
    margin: 100px auto;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out;
}

.spinner-lg {
    width: 100px;
    height: 100px;
    margin: 100px auto;
    -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
    animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
    0% {
        -webkit-transform: perspective(120px);
    }

    50% {
        -webkit-transform: perspective(120px) rotateY(180deg);
    }

    100% {
        -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg);
    }
}

@keyframes sk-rotateplane {
    0% {
        transform: perspective(120px) rotateX(0deg) rotateY(0deg);
        -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    }

    50% {
        transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
        -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    }

    100% {
        transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
        -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    }
}

.spinner1 {
    width: 40px;
    height: 40px;
    position: relative;
    margin: 100px auto;
}

.spinner1-lg {
    width: 100px;
    height: 100px;
    position: relative;
    margin: 100px auto;
}

.double-bounce1 {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
    animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
    animation: sk-bounce 2.0s infinite ease-in-out;
    -webkit-animation-delay: -1.0s;
    animation-delay: -1.0s;
}

@-webkit-keyframes sk-bounce {

    0%,
    100% {
        -webkit-transform: scale(0);
    }

    50% {
        -webkit-transform: scale(1);
    }
}

@keyframes sk-bounce {

    0%,
    100% {
        transform: scale(0);
        -webkit-transform: scale(0);
    }

    50% {
        transform: scale(1);
        -webkit-transform: scale(1);
    }
}

.spinner2 {
    margin: 100px auto;
    width: 40px;
    height: 40px;
    position: relative;
}

.cube1 {
    width: 15px;
    height: 15px;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
    animation: sk-cubemove 1.8s infinite ease-in-out;
}

.cube2 {
    width: 15px;
    height: 15px;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
    animation: sk-cubemove 1.8s infinite ease-in-out;
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
}

@-webkit-keyframes sk-cubemove {
    25% {
        -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
    }

    50% {
        -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    }

    75% {
        -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    }

    100% {
        -webkit-transform: rotate(-360deg);
    }
}

@keyframes sk-cubemove {
    25% {
        transform: translateX(42px) rotate(-90deg) scale(0.5);
        -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
    }

    50% {
        transform: translateX(42px) translateY(42px) rotate(-179deg);
        -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
    }

    50.1% {
        transform: translateX(42px) translateY(42px) rotate(-180deg);
        -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
    }

    75% {
        transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
        -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    }

    100% {
        transform: rotate(-360deg);
        -webkit-transform: rotate(-360deg);
    }
}

.lds-heart {
    position: relative;
    width: 64px;
    height: 64px;
    transform: rotate(45deg);
    transform-origin: 32px 32px;
    margin: 100px auto;
}

.lds-heart div {
    top: 23px;
    left: 19px;
    position: absolute;
    width: 26px;
    height: 26px;
    animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
}

.lds-heart div:after {
    content: " ";
    position: absolute;
    display: block;
    width: 26px;
    height: 26px;
}

.lds-heart div:before {
    content: " ";
    position: absolute;
    display: block;
    width: 26px;
    height: 26px;
    left: -17px;
    border-radius: 50% 0 0 50%;
}

.lds-heart div:after {
    top: -17px;
    border-radius: 50% 50% 0 0;
}

@keyframes lds-heart {
    0% {
        transform: scale(0.95);
    }

    5% {
        transform: scale(1.1);
    }

    39% {
        transform: scale(0.85);
    }

    45% {
        transform: scale(1);
    }

    60% {
        transform: scale(0.95);
    }

    100% {
        transform: scale(0.9);
    }
}

.lds-ring {
    position: relative;
    width: 64px;
    height: 64px;
    margin: 100px auto;
}

.lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 51px;
    height: 51px;
    margin: 6px;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
}

.lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
}

.lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
}

.lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
}

@keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

/*PMboYSIqMee+p4uAjskftSrErYaF9PDNDn+EGSzR9N2BspYI8=
feCz66HNQhyoUIndT6pXQpWta+PA3e1h3yExMyH1EsOo6f8PXnNPyHGLRfchOSF9WSX7exs=*/
.lds-hourglass {
    position: relative;
    width: 64px;
    height: 64px;
    margin: 100px auto;
}

.lds-hourglass:after {
    content: " ";
    display: block;
    border-radius: 50%;
    width: 0;
    height: 0;
    margin: 6px;
    box-sizing: border-box;
    animation: lds-hourglass 1.2s infinite;
}

@keyframes lds-hourglass {
    0% {
        transform: rotate(0);
        animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    50% {
        transform: rotate(900deg);
        animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    100% {
        transform: rotate(1800deg);
    }
}

/*------ Email services -------*/
.mail-box {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 100%;
}

.mail-box aside {
    display: table-cell;
    float: none;
    height: 100%;
    padding: 0;
    vertical-align: top;
}

.mail-box .sm-side {
    background: none repeat scroll 0 0 #e5e8ef;
    border-radius: 4px 0 0 4px;
    width: 25%;
}

.mail-box .lg-side {
    background: none repeat scroll 0 0 #fff;
    border-radius: 0 4px 4px 0;
    width: 75%;
}

.mail-box .sm-side .user-head {
    background: none repeat scroll 0 0 #00a8b3;
    border-radius: 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 10px;
}

.user-head .inbox-avatar {
    float: left;
    width: 65px;
}

.user-head .inbox-avatar img {
    border-radius: 4px;
}

.user-head .user-name {
    display: inline-block;
    margin: 0 0 0 10px;
}

.user-head .user-name h5 {
    font-size: 14px;
    font-weight: 300;
    margin-bottom: 0;
    margin-top: 15px;
}

.user-head .user-name h5 a {
    color: #fff;
}

.user-head .user-name span a {
    color: #87e2e7;
    font-size: 12px;
}

a.mail-dropdown {
    background: none repeat scroll 0 0 #80d3d9;
    border-radius: 2px;
    color: #01a7b3;
    font-size: 10px;
    margin-top: 20px;
    padding: 3px 5px;
}

.btn-compose {
    background: none repeat scroll 0 0 #ff6c60;
    color: #fff;
    padding: 12px 0;
    text-align: center;
    width: 100%;
}

.btn-compose:hover {
    background: none repeat scroll 0 0 #f5675c;
    color: #fff;
}

ul.inbox-nav {
    display: inline-block;
    margin: 0;
    padding: 0;
    width: 100%;
}

.inbox-divider {
    border-bottom: 1px solid #d5d8df;
}

ul.inbox-nav li {
    display: inline-block;
    line-height: 45px;
    width: 100%;
}

ul.inbox-nav li a {
    color: #6a6a6a;
    display: inline-block;
    line-height: 45px;
    padding: 0 20px;
    width: 100%;
}

ul.inbox-nav li a:hover {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}

ul.inbox-nav li.active a {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}

ul.inbox-nav li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}

ul.inbox-nav li a i {
    color: #6a6a6a;
    font-size: 16px;
    padding-right: 10px;
}

ul.inbox-nav li a span.label {
    margin-top: 13px;
}

ul.labels-info li {
    margin: 0;
}

ul.labels-info li h4 {
    color: #5c5c5e;
    font-size: 13px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-transform: uppercase;
}

ul.labels-info li a {
    border-radius: 0;
    color: #6a6a6a;
}

ul.labels-info li a:hover,
ul.labels-info li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}

ul.labels-info li a i {
    padding-right: 10px;
}

.nav.nav-pills.nav-stacked.labels-info p {
    color: #9d9f9e;
    font-size: 11px;
    margin-bottom: 0;
    padding: 0 22px;
}

.inbox-head {
    border-radius: 0 4px 0 0;
    padding: 10px;
    border-radius: 3px;
}

.inbox-head h3 {
    display: inline-block;
    font-weight: 300;
    margin: 0;
}

.inbox-head .sr-input {
    border: medium none;
    border-radius: 4px 0 0 4px;
    box-shadow: none;
    color: #8a8a8a;
    float: left;
    height: 30px;
    padding: 0 10px;
}

.inbox-head .sr-btn {
    background: none repeat scroll 0 0 #1643A3;
    border: medium none;
    border-radius: 0 4px 4px 0;
    color: #fff;
    height: 30px;
    padding: 0 20px;
}

.table-inbox {
    border: 1px solid #e1e0ea;
    margin-bottom: 0;
}

.table-inbox tr {
    border-bottom: 1px solid rgba(238, 238, 238, 0.7);
}

.table-inbox tr:last-child {
    border-bottom: 0;
}

.table-inbox tr td {
    padding: 12px !important;
}

.table-inbox tr td:hover {
    cursor: pointer;
}

.table-inbox tr td .fa-star {
    color: rgba(106, 221, 196, 0.06);
}

.table-inbox tr td .fa-star.inbox-started,
.table-inbox tr td .fa-star:hover {
    color: #f78a09;
}

.table-inbox tr.unread td {
    background: #e2e1ea;
    font-weight: 600;
}

ul.inbox-pagination {
    float: right;
}

ul.inbox-pagination li {
    float: left;
}

.mail-option {
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
}

.mail-option .chk-all,
.mail-option .btn-group {
    margin-right: 5px;
}

.mail-option .chk-all,
.mail-option .btn-group a.btn {
    background: none repeat scroll 0 0 #f4f3f9;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #000;
    display: inline-block;
    padding: 5px 10px;
}

.inbox-pagination a.np-btn {
    background: none repeat scroll 0 0 #f4f3f9;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 15px;
}

.mail-option .chk-all input[type="checkbox"] {
    margin-top: 0;
}

.mail-option .btn-group a.all {
    border: medium none;
    padding: 0;
}

.inbox-pagination a.np-btn {
    margin-left: 5px;
}

.inbox-pagination li span {
    display: inline-block;
    margin-right: 5px;
    margin-top: 7px;
}

.fileinput-button {
    background: none repeat scroll 0 0 #eeeeee;
    border: 1px solid #e6e6e6;
}

.inbox-body .modal .modal-body input,
.inbox-body .modal .modal-body textarea {
    border: 1px solid #e6e6e6;
    box-shadow: none;
}

.btn-send {
    background: none repeat scroll 0 0 #00a8b3;
    color: #fff;
}

.btn-send:hover {
    background: none repeat scroll 0 0 #00a8b3;
    color: #fff;
    background: none repeat scroll 0 0 #009da7;
}

.modal-header h4.modal-title {
    font-weight: 300;
}

.modal-body label {
    font-weight: 400;
}

.heading-inbox h4 {
    border-bottom: 1px solid #ddd;
    color: #444;
    font-size: 18px;
    margin-top: 20px;
    padding-bottom: 10px;
}

.sender-info {
    margin-bottom: 20px;
}

.sender-info img {
    height: 30px;
    width: 30px;
}

.sender-dropdown {
    background: none repeat scroll 0 0 #e1e0ea;
    color: #777;
    font-size: 10px;
    padding: 0 3px;
}

.view-mail a {
    color: #ff6c60;
}

.attachment-mail {
    margin-top: 30px;
}

.attachment-mail ul {
    display: inline-block;
    margin-bottom: 30px;
    width: 100%;
}

.attachment-mail ul li {
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
    width: 150px;
}

.attachment-mail ul li img {
    width: 100%;
}

.attachment-mail ul li span {
    float: right;
}

.attachment-mail .file-name {
    float: left;
}

.attachment-mail .links {
    display: inline-block;
    width: 100%;
}

.fileinput-button {
    float: left;
    margin-right: 4px;
    overflow: hidden;
    position: relative;
}

.fileinput-button input {
    cursor: pointer;
    direction: ltr;
    font-size: 23px;
    margin: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: translate(-300px, 0px) scale(4);
}

.fileupload-buttonbar .btn,
.fileupload-buttonbar .toggle {
    margin-bottom: 5px;
}

.files .progress {
    width: 200px;
}

.fileupload-processing .fileupload-loading {
    display: block;
}

/*------Email---------*/
.mail-chats {
    height: 100%;
    min-height: 0;
    border-top: 1px solid rgba(128, 128, 128, 0.16);
    margin-top: 10px;
    padding: 10px 50px 10px 0;
    width: 100%;
    list-style-type: none;
    flex-direction: column !important;
    display: flex !important;
}

.mail-chats li.chat-persons {
    padding: 10px;
    display: block;
}

li.chat-persons a {
    text-decoration: none;
}

.mail-chats li.chat-persons a span.pro-pic {
    display: inline-block;
    padding: 0;
    width: 20%;
    max-width: 40px;
    float: left;
    margin-right: 20px;
}

.mail-chats li.chat-persons a span.pro-pic img {
    max-width: 100%;
    width: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    border-radius: 100%;
    flex-direction: column !important;
}

.mail-chats li.chat-persons a div.user {
    flex-direction: column !important;
}

ul.mail-chats li.chat-persons a div.user {
    display: flex !important;
}

.mail-chats li.chat-persons.user {
    width: 80%;
    padding: 5px 10px 0px 15px;
    flex-direction: column !important;
    display: flex !important;
}

.user p.u-name {
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    line-height: 18px;
    color: #323c53;
}

.user p.u-designation {
    margin: 0;
    font-size: 11px;
    color: #323c53;
}

div.online-status .status.online {
    background: rgba(0, 128, 0, 0.68);
}

.online-status .status {
    height: 10px;
    width: 10px;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    border-radius: 100%;
    display: inline-flex;
    justify-content: flex-start;
    transform: translateX(-60px) translateY(2px);
}

.online-status .status.offline {
    background: rgba(255, 0, 0, 0.7);
}

.online {
    margin-left: 20px;
    margin-top: -3px;
}

.payment {
    width: 2.5rem;
    height: 1.5rem;
    display: inline-block;
    background: no-repeat center/100% 100%;
    vertical-align: bottom;
    font-style: normal;
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1);
    border-radius: 2px;
}

.payment-2checkout-dark {
    background-image: url("../images/payments/2checkout-dark.svg");
}

.payment-2checkout {
    background-image: url("../images/payments/2checkout.svg");
}

.payment-alipay-dark {
    background-image: url("../images/payments/alipay-dark.svg");
}

.payment-alipay {
    background-image: url("../images/payments/alipay.svg");
}

.payment-amazon-dark {
    background-image: url("../images/payments/amazon-dark.svg");
}

.payment-amazon {
    background-image: url("../images/payments/amazon.svg");
}

.payment-americanexpress-dark {
    background-image: url("../images/payments/americanexpress-dark.svg");
}

.payment-americanexpress {
    background-image: url("../images/payments/americanexpress.svg");
}

.payment-applepay-dark {
    background-image: url("../images/payments/applepay-dark.svg");
}

.payment-applepay {
    background-image: url("../images/payments/applepay.svg");
}

.payment-bancontact-dark {
    background-image: url("../images/payments/bancontact-dark.svg");
}

.payment-bancontact {
    background-image: url("../images/payments/bancontact.svg");
}

.payment-bitcoin-dark {
    background-image: url("../images/payments/bitcoin-dark.svg");
}

.payment-bitcoin {
    background-image: url("../images/payments/bitcoin.svg");
}

.payment-bitpay-dark {
    background-image: url("../images/payments/bitpay-dark.svg");
}

.payment-bitpay {
    background-image: url("../images/payments/bitpay.svg");
}

.payment-cirrus-dark {
    background-image: url("../images/payments/cirrus-dark.svg");
}

.payment-cirrus {
    background-image: url("../images/payments/cirrus.svg");
}

.payment-clickandbuy-dark {
    background-image: url("../images/payments/clickandbuy-dark.svg");
}

.payment-clickandbuy {
    background-image: url("../images/payments/clickandbuy.svg");
}

.payment-coinkite-dark {
    background-image: url("../images/payments/coinkite-dark.svg");
}

.payment-coinkite {
    background-image: url("../images/payments/coinkite.svg");
}

.payment-dinersclub-dark {
    background-image: url("../images/payments/dinersclub-dark.svg");
}

.payment-dinersclub {
    background-image: url("../images/payments/dinersclub.svg");
}

.payment-directdebit-dark {
    background-image: url("../images/payments/directdebit-dark.svg");
}

.payment-directdebit {
    background-image: url("../images/payments/directdebit.svg");
}

.payment-discover-dark {
    background-image: url("../images/payments/discover-dark.svg");
}

.payment-discover {
    background-image: url("../images/payments/discover.svg");
}

.payment-dwolla-dark {
    background-image: url("../images/payments/dwolla-dark.svg");
}

.payment-dwolla {
    background-image: url("../images/payments/dwolla.svg");
}

.payment-ebay-dark {
    background-image: url("../images/payments/ebay-dark.svg");
}

.payment-ebay {
    background-image: url("../images/payments/ebay.svg");
}

.payment-eway-dark {
    background-image: url("../images/payments/eway-dark.svg");
}

.payment-eway {
    background-image: url("../images/payments/eway.svg");
}

.payment-giropay-dark {
    background-image: url("../images/payments/giropay-dark.svg");
}

.payment-giropay {
    background-image: url("../images/payments/giropay.svg");
}

.payment-googlewallet-dark {
    background-image: url("../images/payments/googlewallet-dark.svg");
}

.payment-googlewallet {
    background-image: url("../images/payments/googlewallet.svg");
}

.payment-ingenico-dark {
    background-image: url("../images/payments/ingenico-dark.svg");
}

.payment-ingenico {
    background-image: url("../images/payments/ingenico.svg");
}

.payment-jcb-dark {
    background-image: url("../images/payments/jcb-dark.svg");
}

.payment-jcb {
    background-image: url("../images/payments/jcb.svg");
}

.payment-klarna-dark {
    background-image: url("../images/payments/klarna-dark.svg");
}

.payment-klarna {
    background-image: url("../images/payments/klarna.svg");
}

.payment-laser-dark {
    background-image: url("../images/payments/laser-dark.svg");
}

.payment-laser {
    background-image: url("../images/payments/laser.svg");
}

.payment-maestro-dark {
    background-image: url("../images/payments/maestro-dark.svg");
}

.payment-maestro {
    background-image: url("../images/payments/maestro.svg");
}

.payment-mastercard-dark {
    background-image: url("../images/payments/mastercard-dark.svg");
}

.payment-mastercard {
    background-image: url("../images/payments/mastercard.svg");
}

.payment-monero-dark {
    background-image: url("../images/payments/monero-dark.svg");
}

.payment-monero {
    background-image: url("../images/payments/monero.svg");
}

.payment-neteller-dark {
    background-image: url("../images/payments/neteller-dark.svg");
}

.payment-neteller {
    background-image: url("../images/payments/neteller.svg");
}

.payment-ogone-dark {
    background-image: url("../images/payments/ogone-dark.svg");
}

.payment-ogone {
    background-image: url("../images/payments/ogone.svg");
}

.payment-okpay-dark {
    background-image: url("../images/payments/okpay-dark.svg");
}

.payment-okpay {
    background-image: url("../images/payments/okpay.svg");
}

.payment-paybox-dark {
    background-image: url("../images/payments/paybox-dark.svg");
}

.payment-paybox {
    background-image: url("../images/payments/paybox.svg");
}

.payment-paymill-dark {
    background-image: url("../images/payments/paymill-dark.svg");
}

.payment-paymill {
    background-image: url("../images/payments/paymill.svg");
}

.payment-payone-dark {
    background-image: url("../images/payments/payone-dark.svg");
}

.payment-payone {
    background-image: url("../images/payments/payone.svg");
}

.payment-payoneer-dark {
    background-image: url("../images/payments/payoneer-dark.svg");
}

.payment-payoneer {
    background-image: url("../images/payments/payoneer.svg");
}

.payment-paypal-dark {
    background-image: url("../images/payments/paypal-dark.svg");
}

.payment-paypal {
    background-image: url("../images/payments/paypal.svg");
}

.payment-paysafecard-dark {
    background-image: url("../images/payments/paysafecard-dark.svg");
}

.payment-paysafecard {
    background-image: url("../images/payments/paysafecard.svg");
}

.payment-payu-dark {
    background-image: url("../images/payments/payu-dark.svg");
}

.payment-payu {
    background-image: url("../images/payments/payu.svg");
}

.payment-payza-dark {
    background-image: url("../images/payments/payza-dark.svg");
}

.payment-payza {
    background-image: url("../images/payments/payza.svg");
}

.payment-ripple-dark {
    background-image: url("../images/payments/ripple-dark.svg");
}

.payment-ripple {
    background-image: url("../images/payments/ripple.svg");
}

.payment-sage-dark {
    background-image: url("../images/payments/sage-dark.svg");
}

.payment-sage {
    background-image: url("../images/payments/sage.svg");
}

.payment-sepa-dark {
    background-image: url("../images/payments/sepa-dark.svg");
}

.payment-sepa {
    background-image: url("../images/payments/sepa.svg");
}

.payment-shopify-dark {
    background-image: url("../images/payments/shopify-dark.svg");
}

.payment-shopify {
    background-image: url("../images/payments/shopify.svg");
}

.payment-skrill-dark {
    background-image: url("../images/payments/skrill-dark.svg");
}

.payment-skrill {
    background-image: url("../images/payments/skrill.svg");
}

.payment-solo-dark {
    background-image: url("../images/payments/solo-dark.svg");
}

.payment-solo {
    background-image: url("../images/payments/solo.svg");
}

.payment-square-dark {
    background-image: url("../images/payments/square-dark.svg");
}

.payment-square {
    background-image: url("../images/payments/square.svg");
}

.payment-stripe-dark {
    background-image: url("../images/payments/stripe-dark.svg");
}

.payment-stripe {
    background-image: url("../images/payments/stripe.svg");
}

.payment-switch-dark {
    background-image: url("../images/payments/switch-dark.svg");
}

.payment-switch {
    background-image: url("../images/payments/switch.svg");
}

.payment-ukash-dark {
    background-image: url("../images/payments/ukash-dark.svg");
}

.payment-ukash {
    background-image: url("../images/payments/ukash.svg");
}

.payment-unionpay-dark {
    background-image: url("../images/payments/unionpay-dark.svg");
}

.payment-unionpay {
    background-image: url("../images/payments/unionpay.svg");
}

.payment-verifone-dark {
    background-image: url("../images/payments/verifone-dark.svg");
}

.payment-verifone {
    background-image: url("../images/payments/verifone.svg");
}

.payment-verisign-dark {
    background-image: url("../images/payments/verisign-dark.svg");
}

.payment-verisign {
    background-image: url("../images/payments/verisign.svg");
}

.payment-visa-dark {
    background-image: url("../images/payments/visa-dark.svg");
}

.payment-visa {
    background-image: url("../images/payments/visa.svg");
}

.payment-webmoney-dark {
    background-image: url("../images/payments/webmoney-dark.svg");
}

.payment-webmoney {
    background-image: url("../images/payments/webmoney.svg");
}

.payment-westernunion-dark {
    background-image: url("../images/payments/westernunion-dark.svg");
}

.payment-westernunion {
    background-image: url("../images/payments/westernunion.svg");
}

.payment-worldpay-dark {
    background-image: url("../images/payments/worldpay-dark.svg");
}

.payment-worldpay {
    background-image: url("../images/payments/worldpay.svg");
}

/*---- Time line -----*/
.timeline {
    position: relative;
    margin: 0 0 2rem;
    padding: 0;
    list-style: none;
    top: 2px;
}

.timeline:before {
    background-color: #e9ecef;
    position: absolute;
    display: block;
    content: '';
    height: 100%;
    top: 0;
    bottom: 0;
    left: 4px;
}

.timeline-item {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    padding-left: 2rem;
    margin: .5rem 0;
}

.timeline-item:first-child:before,
.timeline-item:last-child:before {
    content: '';
    position: absolute;
    background: #fff;
    width: 1px;
    left: .25rem;
}

.timeline-item:first-child {
    margin-top: 0;
}

.timeline-item:first-child:before {
    top: 0;
    height: .5rem;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-item:last-child:before {
    top: .5rem;
    bottom: 0;
}

.timeline-badge {
    position: absolute;
    display: block;
    width: 0.4375rem;
    height: 0.4375rem;
    left: 1px;
    top: .5rem;
    border-radius: 100%;
    border: 1px solid #fff;
    background: #adb5bd;
}

.timeline-time {
    white-space: nowrap;
    margin-left: auto;
    color: #9aa0ac;
    font-size: 87.5%;
}

/*-----user-profile----*/
#user-profile h2 {
    padding-right: 15px;
}

#user-profile .profile-status {
    font-size: 0.75em;
    margin-top: -10px;
    color: #7e47a9;
}

#user-profile .profile-status.offline {
    color: #fe635f;
}

#user-profile .profile-img {
    padding: 4px;
}

#user-profile .profile-label {
    text-align: center;
}

#user-profile .profile-label .label {
    padding: 5px 15px;
    font-size: 1em;
}

#user-profile .profile-stars {
    color: #FABA03;
    padding: 7px 0;
    text-align: center;
}

#user-profile .profile-stars>i {
    margin-left: -2px;
}

#user-profile .profile-since {
    text-align: center;
    margin-top: -5px;
}

#user-profile .profile-details ul {
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 40px;
}

#user-profile .profile-details ul>li {
    margin: 3px 0;
    line-height: 1.5;
}

#user-profile .profile-details a>i {
    padding-top: 2px;
}

#user-profile .profile-details ul>li>span {
    color: #643ba2;
}

#user-profile .profile-header {
    position: relative;
}

#user-profile .profile-header>h3 {
    margin-top: 10px;
}

#user-profile .profile-header .edit-profile {
    margin-top: -6px;
    position: absolute;
    right: 0;
    top: 0;
}

#user-profile .profile-tabs {
    margin-top: 30px;
}

#user-profile .profile-user-info {
    padding-bottom: 20px;
}

#user-profile .profile-user-info .profile-user-details {
    position: relative;
    padding: 4px 0;
}

#user-profile .profile-user-info .profile-user-details .profile-user-details-label {
    width: 110px;
    float: left;
    bottom: 0;
    font-weight: bold;
    left: 0;
    position: absolute;
    text-align: right;
    top: 0;
    width: 110px;
}

#user-profile .profile-image {
    position: absolute;
    top: 33px;
    right: 30%;
    display: block;
    border: 1px solid rgba(167, 180, 201, 0.2);
    border-radius: 50%;
    font-size: 10px;
    line-height: 24px;
    width: 24px;
    text-align: center;
    height: 24px;
    background: rgba(240, 243, 249, 0.6);
    z-index: 1000;
}

#user-profile .profile-image:hover {
    background: rgba(164, 166, 169, 0.9);
}

@media only screen and (max-width: 767px) {
    #user-profile .profile-user-info .profile-user-details .profile-user-details-label {
        float: none;
        position: relative;
        text-align: left;
    }

    #user-profile .profile-user-info .profile-user-details .profile-user-details-value {
        margin-left: 0;
    }

    #user-profile .profile-social {
        margin-top: 20px;
    }
}

@media only screen and (max-width: 420px) {
    #user-profile .profile-header .edit-profile {
        display: block;
        position: relative;
        margin-bottom: 15px;
    }

    #user-profile .profile-message-btn .btn {
        display: block;
    }
}

.userprofile {
    width: 100%;
    float: left;
    clear: both;
    margin: 7px auto;
}

.userprofile .userpic {
    height: 100px;
    width: 100px;
    clear: both;
    margin: 0 auto;
    display: block;
    border-radius: 100%;
    box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    position: relative;
}

.userlist a:hover {
    color: #fff;
    opacity: 0.9;
}

.userprofile .userpic .userpicimg {
    height: auto;
    width: 100%;
    border-radius: 100%;
}

.username {
    font-weight: 400;
    font-size: 20px;
    line-height: 20px;
    color: #fff;
    margin-top: 20px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.username+p {
    color: #f2f2f2;
    font-size: 13px;
    line-height: 15px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.settingbtn {
    height: 30px;
    width: 30px;
    border-radius: 30px;
    display: block;
    position: absolute;
    bottom: 0px;
    right: 0px;
    line-height: 30px;
    vertical-align: middle;
    text-align: center;
    padding: 0;
    box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
}

.userprofile.small {
    width: auto;
    clear: both;
    margin: 0px auto;
}

.userprofile.small .userpic {
    height: 40px;
    width: 40px;
    margin: 0 10px 0 0;
    display: block;
    border-radius: 100%;
    box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    -ms-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
    position: relative;
    float: left;
}

.userprofile.small .textcontainer {
    float: left;
    max-width: 100px;
    padding: 0;
}

.userprofile.small .userpic .userpicimg {
    min-height: 100%;
    width: 100%;
    border-radius: 100%;
}

.userprofile.small .username {
    font-weight: 400;
    font-size: 16px;
    line-height: 21px;
    color: #000;
    margin: 0px;
    float: left;
    width: 100%;
}

.userprofile.small .username+p {
    color: #607d8b;
    font-size: 13px;
    float: left;
    width: 100%;
    margin: 0;
}

/*# sourceMappingURL=style.css.map */



</style>






</html>