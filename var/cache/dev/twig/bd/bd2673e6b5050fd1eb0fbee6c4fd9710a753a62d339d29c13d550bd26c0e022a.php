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

/* task/index.html.twig */
class __TwigTemplate_53636b27b9f21e62e26a9e9904d1b78883e539351861a88e2bb506d522ba5043 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("task_list"), "html", null, true);
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
        echo "    <div class=\"wrapper\">
        <div class=\"main-header\">
            <!-- Logo Header -->
            ";
        // line 9
        $this->loadTemplate("partial/logoheader.html.twig", "task/index.html.twig", 9)->display($context);
        // line 10
        echo "            <!-- End Logo Header -->

            ";
        // line 12
        $this->loadTemplate("partial/navbar.html.twig", "task/index.html.twig", 12)->display($context);
        // line 13
        echo "        </div>

        ";
        // line 15
        $this->loadTemplate("partial/sidebar.html.twig", "task/index.html.twig", 15)->display($context);
        // line 16
        echo "
        
        ";
        // line 19
        echo "        <div class=\"main-panel\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h4 class=\"page-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("manage_tasks"), "html", null, true);
        echo " </h4>
\t\t\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t\t\t<li class=\"nav-home\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"flaticon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Task"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 44
        $this->loadTemplate("partial/alert.html.twig", "task/index.html.twig", 44)->display($context);
        // line 45
        echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("task_list"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-square\" id=\"selectProject\" required=\"\" onchange=\"changeProject()\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"null\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("select project"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "get", [0 => "id"], "method", false, false, false, 55), twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 55)))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 59
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 59, $this->source); })())))) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_create", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "get", [0 => "id"], "method", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-round ml-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("add_task"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row flex-nowrap\">
\t\t\t\t\t\t\t\t\t";
        // line 68
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 68, $this->source); })())))) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("rough draft"), "html", null, true);
            echo "</center>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 72), "rough draft"))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 75), "html", null, true);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 76), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "request", [], "any", false, false, false, 77), "get", [0 => "id"], "method", false, false, false, 77), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "get", [0 => "id"], "method", false, false, false, 78), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("waiting"), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 89), "waiting"))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 93), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 94
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 94, $this->source); })())))) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "get", [0 => "id"], "method", false, false, false, 95), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "get", [0 => "id"], "method", false, false, false, 96), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in progress"), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 107), "in progress"))) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 110), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 111), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 112
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 112, $this->source); })())))) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "get", [0 => "id"], "method", false, false, false, 113), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "request", [], "any", false, false, false, 114), "get", [0 => "id"], "method", false, false, false, 114), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in validation"), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 125), "in validation"))) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 128), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 129), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 130
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 130, $this->source); })())))) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "get", [0 => "id"], "method", false, false, false, 131), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "request", [], "any", false, false, false, 132), "get", [0 => "id"], "method", false, false, false, 132), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("finished"), "html", null, true);
        echo "</center>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 143
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 143), "finished"))) {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 146), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 147), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 148
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 148, $this->source); })())))) {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "get", [0 => "id"], "method", false, false, false, 149), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "request", [], "any", false, false, false, 150), "get", [0 => "id"], "method", false, false, false, 150), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 158
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158), (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 158, $this->source); })())))) {
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("archived"), "html", null, true);
            echo "</center>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 161, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 162), "archived"))) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 165), "html", null, true);
                    echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">";
                    // line 166
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 166), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 167
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_edit", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "get", [0 => "id"], "method", false, false, false, 167), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 167)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task_delete", ["project_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "request", [], "any", false, false, false, 168), "get", [0 => "id"], "method", false, false, false, 168), "id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 168)]), "html", null, true);
                    echo "\" class=\"card-link\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
        ";
        // line 185
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 185,  539 => 176,  534 => 173,  528 => 172,  519 => 168,  513 => 167,  509 => 166,  505 => 165,  501 => 163,  498 => 162,  494 => 161,  490 => 160,  487 => 159,  485 => 158,  481 => 156,  475 => 155,  470 => 152,  463 => 150,  456 => 149,  454 => 148,  450 => 147,  446 => 146,  442 => 144,  439 => 143,  435 => 142,  431 => 141,  426 => 138,  420 => 137,  415 => 134,  408 => 132,  401 => 131,  399 => 130,  395 => 129,  391 => 128,  387 => 126,  384 => 125,  380 => 124,  376 => 123,  371 => 120,  365 => 119,  360 => 116,  353 => 114,  346 => 113,  344 => 112,  340 => 111,  336 => 110,  332 => 108,  329 => 107,  325 => 106,  321 => 105,  316 => 102,  310 => 101,  305 => 98,  298 => 96,  291 => 95,  289 => 94,  285 => 93,  281 => 92,  277 => 90,  274 => 89,  270 => 88,  266 => 87,  263 => 86,  258 => 83,  252 => 82,  243 => 78,  237 => 77,  233 => 76,  229 => 75,  225 => 73,  222 => 72,  218 => 71,  214 => 70,  211 => 69,  209 => 68,  204 => 65,  198 => 62,  192 => 60,  190 => 59,  186 => 57,  171 => 55,  167 => 54,  163 => 53,  157 => 50,  150 => 45,  148 => 44,  141 => 40,  132 => 34,  118 => 23,  112 => 19,  108 => 16,  106 => 15,  102 => 13,  100 => 12,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'task_list'|trans }} {% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <div class=\"main-header\">
            <!-- Logo Header -->
            {% include 'partial/logoheader.html.twig' %}
            <!-- End Logo Header -->

            {% include 'partial/navbar.html.twig' %}
        </div>

        {% include 'partial/sidebar.html.twig' %}

        
        {# begin datatable  #}
        <div class=\"main-panel\">
\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t<h4 class=\"page-title\">{{ 'manage_tasks'|trans }} </h4>
\t\t\t\t\t\t<ul class=\"breadcrumbs\">
\t\t\t\t\t\t\t<li class=\"nav-home\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"flaticon-home\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">{{ 'Task'|trans }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\">
\t\t\t\t\t\t\t\t<i class=\"flaticon-right-arrow\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">{{ 'list'|trans }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t{% include 'partial/alert.html.twig' %}
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">{{ 'task_list'|trans }}</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-9 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control input-square\" id=\"selectProject\" required=\"\" onchange=\"changeProject()\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"null\">{{ 'select project'|trans }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% for project in projects %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ project.id }}\" {% if app.request.get('id') == project.id  %} selected {% endif %}>{{ project.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_create',{ 'id': app.request.get('id') }) }}\" class=\"btn btn-primary btn-round ml-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ 'add_task'|trans }}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row flex-nowrap\">
\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>{{ 'rough draft'|trans }}</center>
\t\t\t\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if task.status == 'rough draft' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">{{ task.name }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ task.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_edit', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'edit'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_delete', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'delete'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>{{ 'waiting'|trans }}</center>
\t\t\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if task.status == 'waiting' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">{{ task.name }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ task.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_edit', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'edit'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_delete', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'delete'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>{{ 'in progress'|trans }}</center>
\t\t\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if task.status == 'in progress' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">{{ task.name }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ task.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_edit', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'edit'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_delete', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'delete'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>{{ 'in validation'|trans }}</center>
\t\t\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if task.status == 'in validation' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">{{ task.name }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ task.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_edit', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'edit'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_delete', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'delete'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>{{ 'finished'|trans }}</center>
\t\t\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if task.status == 'finished' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">{{ task.name }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ task.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_edit', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'edit'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_delete', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'delete'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if app.user.id == owner %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card card-block\"><center>{{ 'archived'|trans }}</center>
\t\t\t\t\t\t\t\t\t\t\t\t{% for task in tasks %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if task.status == 'archived' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-subtitle mb-2 text-muted\">{{ task.name }}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">{{ task.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_edit', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'edit'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_task_delete', { 'project_id': app.request.get('id'), 'id': task.id }) }}\" class=\"card-link\">{{ 'delete'|trans }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
        {# end datatable #}
    </div>
{% endblock %}
", "task/index.html.twig", "/Users/amine/Projects/manageTicket/templates/task/index.html.twig");
    }
}
