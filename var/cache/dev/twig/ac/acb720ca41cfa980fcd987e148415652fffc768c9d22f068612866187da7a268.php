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

/* partial/sidebar.html.twig */
class __TwigTemplate_650e92dce064d91b3e1ffd4ff4441e1a6f5f889ad12c845865bf189dce23c35e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/sidebar.html.twig"));

        // line 1
        echo "<!-- Sidebar -->
<div class=\"sidebar\">   
    <div class=\"sidebar-background\"></div>
    <div class=\"sidebar-wrapper scrollbar-inner\">
        <div class=\"sidebar-content\">
            <div class=\"user\">
                <div class=\"photo\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile.jpg"), "html", null, true);
        echo "\" alt=\"image profile\">
                </div>
                <div class=\"info\">
                    <a data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\">
                        <span>
                            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "firstName", [], "any", false, false, false, 13), "html", null, true);
        echo "
                            ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "                            <span class=\"user-level\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("administrator"), "html", null, true);
            echo "</span>
                            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 17
            echo "                            <span class=\"user-level\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user"), "html", null, true);
            echo "</span>
                            ";
        }
        // line 19
        echo "                            <span class=\"caret\"></span>
                        </span>
                    </a>
                    <div class=\"clearfix\"></div>

                    <div class=\"collapse in\" id=\"collapseExample\">
                        <ul class=\"nav\">
                            <li>
                                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">
                                    <span class=\"link-collapse\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my_profile"), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                                    <span class=\"link-collapse\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class=\"nav\">
                ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">
                            <i class=\"flaticon-home\"></i>
                            <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard"), "html", null, true);
            echo "</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\">
                            <i class=\"flaticon-profile-1\"></i>
                            <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("administrators"), "html", null, true);
            echo "</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            echo "\">
                            <i class=\"flaticon-users\"></i>
                            <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
            echo "</p>
                        </a>
                    </li>
                ";
        }
        // line 61
        echo "                <li class=\"nav-item\">
                    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project");
        echo "\">
                        <i class=\"flaticon-suitcase\"></i>
                        <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Projects"), "html", null, true);
        echo "</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_task");
        echo "\">
                        <i class=\"flaticon-interface-7\"></i>
                        <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tasks"), "html", null, true);
        echo "</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 70,  170 => 68,  163 => 64,  158 => 62,  155 => 61,  148 => 57,  143 => 55,  136 => 51,  131 => 49,  124 => 45,  119 => 43,  116 => 42,  114 => 41,  103 => 33,  99 => 32,  92 => 28,  88 => 27,  78 => 19,  72 => 17,  66 => 15,  64 => 14,  60 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Sidebar -->
<div class=\"sidebar\">   
    <div class=\"sidebar-background\"></div>
    <div class=\"sidebar-wrapper scrollbar-inner\">
        <div class=\"sidebar-content\">
            <div class=\"user\">
                <div class=\"photo\">
                    <img src=\"{{ asset('assets/img/profile.jpg') }}\" alt=\"image profile\">
                </div>
                <div class=\"info\">
                    <a data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\">
                        <span>
                            {{ app.user.firstName }}
                            {% if is_granted('ROLE_ADMIN') %}
                            <span class=\"user-level\">{{ 'administrator'|trans }}</span>
                            {% elseif is_granted('ROLE_USER') %}
                            <span class=\"user-level\">{{ 'user'|trans }}</span>
                            {% endif %}
                            <span class=\"caret\"></span>
                        </span>
                    </a>
                    <div class=\"clearfix\"></div>

                    <div class=\"collapse in\" id=\"collapseExample\">
                        <ul class=\"nav\">
                            <li>
                                <a href=\"{{ path('app_profil', { 'id': app.user.id}) }}\">
                                    <span class=\"link-collapse\">{{ 'my_profile'|trans }}</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('app_logout') }}\">
                                    <span class=\"link-collapse\">{{ 'Logout'|trans }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class=\"nav\">
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_home') }}\">
                            <i class=\"flaticon-home\"></i>
                            <p>{{ 'dashboard'|trans }}</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_admin') }}\">
                            <i class=\"flaticon-profile-1\"></i>
                            <p>{{ 'administrators'|trans }}</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_user') }}\">
                            <i class=\"flaticon-users\"></i>
                            <p>{{ 'users'|trans }}</p>
                        </a>
                    </li>
                {% endif %}
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_project') }}\">
                        <i class=\"flaticon-suitcase\"></i>
                        <p>{{ 'Projects'|trans }}</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_task') }}\">
                        <i class=\"flaticon-interface-7\"></i>
                        <p>{{ 'tasks'|trans }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->", "partial/sidebar.html.twig", "/Users/amine/Projects/manageTicket/templates/partial/sidebar.html.twig");
    }
}
