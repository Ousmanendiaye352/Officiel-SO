<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bb8a4f010ed406277817c8c972d6b8735b647745d34f0c9f0a50d32f3bb9641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb8a4f010ed406277817c8c972d6b8735b647745d34f0c9f0a50d32f3bb9641->enter($__internal_8bb8a4f010ed406277817c8c972d6b8735b647745d34f0c9f0a50d32f3bb9641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a957a003f6f2b4d84b259871397cfb4532cae59a62cd1f258a5413901106d947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a957a003f6f2b4d84b259871397cfb4532cae59a62cd1f258a5413901106d947->enter($__internal_a957a003f6f2b4d84b259871397cfb4532cae59a62cd1f258a5413901106d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb8a4f010ed406277817c8c972d6b8735b647745d34f0c9f0a50d32f3bb9641->leave($__internal_8bb8a4f010ed406277817c8c972d6b8735b647745d34f0c9f0a50d32f3bb9641_prof);

        
        $__internal_a957a003f6f2b4d84b259871397cfb4532cae59a62cd1f258a5413901106d947->leave($__internal_a957a003f6f2b4d84b259871397cfb4532cae59a62cd1f258a5413901106d947_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b4384e8d43db753cb14b1d16127c6198e5b89b1bd7c2e76dbd11982291b1459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4384e8d43db753cb14b1d16127c6198e5b89b1bd7c2e76dbd11982291b1459->enter($__internal_2b4384e8d43db753cb14b1d16127c6198e5b89b1bd7c2e76dbd11982291b1459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28ab15fbd2cec7cfb978e3cea206969dd7f9a1589314d9e400e00dc481b133e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ab15fbd2cec7cfb978e3cea206969dd7f9a1589314d9e400e00dc481b133e6->enter($__internal_28ab15fbd2cec7cfb978e3cea206969dd7f9a1589314d9e400e00dc481b133e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_28ab15fbd2cec7cfb978e3cea206969dd7f9a1589314d9e400e00dc481b133e6->leave($__internal_28ab15fbd2cec7cfb978e3cea206969dd7f9a1589314d9e400e00dc481b133e6_prof);

        
        $__internal_2b4384e8d43db753cb14b1d16127c6198e5b89b1bd7c2e76dbd11982291b1459->leave($__internal_2b4384e8d43db753cb14b1d16127c6198e5b89b1bd7c2e76dbd11982291b1459_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c61f16979d0ccaa4c84fbe7cca32c068628e59e2efa253b0090027e5523a56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c61f16979d0ccaa4c84fbe7cca32c068628e59e2efa253b0090027e5523a56b->enter($__internal_4c61f16979d0ccaa4c84fbe7cca32c068628e59e2efa253b0090027e5523a56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_775a6a2c0454cfd1df78f979097450f08386442eaffcd1fb1de08b58100a7827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775a6a2c0454cfd1df78f979097450f08386442eaffcd1fb1de08b58100a7827->enter($__internal_775a6a2c0454cfd1df78f979097450f08386442eaffcd1fb1de08b58100a7827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_775a6a2c0454cfd1df78f979097450f08386442eaffcd1fb1de08b58100a7827->leave($__internal_775a6a2c0454cfd1df78f979097450f08386442eaffcd1fb1de08b58100a7827_prof);

        
        $__internal_4c61f16979d0ccaa4c84fbe7cca32c068628e59e2efa253b0090027e5523a56b->leave($__internal_4c61f16979d0ccaa4c84fbe7cca32c068628e59e2efa253b0090027e5523a56b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
