<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_38eacf8dbacc1767c92cef89c9296a7f729590170e9152f54f03237f6907ab48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_dashboard"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\">
    <div class=\"wrapper\">
        <div class=\"main-header\">
            <!-- Logo Header -->
            ";
        // line 10
        $this->loadTemplate("partial/logoheader.html.twig", "home/index.html.twig", 10)->display($context);
        // line 11
        echo "            <!-- End Logo Header -->
            ";
        // line 12
        $this->loadTemplate("partial/navbar.html.twig", "home/index.html.twig", 12)->display($context);
        // line 13
        echo "        </div>
        ";
        // line 14
        $this->loadTemplate("partial/sidebar.html.twig", "home/index.html.twig", 14)->display($context);
        // line 15
        echo "        <div class=\"main-panel\">
            <div class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"page-header\">
                        <h4 class=\"page-title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard"), "html", null, true);
        echo "</h4>
                    </div>
                   <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-stats card-primary card-round\">
\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 col-stats\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nbrUsers"]) || array_key_exists("nbrUsers", $context) ? $context["nbrUsers"] : (function () { throw new RuntimeError('Variable "nbrUsers" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-stats card-info card-round\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-interface-6\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 col-stats\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Projects"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["nbrProjects"]) || array_key_exists("nbrProjects", $context) ? $context["nbrProjects"] : (function () { throw new RuntimeError('Variable "nbrProjects" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
            </div>        
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 53,  157 => 52,  136 => 34,  132 => 33,  115 => 19,  109 => 15,  107 => 14,  104 => 13,  102 => 12,  99 => 11,  97 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'admin_dashboard'|trans }} {% endblock %}

{% block body %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/demo.css') }}\">
    <div class=\"wrapper\">
        <div class=\"main-header\">
            <!-- Logo Header -->
            {% include 'partial/logoheader.html.twig' %}
            <!-- End Logo Header -->
            {% include 'partial/navbar.html.twig' %}
        </div>
        {% include 'partial/sidebar.html.twig' %}
        <div class=\"main-panel\">
            <div class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"page-header\">
                        <h4 class=\"page-title\">{{ 'dashboard'|trans }}</h4>
                    </div>
                   <div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-stats card-primary card-round\">
\t\t\t\t\t\t\t\t<div class=\"card-body \">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 col-stats\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">{{ 'users'|trans }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{ nbrUsers }}</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-stats card-info card-round\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-big text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-interface-6\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 col-stats\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"numbers\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-category\">{{ 'Projects'|trans }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{ nbrProjects }}</h4>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                </div>
            </div>        
        </div>
    </div>
{% endblock %}

", "home/index.html.twig", "/Users/amine/Projects/manageTicket/templates/home/index.html.twig");
    }
}
