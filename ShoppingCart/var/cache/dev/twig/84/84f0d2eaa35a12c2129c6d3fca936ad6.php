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

/* home/detail.html.twig */
class __TwigTemplate_fca42efb392498a6594a567708998115 extends Template
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
        return "nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detail.html.twig"));

        $this->parent = $this->loadTemplate("nav.html.twig", "home/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"content\">
\t\t<div class=\"product-heading\">
\t\t\t<div class=\"product-title\">
\t\t\t\t<h2 style=\"display: block;     font-size: 2em;     margin-block-start: 0.67em;     margin-block-end: 0.67em;     margin-inline-start: 0px;     margin-inline-end: 0px;     font-weight: bold;    font-size: 2em;     margin: 0.67em 0;\">Product name</h2>
\t\t\t\t<div class=\"product-subtitle\">
\t\t\t\t\t<span class=\"product-status\">Pre-order</span>
\t\t\t\t\t<span class=\"currency-sign\">\$</span>
\t\t\t\t\t<span class=\"product-item-price\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "price", [], "any", false, false, false, 16), "html", null, true);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form class=\"product-add\"><input class=\"form-control\" type=\"hidden\">
\t\t\t<button class=\"button\" onclick=\"location.href = '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "'\" type=\"button\" style=\"width: 100%;\">Add to cart</button>
\t\t\t</form>
\t\t</div>
\t\t";
        // line 24
        echo "\t\t<div class=\"product-images\">
\t\t\t<div class=\"product-images-collage\">
\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "images", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 27
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["image"], "imageID", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" style=\"width:50%; height:auto; border:solid .15em #212121; margin: 1em; display:flex\">
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</div>
\t\t</div>

\t\t<div class=\"product-description\">
\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "info", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  133 => 29,  122 => 27,  118 => 26,  114 => 24,  108 => 20,  101 => 16,  92 => 9,  82 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"nav.html.twig\" %}

{% block title %}
\t{{product.name}}
{% endblock %}


{% block body %}
\t<div class=\"content\">
\t\t<div class=\"product-heading\">
\t\t\t<div class=\"product-title\">
\t\t\t\t<h2 style=\"display: block;     font-size: 2em;     margin-block-start: 0.67em;     margin-block-end: 0.67em;     margin-inline-start: 0px;     margin-inline-end: 0px;     font-weight: bold;    font-size: 2em;     margin: 0.67em 0;\">Product name</h2>
\t\t\t\t<div class=\"product-subtitle\">
\t\t\t\t\t<span class=\"product-status\">Pre-order</span>
\t\t\t\t\t<span class=\"currency-sign\">\$</span>
\t\t\t\t\t<span class=\"product-item-price\">{{product.price}}</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form class=\"product-add\"><input class=\"form-control\" type=\"hidden\">
\t\t\t<button class=\"button\" onclick=\"location.href = '{{path('product_add_cart', {'id': product.id})}}'\" type=\"button\" style=\"width: 100%;\">Add to cart</button>
\t\t\t</form>
\t\t</div>
\t\t{# create a collage of the product's images #}
\t\t<div class=\"product-images\">
\t\t\t<div class=\"product-images-collage\">
\t\t\t\t{% for image in product.images %}
\t\t\t\t\t<img src=\"{{asset('images/product/'~image.imageID)}}\" alt=\"{{product.id}}\" style=\"width:50%; height:auto; border:solid .15em #212121; margin: 1em; display:flex\">
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"product-description\">
\t\t\t<p>{{product.info}}</p>
\t\t</div>
\t</div>
{% endblock %}
", "home/detail.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\home\\detail.html.twig");
    }
}
