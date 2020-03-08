<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-skins.min.css">


    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/smartadmin-rtl.min.css">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="/smartAdmin/css/demo.min.css">
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

    <!--================================================== -->

    <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    <script data-pace-options='{ "restartOnRequestAfter": true }' src="/smartAdmin/js/plugin/pace/pace.min.js"></script>

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="/smartAdmin/js/libs/jquery-3.2.1.min.js"><\/script>');
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        if (!window.jQuery.ui) {
            document.write('<script src="/smartAdmin/js/libs/jquery-ui.min.js"><\/script>');
        }
    </script>


    <style>
        .cat_block:hover{
            background:#ee9;
        }
        .cat_block{
            padding:10px 15px;

        }
        .block_main_categories{
            width:24%;
            height:350px;
            border:1px solid #0000cc;
            overflow-y:auto;
            display:inline-block;

        }
        .wizard-big.wizard > .content {
            min-height: 1620px;
        }

        .ibox-content {
            clear: both;
        }
        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }
        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 2px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 15px 15px 7px;
            min-height: 48px;
        }
        .float-e-margins .btn {
            margin-bottom: 5px;
        }
        .btn-success {
            background-color: #1c84c6;
            border-color: #1c84c6;
            color: #FFFFFF;
        }
        .btn-w-m {
            min-width: 120px;
        }

        .btn {
            border-radius: 3px;
        }
        .btn-rounded {
            border-radius: 50px;
        }
        .btn-outline {
            color: inherit;
            background-color: transparent;
            transition: all .5s;
        }
        .btn-danger {
            background-color: #ed5565;
            border-color: #ed5565;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
<!-- HEADER -->
@include ('layouts.admin_header');
<!-- END HEADER -->
<!-- Navigation -->
@include('layouts.navigation_view')




@yield('content')






    <!--================================================== -->

    <!-- IMPORTANT: APP CONFIG -->
    <script src="{!! asset('/smartAdmin/js/app.config.js') !!}"></script>

    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
    <script src="{!! asset('/smartAdmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') !!}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{!! asset('/smartAdmin/js/bootstrap/bootstrap.min.js') !!}"></script>

    <!-- CUSTOM NOTIFICATION -->
    <script src="{!! asset('/smartAdmin/js/notification/SmartNotification.min.js') !!}"></script>

    <!-- JARVIS WIDGETS -->
    <script src="{!! asset('/smartAdmin/js/smartwidgets/jarvis.widget.min.js') !!}"></script>

    <!-- EASY PIE CHARTS -->
    <script src="{!! asset('/smartAdmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') !!}"></script>

    <!-- SPARKLINES -->
    <script src="{!! asset('/smartAdmin/js/plugin/sparkline/jquery.sparkline.min.js') !!}"></script>

    <!-- JQUERY VALIDATE -->
    <script src="{!! asset('/smartAdmin/js/plugin/jquery-validate/jquery.validate.min.js') !!}"></script>

    <!-- JQUERY MASKED INPUT -->
    <script src="{!! asset('/smartAdmin/js/plugin/masked-input/jquery.maskedinput.min.js') !!}"></script>

    <!-- JQUERY SELECT2 INPUT -->
    <script src="{!! asset('/smartAdmin/js/plugin/select2/select2.min.js') !!}"></script>

    <!-- JQUERY UI + Bootstrap Slider -->
    <script src="{!! asset('/smartAdmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js') !!}"></script>

    <!-- browser msie issue fix -->
    <script src="{!! asset('/smartAdmin/js/plugin/msie-fix/jquery.mb.browser.min.js') !!}"></script>

    <!-- FastClick: For mobile devices -->
    <script src="{!! asset('/smartAdmin/js/plugin/fastclick/fastclick.min.js') !!}"></script>

    <!--[if IE 8]>

    <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

    <![endif]-->

    <!-- Demo purpose only -->
    <script src="{!! asset('/smartAdmin/js/demo.min.js') !!}"></script>

    <!-- MAIN APP JS FILE -->
    <script src="{!! asset('/smartAdmin/js/app.min.js') !!}"></script>


    <!-- PAGE RELATED PLUGIN(S) -->
    <script src="{!! asset('/smartAdmin/js/plugin/jquery-nestable/jquery.nestable.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
        console.log(123);

/*           var updateOutput = function(e) {
                var list = e.length ? e : $(e.target), output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));
                    //, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            };

            $('#nestable3').nestable({
                group : 1
            }).on('change', updateOutput);
            $('#nestable-menu').on('click', function(e) {
                var target = $(e.target), action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });
            updateOutput($('#nestable3').data('output', $('#nestable2-output')));*/

            console.log(789);

            (function($, window, document, undefined) {
                var hasTouch = 'ontouchstart' in document;

                /**
                 * Detect CSS pointer-events property
                 * events are normally disabled on the dragging element to avoid conflicts
                 * https://github.com/ausi/Feature-detection-technique-for-pointer-events/blob/master/modernizr-pointerevents.js
                 */
                var hasPointerEvents = (function() {
                    var el = document.createElement('div'),
                        docEl = document.documentElement;
                    if (!('pointerEvents' in el.style)) {
                        return false;
                    }
                    el.style.pointerEvents = 'auto';
                    el.style.pointerEvents = 'x';
                    docEl.appendChild(el);
                    var supports = window.getComputedStyle && window.getComputedStyle(el, '').pointerEvents === 'auto';
                    docEl.removeChild(el);
                    return !!supports;
                })();

                var defaults = {
                    listNodeName: 'ol',
                    itemNodeName: 'li',
                    rootClass: 'dd',
                    listClass: 'dd-list',
                    itemClass: 'dd-item',
                    dragClass: 'dd-dragel',
                    handleClass: 'dd-handle',
                    collapsedClass: 'dd-collapsed',
                    placeClass: 'dd-placeholder',
                    noDragClass: 'dd-nodrag',
                    emptyClass: 'dd-empty',
                    expandBtnHTML: '<button data-action="expand" type="button">Expand</button>',
                    collapseBtnHTML: '<button data-action="collapse" type="button">Collapse</button>',
                    group: 0,
                    maxDepth: 2,
                    threshold: 20
                };

                function Plugin(element, options) {
                    this.w = $(document);
                    this.el = $(element);
                    this.options = $.extend({}, defaults, options);
                    this.init();
                }

                Plugin.prototype = {

                    init: function() {
                        var list = this;

                        list.reset();

                        list.el.data('nestable-group', this.options.group);

                        list.placeEl = $('<div class="' + list.options.placeClass + '"/>');

                        $.each(this.el.find(list.options.itemNodeName), function(k, el) {
                            list.setParent($(el));
                        });

                        list.el.on('click', 'button', function(e) {
                            if (list.dragEl) {
                                return;
                            }
                            var target = $(e.currentTarget),
                                action = target.data('action'),
                                item = target.parent(list.options.itemNodeName);
                            if (action === 'collapse') {
                                list.collapseItem(item);
                            }
                            if (action === 'expand') {
                                list.expandItem(item);
                            }
                        });

                        var onStartEvent = function(e) {
                            var handle = $(e.target);
                            if (!handle.hasClass(list.options.handleClass)) {
                                if (handle.closest('.' + list.options.noDragClass).length) {
                                    return;
                                }
                                handle = handle.closest('.' + list.options.handleClass);
                            }

                            if (!handle.length || list.dragEl) {
                                return;
                            }

                            list.isTouch = /^touch/.test(e.type);
                            if (list.isTouch && e.touches.length !== 1) {
                                return;
                            }

                            e.preventDefault();
                            list.dragStart(e.touches ? e.touches[0] : e);
                        };

                        var onMoveEvent = function(e) {
                            if (list.dragEl) {
                                e.preventDefault();
                                list.dragMove(e.touches ? e.touches[0] : e);
                            }
                        };

                        var onEndEvent = function(e) {
                            if (list.dragEl) {
                                e.preventDefault();
                                list.dragStop(e.touches ? e.touches[0] : e);
                            }
                        };

                        if (hasTouch) {
                            list.el[0].addEventListener('touchstart', onStartEvent, false);
                            window.addEventListener('touchmove', onMoveEvent, false);
                            window.addEventListener('touchend', onEndEvent, false);
                            window.addEventListener('touchcancel', onEndEvent, false);
                        }

                        list.el.on('mousedown', onStartEvent);
                        list.w.on('mousemove', onMoveEvent);
                        list.w.on('mouseup', onEndEvent);

                    },

                    serialize: function() {
                        var data,
                            depth = 0,
                            list = this;
                        step = function(level, depth) {
                            var array = [],
                                items = level.children(list.options.itemNodeName);
                            items.each(function() {
                                var li = $(this),
                                    item = $.extend({}, li.data()),
                                    sub = li.children(list.options.listNodeName);
                                if (sub.length) {
                                    item.children = step(sub, depth + 1);
                                }
                                array.push(item);
                            });
                            return array;
                        };
                        data = step(list.el.find(list.options.listNodeName).first(), depth);
                        return data;
                    },

                    serialise: function() {
                        return this.serialize();
                    },

                    reset: function() {
                        this.mouse = {
                            offsetX: 0,
                            offsetY: 0,
                            startX: 0,
                            startY: 0,
                            lastX: 0,
                            lastY: 0,
                            nowX: 0,
                            nowY: 0,
                            distX: 0,
                            distY: 0,
                            dirAx: 0,
                            dirX: 0,
                            dirY: 0,
                            lastDirX: 0,
                            lastDirY: 0,
                            distAxX: 0,
                            distAxY: 0
                        };
                        this.isTouch = false;
                        this.moving = false;
                        this.dragEl = null;
                        this.dragRootEl = null;
                        this.dragDepth = 0;
                        this.hasNewRoot = false;
                        this.pointEl = null;
                    },

                    expandItem: function(li) {
                        li.removeClass(this.options.collapsedClass);
                        li.children('[data-action="expand"]').hide();
                        li.children('[data-action="collapse"]').show();
                        li.children(this.options.listNodeName).show();
                    },

                    collapseItem: function(li) {
                        var lists = li.children(this.options.listNodeName);
                        if (lists.length) {
                            li.addClass(this.options.collapsedClass);
                            li.children('[data-action="collapse"]').hide();
                            li.children('[data-action="expand"]').show();
                            li.children(this.options.listNodeName).hide();
                        }
                    },

                    expandAll: function() {
                        var list = this;
                        list.el.find(list.options.itemNodeName).each(function() {
                            list.expandItem($(this));
                        });
                    },

                    collapseAll: function() {
                        var list = this;
                        list.el.find(list.options.itemNodeName).each(function() {
                            list.collapseItem($(this));
                        });
                    },

                    setParent: function(li) {
                        if (li.children(this.options.listNodeName).length) {
                            li.prepend($(this.options.expandBtnHTML));
                            li.prepend($(this.options.collapseBtnHTML));
                        }
                        li.children('[data-action="expand"]').hide();
                    },

                    unsetParent: function(li) {
                        li.removeClass(this.options.collapsedClass);
                        li.children('[data-action]').remove();
                        li.children(this.options.listNodeName).remove();
                    },

                    dragStart: function(e) {
                        var mouse = this.mouse,
                            target = $(e.target),
                            dragItem = target.closest(this.options.itemNodeName);

                        this.placeEl.css('height', dragItem.height());

                        mouse.offsetX = e.offsetX !== undefined ? e.offsetX : e.pageX - target.offset().left;
                        mouse.offsetY = e.offsetY !== undefined ? e.offsetY : e.pageY - target.offset().top;
                        mouse.startX = mouse.lastX = e.pageX;
                        mouse.startY = mouse.lastY = e.pageY;

                        this.dragRootEl = this.el;

                        this.dragEl = $(document.createElement(this.options.listNodeName)).addClass(this.options.listClass + ' ' + this.options.dragClass);
                        this.dragEl.css('width', dragItem.width());

                        dragItem.after(this.placeEl);
                        dragItem[0].parentNode.removeChild(dragItem[0]);
                        dragItem.appendTo(this.dragEl);

                        $(document.body).append(this.dragEl);
                        this.dragEl.css({
                            'left': e.pageX - mouse.offsetX,
                            'top': e.pageY - mouse.offsetY
                        });
                        // total depth of dragging item
                        var i, depth,
                            items = this.dragEl.find(this.options.itemNodeName);
                        for (i = 0; i < items.length; i++) {
                            depth = $(items[i]).parents(this.options.listNodeName).length;
                            if (depth > this.dragDepth) {
                                this.dragDepth = depth;
                            }
                        }
                    },

                    dragStop: function(e) {
                        var el = this.dragEl.children(this.options.itemNodeName).first();
                        el[0].parentNode.removeChild(el[0]);
                        this.placeEl.replaceWith(el);

                        this.dragEl.remove();
                        this.el.trigger('change');
                        if (this.hasNewRoot) {
                            this.dragRootEl.trigger('change');
                        }
                        this.reset();
                    },

                    dragMove: function(e) {
                        var list, parent, prev, next, depth,
                            opt = this.options,
                            mouse = this.mouse;

                        this.dragEl.css({
                            'left': e.pageX - mouse.offsetX,
                            'top': e.pageY - mouse.offsetY
                        });

                        // mouse position last events
                        mouse.lastX = mouse.nowX;
                        mouse.lastY = mouse.nowY;
                        // mouse position this events
                        mouse.nowX = e.pageX;
                        mouse.nowY = e.pageY;
                        // distance mouse moved between events
                        mouse.distX = mouse.nowX - mouse.lastX;
                        mouse.distY = mouse.nowY - mouse.lastY;
                        // direction mouse was moving
                        mouse.lastDirX = mouse.dirX;
                        mouse.lastDirY = mouse.dirY;
                        // direction mouse is now moving (on both axis)
                        mouse.dirX = mouse.distX === 0 ? 0 : mouse.distX > 0 ? 1 : -1;
                        mouse.dirY = mouse.distY === 0 ? 0 : mouse.distY > 0 ? 1 : -1;
                        // axis mouse is now moving on
                        var newAx = Math.abs(mouse.distX) > Math.abs(mouse.distY) ? 1 : 0;

                        // do nothing on first move
                        if (!mouse.moving) {
                            mouse.dirAx = newAx;
                            mouse.moving = true;
                            return;
                        }

                        // calc distance moved on this axis (and direction)
                        if (mouse.dirAx !== newAx) {
                            mouse.distAxX = 0;
                            mouse.distAxY = 0;
                        } else {
                            mouse.distAxX += Math.abs(mouse.distX);
                            if (mouse.dirX !== 0 && mouse.dirX !== mouse.lastDirX) {
                                mouse.distAxX = 0;
                            }
                            mouse.distAxY += Math.abs(mouse.distY);
                            if (mouse.dirY !== 0 && mouse.dirY !== mouse.lastDirY) {
                                mouse.distAxY = 0;
                            }
                        }
                        mouse.dirAx = newAx;

                        /**
                         * move horizontal
                         */
                        if (mouse.dirAx && mouse.distAxX >= opt.threshold) {
                            // reset move distance on x-axis for new phase
                            mouse.distAxX = 0;
                            prev = this.placeEl.prev(opt.itemNodeName);
                            // increase horizontal level if previous sibling exists and is not collapsed
                            if (mouse.distX > 0 && prev.length && !prev.hasClass(opt.collapsedClass)) {
                                // cannot increase level when item above is collapsed
                                list = prev.find(opt.listNodeName).last();
                                // check if depth limit has reached
                                depth = this.placeEl.parents(opt.listNodeName).length;
                                if (depth + this.dragDepth <= opt.maxDepth) {
                                    // create new sub-level if one doesn't exist
                                    if (!list.length) {
                                        list = $('<' + opt.listNodeName + '/>').addClass(opt.listClass);
                                        list.append(this.placeEl);
                                        prev.append(list);
                                        this.setParent(prev);
                                    } else {
                                        // else append to next level up
                                        list = prev.children(opt.listNodeName).last();
                                        list.append(this.placeEl);
                                    }
                                }
                            }
                            // decrease horizontal level
                            if (mouse.distX < 0) {
                                // we can't decrease a level if an item preceeds the current one
                                next = this.placeEl.next(opt.itemNodeName);
                                if (!next.length) {
                                    parent = this.placeEl.parent();
                                    this.placeEl.closest(opt.itemNodeName).after(this.placeEl);
                                    if (!parent.children().length) {
                                        this.unsetParent(parent.parent());
                                    }
                                }
                            }
                        }

                        var isEmpty = false;

                        // find list item under cursor
                        if (!hasPointerEvents) {
                            this.dragEl[0].style.visibility = 'hidden';
                        }
                        this.pointEl = $(document.elementFromPoint(e.pageX - document.body.scrollLeft, e.pageY - (window.pageYOffset || document.documentElement.scrollTop)));
                        if (!hasPointerEvents) {
                            this.dragEl[0].style.visibility = 'visible';
                        }
                        if (this.pointEl.hasClass(opt.handleClass)) {
                            this.pointEl = this.pointEl.parent(opt.itemNodeName);
                        }
                        if (this.pointEl.hasClass(opt.emptyClass)) {
                            isEmpty = true;
                        } else if (!this.pointEl.length || !this.pointEl.hasClass(opt.itemClass)) {
                            return;
                        }

                        // find parent list of item under cursor
                        var pointElRoot = this.pointEl.closest('.' + opt.rootClass),
                            isNewRoot = this.dragRootEl.data('nestable-id') !== pointElRoot.data('nestable-id');

                        /**
                         * move vertical
                         */
                        if (!mouse.dirAx || isNewRoot || isEmpty) {
                            // check if groups match if dragging over new root
                            if (isNewRoot && opt.group !== pointElRoot.data('nestable-group')) {
                                return;
                            }
                            // check depth limit
                            depth = this.dragDepth - 1 + this.pointEl.parents(opt.listNodeName).length;
                            if (depth > opt.maxDepth) {
                                return;
                            }
                            var before = e.pageY < (this.pointEl.offset().top + this.pointEl.height() / 2);
                            parent = this.placeEl.parent();
                            // if empty create new list to replace empty placeholder
                            if (isEmpty) {
                                list = $(document.createElement(opt.listNodeName)).addClass(opt.listClass);
                                list.append(this.placeEl);
                                this.pointEl.replaceWith(list);
                            } else if (before) {
                                this.pointEl.before(this.placeEl);
                            } else {
                                this.pointEl.after(this.placeEl);
                            }
                            if (!parent.children().length) {
                                this.unsetParent(parent.parent());
                            }
                            if (!this.dragRootEl.find(opt.itemNodeName).length) {
                                this.dragRootEl.append('<div class="' + opt.emptyClass + '"/>');
                            }
                            // parent root list has changed
                            if (isNewRoot) {
                                this.dragRootEl = pointElRoot;
                                this.hasNewRoot = this.el[0] !== this.dragRootEl[0];
                            }
                        }
                    }

                };

                $.fn.nestable = function(params) {
                    var lists = this,
                        retval = this;

                    lists.each(function() {
                        var plugin = $(this).data("nestable");

                        if (!plugin) {
                            $(this).data("nestable", new Plugin(this, params));
                            $(this).data("nestable-id", new Date().getTime());
                        } else {
                            if (typeof params === 'string' && typeof plugin[params] === 'function') {
                                retval = plugin[params]();
                            }
                        }
                    });

                    return retval || lists;
                };

            })(window.jQuery, window, document);

           var updateOutput = function(e) {
                var list = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
console.log(window.JSON.stringify(list.nestable('serialize')))
                updatePagesOrderInDb(window.JSON.stringify(list.nestable('serialize')));
            };

           /* $('#nestable').nestable({
                group: 1
            })
                .on('change', updateOutput);*/

            $('#nestable_pages_menu').nestable({
                group: 1
            })
                .on('change', updateOutput);

            //updateOutput($('#nestable').data('output', $('#nestable-output')));
            updateOutput($('#nestable_pages_menu').data('output', $('#nestable2-output')));
            $('#nestable-menu').on('click', function(e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });
            //$('#nestable3').nestable();

        });
    </script>
<script>

    function updatePagesOrderInDb(string_data){
console.log(string_data)
        $.ajax({
            method: 'POST',
            dataType: 'json',
            async:false,
            url: "/admin/updatePagesOrder",
            data:{site_id:$('#site_select').val(),string_data:string_data},
            success: function (data) {
                console.log(data)
            }
        });
    }



    function reloadData(site_id,url){
        console.log(333)
        $.ajax({
            method: 'POST',
            dataType: 'html',
            async:true,
            url: "/admin/"+url+"/postData",
            data:{site_id:site_id},
            success: function (data) {
                console.log(data)
                $('#'+url+'').empty()
                $('#'+url+'').html(data)
            }
        });
    }
</script>
@yield ('footer_scripts')


</body>
</html>
