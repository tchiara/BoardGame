<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_ee300cdf7ca88f5e10d47d33ed2e1a67db52b7730f57f5821ce3572941434bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7931ab1892b058a85afab5133dc057de0626e9d487b4693fad9f39158beb617d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7931ab1892b058a85afab5133dc057de0626e9d487b4693fad9f39158beb617d->enter($__internal_7931ab1892b058a85afab5133dc057de0626e9d487b4693fad9f39158beb617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_42bf9353f91f744b3a9a0f373769febd244a875ac9315b420d9bdfbf501a75ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bf9353f91f744b3a9a0f373769febd244a875ac9315b420d9bdfbf501a75ff->enter($__internal_42bf9353f91f744b3a9a0f373769febd244a875ac9315b420d9bdfbf501a75ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "event_listener_loading" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633", "propel" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7931ab1892b058a85afab5133dc057de0626e9d487b4693fad9f39158beb617d->leave($__internal_7931ab1892b058a85afab5133dc057de0626e9d487b4693fad9f39158beb617d_prof);

        
        $__internal_42bf9353f91f744b3a9a0f373769febd244a875ac9315b420d9bdfbf501a75ff->leave($__internal_42bf9353f91f744b3a9a0f373769febd244a875ac9315b420d9bdfbf501a75ff_prof);

    }

    // line 17
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6eccafbb9f50692b9b145638e5382e291f451e808d3048d09df2f00d6cd5f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6eccafbb9f50692b9b145638e5382e291f451e808d3048d09df2f00d6cd5f97->enter($__internal_c6eccafbb9f50692b9b145638e5382e291f451e808d3048d09df2f00d6cd5f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5a2fcfcf29a3cf1411b0ba99f2a4fc4e5a57ec0334263ff348892d7404bb8976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2fcfcf29a3cf1411b0ba99f2a4fc4e5a57ec0334263ff348892d7404bb8976->enter($__internal_5a2fcfcf29a3cf1411b0ba99f2a4fc4e5a57ec0334263ff348892d7404bb8976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 18
        echo "    ";
        $context["total_time"] = ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array()))) : ("n/a"));
        // line 19
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inittime", array()))) : ("n/a"));
        // line 20
        echo "    ";
        $context["status_color"] = (((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())) && ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 21
        echo "
    ";
        // line 22
        ob_start();
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 24
        echo twig_escape_filter($this->env, ($context["total_time"] ?? $this->getContext($context, "total_time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        ob_start();
        // line 29
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, ($context["total_time"] ?? $this->getContext($context, "total_time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 35
        echo twig_escape_filter($this->env, ($context["initialization_time"] ?? $this->getContext($context, "initialization_time")), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_5a2fcfcf29a3cf1411b0ba99f2a4fc4e5a57ec0334263ff348892d7404bb8976->leave($__internal_5a2fcfcf29a3cf1411b0ba99f2a4fc4e5a57ec0334263ff348892d7404bb8976_prof);

        
        $__internal_c6eccafbb9f50692b9b145638e5382e291f451e808d3048d09df2f00d6cd5f97->leave($__internal_c6eccafbb9f50692b9b145638e5382e291f451e808d3048d09df2f00d6cd5f97_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10391e371a0aadd8ea00423f0fee8b5239f2fc323b54af9db75a65764513463a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10391e371a0aadd8ea00423f0fee8b5239f2fc323b54af9db75a65764513463a->enter($__internal_10391e371a0aadd8ea00423f0fee8b5239f2fc323b54af9db75a65764513463a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13dedee5756c22d3807f15ae1db9bc88733ddc83f3e4256bdc9b9b18e4a1ec28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dedee5756c22d3807f15ae1db9bc88733ddc83f3e4256bdc9b9b18e4a1ec28->enter($__internal_13dedee5756c22d3807f15ae1db9bc88733ddc83f3e4256bdc9b9b18e4a1ec28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 44
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_13dedee5756c22d3807f15ae1db9bc88733ddc83f3e4256bdc9b9b18e4a1ec28->leave($__internal_13dedee5756c22d3807f15ae1db9bc88733ddc83f3e4256bdc9b9b18e4a1ec28_prof);

        
        $__internal_10391e371a0aadd8ea00423f0fee8b5239f2fc323b54af9db75a65764513463a->leave($__internal_10391e371a0aadd8ea00423f0fee8b5239f2fc323b54af9db75a65764513463a_prof);

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30e2aecce494c9bbf0e0677627122a538d915e4ecf8f1fd9140f473c83197f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e2aecce494c9bbf0e0677627122a538d915e4ecf8f1fd9140f473c83197f55->enter($__internal_30e2aecce494c9bbf0e0677627122a538d915e4ecf8f1fd9140f473c83197f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f559d2e567bdc4a23e72c669f7ac6e86dc3b1a829682332d03d5c03d2483472f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f559d2e567bdc4a23e72c669f7ac6e86dc3b1a829682332d03d5c03d2483472f->enter($__internal_f559d2e567bdc4a23e72c669f7ac6e86dc3b1a829682332d03d5c03d2483472f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 50
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 59
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array()), "memory", array())) {
            // line 64
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 71
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 75
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 78
            $context["subrequests_time"] = 0;
            // line 79
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "                ";
                $context["subrequests_time"] = (($context["subrequests_time"] ?? $this->getContext($context, "subrequests_time")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                // line 81
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 84
            echo twig_escape_filter($this->env, ($context["subrequests_time"] ?? $this->getContext($context, "subrequests_time")), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 85
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 88
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 92
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) {
            // line 93
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 97
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_f559d2e567bdc4a23e72c669f7ac6e86dc3b1a829682332d03d5c03d2483472f->leave($__internal_f559d2e567bdc4a23e72c669f7ac6e86dc3b1a829682332d03d5c03d2483472f_prof);

        
        $__internal_30e2aecce494c9bbf0e0677627122a538d915e4ecf8f1fd9140f473c83197f55->leave($__internal_30e2aecce494c9bbf0e0677627122a538d915e4ecf8f1fd9140f473c83197f55_prof);

    }

    // line 101
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_687b4624d6c7831c5d12c3b54435ac913d1863519946108a5adb605c6c28ab36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687b4624d6c7831c5d12c3b54435ac913d1863519946108a5adb605c6c28ab36->enter($__internal_687b4624d6c7831c5d12c3b54435ac913d1863519946108a5adb605c6c28ab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_20a9ea1d02a027b4cee5264de5b89f3cf98e46d2e61ac833327c397f71882843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a9ea1d02a027b4cee5264de5b89f3cf98e46d2e61ac833327c397f71882843->enter($__internal_20a9ea1d02a027b4cee5264de5b89f3cf98e46d2e61ac833327c397f71882843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 102
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 109
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array())) {
            // line 110
            echo "        <h3>
            Sub-Request ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
            echo "
            <small>
                ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 117
($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 118
            echo "        <h3>
            Main Request <small>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 122
        echo "
    ";
        // line 123
        echo $context["helper"]->getdisplay_timeline(("timeline_" . ($context["token"] ?? $this->getContext($context, "token"))), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), ($context["colors"] ?? $this->getContext($context, "colors")));
        echo "

    ";
        // line 125
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 126
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 128
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 131
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 132
                echo "            <h4>
                <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "identifier", array()), "html", null, true);
                echo "</a>
                <small>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 137
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), ($context["events"] ?? $this->getContext($context, "events")), ($context["colors"] ?? $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "    ";
        }
        // line 140
        echo "
    <script>";
        // line 141
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 183
        echo twig_jsonencode_filter(($context["colors"] ?? $this->getContext($context, "colors")));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 456
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 458
        echo $context["helper"]->getdump_request_data(($context["token"] ?? $this->getContext($context, "token")), ($context["profile"] ?? $this->getContext($context, "profile")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 460
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 461
            echo "                ,
";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 463
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 466
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 498
        echo "</script>
";
        
        $__internal_20a9ea1d02a027b4cee5264de5b89f3cf98e46d2e61ac833327c397f71882843->leave($__internal_20a9ea1d02a027b4cee5264de5b89f3cf98e46d2e61ac833327c397f71882843_prof);

        
        $__internal_687b4624d6c7831c5d12c3b54435ac913d1863519946108a5adb605c6c28ab36->leave($__internal_687b4624d6c7831c5d12c3b54435ac913d1863519946108a5adb605c6c28ab36_prof);

    }

    // line 501
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_52edd96b727474f6d61ac8d04ba091fd8b773cf04218c8c69068a4fb3d21399c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_52edd96b727474f6d61ac8d04ba091fd8b773cf04218c8c69068a4fb3d21399c->enter($__internal_52edd96b727474f6d61ac8d04ba091fd8b773cf04218c8c69068a4fb3d21399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_bc4a9059bc42669867a3bff8475305ea9f3eb1d7ad8e94dcd27ed3c71d3814a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bc4a9059bc42669867a3bff8475305ea9f3eb1d7ad8e94dcd27ed3c71d3814a4->enter($__internal_bc4a9059bc42669867a3bff8475305ea9f3eb1d7ad8e94dcd27ed3c71d3814a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 503
            $context["__internal_fee9069bfc4cda2595e09c39f931550829928f4e3abb0b7acb033144ea3d8147"] = $this;
            // line 504
            echo "                {
                    \"id\": \"";
            // line 505
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 506
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "__section__", array()), "origin", array()) - ($context["origin"] ?? $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 508
            echo $context["__internal_fee9069bfc4cda2595e09c39f931550829928f4e3abb0b7acb033144ea3d8147"]->getdump_events(($context["events"] ?? $this->getContext($context, "events")));
            echo "
                    ]
                }
";
            
            $__internal_bc4a9059bc42669867a3bff8475305ea9f3eb1d7ad8e94dcd27ed3c71d3814a4->leave($__internal_bc4a9059bc42669867a3bff8475305ea9f3eb1d7ad8e94dcd27ed3c71d3814a4_prof);

            
            $__internal_52edd96b727474f6d61ac8d04ba091fd8b773cf04218c8c69068a4fb3d21399c->leave($__internal_52edd96b727474f6d61ac8d04ba091fd8b773cf04218c8c69068a4fb3d21399c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 514
    public function getdump_events($__events__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e7164a101b4897c4c6fea3b5dcc9cf0530d0e92ea67c10c4efd01a51857a95ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e7164a101b4897c4c6fea3b5dcc9cf0530d0e92ea67c10c4efd01a51857a95ce->enter($__internal_e7164a101b4897c4c6fea3b5dcc9cf0530d0e92ea67c10c4efd01a51857a95ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_42e175157e3bdc0a72d2c7f4537c928b192474eba3005bba4612fafd77d05fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_42e175157e3bdc0a72d2c7f4537c928b192474eba3005bba4612fafd77d05fa2->enter($__internal_42e175157e3bdc0a72d2c7f4537c928b192474eba3005bba4612fafd77d05fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 517
                if (("__section__" != $context["name"])) {
                    // line 518
                    echo "                        {
                            \"name\": \"";
                    // line 519
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 520
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 521
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 522
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 523
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 524
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 525
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 527
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 528
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 530
                    echo "]
                        }";
                    // line 531
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_42e175157e3bdc0a72d2c7f4537c928b192474eba3005bba4612fafd77d05fa2->leave($__internal_42e175157e3bdc0a72d2c7f4537c928b192474eba3005bba4612fafd77d05fa2_prof);

            
            $__internal_e7164a101b4897c4c6fea3b5dcc9cf0530d0e92ea67c10c4efd01a51857a95ce->leave($__internal_e7164a101b4897c4c6fea3b5dcc9cf0530d0e92ea67c10c4efd01a51857a95ce_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 537
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d8e75b72e6077d934f6b9c7bdf39f4e74eb3a4b40e91d9e200c18ca1692d8025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d8e75b72e6077d934f6b9c7bdf39f4e74eb3a4b40e91d9e200c18ca1692d8025->enter($__internal_d8e75b72e6077d934f6b9c7bdf39f4e74eb3a4b40e91d9e200c18ca1692d8025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_97c7ccf7b63f1ab7f7ce4e0338072b60441b4ae1938eeb2b5a315db6c48e2f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_97c7ccf7b63f1ab7f7ce4e0338072b60441b4ae1938eeb2b5a315db6c48e2f63->enter($__internal_97c7ccf7b63f1ab7f7ce4e0338072b60441b4ae1938eeb2b5a315db6c48e2f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 538
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 540
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 541
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 544
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
            $__internal_97c7ccf7b63f1ab7f7ce4e0338072b60441b4ae1938eeb2b5a315db6c48e2f63->leave($__internal_97c7ccf7b63f1ab7f7ce4e0338072b60441b4ae1938eeb2b5a315db6c48e2f63_prof);

            
            $__internal_d8e75b72e6077d934f6b9c7bdf39f4e74eb3a4b40e91d9e200c18ca1692d8025->leave($__internal_d8e75b72e6077d934f6b9c7bdf39f4e74eb3a4b40e91d9e200c18ca1692d8025_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1032 => 544,  1029 => 543,  1018 => 541,  1014 => 540,  1010 => 538,  990 => 537,  954 => 531,  951 => 530,  932 => 528,  915 => 527,  911 => 525,  907 => 524,  903 => 523,  899 => 522,  895 => 521,  891 => 520,  887 => 519,  884 => 518,  882 => 517,  865 => 516,  847 => 514,  822 => 508,  817 => 506,  813 => 505,  810 => 504,  808 => 503,  787 => 501,  776 => 498,  742 => 466,  724 => 463,  707 => 462,  704 => 461,  702 => 460,  697 => 458,  692 => 456,  416 => 183,  372 => 141,  369 => 140,  366 => 139,  358 => 137,  352 => 134,  346 => 133,  343 => 132,  340 => 131,  336 => 130,  331 => 128,  327 => 126,  325 => 125,  320 => 123,  317 => 122,  311 => 119,  308 => 118,  306 => 117,  300 => 114,  296 => 113,  291 => 111,  288 => 110,  286 => 109,  277 => 102,  268 => 101,  254 => 97,  248 => 93,  246 => 92,  240 => 88,  234 => 85,  230 => 84,  226 => 82,  220 => 81,  217 => 80,  212 => 79,  210 => 78,  204 => 75,  200 => 74,  195 => 71,  193 => 70,  190 => 69,  183 => 65,  180 => 64,  178 => 63,  171 => 59,  163 => 54,  157 => 50,  148 => 49,  134 => 44,  131 => 43,  122 => 42,  110 => 39,  107 => 38,  101 => 35,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  79 => 24,  74 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  60 => 18,  51 => 17,  41 => 1,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% if colors is not defined %}
    {% set colors = {
        'default':                '#999',
        'section':                '#444',
        'event_listener':         '#00B8F5',
        'event_listener_loading': '#00B8F5',
        'template':               '#66CC00',
        'doctrine':               '#FF6633',
        'propel':                 '#FF6633',
    } %}
{% endif %}

{% block toolbar %}
    {% set total_time = collector.events|length ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = collector.events|length and collector.duration > 1000 ? 'yellow' : '' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% set subrequests_time = 0 %}
            {% for child in profile.children %}
                {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
            {% endfor %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3>
            Sub-Request {{ profile.getcollector('request').requestattributes.get('_controller') }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline('timeline_' ~ token, collector.events, colors) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline('timeline_' ~ child.token, events, colors) }}
        {% endfor %}
    {% endif %}

    <script>{% autoescape 'js' %}//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = {{ colors|json_encode|raw }},
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": {{ \"%F\"|format(collector.events.__section__.endtime) }},
            \"requests\": [
{{ helper.dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}

{% if profile.children|length %}
                ,
{% for child in profile.children %}
{{ helper.dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}
{% endfor %}
{% endif %}
            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>{% endautoescape %}</script>
{% endblock %}

{% macro dump_request_data(token, profile, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
                {
                    \"id\": \"{{ token }}\",
                    \"left\": {{ \"%F\"|format(events.__section__.origin - origin) }},
                    \"events\": [
{{ dump_events(events) }}
                    ]
                }
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
                        {
                            \"name\": \"{{ name }}\",
                            \"category\": \"{{ event.category }}\",
                            \"origin\": {{ \"%F\"|format(event.origin) }},
                            \"starttime\": {{ \"%F\"|format(event.starttime) }},
                            \"endtime\": {{ \"%F\"|format(event.endtime) }},
                            \"duration\": {{ \"%F\"|format(event.duration) }},
                            \"memory\": {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
                            \"periods\": [
                                {%- for period in event.periods -%}
                                    {\"start\": {{ \"%F\"|format(period.starttime) }}, \"end\": {{ \"%F\"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}
                                {%- endfor -%}
                            ]
                        }{{ loop.last ? '' : ',' }}
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(id, events, colors) %}
    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            {% for category, color in colors %}
                <span data-color=\"{{ color }}\">{{ category }}</span>
            {% endfor %}
        </div>
        <canvas width=\"680\" height=\"\" id=\"{{ id }}\" class=\"timeline\"></canvas>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/time.html.twig", "C:\\www\\Web2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\time.html.twig");
    }
}
