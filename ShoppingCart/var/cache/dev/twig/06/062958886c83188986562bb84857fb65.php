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

/* nav.html.twig */
class __TwigTemplate_3c4ee2a2b1c6fbcc8cc7588ecf03c374 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "nav.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 9
        echo "\t<div class=\"sidebar\">
\t\t<div class=\"side-nav-section\">
\t\t\t<div class=\"side-nav\">
\t\t\t\t<a data-bs-toggle=\"collapse\" aria-expended=\"false\" aria-controls=\"collapse-1\" onclick=\"location.href='#collapse-1'\" role=\"button\">
\t\t\t\t\t<button class=\"sidebar-nav-title btn-custom button\">Product</button>
\t\t\t\t</a>
\t\t\t\t<div id=\"collapse-1\" class=\"collapse\">
\t\t\t\t\t<ul
\t\t\t\t\t\tclass=\"list-unstyled\">
\t\t\t\t\t\t";
        // line 19
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "\t\t\t\t\t\t\t";
            // line 21
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"side-nav-section\">
\t\t\t";
        // line 32
        echo "
\t\t\t<form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_search");
        echo "\" method=\"GET\">
\t\t\t\t<input
\t\t\t\ttype=\"text\" name=\"search\" placeholder=\"Search\">
\t\t\t";
        // line 37
        echo "\t\t\t</form>

\t\t\t<nav class=\"pages-nav side-nav-section\">
\t\t\t\t<ul class=\"list-unstyled pages-nav-items\">
\t\t\t\t\t<option selected disabled>Customer</option>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">Cart</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<option selected disabled>Admin</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_category");
            echo "\">Category</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_product");
            echo "\">Product update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_customer");
            echo "\">Customer update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_list_employee");
            echo "\">Employee update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("image_index");
            echo "\">Image update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\">User update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 74,  198 => 70,  192 => 67,  186 => 64,  180 => 61,  174 => 58,  168 => 55,  163 => 52,  161 => 51,  156 => 49,  150 => 46,  144 => 43,  136 => 37,  130 => 33,  127 => 32,  119 => 25,  110 => 22,  107 => 21,  105 => 20,  100 => 19,  89 => 9,  79 => 8,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block title %}Homepage
{% endblock %}


{% block nav %}
\t<div class=\"sidebar\">
\t\t<div class=\"side-nav-section\">
\t\t\t<div class=\"side-nav\">
\t\t\t\t<a data-bs-toggle=\"collapse\" aria-expended=\"false\" aria-controls=\"collapse-1\" onclick=\"location.href='#collapse-1'\" role=\"button\">
\t\t\t\t\t<button class=\"sidebar-nav-title btn-custom button\">Product</button>
\t\t\t\t</a>
\t\t\t\t<div id=\"collapse-1\" class=\"collapse\">
\t\t\t\t\t<ul
\t\t\t\t\t\tclass=\"list-unstyled\">
\t\t\t\t\t\t{# display all categories #}
\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t{# {{ path('category_show', { 'id': category.id }) }} #}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">{{ category.name }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"side-nav-section\">
\t\t\t{# search field #}

\t\t\t<form action=\"{{ path('product_search') }}\" method=\"GET\">
\t\t\t\t<input
\t\t\t\ttype=\"text\" name=\"search\" placeholder=\"Search\">
\t\t\t{# <button type=\"submit\" class=\"btn-custom button\">Search</button> #}
\t\t\t</form>

\t\t\t<nav class=\"pages-nav side-nav-section\">
\t\t\t\t<ul class=\"list-unstyled pages-nav-items\">
\t\t\t\t\t<option selected disabled>Customer</option>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('app_login')}}\">Login</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path ('home')}}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path ('cart')}}\">Cart</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<option selected disabled>Admin</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('view_list_category')}}\">Category</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('view_list_product')}}\">Product update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('view_list_customer')}}\">Customer update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('view_list_employee')}}\">Employee update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('image_index')}}\">Image update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('user_index')}}\">User update</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
{% endblock %}
", "nav.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\nav.html.twig");
    }
}
